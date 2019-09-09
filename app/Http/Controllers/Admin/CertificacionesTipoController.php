<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\Models\TipoCertificacion;
use App\Models\Certificacion;
use App\Models\Evento;

class CertificacionesTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	// $tiposcertificacion=TipoCertificacion::with(['certificaciones','eventos'])->orderBy('id','desc')->get();
       	$tiposcertificacion=Certificacion::where('id','!=',1)->with('tipocertificacion')->orderBy('id','asc')->get();
        return view('admin.certificaciones.listatiposcertificacion')->with('tiposcertificacion',$tiposcertificacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$empresas=TipoCertificacion::where('id','!=',1)->where('estado',1)->pluck('tipo','id');
        return view('admin.certificaciones.creartiposcertificacion')->with('empresas',$empresas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'empresa' => 'required',
            'certificacion' => 'required|string',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/tipos-certificacion/create')
            ->withErrors($validator)
            ->withInput();
        }
        $certificacion=new Certificacion();

        $certificacion->tipo_certificacion_id=$request->empresa;
        $certificacion->certificacion=$request->certificacion;
        $certificacion->nombre_certificacion=$request->nombrecompleto;
        $certificacion->descripcion=$request->descripcion;

        $certificacion->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/tipos-certificacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $certificaciones=Certificacion::where('tipo_certificacion_id',$id)->get();
            return $certificaciones;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacion=Certificacion::find($id);
        if ($certificacion) {
        	$empresas=TipoCertificacion::where('id','!=',1)->where('estado',1)->pluck('tipo','id');
            return view('admin.certificaciones.editartiposcertificacion')
                ->with('empresas',$empresas)
                ->with('certificacion',$certificacion);
        }
        else{
            return redirect('/admin/sin-permiso');
        }
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
        $validator = Validator::make($request->all(), [
            'empresa' => 'required',
            'certificacion' => 'required|string',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/tipos-certificacion/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        $certificacion=Certificacion::find($id);
        $certificacion->tipo_certificacion_id=$request->empresa;
        $certificacion->certificacion=$request->certificacion;
        $certificacion->nombre_certificacion=$request->nombrecompleto;
        $certificacion->descripcion=$request->descripcion;

        $certificacion->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/tipos-certificacion');
    }

}
