<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Hash;
use Carbon\Carbon;
use App\User;
use App\Models\Categoria;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Servicio;
use App\Models\Galeria;
use App\Models\Notificacion;
use App\Models\Calificacion;
use App\Models\Comentario;
use App\Models\Pregunta;
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
        $user=User::with('empresa')->find(Auth::user()->id);
        if($user->empresa){
            $aprobado=Empresa::with('galerias')->with('servicios')->find($user->empresa->id)->aprobado;
        }
        else $aprobado=1;
        return view('empresa.opciones.perfil')
            ->with('user',Auth::user())
            ->with('aprobado',$aprobado);
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

    public function misnotificaciones(Request $request)
    {
        $user=auth()->user();
        $empresa=$user->empresa;
        if($empresa){
            $aprobado=$empresa->aprobado;
        }
        else{
            $aprobado=1;
        }
        if ($request->marcar) {
            if ($user->unreadNotifications) {
                $user->unreadNotifications->markAsRead();
            }
        }
        $notificaciones=auth()->user()->notifications()->paginate(15);
        $noleidas=count(auth()->user()->unreadNotifications()->get()->toArray());
        return view('empresa.empresa.notificaciones')
            ->with('notificaciones',$notificaciones)
            ->with('noleidas',$noleidas)
            ->with('aprobado',$aprobado);
    }

    public function miscalificaciones(Request $request)
    {
        $calificaciones=Calificacion::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('empresa.empresa.mis_calificaciones')->with('calificaciones',$calificaciones);
    }

    public function miscomentarios(Request $request)
    {
        $comentarios=Comentario::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('empresa.empresa.mis_comentarios')->with('comentarios',$comentarios);
    }

    public function mispreguntas(Request $request)
    {
        $preguntas=Pregunta::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('empresa.empresa.mis_preguntas')->with('preguntas',$preguntas);
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
            return redirect('/admin/empresa/perfil');
        }
        toast('Seleccione una imagen de perfil','error','center');
        return redirect('/admin/empresa/perfil');
    }

    public function obterperfil()
    {

        $user=User::with('empresa')->find(Auth::user()->id);
        if($user->empresa){
            $aprobado=Empresa::with('galerias')->with('servicios')->find($user->empresa->id)->aprobado;
        }
        else $aprobado=1;
        return view('empresa.opciones.modificarperfil')
            ->with('user',Auth::user())
            ->with('aprobado',$aprobado);
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
            return redirect('/admin/empresa/perfil/modificar')
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
        toast('Información modificado satisfactoriamente','success','center');
        return redirect('/admin/empresa/perfil');
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
}
