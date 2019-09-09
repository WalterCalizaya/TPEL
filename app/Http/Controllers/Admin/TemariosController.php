<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

use App\Models\Temario;

class TemariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temarios=Temario::where('id','!=',1)->where('estado','!=',2)->orderBy('id','desc')->get();
        return view('admin.temarios.index')
            ->with('temarios',$temarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.temarios.crear');
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
            'tipo' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/temarios/create')
            ->withErrors($validator)
            ->withInput();
        }

        $temario = New Temario();

        $temario->titulo=$request->titulo;
        $temario->tipo_temario=$request->tipo;
        $temario->temario=$request->temario;
        $temario->contenido=$request->contenido;

        $temario->estado=1;

        $temario->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/temarios');
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
        $temario=Temario::find($id);
        if ($temario) {
            return view('admin.temarios.editar')
                ->with('temario',$temario);
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
            'titulo' => 'required',
            'tipo' => 'required',
            'temario' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/temarios/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }

        $temario = Temario::find($id);

        $temario->titulo=$request->titulo;
        $temario->tipo_temario=$request->tipo;
        $temario->temario=$request->temario;
        $temario->contenido=$request->contenido;

        $temario->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/temarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temario=Temario::find($id);
        $temario->estado='2';
        $temario->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/temarios');
    }
}
