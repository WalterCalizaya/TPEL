<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

use App\User;
use App\Models\Configuracion;
use App\Models\Instructor;
use App\Models\TipoCertificacion;
use App\Models\Certificacion;
use App\Models\Evento;
use App\Models\Region;

use Auth;
use Mail;

class FrontController extends Controller
{
    public function index()
    {
        $configuracion=Configuracion::find(1);
        $instructores=Instructor::where('id','!=',1)->where('estado',1)->get();
        return view('front.index.index')
        ->with('configuracion',$configuracion)
        ->with('instructores',$instructores);
    }

    public function envivo()
    {
        $configuracion=Configuracion::find(1);
    	return view('front.envivo.index')
    		->with('configuracion',$configuracion);
    }

    public function calendario()
    {
        $configuracion=Configuracion::find(1);
    	$eventos=Evento::where('tipo_evento',4)->where('estado','!=',2)->orderBy('id','desc')->get();
    	//eventos futuros incluidos proximos 15d
    	$futuros=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
    	//solo eventos a desarrollarse en próximos 15d
        $dias=Carbon::now()->addDay(15);
    	$proximos=Evento::where('estado',1)->where('vigencia',2)->where('inicio','<=',$dias)->orderBy('inicio','asc')->get();
    	//eventos anteriores a la fecha de hoy
    	$pasados=Evento::where('estado',1)->where('vigencia',0)->orderBy('inicio','desc')->get();

    	return view('front.calendario.index')
       ->with('configuracion',$configuracion)
       ->with('futuros',$futuros)
       ->with('proximos',$proximos)
       ->with('pasados',$pasados);
    }


    /*
    NOSOTROS
    */
    public function nosotros()
    {
        $configuracion=Configuracion::find(1);
        return view('front.nosotros.index')
        ->with('configuracion',$configuracion);
    }
    public function socios()
    {
        $configuracion=Configuracion::find(1);
        return view('front.nosotros.socios')
        ->with('configuracion',$configuracion);
    }
    public function servicios()
    {
        $configuracion=Configuracion::find(1);
        return view('front.nosotros.servicios')
        ->with('configuracion',$configuracion);
    }
    public function contacto(Request $request)
    {
        $configuracion=Configuracion::find(1);
        $regiones=Region::where('id','!=',260000)->pluck('nombre','nombre');
        return view('front.contacto.index')
        ->with('configuracion',$configuracion)
        ->with('regiones',$regiones);
    }
    public function enviocontacto(Request $request)
    {
        if ($request->ajax()) {
            $data=[];
            $data['asunto']=$request->asunto;
            $data['nombre']=$request->nombre;
            $data['email']=$request->email;
            $data['mensaje']=$request->mensaje;
            $data['configuracion']=Configuracion::find(1);
            Mail::send('confirmacion.correo', $data, function($message) use ($data){
                $message->to($data['configuracion']['email'],$data['nombre'])->subject('Nuevo mensaje de '.$data['nombre'].' - Tacnatel');
            });
            return 'ok';
        }
        else{

        }
    }

    public function procesar_eventos(Request $request)
    {
        $eventos=Evento::where('vigencia','!=',0)->get();
        if (count($eventos)>0) {
            foreach ($eventos as $key => $evento) {
                $fecha_actual=Carbon::now()->format('Y-m-d');
                $fecha_actual_mas_1_mes=date("Y-m-d",strtotime($fecha_actual."+ 1 month"));

                if ($fecha_actual <= $evento->inicio) {
                    $vigencia=1; //el evento es hoy o en un futuro
                    if ($evento->inicio <= $fecha_actual_mas_1_mes) {
                        $vigencia=2; //el evento es dentro de 30 días
                    }
                }
                else {
                    $vigencia=0; //el evento es pasado
                }
                $evento->vigencia=$vigencia;
                $evento->save();
            }
            return 'Proceso ejecutado';
        }
        else{
            return 'No hay eventos por modificar';
        }
    }
    /*
    INSTRUCTORES
    */
    public function lista_instructores()
    {
    	$configuracion=Configuracion::find(1);
        $instructores=Instructor::where('id','!=',1)->where('estado',1)->get();
        return view('front.nosotros.instructores')
        ->with('configuracion',$configuracion)
        ->with('instructores',$instructores);
    }
    public function perfil_instructor($slug)
    {
        $instructor=Instructor::where('estado',1)->where('slug',$slug)->first();
        $configuracion=Configuracion::find(1);
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
        if ($instructor) {
          return view('front.nosotros.perfil-instructor')
          ->with('configuracion',$configuracion)
          ->with('instructor',$instructor)
          ->with('proximos',$proximos);
        }
        else{
            return redirect('/404');
        }
    }
    /*
    CERTIFICACIONES
    */
    public function lista_empresas_certificadoras()
    {
    	$configuracion=Configuracion::find(1);
        $empresas=TipoCertificacion::where('id','!=',1)->where('estado',1)->get();
        return view('front.certificaciones.index')
        ->with('configuracion',$configuracion)
        ->with('empresas',$empresas);
    }
    public function lista_tipos_certificacion($tipo_certificacion)
    {
        $empresa=TipoCertificacion::where('slug',$tipo_certificacion)->first();
        $tipo=TipoCertificacion::where('estado',1)->where('slug',$tipo_certificacion)->first();
        if ($tipo) {
            $configuracion=Configuracion::find(1);
            $tipos=Certificacion::where('id','!=',1)->where('estado',1)->where('tipo_certificacion_id',$tipo->id)->get();
            $tipos_id=$tipos->pluck('id')->toArray();
            $actuales=Evento::where('tipo_evento',1)->where('estado',1)->whereIn('certificacion_id', $tipos_id)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
            $pasados=Evento::where('tipo_evento',1)->where('estado',1)->whereIn('certificacion_id', $tipos_id)->where('vigencia',0)->orderBy('inicio','desc')->get();
            return view('front.certificaciones.tipos')
            ->with('configuracion',$configuracion)
            ->with('tipos',$tipos)
            ->with('empresa',$empresa)
            ->with('actuales',$actuales)
            ->with('pasados',$pasados);
        }
        else{
            return redirect('/404');
        }
    }
    public function perfil_certificacion($tipo_certificacion,$slug)
    {
        $evento=Evento::where('tipo_evento',1)->where('estado',1)->where('slug',$slug)->first();
        if ($evento) {
            if ($tipo_certificacion==$evento->certificacion->tipocertificacion->slug) {
                $configuracion=Configuracion::find(1);
                $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
                return view('front.certificaciones.perfil-certificacion')
                ->with('configuracion',$configuracion)
                ->with('evento',$evento)
                ->with('proximos',$proximos);
            }
            else{
                return redirect('/404');
            }
        }
        else{
            return redirect('/404');
        }
    }
    /*
    TALLERES
    */

    public function lista_talleres()
    {
        $configuracion=Configuracion::find(1);
        $actuales=Evento::where('tipo_evento',2)->where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
        $pasados=Evento::where('tipo_evento',2)->where('estado',1)->where('vigencia',0)->orderBy('inicio','desc')->get();
        return view('front.talleres.index')
        ->with('configuracion',$configuracion)
        ->with('actuales',$actuales)
        ->with('pasados',$pasados);
    }

    public function perfil_taller($slug)
    {
        $evento=Evento::where('tipo_evento',2)->where('estado',1)->where('slug',$slug)->first();
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
        if ($evento) {
            $configuracion=Configuracion::find(1);
            return view('front.talleres.perfil')
            ->with('evento',$evento)
            ->with('configuracion',$configuracion)
            ->with('proximos',$proximos);
        }
        else{
            return redirect('/404');
        }
    }

    /*
    SEMINARIOS
    */
    public function lista_seminarios()
    {
        $configuracion=Configuracion::find(1);
        $actuales=Evento::where('tipo_evento',3)->where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
        $pasados=Evento::where('tipo_evento',3)->where('estado',1)->where('vigencia',0)->orderBy('inicio','desc')->get();
        return view('front.seminarios.index')
        ->with('configuracion',$configuracion)
        ->with('actuales',$actuales)
        ->with('pasados',$pasados);
    }

    public function perfil_seminario($slug)
    {
        $evento=Evento::where('tipo_evento',3)->where('estado',1)->where('slug',$slug)->first();
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
        if ($evento) {
            $configuracion=Configuracion::find(1);
            return view('front.seminarios.perfil')
            ->with('evento',$evento)
            ->with('configuracion',$configuracion)
            ->with('proximos',$proximos);
        }
        else{
            return redirect('/404');
        }
    }

    /*
    WEBINARS
    */
    public function lista_webinars()
    {
        $configuracion=Configuracion::find(1);
        $eventos=Evento::where('tipo_evento',4)->where('estado',1)->orderBy('inicio','desc')->get();
        return view('front.webinars.index')
        ->with('configuracion',$configuracion)
        ->with('eventos',$eventos);
    }

    public function perfil_webinar($slug)
    {
        $evento=Evento::where('tipo_evento',4)->where('estado',1)->where('slug',$slug)->first();
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
        if ($evento) {
            $configuracion=Configuracion::find(1);
            return view('front.webinars.perfil')
            ->with('evento',$evento)
            ->with('configuracion',$configuracion)
            ->with('proximos',$proximos);
        }
        else{
            return redirect('/404');
        }
    }

    public function alquiler_de_local()
    {
        $configuracion=Configuracion::find(1);
        return view('front.alquiler.index')
            ->with('configuracion',$configuracion);
    }

    /*
    404
    */
    public function error404()
    {
        $configuracion=Configuracion::find(1);
        return view('errors.404')
        ->with('configuracion',$configuracion);
    }

}
