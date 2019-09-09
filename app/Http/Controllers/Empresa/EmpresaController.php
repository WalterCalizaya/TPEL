<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\User;
use App\Models\Categoria;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Servicio;
use App\Models\Galeria;
use App\Models\Notificacion;
use App\Models\Oferta;
use Auth;
use App\Notifications\NotifyPostOwner;
use App\Notifications\EmpresaEnviaInformacion;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notificaciones=Notificacion::where('user_receptor',Auth::user()->id)->where('leido',0);
        // $num=count($notificaciones);
        $user=User::with('empresa')->find(Auth::user()->id);
        // dd($user->empresa);
        if($user->empresa){
            $aprobado=Empresa::with('galerias')->with('servicios')->with('ofertas')->find($user->empresa->id)->aprobado;
        }
        else $aprobado=1;
        // dd($aprobado);

        // dd($notificaciones->get());
        return view('empresa.principal')
            ->with('aprobado',$aprobado);
    }

    public function perfil(Request $request)
    {
        $id=Auth::user()->id;
        $user=User::with('empresa')->find($id);
        // dd($user);
        $categorias=Categoria::pluck('categoria', 'id');
        if ($user->empresa) {
            $empresa=Empresa::with('galerias')->with('servicios')->with('ofertas')->find($user->empresa->id);
            if ($empresa->ofertas->where('estado',1)->first()) {
                $hoy=Carbon::now()->format('Y-m-d');
                $oferta=$empresa->ofertas->where('estado',1)->first();
                if ($hoy>$oferta->finalizacion) {
                    $oferta->estado=0;
                    $oferta->save();
                    $empresa->en_oferta=0;
                    $empresa->save();
                }
            }
            $cat=Rubro::find($empresa->rubro_id)->categoria_id;
            $rubros=Rubro::where('categoria_id',$cat)->pluck('rubro', 'id');
            $servicios=Servicio::where('empresa_id',$empresa->id)->orderBy('id','desc')->get();
            $galerias=Galeria::where('empresa_id',$empresa->id)->orderBy('id','desc')->get();

            if($request->has('read')) {
                $notification = auth()->user()->notifications()->where('id', $request->read)->first();
                if($notification) {
                    if (!$notification->read_at) {
                        $notification->markAsRead();
                    }
                }
            }
            return view('empresa.empresa.empresa')
                ->with('categorias',$categorias)
                ->with('cat',$cat)
                ->with('rubros',$rubros)
                ->with('servicios',$servicios)
                ->with('galerias',$galerias)
                ->with('empresa',$empresa);
        } else {
            return view('empresa.empresa.registrar')
                ->with('categorias',$categorias)
                ->with('user',$user);
        }

    }

    public function registrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'razon_social' => 'required|string',
            'razon_comercial' => 'required|string',
            'ruc' => 'required|string|max:11',
            'rubro_id' => 'required',
            'perfil' => 'required|file',
            'portada' => 'required|file',
            'facebook' => 'required|string',
            'inicio' => 'required|string',
            'fin' => 'required|string',
            // 'fundacion' => 'required|date',
            'pais' => 'required|string',
            // 'mision' => 'required|string',
            // 'vision' => 'required|string',
            'fijo' => 'required',
            'direccion' => 'required|string',
            'descripcion' => 'required|string',
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/empresa/perfil-empresarial')
            ->withErrors($validator)
            ->withInput();
        }
        $empresa=New Empresa();
        $empresa->user_id=Auth::user()->id;
        $empresa->razon_comercial=$request->razon_comercial;
        $empresa->razon_social=$request->razon_social;
        $empresa->ruc=$request->ruc;
        $empresa->rubro_id=$request->rubro_id;
        $perfil  = Input::file('perfil');
        if (!is_null($perfil)) {
            $name2=str_replace(' ', '-', $perfil->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$perfil->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $perfil->move($path,$name);
            $empresa->perfil='/assets/img/galeria/'.$name;
        }
        $portada  = Input::file('portada');
        if (!is_null($portada)) {
            $name2=str_replace(' ', '-', $portada->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$portada->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $portada->move($path,$name);
            $empresa->portada='/assets/img/galeria/'.$name;
        }
        $empresa->url=$request->url;
        $empresa->facebook=$request->facebook;
        $empresa->twitter=$request->twitter;
        $empresa->instagram=$request->instagram;
        $empresa->youtube=$request->youtube;
        $empresa->google=$request->google;
        $empresa->inicio=$request->inicio;
        $empresa->fin=$request->fin;
        // $empresa->fundacion=$request->fundacion;
        $empresa->pais=$request->pais;
        $empresa->ciudad=$request->ciudad;
        // $empresa->mision=$request->mision;
        // $empresa->vision=$request->vision;
        $empresa->fijo2=$request->fijo2;
        $empresa->fijo=$request->fijo;
        $empresa->direccion=$request->direccion;
        $empresa->descripcion=$request->descripcion;
        $empresa->latitud=$request->latitud;
        $empresa->longetud=$request->longitud;
        $empresa->aprobado=0;
        $empresa->save();
        //envio de mensaje al administrador
        // $user=User::where('tipo',1)->where('id','!=',1)->first();
        // $notificacion=new Notificacion();
        // $notificacion->user_emisor=Auth::user()->id;
        // $notificacion->user_receptor=$user->id;
        // $notificacion->tipo=$user->tipo;
        // $notificacion->fecha=Carbon::now()->format('Y-m-d');
        // $notificacion->mensaje='<a href="/admin/lista-empresa/'.$empresa->id.'/edit">La empresa <string>'.$empresa->razon_social.' </string> envió su información correspondiente para su respectivo evaluación';
        // $notificacion->save();

        $admins=User::where('tipo',1)->where('id','!=',1)->get();
        $user = auth()->user();
        foreach ($admins as $admin) {
            $admin->notify(new EmpresaEnviaInformacion($user, $empresa));
        }

        // \Notification::send($user, new NotifyPostOwner(Empresa::latest('id')->first()));
        toast('La información de su empresa se envió correctamente, el administrador la verificará antes de ser publicada','success','center');
        return redirect('/admin/empresa/perfil-empresarial');
    }

    public function modificar(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'razon_social' => 'required|string',
            'razon_comercial' => 'required|string',
            'ruc' => 'required|string|max:11',
            'rubro_id' => 'required',
            // 'perfil' => 'required|file',
            // 'portada' => 'required|file',
            'facebook' => 'required|string',
            'inicio' => 'required|string',
            'fin' => 'required|string',
            // 'fundacion' => 'required|date',
            'pais' => 'required|string',
            // 'mision' => 'required|string',
            // 'vision' => 'required|string',
            'fijo' => 'required',
            'direccion' => 'required|string',
            'descripcion' => 'required|string',
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/empresa/perfil-empresarial')
            ->withErrors($validator)
            ->withInput();
        }
        $empresa=Empresa::find($id);
        $empresa->razon_comercial=$request->razon_comercial;
        $empresa->razon_social=$request->razon_social;
        $empresa->ruc=$request->ruc;
        $empresa->rubro_id=$request->rubro_id;
        $perfil  = Input::file('perfil');
        if (!is_null($perfil)) {
            $name2=str_replace(' ', '-', $perfil->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$perfil->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $perfil->move($path,$name);
            $empresa->perfil='/assets/img/galeria/'.$name;
        }
        $portada  = Input::file('portada');
        if (!is_null($portada)) {
            $name2=str_replace(' ', '-', $portada->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$portada->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/';
            $portada->move($path,$name);
            $empresa->portada='/assets/img/galeria/'.$name;
        }
        $empresa->url=$request->url;
        $empresa->facebook=$request->facebook;
        $empresa->twitter=$request->twitter;
        $empresa->instagram=$request->instagram;
        $empresa->youtube=$request->youtube;
        $empresa->google=$request->google;
        $empresa->inicio=$request->inicio;
        $empresa->fin=$request->fin;
        // $empresa->fundacion=$request->fundacion;
        $empresa->pais=$request->pais;
        $empresa->ciudad=$request->ciudad;
        // $empresa->mision=$request->mision;
        // $empresa->vision=$request->vision;
        $empresa->fijo2=$request->fijo2;
        $empresa->fijo=$request->fijo;
        $empresa->direccion=$request->direccion;
        $empresa->descripcion=$request->descripcion;
        $empresa->latitud=$request->latitud;
        $empresa->longetud=$request->longitud;
        //verifica si ya termino la oferta
        $c=count($empresa->ofertas);
        if ($request->en_oferta) {
            // $empresa->en_oferta=1;
            if ($c>0) {
                $oferta=Oferta::where('empresa_id',$empresa->id)->where('estado',1)->first();
                // dd($oferta);
                if ($oferta) {
                    $hoy=Carbon::now()->format('Y-m-d');
                    if ($hoy<=$oferta->finalizacion) {
                        $oferta->oferta=$request->oferta;
                        $oferta->valor=$request->valor;
                        $oferta->finalizacion=$request->finalizacion;
                        $oferta->descripcion_=$request->descripcion_;
                        $oferta->save();
                    }
                    else{
                        if ($oferta->finalizacion>$request->finalizacion) {
                            $ofert=new Oferta();
                            $ofert->oferta=$request->oferta;
                            $ofert->empresa_id=$empresa->id;
                            $ofert->valor=$request->valor;
                            $ofert->finalizacion=$request->finalizacion;
                            $ofert->descripcion_=$request->descripcion_;
                            $ofert->save();
                        }
                        else{
                            $oferta->estado=0;
                            $oferta->save();
                            $empresa->en_oferta=0;
                        }
                    }
                }
                else{
                    $ofert=new Oferta();
                    $ofert->oferta=$request->oferta;
                    $ofert->empresa_id=$empresa->id;
                    $ofert->valor=$request->valor;
                    $ofert->finalizacion=$request->finalizacion;
                    $ofert->descripcion_=$request->descripcion_;
                    $ofert->save();
                    $empresa->en_oferta=1;
                }
            }
            else{
                // dd('nuevo');
                $ofert=new Oferta();
                $ofert->oferta=$request->oferta;
                $ofert->empresa_id=$empresa->id;
                $ofert->valor=$request->valor;
                $ofert->finalizacion=$request->finalizacion;
                $ofert->descripcion_=$request->descripcion_;
                $ofert->save();
                $empresa->en_oferta=1;
            }
        }
        else{
            if ($c>0) {
                $oferta=Oferta::where('empresa_id',$empresa->id)->where('estado',1)->first();
                if ($oferta) {
                    $oferta->estado=0;
                    $empresa->en_oferta=0;
                }
            }
        }
        // enviar notificacion al administrador
        if($empresa->aprobado==2){
            $empresa->aprobado=0;
            toast('La información de su empresa se envió correctamente, el administrador la verificará antes de ser publicada','success','center');
            //envio de mensaje al administrador
            // $user=User::where('tipo',1)->where('id','!=',1)->first();
            // $notificacion=new Notificacion();
            // $notificacion->user_emisor=Auth::user()->id;
            // $notificacion->user_receptor=$user->id;
            // $notificacion->tipo=$user->tipo;
            // $notificacion->fecha=Carbon::now()->format('Y-m-d');
            // $notificacion->mensaje='<a href="/admin/lista-empresa/'.$empresa->id.'/edit">La empresa <string>'.$empresa->razon_social.' </string> envió su información correspondiente para su respectivo evaluación';
            // $notificacion->save();
            $admins=User::where('tipo',1)->where('id','!=',1)->get();
            $user = auth()->user();
            foreach ($admins as $admin) {
                $admin->notify(new EmpresaEnviaInformacion($user, $empresa));
            }
        }
        else{
            toast('Su información empresarial se modificó satisfactoriamente','success','center');
        }
        $empresa->save();
        return redirect('/admin/empresa/perfil-empresarial');
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

    public function agregarservicio(Request $request)
    {
        if ($request->ajax()) {
            $user=User::with('empresa')->find(Auth::user()->id);
            $servicio= new Servicio();
            $servicio->servicio=$request->servicio;
            $servicio->empresa_id=$user->empresa->id;
            $servicio->save();
            return $servicio;
        }
    }

    public function eliminarservicio(Request $request,$id)
    {
        if ($request->ajax()) {
            $servicio= Servicio::find($id);
            $servicio->delete();
            return $servicio;
        }
    }

    public function agregargaleria(Request $request)
    {
        if ($request->ajax()) {
            $user=User::with('empresa')->find(Auth::user()->id);
            $galeria= new Galeria();
            $galeria->titulo=$request->titulo;
            $galeria->empresa_id=$user->empresa->id;
            $imagen  = Input::file('imagen');
            if (!is_null($imagen)) {
                $name2=str_replace(' ', '-', $imagen->getClientOriginalName());
                $largo=strlen($name2);
                $extension=$imagen->getClientOriginalExtension();
                $fin=$largo - strlen($extension);
                $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
                $path=public_path().'/assets/img/galeria/';
                $imagen->move($path,$name);
                $galeria->imagen='/assets/img/galeria/'.$name;
            }
            $galeria->save();
            return $galeria;
        }
    }

    public function eliminargaleria(Request $request,$id)
    {
        if ($request->ajax()) {
            $galeria= Galeria::find($id);
            File::delete(public_path().$galeria->imagen);
            $galeria->delete();
            return $galeria;
        }
    }
}
