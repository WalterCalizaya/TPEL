<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\User;
use Auth;
use App\Models\Membresia;
use App\Models\Empresa;
use App\Models\EmpresaMembresia;
use App\Notifications\EmpresaEnviaVoucher;

class ComprasMembresiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function compras()
    {
        $membresias=Membresia::where('estado',1)->where('visible',1)->orderBy('id','desc')->get();
        $user=User::with('empresa')->find(Auth::user()->id);
        if($user->empresa){
            $aprobado=Empresa::with('galerias')->with('servicios')->with('ofertas')->find($user->empresa->id)->aprobado;
        }
        else $aprobado=1;
        return view('empresa.compras.membresias')
            ->with('membresias',$membresias)
            ->with('aprobado',$aprobado);
    }

    //vista enviar voucher
    public function enviarvoucher(Request $request)
    {
        $membresia=Membresia::where('id',$request->membresia)->where('visible',1)->where('estado',1)->first();
        $notification = auth()->user()->notifications()->where('id', $request->notify)->first();
        if($notification) {
            if (!$notification->read_at) {
                $notification->markAsRead();
            }
        }
        if ($membresia) {
            // dd($membresia);
            $user=User::with('empresa')->find(Auth::user()->id);
            if($user->empresa){
                $aprobado=Empresa::with('galerias')->with('servicios')->with('ofertas')->find($user->empresa->id)->aprobado;
            }
            else $aprobado=1;
            return view('empresa.compras.voucher')
                ->with('membresia',$membresia)
                ->with('aprobado',$aprobado);
        }
        else{
            return redirect('/admin/empresa/comprar-membresia');
        }
    }

    public function pagarvoucher(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'voucher' => 'required|file|mimes:jpeg,jpg,png,pdf|max:5120',
        ]);
        if ($validator->fails()) {
            toast('Suba el voucher de depósito para completar la operación o archivo no valido','error','center');
            return redirect('/admin/empresa/enviar-voucher?membresia='.$id)
            ->withErrors($validator)
            ->withInput();
        }
        $empresa=auth()->user()->empresa;
        $pagarvoucher=new EmpresaMembresia();
        $pagarvoucher->membresia_id=$id;
        $pagarvoucher->empresa_id=$empresa->id;
        $pagarvoucher->comentario=$request->comentario;
        $pagarvoucher->status=0;

        $voucher  = Input::file('voucher');
        if (!is_null($voucher)) {
            $name2=str_replace(' ', '-', $voucher->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$voucher->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $voucher->move($path,$name);
            $pagarvoucher->voucher='/assets/img/galeria/'.$name;
        }
        $pagarvoucher->save();
        $admins=User::where('tipo',1)->where('id','!=',1)->get();
        $user = auth()->user();
        foreach ($admins as $admin) {
            $admin->notify(new EmpresaEnviaVoucher($user, $empresa, $pagarvoucher));
        }
        toast('El voucher de pago se envió correctamente, el administrador esta evaluando los datos','success','center');
        return redirect('/admin/empresa');
    }

    public function miscompras(Request $request)
    {
        $user=auth()->user();
        $empresa=$user->empresa;
        if($empresa){
            $aprobado=$empresa->aprobado;
            // $vigencias=EmpresaMembresia::where('status',1)->where('empresa_id',$empresa->id)->get();
            // if (count($vigencias)>=2) {
            //     foreach ($vigencias as $key => $vigencia) {
                    
            //     }
            // }
            // elseif (count($vigencias)==1) {
            //     $plan=$vigencias->first();
            //     $inicio=Carbon::parse($plan->fecha_inicio);
            //     if ($inicio->diffInDays()>$plan->duracion_dias) {
            //         $plan->status=3;
            //         $plan->save();
            //         $empresa->menbresia=0;
            //         $empresa->save();
            //     }
            // }
            $membresias=EmpresaMembresia::where('status','!=',2)->where('empresa_id',$empresa->id)->with('membresia')->orderBy('id','desc')->get();
        }
        else {
            $aprobado=1;
            $membresias=[];
        }
        if ($request->notify) {
            $notification = auth()->user()->notifications()->where('id', $request->notify)->first();
            if($notification) {
                if (!$notification->read_at) {
                    $notification->markAsRead();
                }
            }
        }
        return view('empresa.compras.miscompras')
            ->with('aprobado',$aprobado)
            ->with('membresias',$membresias);
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
