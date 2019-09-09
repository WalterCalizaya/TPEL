@extends('usuario.layouts.app')

@section('title')
Dashboard
@endsection

@section('dashboard')
active
@endsection

@section('css')
{!! Html::style("resources/admin/assets/css/widget.css") !!}
@endsection

@section('content')
@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>Próximamente en tu ciudad</h5>
            </div>
            <div class="card-block">
                <div class="latest-update-box p-t-20">
                    @php
                        $conEventos=0;
                    @endphp

                    @foreach ($ciudades as $ciudad)
                    @php
                    switch ($ciudad->tipo_evento) {
                        case '1':
                        $icon_ciudad = '<i class="feather icon-award bg-c-red update-icon"></i>';
                        $link = '/certificaciones/'.$ciudad->certificacion->tipocertificacion->slug.'/'.$ciudad->slug;
                        break;
                        case '2':
                        $icon_ciudad='<i class="feather icon-settings bg-c-green update-icon"></i>';
                        $link = '/talleres/'.$ciudad->slug;
                        break;
                        case '3':
                        $icon_ciudad='<i class="feather icon-clipboard bg-c-yellow update-icon"></i>';
                        $link = '/seminarios/'.$ciudad->slug;
                        break;
                        case '4':
                        $icon_ciudad='<i class="feather icon-monitor bg-c-blue update-icon"></i>';
                        $link = '/webinar/'.$ciudad->slug;
                        break;

                        default:
                        $link = '#';
                        break;
                    }
                    @endphp
                    @if (Auth::user()->distrito->provincia->region->id==$ciudad->distrito->provincia->region->id)
                        <div class="row {{ $ciudad === end($ciudades) ? '' : 'p-b-30' }}">
                            <div class="col-auto text-right update-meta p-r-0">
                                {!! $icon_ciudad !!}
                            </div>
                            <div class="col p-l-5">
                                <a href="{{ $link }}"><h6>{{ $ciudad->titulo }}</h6></a>
                                <p class="text-muted m-b-0">
                                    <i class="feather icon-calendar m-r-5"></i>
                                    @if ($ciudad->inicio==$ciudad->fin)
                                    {{ Carbon::parse($ciudad->inicio)->format('d \d\e M') }} ({{ Carbon::parse($ciudad->inicio)->diffForHumans(null, false, false, 1) }})
                                    @else
                                    {{ Carbon::parse($ciudad->inicio)->format('d \d\e M') }} al {{ Carbon::parse($ciudad->fin)->format('d \d\e M, Y') }} ({{ Carbon::parse($ciudad->inicio)->diffForHumans(null, false, false, 1) }})
                                    @endif
                                </p>
                            </div>
                        </div>
                        @php
                            $conEventos=$conEventos+1;
                        @endphp
                    @else
                    @php
                        $sinEventos="Actualmente no tenemos eventos programados en tu ciudad";
                    @endphp
                    @endif

                    @endforeach

                    @if (strlen(stristr($sinEventos,'No tenemos eventos'))>0 && $conEventos==0)
                        <div class="row m-l-50">
                            <div class="alert alert-danger background-danger">
                                {{ $sinEventos }} 😟
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>En menos de 15 días...</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="latest-update-box p-t-20">
                    @foreach ($proximos as $proximo)
                    @php
                    switch ($proximo->tipo_evento) {
                        case '1':
                        $icon_proximo = '<i class="feather icon-award bg-c-red update-icon"></i>';
                        $link = '/certificaciones/'.$proximo->certificacion->tipocertificacion->slug.'/'.$proximo->slug;
                        break;
                        case '2':
                        $icon_proximo='<i class="feather icon-settings bg-c-green update-icon"></i>';
                        $link = '/talleres/'.$proximo->slug;
                        break;
                        case '3':
                        $icon_proximo='<i class="feather icon-clipboard bg-c-yellow update-icon"></i>';
                        $link = '/seminarios/'.$proximo->slug;
                        break;
                        case '4':
                        $icon_proximo='<i class="feather icon-monitor bg-c-blue update-icon"></i>';
                        $link = '/webinar/'.$proximo->slug;
                        break;

                        default:
                        $link = '#';
                        break;
                    }
                    @endphp
                    <div class="row {{ $proximo === end($proximos) ? '' : 'p-b-30' }}">
                        <div class="col-auto text-right update-meta p-r-0">
                            {!! $icon_proximo !!}
                        </div>
                        <div class="col p-l-5">
                            <a href="{{ $link }}"><h6>{{ $proximo->titulo }}</h6></a>
                            <p class="text-muted m-b-0">
                                <i class="feather icon-calendar m-r-5"></i>
                                @if ($proximo->inicio==$proximo->fin)
                                {{ Carbon::parse($proximo->inicio)->format('d \d\e M') }} ({{ Carbon::parse($proximo->inicio)->diffForHumans(null, false, false, 1) }})
                                @else
                                {{ Carbon::parse($proximo->inicio)->format('d \d\e M') }} al {{ Carbon::parse($proximo->fin)->format('d \d\e M, Y') }} ({{ Carbon::parse($proximo->inicio)->diffForHumans(null, false, false, 1) }})
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
