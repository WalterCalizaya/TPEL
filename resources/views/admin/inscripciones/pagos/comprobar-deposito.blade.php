@extends('admin.layouts.app')

@section('title')
Comprobar depósito
@endsection

@section('voucher')
active
@endsection

@section('content')
@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');

function concatenar($numero){
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
@endphp

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
            </div>
            <div class="card-block">

                <form action="{{ url('/admin/comprobar-deposito/'.$preinscripcion->id) }}" method="post" name="f">
                    @csrf
                    @method('POST')

                    <div class="col-sm-10 offset-sm-1">

                        <h6>Datos del usuario</h6>
                        <dl class="dl-horizontal row mt-2">
                            <dt class="col-sm-4">Nombres y apellidos</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->usuario->nombres }} {{ $preinscripcion->usuario->apellidos }}</dd>

                            <dt class="col-sm-4">E-mail</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->usuario->email }}<dd>

                            <dt class="col-sm-4">Celular</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->usuario->telefono }} <a class="label label-info" href="tel:{{ $preinscripcion->usuario->telefono }}">Click para llamar</a><dd>

                            <dt class="col-sm-4">Vive en:</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->usuario->distrito->nombre }} / {{ $preinscripcion->usuario->distrito->provincia->nombre }} / {{ $preinscripcion->usuario->distrito->provincia->region->nombre }}</dd>
                        </dl>

                        <h6>Datos de la preinscripción</h6>
                        <dl class="dl-horizontal row mt-2">

                            <dt class="col-sm-4">Cotización:</dt>
                            <dd class="col-sm-8">
                                Nro. {{ $preinscripcion->anio }}-{{ concatenar($preinscripcion->numero) }}
                                @switch($preinscripcion->estado)
                                    @case(0)
                                        <span class="label label-danger">Cotización no válida</span>
                                        @break

                                    @case(1)
                                        <span class="label label-danger">No pagado</span>
                                        @break

                                    @case(2)
                                        <span class="label label-warning">Voucher enviado</span>
                                        @break

                                    @case(3)
                                        <span class="label label-success">Pago confirmado</span>
                                        @break

                                    @case(4)
                                        <span class="label label-danger">Pago rechazado</span>
                                        @break

                                    @default
                                        <span class="label label-default">Estado no definido</span>
                                @endswitch
                            </dd>

                            <dt class="col-sm-4">Fecha de preinscripción:</dt>
                            <dd class="col-sm-8">{{ Carbon::parse($preinscripcion->fecha)->format('d \d\e M, Y') }} ({{ Carbon::parse($preinscripcion->created_at)->diffForHumans(null, false, false, 1) }})</dd>

                            <dt class="col-sm-4">Preinscrito en:</dt>
                            <dd class="col-sm-8">
                                <ol>
                                    @foreach ($preinscripcion->detalles as $detalle)
                                        <li>
                                            <strong style="font-weight: 700 !important;">{{ $detalle->evento->titulo }}</strong>
                                            <br />
                                            {{ Carbon::parse($detalle->evento->inicio)->format('d \d\e M, Y') }} - {{ $detalle->moneda }} {{ $detalle->precio_unitario }}
                                        </li>
                                    @endforeach
                                </ol>
                            </dd>

                            <dt class="col-sm-4">Subtotal:</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->moneda }} {{ $preinscripcion->subtotal }}</dd>

                            <dt class="col-sm-4">Descuento:</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->moneda }} {{ $preinscripcion->descuento }}</dd>

                            <dt class="col-sm-4">Total:</dt>
                            <dd class="col-sm-8"><span class="label-success" style="padding: 4px 10px; border-radius: 5px;">{{ $preinscripcion->moneda }} {{ $preinscripcion->subtotal - $preinscripcion->descuento }}</span></dd>
                        </dl>

                        @if ($preinscripcion->evaluacion)
                        <h6>Datos de la calificación</h6>
                        <dl class="dl-horizontal row mt-2">
                            <dt class="col-sm-4">Calificación</dt>
                            <dd class="col-sm-8">
                                @switch($preinscripcion->evaluacion)
                                        @case(1)
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            @break
                                        @case(2)
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            @break
                                        @case(3)
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            @break
                                        @case(4)
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24"></i>
                                            @break
                                        @case(5)
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            <i class="icofont-star f-24 text-c-yellow"></i>
                                            @break
                                        @default
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                            <i class="icofont-star f-24"></i>
                                    @endswitch
                            </dd>

                            @if ($preinscripcion->comentario_admin)
                            <dt class="col-sm-4">Comentario</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->comentario_admin }}<dd>
                            @endif
                        </dl>
                        @endif

                        <h6>Datos del depósito</h6>
                        <dl class="dl-horizontal row mt-2">
                            <dt class="col-sm-4">Banco</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->mediopago->banco }} ({{ $preinscripcion->mediopago->cuenta }})</dd>

                            <dt class="col-sm-4">Voucher</dt>
                            <dd class="col-sm-8">
                                <a href="{{ $preinscripcion->voucher }}" target="_blank">Ver tamaño real</a>
                                <br />
                                <img src="{{ $preinscripcion->voucher }}" class="img-fluid" />
                            <dd>

                            @if ($preinscripcion->observaciones_voucher)
                            <dt class="col-sm-4">Observaciones</dt>
                            <dd class="col-sm-8">{{ $preinscripcion->observaciones_voucher }}<dd>
                            @endif
                        </dl>
                    </div>

                    <div class="form-group col-sm-10 offset-sm-1 {{ $errors->has('verificacion') ? ' has-danger' : '' }}">
                        <label class="col-md-2 col-form-label" for="verificacion">
                            Verificación
                        </label>
                        <div class="col-md-10 form-radio">
                            <div class="radio radio-inline">
                                <label>
                                <input type="radio" name="verificacion" id="verificacion" value="3">
                                <i class="helper"></i>Pago válido, matricular al alumno
                                </label>
                            </div>
                            <div class="radio radio-inline">
                                <label>
                                <input type="radio" name="verificacion" id="verificacion" value="4">
                                <i class="helper"></i>Pago rechazado, alumno no matriculado
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('verificacion'))
                        <div class="col-form-label">
                            {{ $errors->first('verificacion') }}
                        </div>
                        @endif
                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-5">
                                    <i class="icofont icofont-save"></i> Guardar
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-5">
                                    <i class="icofont icofont-refresh"></i> Limpiar
                                </button>
                            </div>
                        </div>
                    </div><!-- /.col-sm-10 offset-sm-1 -->

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
