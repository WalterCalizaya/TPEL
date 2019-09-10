<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\User;
use Hash;
// use App\Models\Categoria;
// use App\Models\Rubro;
// use App\Models\Empresa;
// use App\Models\Servicio;
// use App\Models\Galeria;
// use App\Models\Notificacion;
use App\Models\Comentario;
use App\Models\Calificacion;
use Auth;
class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios=Comentario::where('user_id',auth()->user()->id)->orderBy('id','desc')->take(5)->get();
        $calificaciones=Calificacion::where('user_id',auth()->user()->id)->orderBy('id','desc')->take(5)->get();
        return view('cliente.opciones.perfil')
            ->with('user',Auth::user())
            ->with('comentarios',$comentarios)
            ->with('calificaciones',$calificaciones);
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
                    $error["password_confirm"]="Ingrese la contraseña de confirmación";
                }
            }
            else{
                $error["password_new"]="Ingrese su nueva contraseña";
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

    public function cambiarempresa(Request $request)
    {
        $ant=auth()->user();
        $user = $ant->replicate();

        $explo=explode('@', $ant->email);
        $email=$explo[0].str_random(10).'@'.str_random(5).'.com';
        $ant->email=$email;
        $ant->banneado=1;
        $ant->save();
        // $my_email=$ant->email;
        // $user =new User();
        // $user->email=$my_email;
        // $user->password=$ant->password;
        // $user->username=$ant->username;
        // $user->foto=$ant->foto;
        // $user->nacimiento=$ant->nacimiento;
        // $user->nombres=$ant->nombres;
        $user->razon_social=$request->razon_social;
        $user->nombres=$request->nombres;
        $user->fijo=$request->fijo;
        $user->direccion=$request->direccion;
        $user->ruc=$request->ruc;
        $user->confirmado=1;
        $user->tipo=3;
        $user->save();
        // dd($user);


        Auth::logout();
        Auth::loginUsingId($user->id);

        toast('Bienvenido a su perfil empresarial, disfrute de nuevas cosas!','success','center');
        return redirect('/admin/empresa');
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

        $user=User::find(Auth::user()->id);
        $foto  = Input::file('foto');
        if (!is_null($foto)) {
            $name2=str_replace(' ', '-', $foto->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$foto->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $foto->move($path,$name);
            $user->foto='/assets/img/galeria/'.$name;
            $user->save();
            toast('Su imagen de perfil se actualizó satisfactoriamente','success','center');
            return redirect('/admin/usuario/perfil');
        }
        toast('Seleccione una foto de perfil','error','center');
        return redirect('/admin/usurio/perfil');
    }

    public function obterperfil()
    {

        return view('cliente.opciones.modificarperfil')->with('user',Auth::user());
    }

    public function modificarperfil(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users,email,'.Auth::user()->id,
            'password' => 'confirmed',
            // 'password_confirmation' => 'string',
            // 'nombres' => 'string',
            // 'telefono' => 'string|min:6|max:9',
            'nacimiento' => 'date',
            // 'ciudad' => 'string',
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/usuario/perfil/modificar')
            ->withErrors($validator)
            ->withInput();
        }

        $user=User::find(Auth::user()->id);
        $user->username=$request->username;
        $user->nombres=$request->nombres;
        $user->email=$request->email;
        if($user->password) bcrypt($request->password);
        $user->telefono=$request->telefono;
        $user->nacimiento=$request->nacimiento;
        $user->ciudad=$request->ciudad;
        $user->save();
        toast('Su información fue actualizada satisfactoriamente','success','center');
        return redirect('/admin/usuario/perfil');
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

    public function modificar()
    {
        return view('cliente.update-perfil');
    }
}
