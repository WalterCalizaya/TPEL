@extends('admin.layouts.app')

@section('title')
Lista de matriculados
@endsection

@section('matriculados')
active
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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

                <form role="form" id="form-reporte">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <label for="evento_id" class="col-md-2 col-form-label">Evento</label>
                            <div class="col-md-8">
                                <select name="evento_id" id="evento_id" class="form-control form-control-round fill select2">
                                    @foreach ($eventos as $evento)
                                    <option value="{{ $evento->id }}">{{ $evento->titulo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button id="button-submit" class="btn btn-primary btn-sm">
                                    <i style="color:white" class="glyphicon glyphicon-check"></i>
                                    Generar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <table id="tableReporte" class="table table-bordered table-hover dataTable no-footer">
                    <thead>
                        <tr>
                            <th>Nombres y apellidos</th>
                            <th>E-mail</th>
                            <th>Teléfono</th>
                            <th>Vive en</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>

                {{-- @if (count($preinscritos)>0)

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
                @endif --}}

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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

    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection

