@extends('usuario.layouts.app')

@section('title')
Mis matrículas
@endsection

@section('eventos-asistidos')
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

                @if (count($matriculas)>0)
                <div class="table-responsive">
                    <table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pagado en</th>
                                <th>Ciclo</th>
                                <th class="text-center">Fecha de Inicio</th>
                                {{-- <th class="text-center">Certificado</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matriculas as $matricula)
                                @foreach ($matricula->detalles as $curso)
                                    <tr>
                                        <td>
                                            Recibo. {{ $matricula->anio }}-{{ concatenar($matricula->numero) }}
                                            <a href="{{ url('/admin/usuario/ver-recibo/'.$matricula->id) }}">
                                                <i class="icofont-ui-file f-15 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Ver recibo"></i>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $curso->ciclo->titulo }} {{-- <a href="{{ $link }}"><i class="icon feather icon-link-2 text-c-blue f-w-600 f-16 m-r-15" data-toggle="tooltip" data-placement="left" data-original-title="Ver en Frontpage"></i></a> --}}
                                        </td>
                                        <td class="text-center">
                                            <i class="feather icon-calendar text-c-blue m-r-5"></i>
                                            {{ Carbon::parse($curso->ciclo->inicio)->format('d \d\e M') }} ({{ $curso->ciclo->duracion }})
                                        </td>
                                        {{-- <td class="text-center">
                                            <a href="#">
                                                <i class="icofont-ui-file f-20 m-r-15 text-c-green" data-toggle="tooltip" data-placement="left" data-original-title="Ver certificado digital"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <div class="alert alert-danger background-danger">
                        Todavía no estás matriculado en ningún ciclo 😟
                    </div>
                    <p>
                        Te invitamos a inscribirte en alguno de nuestros <a href="{{ url('/admin/usuario/inscripcion') }}">ciclos disponibles</a>.
                    </p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

