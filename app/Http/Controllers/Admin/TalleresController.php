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
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Temario;

class TalleresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::where('tipo_evento',2)->where('estado','!=',2)->with('distrito')->with('instructor')->orderBy('inicio','desc')->get();
        return view('admin.talleres.index')->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
        $instructores=Instructor::where('estado',1)->pluck('nombre','id');
        $temarios=Temario::where('estado',1)->whereIn('tipo_temario', [0, 2])->pluck('titulo','id');
        return view('admin.talleres.crear')
            ->with('instructores',$instructores)
            ->with('temarios',$temarios)
            ->with('regiones',$regiones);
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
        $fecha_evento=$request->fecha_inicio;
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
            'taller' => 'required',
            'objetivos' => 'required',
            'dirigido' => 'required',
            // 'conocimientos' => 'required',
            'requisitos' => 'required',
            'incluye' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            // 'direccion' => 'required',
            // 'precio' => 'required',
            'instructor' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/talleres/create')
                ->withErrors($validator)
                ->withInput();
        }

        $region = Region::where('id',$request->region)->first();
        $anio = Carbon::parse($request->fecha_inicio)->year;
        $titulo = $request->taller.' - '.$region->nombre.' '.$anio;

        $evento=new Evento();
        $evento->tipo_evento=2;
        $evento->certificacion_id=1;
        $evento->titulo=$titulo;
        $evento->instructor_id=$request->instructor;
        $evento->inicio=$request->fecha_inicio;
        $evento->fin=$request->fecha_fin;
        $evento->hora_inicio=$request->hora_inicio;
        $evento->hora_fin=$request->hora_fin;
        $evento->distrito_id=$request->distrito;
        $evento->direccion=$request->direccion;
        $evento->moneda=$request->moneda;
        $evento->precio=$request->precio;
        $evento->objetivos=$request->objetivos;
        $evento->dirigido=$request->dirigido;
        $evento->conocimientos=$request->conocimientos;
        $evento->requisitos=$request->requisitos;
        $evento->incluye=$request->incluye;
        $evento->temario_id=$request->temario;
        $evento->latitud=$request->latitud;
        $evento->longitud=$request->longitud;
        $evento->vigencia=$vigencia;
        $evento->estado=$request->estado;

        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/talleres');
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
        if ($evento && $evento->tipo_evento==2) {
            $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
            $provincias=Provincia::where('id','!=',260100)->where('region_id',$evento->distrito->provincia->region->id)->pluck('nombre','id');
            $distritos=Distrito::where('id','!=',260101)->where('provincia_id',$evento->distrito->provincia->id)->pluck('nombre','id');
            $instructores=Instructor::where('estado',1)->pluck('nombre','id');
            $temarios=Temario::where('estado',1)->whereIn('tipo_temario', [0, 2])->pluck('titulo','id');
            return view('admin.talleres.editar')
                ->with('evento',$evento)
                ->with('regiones',$regiones)
                ->with('provincias',$provincias)
                ->with('distritos',$distritos)
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
        //0 pasado, 1 vigente, 2 proximos 30d
        $fecha_evento=$request->fecha_inicio;
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
            'taller' => 'required',
            'objetivos' => 'required',
            'dirigido' => 'required',
            // 'conocimientos' => 'required',
            'requisitos' => 'required',
            'incluye' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            // 'direccion' => 'required',
            // 'precio' => 'required',
            'instructor' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/talleres/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $region = Region::where('id',$request->region)->first();
        $anio = Carbon::parse($request->fecha_inicio)->year;
        $titulo = $request->taller.' - '.$region->nombre.' '.$anio;

         $evento=Evento::find($id);
        $evento->tipo_evento=2;
        $evento->certificacion_id=1;
        $evento->titulo=$titulo;
        $evento->instructor_id=$request->instructor;
        $evento->inicio=$request->fecha_inicio;
        $evento->fin=$request->fecha_fin;
        $evento->hora_inicio=$request->hora_inicio;
        $evento->hora_fin=$request->hora_fin;
        $evento->distrito_id=$request->distrito;
        $evento->direccion=$request->direccion;
        $evento->moneda=$request->moneda;
        $evento->precio=$request->precio;
        $evento->objetivos=$request->objetivos;
        $evento->dirigido=$request->dirigido;
        $evento->conocimientos=$request->conocimientos;
        $evento->requisitos=$request->requisitos;
        $evento->incluye=$request->incluye;
        $evento->temario_id=$request->temario;
        $evento->latitud=$request->latitud;
        $evento->longitud=$request->longitud;
        $evento->vigencia=$vigencia;
        $evento->estado=$request->estado;

        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/talleres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento=Evento::find($id);
        $evento->estado=2;
        $evento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/talleres');
    }
}
