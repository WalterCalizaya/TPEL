<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

use App\Models\Instructor;

class InstructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores=Instructor::where('id','!=',1)->where('estado','!=',2)->orderBy('id','asc')->get();
        return view('admin.instructores.index')
        	->with('instructores',$instructores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructores.crear');
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
            'titulo' => 'required',
            'nombre' => 'required',
            'foto' => 'required|file|mimes:png,jpg,jpeg|max:5120',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/instructores/create')
            ->withErrors($validator)
            ->withInput();
        }
        $instructor=new Instructor();

		$instructor->titulo=$request->titulo;
		$instructor->nombre=$request->nombre;
		$instructor->subtitulo=$request->subtitulo;
		$instructor->nacionalidad=$request->pais;

        $foto  = Input::file('foto');
        if (!is_null($foto)) {
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/instructores/';
            $foto->move($path,$name);
            $instructor->foto='/resources/img/instructores/'.$name;
        }

        $remplazar=["<img"];
        $contenido=['<img class="img-fluid"'];
        $descripcion=str_replace($remplazar,$contenido,$request->contenido);
        $instructor->contenido=$descripcion;
        $instructor->estado=1;

        $instructor->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/instructores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor=Instructor::find($id);
        if ($instructor) {
            return view('admin.instructores.editar')
                ->with('instructor',$instructor);
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
        $foto  = Input::file('foto');
        if (!is_null($foto)) $a='required|file|mimes:png,jpg,jpeg|max:5120';
        else $a='';

        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'nombre' => 'required',
            'foto' => $a,
        ]);
        if ($validator->fails()) {
             alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/instructores/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }

        $instructor=Instructor::find($id);

        $instructor->titulo=$request->titulo;
		$instructor->nombre=$request->nombre;
		$instructor->subtitulo=$request->subtitulo;
		$instructor->nacionalidad=$request->pais;

        if (!is_null($foto)) {
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/resources/img/instructores/';
            $foto->move($path,$name);
            $instructor->foto='/resources/img/instructores/'.$name;
        }

        $remplazar=["<img"];
        $contenido=['<img class="img-fluid"'];
        $descripcion=str_replace($remplazar,$contenido,$request->contenido);
        $instructor->contenido=$descripcion;
        $instructor->estado=$request->estado;

        $instructor->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/instructores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        // $instructor=Instructor::find($id);
        // File::delete(public_path().$instructor->foto);
        // $instructor->delete();
        $instructor=Instructor::find($id);
        $instructor->estado='2';
        $instructor->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/instructores');
    }
}
