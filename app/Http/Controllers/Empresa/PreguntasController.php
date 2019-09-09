<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\User;
use Auth;

use App\Models\Pregunta;
use App\Models\Comentario;
class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function preguntanotificado(Request $request)
    {
        $id=auth()->user()->empresa ? auth()->user()->empresa->id : 0;
        $pregunta=Pregunta::with('empresa')->with('user')->where('empresa_id',$id)->find($request->pregunta);
        if ($pregunta) {
            $notification = auth()->user()->notifications()->where('id', $request->notify)->first();
            if($notification) {
                if (!$notification->read_at) {
                    $notification->markAsRead();
                }
            }
            return view('empresa.preguntas.preguntanotificado')->with('pregunta',$pregunta);
        }
        else{
            return redirect('/admin/empresa/moderar-preguntas');
        }
    }

    public function responderpregunta($id)
    {
        $emp=auth()->user()->empresa->id;
        $pregunta=Pregunta::with('empresa')->with('user')->where('empresa_id',$emp)->find($id);
        if ($pregunta) {
            return view('empresa.preguntas.responderpregunta')->with('pregunta',$pregunta);   
        }
        else{
            return redirect('/admin/empresa/moderar-preguntas');
        }
    }

    public function preguntarespondida(Request $request,$id)
    {
        $pregunta=Pregunta::with('empresa')->with('user')->find($id);
        if ($pregunta) {
            if ($request->respuesta) {
                $pregunta->fecha_respuesta=Carbon::now()->format('Y-m-d H:i:s');
                $pregunta->foto=auth()->user()->empresa->perfil;
                $pregunta->name=auth()->user()->empresa->razon_social;
                $pregunta->username=auth()->user()->username;
                $pregunta->tipo=auth()->user()->tipo;
                $pregunta->respuesta=$request->respuesta;
                $pregunta->respondido=1;
                toast('Pregunta respondida','success','center');
            }
            else{
                toast('Pregunta aprobada','success','center');
            }
            $pregunta->estado=1;
            $pregunta->save();
            return redirect('/admin/empresa/lista-preguntas');
        }
        else{
            return redirect('/admin/empresa/moderar-preguntas');
        }
    }

    public function moderarpreguntas()
    {
        $id=auth()->user()->empresa ? auth()->user()->empresa->id : 0;
        $preguntas=Pregunta::with('empresa')->with('user')->where('empresa_id',$id)->where('estado',0)->orderBy('id','desc')->get();
        return view('empresa.preguntas.moderarpreguntas')->with('preguntas',$preguntas);
    }

    public function preguntaaprobar(Request $request, $id,$estado)
    {
        $aprobar=Pregunta::with('empresa')->with('user')->find($id);
        if ($aprobar) {
            if ($estado==2) {
                $aprobar->estado=2;
                toast('Comentario rechazado','warning','center');
            }
            $aprobar->save();
            return redirect('/admin/empresa/lista-preguntas');
        }
        else{
            return redirect('/admin/empresa/lista-preguntas');
        }
    }

    public function listapreguntas()
    {
        $id=auth()->user()->empresa ? auth()->user()->empresa->id : 0;
        $preguntas=Pregunta::with('empresa')->with('user')->where('empresa_id',$id)->where('estado','!=',0)->orderBy('updated_at','desc')->get();
        return view('empresa.preguntas.listapreguntas')->with('preguntas',$preguntas);
    }

    public function modificarpregunta($id)
    {
        $emp=auth()->user()->empresa ? auth()->user()->empresa->id : 0;
        $pregunta=Pregunta::with('empresa')->with('user')->where('empresa_id',$emp)->find($id);
        if ($pregunta) {
            return view('empresa.preguntas.modificarespuesta')->with('pregunta',$pregunta);   
        }
        else{
            return redirect('/admin/empresa/lista-preguntas');
        }
    }

    public function preguntamodificada(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pregunta' => 'required|string',
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/empresa/modificar-pregunta/'.$id)
            ->withErrors($validator)
            ->withInput();
        }
        $emp=auth()->user()->empresa ? auth()->user()->empresa->id : 0;
        $pregunta=Pregunta::with('empresa')->with('user')->where('empresa_id',$emp)->find($id);
        // dd($pregunta);
        if ($pregunta) {
            if ($request->respuesta) {
                if (!$pregunta->respuesta) {
                    $pregunta->fecha_respuesta=Carbon::now()->format('Y-m-d H:i:s');
                    $pregunta->foto=auth()->user()->empresa->perfil;
                    $pregunta->name=auth()->user()->empresa->razon_social;
                    $pregunta->username=auth()->user()->username;
                    $pregunta->tipo=auth()->user()->tipo;
                    $pregunta->respondido=1;
                }
                $pregunta->respuesta=$request->respuesta;
            }
            else{
                $pregunta->respondido=0;
            }
            toast('Pregunta modificada','success','center');
            $pregunta->pregunta=$request->pregunta;
            $pregunta->estado=$request->estado;
            $pregunta->save();
            return redirect('/admin/empresa/lista-preguntas');
        }
        else{
            return redirect('/admin/empresa/lista-preguntas');
        }
    }

    public function eliminarpregunta($id)
    {
        $pregunta=Pregunta::with('empresa')->with('user')->find($id);
        if ($pregunta) {
            $pregunta->delete();
            toast('Pregunta eliminada','success','center');
        }
        return redirect('/admin/empresa/lista-preguntas');
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
        //
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
