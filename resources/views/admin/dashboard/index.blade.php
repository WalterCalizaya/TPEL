@extends('admin.layouts.app')

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
    <div class="col-xl-6 col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>Próximos eventos</h5>
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

    <div class="col-xl-6 col-md-12">
        <div class="card new-cust-card">
            <div class="card-header">
                <h5>Últimos usuarios registrados</h5>
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
                @foreach ($users as $user)
                <div class="align-middle {{ $user === end($users) ? 'm-b-0' : 'm-b-35' }}">
                    <img src="{{ $user->foto ? $user->foto : '/resources/img/user/default.png' }}" class="img-radius img-40 align-top m-r-15" alt="{{ $user->email }}">
                    <div class="d-inline-block">
                        <h6>{{ $user->nombres }} {{ $user->apellidos }}</h6>
                        <p class="text-muted m-b-0">
                            @if ($user->confirmado==1)
                                <span class="badge badge-success">Verificado</span>
                            @else
                                <span class="badge badge-danger">Sin verificar</span>
                            @endif
                            | {{ $user->distrito->provincia->region->nombre }}
                        </p>
                        <span class="status deactive text-mute"><i class="feather icon-clock m-r-5"></i>{{ Carbon::parse($user->created_at)->diffForHumans(null, false, false, 1) }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
