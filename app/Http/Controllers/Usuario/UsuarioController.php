<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
use Carbon\Carbon;

use App\User;
use App\Models\Evento;
use App\Models\Inscripcion;
use App\Models\DetalleInscripcion;


class UsuarioController extends Controller
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
        //Eventos a desarrollarse en la region de cada usuario
        $ciudades=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
        $dias=Carbon::now()->addDay(15);
        $proximos=Evento::where('estado',1)->where('vigencia',2)->where('inicio','<=',$dias)->orderBy('inicio','asc')->get();
        return view('usuario.dashboard.index')
            ->with('ciudades',$ciudades)
            ->with('proximos',$proximos)
            ->with('user',Auth::user());
    }

    public function proximosEventos()
    {
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->get();
        return view('usuario.proximos-eventos.index')
            ->with('proximos',$proximos)
            ->with('user',Auth::user());
    }

    public function formPreinscripcion()
    {
        $talleres=Evento::where('estado',1)->where('vigencia','!=',0)->where('tipo_evento',2)->orderBy('inicio','asc')->get();
        $certificaciones=Evento::where('estado',1)->where('vigencia','!=',0)->where('tipo_evento',1)->orderBy('inicio','asc')->get();
        return view('usuario.preinscripcion.index')
            ->with('certificaciones',$certificaciones)
            ->with('talleres',$talleres)
            ->with('user',Auth::user());
    }

    public function realizarPreinscripcion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'eventos' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('¡Error!','Debes seleccionar al menos un evento')->autoClose(5000)->showCloseButton();
            return redirect('/admin/usuario/pre-inscripcion')
                ->withErrors($validator)
                ->withInput();
        }
        $actual_cotizacion=$this->ultima_cotizacion();

        $inscripcion = New Inscripcion();
        $inscripcion->anio=Carbon::now()->format('Y');
        $inscripcion->numero=$actual_cotizacion;
        $inscripcion->usuario_id=Auth::user()->id;
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

        alert()->success('¡Excelente!','Tu registro fue exitoso, recuerda realizar el depósito para que tu inscripción sea válida')->autoClose(10000)->showCloseButton();
        return redirect('/admin/usuario/cotizaciones');
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
