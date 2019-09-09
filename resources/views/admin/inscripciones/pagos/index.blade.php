@extends('admin.layouts.app')

@section('title')
Verificar pagos
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

                @if (count($preinscritos)>0)

                <div class="table-responsive">
                    <table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Cotización</th>
                                <th>Comentario</th>
                                <th class="text-center">Monto</th>
                                <th class="text-center">Banco</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($preinscritos as $preinscrito)

                            <tr>
                                <td>
                                    <div class="d-inline-block">
                                        <h6>Nro. {{ $preinscrito->anio }}-{{ concatenar($preinscrito->numero) }}</h6>
                                        <span><strong>{{ $preinscrito->usuario->nombres }} {{ $preinscrito->usuario->apellidos }}</strong></span>
                                        <ol>
                                            @foreach ($preinscrito->detalles as $detalle)
                                                <li>{{ $detalle->evento->titulo }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </td>
                                <td>
                                    @switch($preinscrito->evaluacion)
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
                                    <br />
                                    {{ $preinscrito->comentario_admin }}
                                </td>
                                <td class="text-center">{{ $preinscrito->moneda }} {{ $preinscrito->subtotal - $preinscrito->descuento }}</td>
                                <td class="text-center">
                                    {{ $preinscrito->mediopago->banco }}
                                </td>
                                <td class="text-center">
                                    <a target="_blank" href="{{ url('/admin/ver-cotizacion/'.$preinscrito->id) }}">
                                        <i class="icofont-ui-file f-20 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Ver cotización"></i>
                                    </a>
                                    <a href="{{ url('/admin/comprobar-deposito/'.$preinscrito->id) }}">
                                        <i class="icofont-money f-20 text-c-green" data-toggle="tooltip" data-placement="left" data-original-title="Verificar depósito"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h4>No hay ningún pago pendiente de revisión...</h4>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#tacnatelTable').DataTable({
            // "paging":    false,
            //"info":      false,
            // "searching": false,
            "lengthMenu": [[50, 100, -1], [50, 100, "Todos"]],
            "language": {
                "lengthMenu": "Mostrar  _MENU_  registros por página",
                "zeroRecords": "Ningún registro encontrado",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin registros",
                "infoFiltered": "(búsqueda realizada en _MAX_  registros)",
                "search": "Buscar: ",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }
            },
            "order":[]
        });
    });
</script>
@endsection

