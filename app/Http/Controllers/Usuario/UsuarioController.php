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

use App\User;
use App\Models\Ciclo;
use App\Models\Inscripcion;
use App\Models\DetalleInscripcion;


class UsuarioController extends Controller
{
    public function ultima_cotizacion()
    {
        $anio=Carbon::now()->format('Y');
        $ultimo=Inscripcion::where('anio',$anio)->orderBy('numero','desc')->first();
        if ($ultimo) {
            $numero=$ultimo->numero+1;
        }
        else{
            $numero=1;
        }
        return $numero;
    }

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuario.dashboard.index')
            ->with('user',Auth::user());
    }

    public function formPreinscripcion()
    {
        $ciclos=Ciclo::where('estado',1)->orderBy('inicio','asc')->get();
        return view('usuario.preinscripcion.index')
        	->with('ciclos',$ciclos)
            ->with('user',Auth::user());
    }

    public function realizarPreinscripcion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ciclo' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','Debes seleccionar un plan')->autoClose(5000)->showCloseButton();
            return redirect('/admin/usuario/inscripcion')
                ->withErrors($validator)
                ->withInput();
        }
        $actual_cotizacion=$this->ultima_cotizacion();

        $inscripcion = New Inscripcion();
        $inscripcion->anio=Carbon::now()->format('Y');
        $inscripcion->numero=$actual_cotizacion;
        $inscripcion->usuario_id=Auth::user()->id;
        $inscripcion->fecha=Carbon::now()->format('Y-m-d H:i:s');
        $inscripcion->moneda="S/.";
        $inscripcion->notas_cotizacion=NULL;
        //$inscripcion->voucher=
        $inscripcion->banco=1;
        //$inscripcion->observaciones_voucher=
        $inscripcion->evaluado_por=1;
        $inscripcion->save();

        //--
        //Seleccion del registro de la cotización para agregar el detalle
        $nro_inscripcion=Inscripcion::where('anio',Carbon::now()->format('Y'))->where('numero',$actual_cotizacion)->first();

        $info_ciclo=Ciclo::where('id',$request->ciclo)->first();
		$detalle = New DetalleInscripcion();
        $detalle->inscripcion_id=$nro_inscripcion->id;
        $detalle->ciclo_id=$request->ciclo;
        $detalle->precio_unitario=$info_ciclo->precio;
        $detalle->save();

        $inscripcion_edit=Inscripcion::find($nro_inscripcion->id);
        $inscripcion_edit->subtotal=$info_ciclo->precio;
        $inscripcion_edit->descuento=0;
        $inscripcion_edit->save();

        alert()->success('¡Excelente!','Tu registro fue exitoso, recuerda realizar el depósito para que tu inscripción sea válida')->autoClose(10000)->showCloseButton();
        return redirect('/admin/usuario/recibos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
