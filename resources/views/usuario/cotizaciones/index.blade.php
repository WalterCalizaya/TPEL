@extends('usuario.layouts.app')

@section('title')
Mis recibos
@endsection

@section('cotizaciones')
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
                <div class="card-header-right">
                    <a href="{{ url('/admin/usuario/inscripcion') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Nuevo recibo</a>
                </div>
            </div>
            <div class="card-block">

                @if (count($recibos)>0)

                <div class="table-responsive">
                    <table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Cotización</th>
                                <th>Ciclos</th>
                                <th class="text-center">Monto</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recibos as $recibo)

                            <tr>
                                <td>
                                    <div class="d-inline-block">
                                        <h6>Recibo Nro. {{ $recibo->anio }}-{{ concatenar($recibo->numero) }}</h6>
                                        <p class="text-muted m-b-0">
                                            {{ Carbon::parse($recibo->fecha)->format('d \d\e M, Y') }} (Generado {{ Carbon::parse($recibo->created_at)->diffForHumans(null, false, false, 1) }})
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <ol>
                                        @foreach ($recibo->detalles as $detalle)
                                            <li>{{ $detalle->ciclo->titulo }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td class="text-center">{{ $recibo->moneda }} {{ $recibo->subtotal - $recibo->descuento }}</td>
                                <td class="text-center">
                                    @switch($recibo->estado)
                                        @case(0)
                                            <label class="label label-danger">No válido</label>
                                            @break

                                        @case(1)
                                            <label class="label label-danger">No pagado</label>
                                            @break

                                        @case(2)
                                            <label class="label label-warning">Pago en revisión</label>
                                            @break

                                        @case(3)
                                            <label class="label label-success">Pagado</label>
                                            @break

                                        @case(4)
                                            <label class="label label-warning">Rechazado</label>
                                            @break

                                        @default
                                            <label class="label label-default">No definido</label>
                                    @endswitch
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/admin/usuario/ver-recibo/'.$recibo->id) }}">
                                        <i class="icofont-ui-file f-20 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Ver recibo"></i>
                                    </a>
                                    @if ($recibo->estado==1)
                                    <a href="{{ url('/admin/usuario/enviar-voucher') }}">
                                        <i class="icofont-money f-20 text-c-green" data-toggle="tooltip" data-placement="left" data-original-title="Enviar voucher"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <div class="alert alert-danger background-danger">
                        Todavía no estás matriculado en ningún ciclo 😟
                    </div>
                    <p>
                        Te invitamos a participar en alguno de nuestros <a href="{{ url('/admin/usuario/inscripcion') }}">ciclos</a>.
                    </p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

