@extends('usuario.layouts.app')

@section('title')
Inscripción
@endsection

@section('preinscripcion')
active
@endsection

@section('content')
@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');
@endphp

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
            </div>
            <div class="card-block">
                <p style="font-weight: 600;">Selecciona el plan de tu interés. Al inscribirte se generará un recibo con la información detallada del pago por tu inscripción, <span style="color: red;">tu inscripción no estará completa hasta que realices el pago y envíes el voucher correspondiente</span>.</p>

				@if (Auth::user()->tipo==2)
				<h4>Ya estás inscrito en el plan FULL</h4>
                @else
                <form action="{{ url('/admin/usuario/inscripcion') }}" method="post">
                    @csrf

                    <div class="col-sm-12 m-b-30">
                        <h4 class="sub-title">Planes disponibles</h4>
                        <div class="row">
                            <div class="col-md-12">
                            	<div class="form-radio">
                        			<div class="radio radio-disable" style="font-size: 16px;">
                        				<label>
                        					<input type="radio" name="ciclo" id="ciclo" value="1" disabled>
                        					<i class="helper"></i>Plan básico (S/. 85.00 soles por ciclo)
                        				</label>
                        			</div>
                        			<div class="radio" style="font-size: 16px;">
                        				<label>
                        					<input type="radio" name="ciclo" id="ciclo" value="1">
                        					<i class="helper"></i>Plan Full (S/. 85.00 soles por ciclo <strong style="color: red;">PROMOCIÓN</strong>)
                        				</label>
                        			</div>
                            	</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6 offset-sm-3">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-check"></i> Quiero inscribirme
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
