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
use App\Models\Inscripcion;
use App\Models\DetalleInscripcion;
use App\Models\Evento;
use App\Models\Banco;
use App\Models\Configuracion;

class InscripcionesController extends Controller
{
    public function ultima_cotizacion()
    {
        $anio=Carbon::now()->format('Y');
        $ultimo=Inscripcion::where('anio',$anio)->orderBy('numero','desc')->first();
        if ($ultimo) {
            $numero=$ultimo->numero+1;
        }
        else{
            $numero=1;
        }
        return $numero;
    }

    public function concatenar($numero)
    {
        $n=strlen($numero);
        if ($n==1) {
            $a='0000'.$numero;
        }
        else if ($n==2) {
            $a='000'.$numero;
        }
        else if ($n==3) {
            $a='00'.$numero;
        }
        else if ($n==4) {
            $a='0'.$numero;
        }
        else{
            $a=$numero;
        }
        return $a;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preinscritos=Inscripcion::where('evaluado_por','=',1)->with('detalles')->orderBy('anio','desc')->orderBy('numero','desc')->get();
        $configuracion=Configuracion::find(1);
        return view('admin.inscripciones.lista-preinscritos')
            ->with('configuracion',$configuracion)
            ->with('preinscritos',$preinscritos);
    }

    public function verCotizacion($id)
    {
        $configuracion=Configuracion::find(1);
        $cotizacion=Inscripcion::where('id',$id)->with('detalles')->first();

        return view('admin.inscripciones.ver-cotizacion')
            ->with('configuracion',$configuracion)
            ->with('cotizacion',$cotizacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('tipo','!=',1)->where('activo',1)->orderBy('id','desc')->get()->pluck('name_and_surname','id');
        $configuracion=Configuracion::find(1);
        $talleres=Evento::where('estado',1)->where('vigencia','!=',0)->where('tipo_evento',2)->orderBy('inicio','asc')->get();
        $certificaciones=Evento::where('estado',1)->where('vigencia','!=',0)->where('tipo_evento',1)->orderBy('inicio','asc')->get();
        return view('admin.inscripciones.crear')
            ->with('configuracion',$configuracion)
            ->with('users',$users)
            ->with('certificaciones',$certificaciones)
            ->with('talleres',$talleres);
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
            'eventos' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','Debes seleccionar al menos un evento')->autoClose(5000)->showCloseButton();
            return redirect('/admin/lista-preinscritos/create')
                ->withErrors($validator)
                ->withInput();
        }
        $actual_cotizacion=$this->ultima_cotizacion();

        $inscripcion = New Inscripcion();
        $inscripcion->anio=Carbon::now()->format('Y');
        $inscripcion->numero=$actual_cotizacion;
        $inscripcion->usuario_id=$request->usuario;
        if ($request->estado) {
            $inscripcion->estado=$request->estado;
        }
        $inscripcion->fecha=Carbon::now()->format('Y-m-d H:i:s');
        $inscripcion->moneda="S/.";
        $inscripcion->notas_cotizacion="<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
    Costo por 1 taller: S/. 250 + IGV<br>
    Costo por 2 talleres: S/. 450 + IGV<br>
    Costo por 3 talleres: S/. 650 + IGV<br>
    Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
    Costo MTCNA: S/. 990 + IGV
</p>";
        //$inscripcion->voucher=
        $inscripcion->banco=1;
        //$inscripcion->observaciones_voucher=
        $inscripcion->evaluado_por=1;
        $inscripcion->save();

        //--
        //Seleccion del registro de la cotización para agregar el detalle
        $nro_inscripcion=Inscripcion::where('anio',Carbon::now()->format('Y'))->where('numero',$actual_cotizacion)->first();
        //Variable que acumula el precio total sin descuentos
        $acumulado=0;

        $cantidad_talleres=0;
        $hoy=Carbon::now()->format('Y-m-d');

        foreach ($request->eventos as $key => $registro) {

            $info_evento=Evento::where('id',$registro)->first();

            $detalle = New DetalleInscripcion();
            $detalle->inscripcion_id=$nro_inscripcion->id;
            $detalle->evento_id=$registro;
            $detalle->precio_unitario=$info_evento->precio;
            $detalle->save();

            //tiempo limite de 1 mes para que el descuento se efectue
            $tiempo_limite=Carbon::parse($info_evento->inicio)->subMonth(1)->format('Y-m-d');

            $acumulado=$acumulado+$info_evento->precio;

            //tipo evento taller y fecha vencimiento despues de hoy
            if ($info_evento->tipo_evento==2 && $tiempo_limite>=$hoy ) {
                $cantidad_talleres=$cantidad_talleres+1;
            }
        }

        if ($cantidad_talleres==1) {
            $descuento=0;
        }
        else if ($cantidad_talleres==2) {
            $descuento=50;
        }
        else if ($cantidad_talleres==3) {
            $descuento=100;
        }
        else if ($cantidad_talleres>=4) {
            $descuento=250;
        }
        else {
            $descuento=0;
        }

        $inscripcion_edit=Inscripcion::find($nro_inscripcion->id);
        $inscripcion_edit->subtotal=$acumulado;
        $inscripcion_edit->descuento=$descuento;
        $inscripcion_edit->save();

        alert()->success('¡Excelente!','El registro fue exitoso')->autoClose(10000)->showCloseButton();
        return redirect('/admin/lista-preinscritos');
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
        $preinscripcion=Inscripcion::where('id',$id)->with('detalles')->first();
        if ($preinscripcion) {
            $users=User::where('tipo','!=',1)->where('activo',1)->orderBy('id','desc')->get()->pluck('name_and_surname','id');
            $configuracion=Configuracion::find(1);

            $talleres=Evento::where('estado',1)->where('inicio','>=',$preinscripcion->fecha)->where('tipo_evento',2)->orderBy('inicio','asc')->get();
            $certificaciones=Evento::where('estado',1)->where('inicio','>=',$preinscripcion->fecha)->where('tipo_evento',1)->orderBy('inicio','asc')->get();

            return view('admin.inscripciones.editar')
                ->with('configuracion',$configuracion)
                ->with('preinscripcion',$preinscripcion)
                ->with('users',$users)
                ->with('talleres',$talleres)
                ->with('certificaciones',$certificaciones);
        }
        else {
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
        $validator = Validator::make($request->all(), [
            'eventos' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','Debes seleccionar al menos un evento')->autoClose(5000)->showCloseButton();
            return redirect('/admin/lista-preinscritos/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $preinscripcion=Inscripcion::find($id);
        $preinscripcion->usuario_id=$request->usuario;
        $preinscripcion->save();

        $detalleInscripcion=DetalleInscripcion::where('inscripcion_id',$preinscripcion->id)->get();

        foreach ($detalleInscripcion as $key => $eventoInscrito) {
            $eventoInscrito->delete();
        }

        $cantidad_talleres=0;
        $hoy=Carbon::now()->format('Y-m-d');
        //Variable que acumula el precio total sin descuentos
        $acumulado=0;

        foreach ($request->eventos as $key => $registro) {

            $info_evento=Evento::where('id',$registro)->first();

            $detalle = New DetalleInscripcion();
            $detalle->inscripcion_id=$preinscripcion->id;
            $detalle->evento_id=$registro;
            $detalle->precio_unitario=$info_evento->precio;
            $detalle->save();

            //tiempo limite de 1 mes para que el descuento se efectue
            $tiempo_limite=Carbon::parse($info_evento->inicio)->subMonth(1)->format('Y-m-d');

            $acumulado=$acumulado+$info_evento->precio;

            //tipo evento taller y fecha vencimiento despues de hoy
            if ($info_evento->tipo_evento==2 && $tiempo_limite>=$hoy ) {
                $cantidad_talleres=$cantidad_talleres+1;
            }
        }

        if ($cantidad_talleres==1) {
            $descuento=0;
        }
        else if ($cantidad_talleres==2) {
            $descuento=50;
        }
        else if ($cantidad_talleres==3) {
            $descuento=100;
        }
        else if ($cantidad_talleres>=4) {
            $descuento=250;
        }
        else {
            $descuento=0;
        }

        $inscripcion_edit=Inscripcion::find($preinscripcion->id);
        $inscripcion_edit->subtotal=$acumulado;
        $inscripcion_edit->descuento=$descuento;
        $inscripcion_edit->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-preinscritos');
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

    public function formCalificacion($id)
    {
        $preinscripcion=Inscripcion::where('id',$id)->with('detalles')->first();
        if ($preinscripcion) {
            return view('admin.inscripciones.calificar-preinscripcion')
                ->with('preinscripcion',$preinscripcion);
        }
        else {
            return redirect('/admin/sin-permiso');
        }
    }

    public function calificarPreinscrito(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'observaciones' => 'string',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','El campo "Observaciones" debe contener sólo texto')->autoClose(5000)->showCloseButton();
            return redirect('/admin/calificar-preinscrito/'.$id)
                ->withErrors($validator)
                ->withInput();
        }

        $preinscripcion=Inscripcion::find($id);
        $preinscripcion->descuento=$request->descuento;
        if ($request->rating != 0) {
            $preinscripcion->evaluacion=$request->rating;
        }
        $preinscripcion->evaluado_por=Auth::user()->id;
        $preinscripcion->comentario_admin=$request->observaciones;
        $preinscripcion->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/lista-preinscritos');
    }

    public function historialPreinscritos()
    {
        $preinscritos=Inscripcion::where('evaluado_por','!=',1)->with('detalles')->orderBy('anio','desc')->orderBy('numero','desc')->get();
        $configuracion=Configuracion::find(1);
        return view('admin.inscripciones.historial-preinscritos')
            ->with('configuracion',$configuracion)
            ->with('preinscritos',$preinscritos);
    }

    public function listaVoucher()
    {
        $preinscritos=Inscripcion::where('estado',2)->with('detalles')->orderBy('anio','desc')->orderBy('numero','desc')->get();
        $configuracion=Configuracion::find(1);
        return view('admin.inscripciones.pagos.index')
            ->with('configuracion',$configuracion)
            ->with('preinscritos',$preinscritos);
    }

    public function formComprobarDeposito($id)
    {
        $preinscripcion=Inscripcion::where('id',$id)->with('detalles')->first();
        if ($preinscripcion->estado==2) {
            return view('admin.inscripciones.pagos.comprobar-deposito')
                ->with('preinscripcion',$preinscripcion);
        }
        else {
            return redirect('/admin/sin-permiso');
        }
    }

    public function procesarDeposito(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'verificacion' => 'required|integer',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','Debe elegir una opción')->autoClose(5000)->showCloseButton();
            return redirect('/admin/comprobar-deposito/'.$id)
                ->withErrors($validator)
                ->withInput();
        }

        $inscripcion=Inscripcion::find($id);
        $inscripcion->estado=$request->verificacion;
        $inscripcion->save();

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/verificar-pagos');
    }

    public function listaMatriculados(request $request)
    {
        $configuracion=Configuracion::find(1);
        $eventos=Evento::where('estado',1)->orderBy('id','desc')->select('id','titulo')->get();
        return view('admin.inscripciones.matriculados.lista')
            ->with('configuracion',$configuracion)
            ->with('eventos',$eventos);
    }
}
