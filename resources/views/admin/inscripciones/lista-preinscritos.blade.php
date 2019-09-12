@extends('admin.layouts.app')

@section('title')
Verificar inscripciones
@endsection

@section('preinscritos')
active pcoded-trigger
@endsection

@section('por-calificar')
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
                    <a href="{{ url('/admin/lista-inscritos/create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Nueva inscripción</a>
                </div>
            </div>
            <div class="card-block">

                @if (count($preinscritos)>0)

                <div class="table-responsive">
                    <table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Recibo</th>
                                <th>Ciclo</th>
                                <th class="text-center">Monto</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($preinscritos as $preinscrito)

                            <tr>
                                <td>
                                    <div class="d-inline-block">
                                        <h6>Recibo Nro. {{ $preinscrito->anio }}-{{ concatenar($preinscrito->numero) }}</h6>
                                        <span><strong>{{ $preinscrito->usuario->nombres }} {{ $preinscrito->usuario->apellidos }}</strong></span>
                                        <p class="text-muted m-b-0">
                                            {{ Carbon::parse($preinscrito->fecha)->format('d \d\e M, Y') }} (Generado {{ Carbon::parse($preinscrito->created_at)->diffForHumans(null, false, false, 1) }})
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <ol>
                                        @foreach ($preinscrito->detalles as $detalle)
                                            <li>{{ $detalle->ciclo->titulo }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td class="text-center">{{ $preinscrito->moneda }} {{ $preinscrito->subtotal - $preinscrito->descuento }}</td>
                                <td class="text-center">
                                    @switch($preinscrito->estado)
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

                                        @case(5)
                                            <label class="label label-warning">Regalado</label>
                                            @break

                                        @default
                                            <label class="label label-default">No definido</label>
                                    @endswitch
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/admin/ver-recibo/'.$preinscrito->id) }}">
                                        <i class="icofont-ui-file f-20 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Ver recibo"></i>
                                    </a>
                                    @if ($preinscrito->estado==1)
                                    <a href="{{ url('/admin/lista-inscritos/'.$preinscrito->id.'/edit') }}">
                                        <i class="icofont-edit f-20 m-r-15 text-c-green" data-toggle="tooltip" data-placement="left" data-original-title="Editar inscripción"></i>
                                    </a>
                                    @endif
                                    <a href="{{ url('/admin/calificar-inscrito/'.$preinscrito->id) }}">
                                        <i class="icofont-star f-20 text-c-yellow" data-toggle="tooltip" data-placement="left" data-original-title="Calificar"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

