<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\Models\TurismoCategoria;
use App\Models\TurismoSubCategoria;
use App\Models\Turismo;
use App\Models\Archivo;
use App\Models\Youtube;
use App\Models\Turismo_Empresa;
use App\Models\Categoria;
use App\Models\Empresa;

class PublicacionesTurismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turismos=Turismo::with(['youtubes','turismo_empresas','subcategoria'])->orderBy('id','desc')->get();
        return view('admin.turismo.listapublicaciones')->with('turismos',$turismos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=TurismoCategoria::where('estado',1)->pluck('categoria','id');
        $archivos=Archivo::where('tipo',0)->orderBy('id','desc')->get();
        return view('admin.turismo.crearpublicacion')
            ->with('categorias',$categorias)
            ->with('archivos',$archivos);
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
            'titulo' => 'required',
            'turismo_subcategoria_id' => 'required',
            'contenido' => 'required|string',
            'portada' => 'required|file|mimes:png,jpg,jpeg|max:5120',
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/publicaciones-turismo/create')
            ->withErrors($validator)
            ->withInput();
        }
        $turismo=new Turismo();
        $turismo->titulo=$request->titulo;
        $turismo->turismo_subcategoria_id=$request->turismo_subcategoria_id;
        $turismo->publicado=$request->publicado;
        $remplazar=["<p>","&nbsp;","&#39;","&quot;","<img"];
        $contenido=['<p class="disclosure" align="justify">',' ',"\'",'"','<img class="img-responsive"'];
        $descripcion=str_replace($remplazar,$contenido,$request->contenido);
        $turismo->contenido=$descripcion;
        $portada  = Input::file('portada');
        if (!is_null($portada)) {
            $name2=str_replace(' ', '-', $portada->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$portada->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/turismo/';
            $portada->move($path,$name);
            $turismo->portada='/assets/img/galeria/turismo/'.$name;
        }
        $turismo->save();
        toast('Publicación de la seccion turistica fue creada satisfactoriamente','success','center');
        return redirect('/admin/publicaciones-turismo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turismo=Turismo::find($id);
        if ($turismo) {
            $subcategorias=TurismoSubCategoria::where('turismo_categoria_id',$turismo->subcategoria->categoria->id)->pluck('subcategoria','id');
            $categorias=TurismoCategoria::where('estado',1)->pluck('categoria','id');
            $archivos=Archivo::where('tipo',0)->orderBy('id','desc')->get();
            $youtubes=Youtube::where('turismo_id',$id)->orderBy('id','desc')->get();
            $empresas=Turismo_Empresa::where('turismo_id',$id)->orderBy('id','desc')->get();
            $categories=Categoria::orderBy('id','desc')->pluck('categoria','id');

            $youtubes->map(function($youtube){
                $url = "https://www.youtube.com/watch?v=".$youtube->youtube;
                $link = "http://www.youtube.com/oembed?url=". $url ."&format=json";
                $recurso = curl_init($link);
                curl_setopt($recurso, CURLOPT_RETURNTRANSFER, 1);
                $return = curl_exec($recurso);
                curl_close($recurso);
                $youtube->titulo=json_decode($return, true)['title'];
            });
            // dd($youtubes);
            return view('admin.turismo.modificarpublicacion')
                ->with('categorias',$categorias)
                ->with('categories',$categories)
                ->with('archivos',$archivos)
                ->with('subcategorias',$subcategorias)
                ->with('turismo',$turismo)
                ->with('youtubes',$youtubes)
                ->with('empresas',$empresas);
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
        $portada  = Input::file('portada');
        if (!is_null($portada)) $a='required|file|mimes:png,jpg,jpeg|max:5120';
        else $a='';
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'turismo_subcategoria_id' => 'required',
            'contenido' => 'required|string',
            'portada' => $a,
        ]);
        if ($validator->fails()) {
            toast('Campos faltantes o incorrectos','error','center');
            return redirect('/admin/publicaciones-turismo/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        $turismo=Turismo::find($id);
        $turismo->titulo=$request->titulo;
        $turismo->turismo_subcategoria_id=$request->turismo_subcategoria_id;
        $turismo->publicado=$request->publicado;
        $remplazar=["<p>","&nbsp;","&#39;","&quot;","<img"];
        $contenido=['<p class="disclosure" align="justify">',' ',"\'",'"','<img class="img-responsive"'];
        $descripcion=str_replace($remplazar,$contenido,$request->contenido);
        $turismo->contenido=$descripcion;
        if (!is_null($portada)) {
            $name2=str_replace(' ', '-', $portada->getClientOriginalName());
            $largo=strlen($name2);
            $extension=$portada->getClientOriginalExtension();
            $fin=$largo - strlen($extension);
            $name=substr($name2,0,$fin-1).'_'.'file_'.time().'.'.$extension;
            $path=public_path().'/assets/img/galeria/turismo/';
            $portada->move($path,$name);
            $turismo->portada='/assets/img/galeria/turismo/'.$name;
        }
        $turismo->save();
        toast('Publicación de la seccion turistica fue modificada satisfactoriamente','success','center');
        return redirect('/admin/publicaciones-turismo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $empresas=Turismo_Empresa::where('turismo_id',$id)->get();
        $links=Youtube::where('turismo_id',$id)->get();
        if (count($empresas)+count($links)>0) {
            toast('La publicación no se puede eliminar porque tiene videos o empresas asociados','warning','center');
        }
        else{
            $turismo=Turismo::find($id);
            File::delete(public_path().$turismo->portada);
            $turismo->delete();
            toast('Publicación eliminada satisfactoriamente','success','center');
        }
        return redirect('/admin/publicaciones-turismo');
    }

    public function agregarvideo(Request $request, $id)
    {
        if ($request->ajax()) {
            $youtube=new Youtube();
            $youtube->youtube=$request->youtube;
            $youtube->turismo_id=$id;
            $youtube->save();

            $url = "https://www.youtube.com/watch?v=".$youtube->youtube;
            $link = "http://www.youtube.com/oembed?url=". $url ."&format=json";
            $recurso = curl_init($link);
            curl_setopt($recurso, CURLOPT_RETURNTRANSFER, 1);
            $return = curl_exec($recurso);
            curl_close($recurso);
            $youtube->titulo=json_decode($return, true)['title'];

            return $youtube;
        }
    }

    public function eliminarvideo(Request $request, $id)
    {
        if ($request->ajax()) {
            $youtube=Youtube::find($id);
            $youtube->delete();
            return $youtube;
        }
    }

    public function agregarempresa(Request $request, $id)
    {
        if ($request->ajax()) {
            $turismo=new Turismo_Empresa();
            $turismo->turismo_id=$id;
            $turismo->empresa_id=$request->empresa_id;
            $turismo->save();
            $empresa=Empresa::with('rubro')->find($turismo->empresa_id);
            $empresa->turismo=$turismo->id;
            return $empresa;
        }
    }

    public function eliminarempresaturismo(Request $request, $id)
    {
        if ($request->ajax()) {
            $turismo=Turismo_Empresa::find($id);
            $turismo->delete();
            return $turismo;
        }
    }
}
