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
                                <th>Evento</th>
                                <th class="text-center">Lugar</th>
                                <th class="text-center">Fecha</th>
                                {{-- <th class="text-center">Certificado</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matriculas as $matricula)
                                @foreach ($matricula->detalles as $curso)

                                    @php
                                    switch ($curso->evento->tipo_evento) {
                                        case '1':
                                        $link = '/certificaciones/'.$curso->evento->certificacion->tipocertificacion->slug.'/'.$curso->evento->slug;
                                        break;
                                        case '2':
                                        $link = '/talleres/'.$curso->evento->slug;
                                        break;
                                        case '3':
                                        $link = '/seminarios/'.$curso->evento->slug;
                                        break;
                                        case '4':
                                        $link = '/webinar/'.$curso->evento->slug;
                                        break;

                                        default:
                                        $link = '#';
                                        break;
                                    }
                                    @endphp

                                    <tr>
                                        <td>
                                            Cot. {{ $matricula->anio }}-{{ concatenar($matricula->numero) }}
                                            <a href="{{ url('/admin/usuario/ver-cotizacion/'.$matricula->id) }}">
                                                <i class="icofont-ui-file f-15 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Ver cotización"></i>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $curso->evento->titulo }} <a href="{{ $link }}"><i class="icon feather icon-link-2 text-c-blue f-w-600 f-16 m-r-15" data-toggle="tooltip" data-placement="left" data-original-title="Ver en Frontpage"></i></a>
                                        </td>
                                        <td class="text-center">
                                            {{ $curso->evento->distrito->nombre }}, {{ $curso->evento->distrito->provincia->nombre }}, {{ $curso->evento->distrito->provincia->region->nombre }}
                                        </td>
                                        <td class="text-center">
                                            <i class="feather icon-calendar text-c-blue m-r-5"></i>
                                            @if ($curso->evento->inicio==$curso->evento->fin)
                                            {{ Carbon::parse($curso->evento->inicio)->format('d \d\e M') }} ({{ Carbon::parse($curso->evento->inicio)->diffForHumans(null, false, false, 1) }})
                                            @else
                                            {{ Carbon::parse($curso->evento->inicio)->format('d \d\e M') }} al {{ Carbon::parse($curso->evento->fin)->format('d \d\e M, Y') }} ({{ Carbon::parse($curso->evento->inicio)->diffForHumans(null, false, false, 1) }})
                                            @endif
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
                        Todavía no estás matriculado en ningún evento 😟
                    </div>
                    <p>
                        Te invitamos a participar en alguno de nuestros <a href="{{ url('/admin/usuario/pre-inscripcion') }}">próximos eventos</a>.
                    </p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

