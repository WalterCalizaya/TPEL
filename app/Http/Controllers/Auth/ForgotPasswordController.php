<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\Configuracion;
use App\User;
use Auth;
use Mail;
use DB;
use Carbon\Carbon;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        $configuracion=Configuracion::find(1);
        return view('auth.passwords.email')->with('configuracion',$configuracion);
    }

    public function sendResetLinkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect('/password/reset')
            ->withErrors($validator)
            ->withInput();
        }
        $usuario = User::where('email',$request->email)->get();
        if (count($usuario)>0) {
		        $email=$request->email;
		        $data=[];
		        $user=DB::table('password_resets')->where('email',$email)->get();
		        if (count($user)>0) {
		            $token=$user->first()->token;
		        }
		        else{
		            $token=str_random(60);
		            DB::table('password_resets')->insert(
		                ['email' => $email, 'token' => $token,'created_at'=>Carbon::now()->format('Y-m-d H:i:s')]
		            );
		        }
		        $data['email']=$email;
		        $data['token']=$token;
		        $this->sendMailUser($data);

		        return redirect('/password/reset?q=reestablecer-correo');
        } else {
        	return redirect('password/reset?q=error');
        }

    }

    protected function sendMailUser(array $data)
    {
        $data['nombres']=User::where('email',$data['email'])->first()->nombres;
        $data['configuracion']=Configuracion::find(1);

        Mail::send('confirmacion.reset_password', $data, function($message) use ($data){
            $message->to($data['email'],$data['nombres'])->subject('Reestablecer contraseña - Tacnatel');
        });
    }
}
