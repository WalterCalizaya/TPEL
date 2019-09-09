<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use Auth;

use App\User;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Distrito;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function notifications()
    // {
    //     return [auth()->user()->notifications()->limit(6)->get()->toArray(),count(auth()->user()->unreadNotifications()->get()->toArray()),auth()->user()->tipo];
    // }


    public function index()
    {
        $users=User::where('tipo',1)->where('id','!=',1)->orderBy('id','asc')->get();
        return view('admin.administradores.index')->with('users',$users);
    }

    public function confirmpass(Request $request)
    {
        if ($request->ajax()) {
            if(Hash::check($request->password, Auth::user()->password)){
                return 200;
            }
            else{
                return 503;
            }
        }
    }

    public function changepass(Request $request)
    {
        if ($request->ajax()) {
            //Validación del server
            $error = array();
            if(!empty($request->password)){
                if (!Hash::check($request->password, Auth::user()->password)) {
                    $error["password"]="Contraseña actual incorrecta";
                }
            }
            else{
                $error["password"]="Ingrese su contraseña actual";
            }

            if (!empty($request->password_new)) {
                if (!empty($request->password_confirm)) {
                    if (!$request->password_new==$request->password_confirm) {
                        $error["password_confirm"]="Contraseña de confirmación incorrecta";
                    }
                }
                else{
                    $error["password_confirm"]="Ingrese contraseña de confirmación";
                }
            }
            else{
                $error["password_new"]="Ingrese contraseña nueva";
            }
            //retorna error
            if (count($error)>0) {
                return response($error, 422)
              ->header('Content-Type', 'application/json');
            }

            $user=User::find(Auth::user()->id);
            $user->password=bcrypt($request->password_new);
            $user->save();
            return $user;
        }
    }

    public function perfil()
    {
        return view('admin.perfil.perfil');
    }

    public function modificarfoto(Request $request)
    {
        $user=User::find(Auth::user()->id);
        $foto  = Input::file('foto');
        if (!is_null($foto)) {
            File::delete(public_path().$user->foto);
            //$name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $name2=str_replace(' ', '-', $user->nombres.'-'.$user->apellidos);
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'.'.$extension;
            $path=public_path().'/resources/img/user/';
            $foto->move($path,$name);
            $user->foto='/resources/img/user/'.$name;
            $user->save();

            alert()->success('¡Yeah!','Ahora tienes una nueva foto de perfil')->autoClose(3000)->showCloseButton();
            return redirect('/admin/perfil-admin');
        }
        alert()->error('Ups!','Debe seleccionar una imagen')->autoClose(4000)->showCloseButton();
        return redirect('/admin/perfil-admin');
    }

    public function obtenerperfil()
    {
        $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
        return view('admin.perfil.editar')
                ->with('regiones',$regiones);
    }

    public function modificarperfil(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            //'email' => 'required|string|email|max:255|unique:users,email,'.Auth::user()->id,
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/perfil-admin/modificar')
                ->withErrors($validator)
                ->withInput();
        }
        $user=User::find(Auth::user()->id);
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->telefono=$request->telefono;
        if ($request->distrito != 0) {
            $user->distrito_id=$request->distrito;
        }

        $user->save();
        alert()->success('¡Yeah!','Tu perfil se actualizó con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/perfil-admin/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
        return view('admin.administradores.crear')
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
            return redirect('/admin/lista-administrador/create')
                ->withErrors($validator)
                ->withInput();
        }
        $user=New User();
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->telefono=$request->telefono;
        $user->tipo=1;
        $user->foto='/resources/img/user/default.png';
        $user->distrito_id=$request->distrito;
        $user->confirmado=true;
        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-administrador');
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
        $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
        $provincias=Provincia::where('id','!=',260100)->where('region_id',$user->distrito->provincia->region->id)->pluck('nombre','id');
        $distritos=Distrito::where('id','!=',260101)->where('provincia_id',$user->distrito->provincia->id)->pluck('nombre','id');
        return view('admin.administradores.editar')
                    ->with('user',$user)
                    ->with('regiones',$regiones)
                    ->with('provincias',$provincias)
                    ->with('distritos',$distritos);
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
            return redirect('/admin/lista-administrador/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $user=User::find($id);
        $user->nombres=$request->nombres;
        $user->apellidos=$request->apellidos;
        $user->email=$request->email;
        $user->telefono=$request->telefono;
        $user->distrito_id=$request->distrito;
        $user->activo=$request->suspendido;

        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-administrador');
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
        return redirect('/admin/lista-administrador');
    }
}
