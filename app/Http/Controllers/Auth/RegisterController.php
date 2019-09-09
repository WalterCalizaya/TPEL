<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Configuracion;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Distrito;
use Auth;
use Mail;
// use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function showRegistrationFormUsuario()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        else{
            $configuracion=Configuracion::find(1);
            $regiones=Region::where('id','!=',260000)->pluck('nombre','id');
            return view('auth.registro_usuario')
            ->with('configuracion',$configuracion)
            ->with('regiones',$regiones);
        }

    }

    public function showprovincias(Request $request, $id)
    {
        if ($request->ajax()) {
            $provincias=Provincia::where('region_id',$id)->get();
            return $provincias;
        }
    }

    public function showdistritos(Request $request, $id)
    {
        if ($request->ajax()) {
            $distritos=Distrito::where('provincia_id',$id)->get();
            return $distritos;
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function register_usuario(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        //cambio para evitar confirmar correo electrónico
        return redirect('/registro-usuario?q=confirmar-correo');
    }
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    // protected function guard()
    // {
    //     return Auth::guard();
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'celular' => 'required|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['confirmacion_code']=str_random(25);
        $data['tipo']=3;
        $data['configuracion']=Configuracion::find(1);
        $user= User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellido'],
            'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
            'password' => bcrypt($data['password']),
            'telefono' => $data['celular'],
            'tipo' => $data['tipo'],
            'distrito_id' => $data['distrito'],
            'confirmacion_code' => $data['confirmacion_code'],
            'confirmado' => false,
        ]);

        Mail::send('confirmacion.confirmacion_email', $data, function($message) use ($data){
            $message->to($data['email'],$data['nombres'])->subject('Por favor, confirma tu registro - Tu Profe en Línea');
        });

        return $user;
    }

    public function verificar($code){
        $user=User::where('confirmacion_code',$code)->first();
        if (!$user) {
            return redirect('/login?q=link-invalido');
        }
        $user->confirmado=true;
        $user->confirmacion_code=null;
        $user->save();
        return redirect('/login?q=verificado');
    }
}
