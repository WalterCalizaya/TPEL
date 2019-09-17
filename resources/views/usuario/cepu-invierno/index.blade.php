@extends('usuario.layouts.app')

@section('title')
CEPU Invierno
@endsection

@section('cepu-invierno')
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
		<div class="card table-card">
			<div class="card-header">
				<h5>@yield('title')</h5>
			</div>
			<div class="card-block p-b-0">
				<div class="table-responsive">
					<table class="table table-hover m-b-0">
						<thead>
							<tr>
								<th colspan="3" class="text-center"><h4>Aritmética y Álgebra</h4></th>
							</tr>
							<tr>
								<th>Clase</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Práctica 01: Conjuntos</td>
								<td><label class="label label-success">Transmitida</label></td>
								<td><a href="#" class="label label-primary"data-toggle="modal" data-target="#verPractica1">Ver ahora</a></td>
							</tr>

							<tr>
								<td>Práctica 02: Numeración y 4 operaciones</td>
								<td><label class="label label-success">Transmitida</label></td>
								<td><a href="#" class="label label-primary"data-toggle="modal" data-target="#verPractica2">Ver ahora</a></td>
							</tr>

							<tr>
								<td>Práctica 03: Divisibilidad</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td>Martes 17 de setiembre</td>
							</tr>

							<tr>
								<td>Práctica 04: Números primos - MCM y MCD</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td>Jueves 19 de setiembre</td>
							</tr>

							<tr>
								<td>Práctica 05</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 06</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 07</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 08</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 09</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 10</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 11</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>

							<tr>
								<td>Práctica 12</td>
								<td><label class="label label-danger">Por transmitir</label></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="verPractica1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Práctica 01 - Conjuntos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe width="100%" height="400" src="https://www.youtube.com/embed/PAYyfdwY_A8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-primary btn-round" data-dismiss="modal">
					<i class="icofont icofont-circled-left"></i> Cerrar
				</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="verPractica2" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Práctica 02 - Numeración y 4 operaciones</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe width="100%" height="400" src="https://www.youtube.com/embed/cd08vEt-rEE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-primary btn-round" data-dismiss="modal">
					<i class="icofont icofont-circled-left"></i> Cerrar
				</button>
			</div>
		</div>
	</div>
</div>

@else
<div class="row">
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Nuestros planes</h5>
            </div>
            <div class="card-block">
                <h5>Necesitas adquirir uno de nuestros planes para ver este contenido</h5>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
