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

class CertificacionesEmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=TipoCertificacion::where('id','!=',1)->with('certificaciones')->orderBy('id','asc')->get();
        return view('admin.certificaciones.listaempresas')->with('empresas',$empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificaciones.crearempresa');
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
            'tipo' => 'required|string',
            'empresa' => 'required|file|max:5120',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/empresas-certificadoras/create')
            ->withErrors($validator)
            ->withInput();
        }
        $empresa=new TipoCertificacion();
        $empresa->tipo=$request->tipo;
        $empresa->descripcion=$request->descripcion;

        $foto  = Input::file('empresa');
        if (!is_null($foto)) {
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/certificaciones/';
            $foto->move($path,$name);
            $empresa->imagen='/resources/img/certificaciones/'.$name;
        }
        $empresa->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/empresas-certificadoras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($request->ajax()) {
            $empresas=TipoCertificacion::where('tipo_certificacion_id',$id)->get();
            return $empresas;
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
        $empresa=TipoCertificacion::find($id);
        if ($empresa) {
            return view('admin.certificaciones.editarempresa')->with('empresa',$empresa);
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
    	$foto  = Input::file('empresa');
        if (!is_null($foto)) $a='required|file|max:5120';
        else $a='';
        $validator = Validator::make($request->all(), [
            'tipo' => 'required|string',
            'empresa' => $a,
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/empresas-certificadoras/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        $empresa=TipoCertificacion::find($id);
        $empresa->tipo=$request->tipo;
        $empresa->descripcion=$request->descripcion;

        $foto  = Input::file('empresa');
        if (!is_null($foto)) {
        	File::delete(public_path().$empresa->imagen);
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/certificaciones/';
            $foto->move($path,$name);
            $empresa->imagen='/resources/img/certificaciones/'.$name;
        }
        $empresa->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/empresas-certificadoras');
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
