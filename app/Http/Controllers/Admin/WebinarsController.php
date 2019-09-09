<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

use App\Models\Evento;
use App\Models\Instructor;
use App\Models\Temario;

class WebinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::where('tipo_evento',4)->where('estado','!=',2)->orderBy('inicio','desc')->get();
        return view('admin.webinars.index')->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$instructores=Instructor::where('estado',1)->pluck('nombre','id');
        $temarios=Temario::where('estado',1)->whereIn('tipo_temario', [0, 4])->pluck('titulo','id');
        return view('admin.webinars.crear')
                ->with('instructores',$instructores)
                ->with('temarios',$temarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	//0 pasado, 1 vigente, 2 proximos 30d
        $fecha_evento=$request->fecha;
        $fecha_actual=Carbon::now();
        $fecha_actual_mas_1_mes=date("Y-m-d",strtotime($fecha_actual."+ 1 month"));

        if ($fecha_actual<=$fecha_evento) {
        	$vigencia=1; //el evento es hoy o en un futuro
        	if ($fecha_evento<=$fecha_actual_mas_1_mes) {
        		$vigencia=2; //el evento es dentro de 30 días
        	}
        }
        else {
        	$vigencia=0; //el evento es pasado
        }

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'fecha' => 'required',
            'hora' => 'required',
            'youtube' => 'required',
            'instructor' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/webinars/create')
            ->withErrors($validator)
            ->withInput();
        }

        $evento=new Evento();
        $evento->tipo_evento=4;
        $evento->certificacion_id=1;
        $evento->distrito_id=260101;
        $evento->titulo=$request->titulo;
        $evento->descripcion=$request->descripcion;
        $evento->inicio=$request->fecha;
        $evento->fin=$request->fecha;
        $evento->hora_inicio=$request->hora;
        $evento->hora_fin=$request->hora;
        $evento->temario_id=$request->temario;
        $evento->instructor_id=$request->instructor;
        $evento->youtube_code=$request->youtube;
        $evento->vigencia=$vigencia;
        $evento->estado=$request->estado;

        $foto  = Input::file('shared');
        if (!is_null($foto)) {
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/webinars/';
            $foto->move($path,$name);
            $evento->imagen='/resources/img/webinars/'.$name;
        }

        $filewebinar = Input::file('filewebinar');
        if (!is_null($filewebinar)) {
        	$name2=str_replace(' ', '-', $filewebinar->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$filewebinar->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/files/webinars/';
            $filewebinar->move($path,$name);
            $evento->material='/resources/files/webinars/'.$name;
        }

        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/webinars');
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
        $evento=Evento::find($id);
        $instructores=Instructor::where('estado',1)->pluck('nombre','id');
        $temarios=Temario::where('estado',1)->whereIn('tipo_temario', [0, 4])->pluck('titulo','id');
        if ($evento && $evento->tipo_evento==4) {
        	return view('admin.webinars.editar')
        		->with('evento',$evento)
                ->with('instructores',$instructores)
                ->with('temarios',$temarios);
        }
        else {
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
        $fecha_evento=$request->fecha;
        $fecha_actual=Carbon::now();
        $fecha_actual_mas_1_mes=date("Y-m-d",strtotime($fecha_actual."+ 1 month"));

        if ($fecha_actual<=$fecha_evento) {
            $vigencia=1; //el evento es hoy o en un futuro
            if ($fecha_evento<=$fecha_actual_mas_1_mes) {
                $vigencia=2; //el evento es dentro de 30 días
            }
        }
        else {
            $vigencia=0; //el evento es pasado
        }

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'fecha' => 'required',
            'hora' => 'required',
            'youtube' => 'required',
            'instructor' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/tipos-certificacion/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }

        $evento=Evento::find($id);
        $evento->titulo=$request->titulo;
        $evento->descripcion=$request->descripcion;
        $evento->inicio=$request->fecha;
        $evento->fin=$request->fecha;
        if ($request->hora) {
            $evento->hora_inicio=$request->hora;
            $evento->hora_fin=$request->hora;
        }
        $evento->temario_id=$request->temario;
        $evento->instructor_id=$request->instructor;
        $evento->youtube_code=$request->youtube;
        $evento->vigencia=$vigencia;
        $evento->estado=$request->estado;

        $foto  = Input::file('shared');
        if (!is_null($foto)) {
            File::delete(public_path().$evento->imagen);
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/webinars/';
            $foto->move($path,$name);
            $evento->imagen='/resources/img/webinars/'.$name;
        }

        $filewebinar = Input::file('filewebinar');
        if (!is_null($filewebinar)) {
            File::delete(public_path().$evento->material);
            $name2=str_replace(' ', '-', $filewebinar->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$filewebinar->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/files/webinars/';
            $filewebinar->move($path,$name);
            $evento->material='/resources/files/webinars/'.$name;
        }

        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/webinars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $evento=Evento::find($id);
        // File::delete(public_path().$evento->imagen);
        // File::delete(public_path().$evento->material);
        $evento->estado=2;
        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/webinars');
    }
}
