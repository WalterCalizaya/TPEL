<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;
use File;

class ConfiguracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracion=Configuracion::find(1);
        return view('admin.configuracion.index')
        	->with('configuracion',$configuracion);
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
        $configuracion=Configuracion::find($id);
        return view('admin.configuracion.index')->with('configuracion',$configuracion);
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
        $logo  = Input::file('logo');
        $favicon  = Input::file('favicon');
        if (!is_null($logo)) $a='required|file|mimes:png,jpg,jpeg,svg|max:5120';
        else $a='';
        if (!is_null($favicon)) $b='required|file|mimes:png,ico|max:5120';
        else $b='';
        $validator = Validator::make($request->all(), [
            'logo' => $a,
            'favicon' => $b,
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'email' => 'required|string|email|max:255|unique:configuracion,email,'.$id,
            'telefono' => 'required',
            'direccion' => 'required|string',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/configuracion-general/')
            ->withErrors($validator)
            ->withInput();
        }

        $configuracion=Configuracion::find($id);
        $configuracion->titulo=$request->titulo;
        $configuracion->descripcion=$request->descripcion;
        $configuracion->descripcion_larga=$request->descripcion_larga;
        $configuracion->email=$request->email;
        $configuracion->telefono=$request->telefono;
        $configuracion->direccion=$request->direccion;
        $configuracion->mision=$request->mision;
        $configuracion->vision=$request->vision;
        $configuracion->facebook=$request->facebook;
        $configuracion->grupofb=$request->grupofb;
        $configuracion->twitter=$request->twitter;
        $configuracion->instagram=$request->instagram;
        $configuracion->youtube=$request->youtube;
        $configuracion->whatsapp=$request->whatsapp;
        $configuracion->linkedin=$request->linkedin;

        $configuracion->ganalytics=$request->ganalytics;
        $configuracion->gwmt=$request->gwmt;
        $configuracion->gmaps=$request->gmaps;

        if (!is_null($logo)) {
            $name2=str_replace(' ', '-', $logo->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$logo->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            // $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $name='logo_'.time().'.'.$extension;
            $path=public_path().'/resources/img/';
            $logo->move($path,$name);
            $configuracion->logo='/resources/img/'.$name;
        }

        if (!is_null($favicon)) {
            $name2=str_replace(' ', '-', $favicon->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$favicon->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            // $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $name='favicon_'.time().'.'.$extension;
            $path=public_path().'/resources/img/';
            $favicon->move($path,$name);
            $configuracion->favicon='/resources/img/'.$name;
        }

        $configuracion->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/configuracion-general');
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
