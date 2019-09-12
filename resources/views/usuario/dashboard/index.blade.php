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
@if (Auth::user()->tipo==2)
<div class="row">
    <div class="col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>¡Recuerda!</h5>
            </div>
            <div class="card-block">
            	<div class="row m-l-50">
            		<p>Este martes 10 de setiembre a las 07:00 pm es nuestra primera clase en vivo.</p>
            		<p><strong>Tema:</strong> Sistema de Numeración y Cuatro Operaciones (Práctica de Reforzamiento)</p>
            	</div>
            	<div class="row m-l-50">
            		<p>Ingresa al siguiente link minutos antes de las 07:00 pm</p>
            	</div>
            	<a class="m-l-50 btn btn-info btn-round waves-effect waves-light" href="{{ url('/en-vivo') }}">Clic aquí para ingresar a la clase</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
	<div class="col-md-12">
		<img src="{{ url('/resources/img/baner-cerebrito.jpg') }}" class="img-fluid" />
	</div>
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Nuestros planes</h5>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                	<table class="table table-hover m-b-0">
                		<thead>
                			<tr>
                				<th>Característica</th>
                				<th class="text-center">Gratuito</th>
                				<th class="text-center">Básico</th>
                				<th class="text-center">Full</th>
                			</tr>
                		</thead>
                		<tbody>
                			<tr>
                				<td>Precio</td>
                				<td class="text-center" style="font-weight: 700;">Gratis</td>
                				<td class="text-center" style="font-weight: 700;">S/85 soles por ciclo <br>(14 semanas)</td>
                				<td class="text-center" style="font-weight: 700;"><del style="color: red">S/100</del>S/85 soles por ciclo <br>(14 semanas)</td>
                			</tr>
                			<tr>
                				<td>Pizarritas</td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Tutoriales básicos de Aritmética</td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Tutoriales básicos de Álgebra</td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Tutoriales básicos de Razonamiento Matemático</td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Acceso a clases en vivo</td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Descarga de material en PDF</td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Acceso a clases grabadas</td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Simuladores virtuales de exámenes</td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td>Banco de preguntas de CEPUs pasados</td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-x f-20 f-w-600 text-c-red"></div></td>
                				<td class="text-center"><div class="icon feather icon-check f-20 f-w-600 text-c-green"></div></td>
                			</tr>
                			<tr>
                				<td></td>
                				<td></td>
                				<td class="text-center"><a href="{{ url('/admin/usuario/inscripcion') }}" class="btn btn-warning waves-effect waves-light">Inscribirme</a></td>
                				<td class="text-center"><a href="{{ url('/admin/usuario/inscripcion') }}" class="btn btn-warning waves-effect waves-light">Inscribirme</a></td>
                			</tr>

                		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
