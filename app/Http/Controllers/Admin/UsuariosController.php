<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

use App\User;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Distrito;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('tipo','!=',1)->orderBy('id','desc')->get();
        return view('admin.usuarios.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
        return view('admin.usuarios.crear')
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
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'distrito' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/lista-usuario/create')
                ->withErrors($validator)
                ->withInput();
        }
        $user=New User();
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->telefono=$request->telefono;
        $user->tipo=2;
        $user->foto='/resources/img/user/default.png';
        $user->distrito_id=$request->distrito;
        $user->confirmado=true;
        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-usuario');
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
        $user=User::find($id);
        if ($user->tipo==2) {
            $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
            $provincias=Provincia::where('id','!=',260100)->where('region_id',$user->distrito->provincia->region->id)->pluck('nombre','id');
            $distritos=Distrito::where('id','!=',260101)->where('provincia_id',$user->distrito->provincia->id)->pluck('nombre','id');
            return view('admin.usuarios.editar')
                        ->with('user',$user)
                        ->with('regiones',$regiones)
                        ->with('provincias',$provincias)
                        ->with('distritos',$distritos);
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
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'distrito' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/lista-usuario/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $user=User::find($id);
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->email=$request->email;
        $user->telefono=$request->telefono;
        $user->distrito_id=$request->distrito;
        if ($request->suspendido==1) {
            $user->banneado=1;
            $user->activo=0;
        }
        elseif ($request->suspendido==0) {
            $user->banneado=0;
            $user->activo=1;
        }
        $user->confirmado=$request->confirmado;
        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->activo=0;
        $user->banneado=1;
        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-usuario');
    }
}
