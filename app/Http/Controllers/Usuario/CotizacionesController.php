<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
use Carbon\Carbon;
use Mail;

use App\User;
use App\Models\Configuracion;
use App\Models\Evento;
use App\Models\Inscripcion;
use App\Models\DetalleInscripcion;
use App\Models\Banco;

class CotizacionesController extends Controller
{
    public function concatenar($numero)
    {
        $n=strlen($numero);
        if ($n==1) {
            $a='0000'.$numero;
        }
        else if ($n==2) {
            $a='000'.$numero;
        }
        else if ($n==3) {
            $a='00'.$numero;
        }
        else if ($n==4) {
            $a='0'.$numero;
        }
        else{
            $a=$numero;
        }
        return $a;
    }

    public function listaCotizaciones()
    {
        $cotizaciones=Inscripcion::where('usuario_id',Auth::user()->id)->with('detalles')->orderBy('anio','desc')->orderBy('numero','desc')->get();
        return view('usuario.cotizaciones.index')
            ->with('cotizaciones',$cotizaciones);
    }

    public function verCotizacion($id)
    {
        $configuracion=Configuracion::find(1);
        $cotizacion=Inscripcion::where('id',$id)->with('detalles')->first();

        if ($cotizacion && $cotizacion->usuario_id==Auth::user()->id) {
            return view('usuario.cotizaciones.ver')
                ->with('configuracion',$configuracion)
                ->with('cotizacion',$cotizacion);
        }
        else {
            return redirect('/admin/usuario/sin-permiso');
        }
    }

    public function enviarVoucher()
    {
        $bancos=Banco::where('estado',1)->where('id','!=',1)->get();
        $elegirBanco=Banco::where('estado',1)->where('id','!=',1)->get()->pluck('bank_and_acc','id');
        $elegirCotizacion=Inscripcion::where('usuario_id',Auth::user()->id)->where('estado',1)->orderBy('anio','desc')->orderBy('numero','desc')->get()->pluck('year_and_number','id');

        return view('usuario.cotizaciones.voucher')
            ->with('bancos',$bancos)
            ->with('elegirBanco',$elegirBanco)
            ->with('elegirCotizacion',$elegirCotizacion);
    }

    public function procesarVoucher(Request $request){

        $validator = Validator::make($request->all(), [
            'voucher' => 'required|file|mimes:png,jpg,jpeg,svg|max:5120',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/usuario/enviar-voucher')
                ->withErrors($validator)
                ->withInput();
        }


        $voucher  = Input::file('voucher');
        $usuario = Auth::user();
        $cotizacion=Inscripcion::find($request->cotizacion);

        $data['nombres']=$usuario->nombres;
        $data['email']=$usuario->email;
        $data['configuracion']=Configuracion::find(1);
        $data['banco']=$cotizacion->mediopago->banco;
        $data['observaciones']=$cotizacion->observaciones_voucher;
        $data['cotizacion']=$cotizacion->anio.'-'.$this->concatenar($cotizacion->numero);

        if ($cotizacion && $cotizacion->usuario_id==$usuario->id) {
            if (!is_null($voucher)) {
                $name2=str_replace(' ', '-', $cotizacion->anio.'-'.$this->concatenar($cotizacion->numero));
                $largo=strlen($name2);
                $extension=$voucher->getClientOriginalExtension();
                $fin=$largo - strlen($extension);
                $name=$name2.'.'.$extension;
                $path=public_path().'/resources/img/vouchers/';
                $voucher->move($path,$name);
                $cotizacion->voucher='/resources/img/vouchers/'.$name;
            }
            $cotizacion->banco=$request->banco;
            $cotizacion->observaciones_voucher=$request->observaciones;
            $cotizacion->estado=2;

            $cotizacion->save();

            Mail::send('usuario.email.voucher_recibido', $data, function($message) use ($data){
                $message->to($data['email'],$data['nombres'])->subject('Tu voucher fue enviado correctamente - Tacnatel');
            });

            alert()->success('¡Yeah!','Tu voucher fue enviado con éxito')->autoClose(5000)->showCloseButton();
            return redirect('/admin/usuario/cotizaciones');
        }
        else {
            return redirect('/admin/usuario/sin-permiso');
        }

    }

    public function mostrarMediosdePago()
    {
        $bancos=Banco::where('estado',1)->where('id','!=',1)->get();
        return view('usuario.cotizaciones.medios-de-pago')
            ->with('bancos',$bancos);
    }
}
