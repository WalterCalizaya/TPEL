@extends('admin.layouts.app')

@section('title')
Calificar preinscripción:
@endsection

@section('preinscritos')
active
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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

                <form action="{{ url('/admin/calificar-preinscrito/'.$preinscripcion->id) }}" method="post" name="f">
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
                            <dd class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text">{{ $preinscripcion->moneda }}</label>
                                    </span>
                                    <input onchange="calcular()" type="text" class="form-control" id="subtotal" name="subtotal" value="{{ $preinscripcion->subtotal }}" readonly>
                                    <span class="input-group-append">
                                        <label class="input-group-text">.00</label>
                                    </span>
                                </div>
                            </dd>

                            <dt class="col-sm-4">Descuento:</dt>
                            <dd class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text">{{ $preinscripcion->moneda }}</label>
                                    </span>
                                    <input onchange="calcular()" type="text" class="form-control" id="descuento" name="descuento" value="{{ $preinscripcion->descuento }}">
                                    <span class="input-group-append">
                                        <label class="input-group-text">.00</label>
                                    </span>
                                </div>
                            </dd>

                            <dt class="col-sm-4">Total:</dt>
                            <dd class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text">{{ $preinscripcion->moneda }}</label>
                                    </span>
                                    <input type="text" class="form-control" id="total" name="total" value="{{ $preinscripcion->subtotal-$preinscripcion->descuento }}" readonly>
                                    <span class="input-group-append">
                                        <label class="input-group-text">.00</label>
                                    </span>
                                </div>
                            </dd>
                        </dl>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="calificacion">
                                <strong style="font-weight: 700">Calificación</strong>
                            </label>
                            <div class="col-md-8">
                                <div class="rateYo"></div>
                                <input type="hidden" name="rating" id="rating">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class=" col-md-4 col-form-label" for="observaciones">
                                <strong style="font-weight: 700">Observaciones</strong>
                            </label>
                            <div class="col-md-8">
                                <textarea name="observaciones" id="observaciones" class="form-control" cols="30" rows="6">{{ $preinscripcion->comentario_admin }}</textarea>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-5">
                                    <i class="icofont icofont-save"></i> Calificar
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

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();

        $(".rateYo").rateYo({
            maxValue: 5,
            fullStar: true,
            normalFill: "#ccc",
            starWidth: "40px",
            spacing: "3px",
            rating: {{ $preinscripcion->evaluacion }},
            onSet: function (rating, rateYoInstance) {
                document.f.rating.value=rating;
            },
        });

    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });

    function calcular() {
      try {
        var a = parseInt(document.f.subtotal.value),
        b = parseInt(document.f.descuento.value);

        if (a-b<=0) {
            document.f.total.value = 0;
        }
        else {
            document.f.total.value = a - b;
        }
    } catch (e) {
    }
}
</script>
@endsection
