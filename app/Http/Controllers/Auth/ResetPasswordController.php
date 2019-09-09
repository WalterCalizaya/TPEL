<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Foundation\Auth\ResetsPasswords;

use App\Models\Configuracion;
use App\User;
use Auth;
use Mail;
use DB;
use Carbon\Carbon;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm(Request $request, $token)
    {
        $user=DB::table('password_resets')->where('token',$token)->get();
        if (count($user)>0) {
            $error=0;
        }
        else{
            $error=1;
        }
        $configuracion=Configuracion::find(1);
        return view('auth.passwords.reset')
            ->with('configuracion',$configuracion)
            ->with('token',$token)
            ->with('error',$error);
    }

    public function reset(Request $request, $token)
    {
        $validator= Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect('/password/reset/'.$token)
            ->withErrors($validator)
            ->withInput();
        }
        $ant=DB::table('password_resets')->where('token',$token);
        if (count($ant->first())>0) {
            $user=User::where('email',$ant->first()->email)->first();
            $user->password=bcrypt($request->password);
            $user->save();
            $ant->delete();
            if (Auth::loginUsingId($user->id)) {
                toast('Contraseña reestablecida correctamente','success','center');
                if (Auth::user()->tipo==1) {
                    return redirect('/admin/dashboard');
                }
                elseif (Auth::user()->tipo==2) {
                    return redirect('/admin/usuario');
                }
                else{
                    return redirect('/admin/empresa');
                }
            }
        }
        else{
            return redirect('/password/reset/'.$token);
        }
    }
}
