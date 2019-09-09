@extends('usuario.layouts.app')

@section('title')
Próximos eventos
@endsection

@section('proximos')
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
                    @if (Auth::user()->distrito->provincia->region->id==$proximo->distrito->provincia->region->id)
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
        <div class="card table-card">
            <div class="card-header">
                <h5>Próximos eventos organizados por Tacnatel</h5>
            </div>
            <div class="card-block p-b-0">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>
                                <th>Evento</th>
                                <th>Tipo</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proximos as $proximo)
                            @php
                            switch ($proximo->tipo_evento) {
                                case '1':
                                $link = '/certificaciones/'.$proximo->certificacion->tipocertificacion->slug.'/'.$proximo->slug;
                                $badge_proximo = '<span class="badge badge-danger" style="margin-bottom: 10px;">Curso de certificación</span>';
                                break;
                                case '2':
                                $badge_proximo = '<span class="badge badge-success" style="margin-bottom: 10px;">Taller Full Day</span>';
                                $link = '/talleres/'.$proximo->slug;
                                break;
                                case '3':
                                $link = '/seminarios/'.$proximo->slug;
                                $badge_proximo = '<span class="badge badge-warning" style="margin-bottom: 10px;">Seminario Gratuito</span>';
                                break;
                                case '4':
                                $link = '/webinar/'.$proximo->slug;
                                $badge_proximo = '<span class="badge badge-info" style="margin-bottom: 10px;">Webinar Online</span>';
                                break;

                                default:
                                $link = '#';
                                $badge_proximo = '<span class="badge badge-light" style="margin-bottom: 10px;">No definido</span>';
                                break;
                            }
                            @endphp
                            <tr>
                                <td>
                                    <a href="{{ $link }}"><h6>{{ $proximo->titulo }}</h6></a>
                                </td>
                                <td>
                                    {!! $badge_proximo !!}
                                </td>
                                <td>
                                    <i class="feather icon-calendar m-r-5"></i>
                                    @if ($proximo->inicio==$proximo->fin)
                                    {{ Carbon::parse($proximo->inicio)->format('d \d\e M') }} <span class="text-muted">({{ Carbon::parse($proximo->inicio)->diffForHumans(null, false, false, 1) }})</span>
                                    @else
                                    {{ Carbon::parse($proximo->inicio)->format('d \d\e M') }} {{-- al {{ Carbon::parse($proximo->fin)->format('d \d\e M, Y') }} --}} <span class="text-muted">({{ Carbon::parse($proximo->inicio)->diffForHumans(null, false, false, 1) }})</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
