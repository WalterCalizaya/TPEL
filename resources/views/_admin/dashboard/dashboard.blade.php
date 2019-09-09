@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
Principal
@endsection

@section('dashboard')
active
@endsection

@section('contenido')
	@php
        use Carbon\Carbon;
    @endphp
	<div class="card">
		<div class="card-header">
			Dashboard
		</div>
		<div class="card-body">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="callout callout-info">
							<small class="text-muted">Usuarios normales</small>
							<br>
							<strong class="h4">{{ count($usuarios->where('tipo',2)) }}</strong>
							<div class="chart-wrapper">
								<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="callout callout-success">
							<small class="text-muted">Empresas gratuitas</small>
							<br>
							<strong class="h4">{{ count($empresas->where('menbresia',0)) }}</strong>
							<div class="chart-wrapper">
								<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="callout callout-warning">
							<small class="text-muted">Empresas premium</small>
							<br>
							<strong class="h4">{{ count($empresas->where('menbresia',1)) }}</strong>
							<div class="chart-wrapper">
								<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="callout callout-danger">
							{{-- <small class="text-muted">Acciones realizadas</small> --}}
							<small class="text-muted">Administradores</small>
							<br>
							{{-- Aqui sumas los comentarios aprobados + calificaciones aprobadas + preguntas aprobadas --}}
							<strong class="h4">{{ count($usuarios->where('tipo',1)) }}</strong>
							<div class="chart-wrapper">
								<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
							</div>
						</div>
					</div>
					<hr class="mt-0">
				</div><!-- /.row -->
				<br />

				<div class="row">
					<div class="col-sm-4 col-xs-12">
						@php
							$p=count($preguntas);
						@endphp
						<h6>Preguntas</h6>
						<hr class="mt-0">
						<div class="progress-group small text-muted">
							@php
								if ($p>0) {
									$pa=count($preguntas->where('respondido',0));
									$a=round($pa/$p*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$a=0;
									$pa=0;
								}
							@endphp
							<div class="progress-group-header" style="color: red;">
								<i class="icon-question progress-group-icon"></i>
								<div>Sin responder</div>
								<div class="ml-auto font-weight-bold">{{ $a }}% ({{ $pa }} preguntas)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-success" role="progressbar" style="width: {{ $a }}%" aria-valuenow="{{ $a }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group small text-muted mb-5">
							@php
								if ($p>0) {
									$pb=count($preguntas->where('respondido',1));
									$b=round($pb/$p*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$b=0;
									$pb=0;
								}
							@endphp
							<div class="progress-group-header">
								<i class="icon-question progress-group-icon"></i>
								<div>Respondidas</div>
								<div class="ml-auto font-weight-bold">{{ $b }}% ({{ $pb }} preguntas)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-success" role="progressbar" style="width: {{ $b }}%" aria-valuenow="{{ $b }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div><!-- /.col-sm-4 col-xs-12 -->

					<div class="col-sm-4 col-xs-12">
						@php
							$c=count($calificaciones);
						@endphp
						<h6>Calificaciones</h6>
						<hr class="mt-0">
						<div class="progress-group small text-muted">
							@php
								if ($c>0) {
									$ca=count($calificaciones->where('estado',0));
									$a=round($ca/$c*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$a=0;
									$ca=0;
								}
							@endphp
							<div class="progress-group-header" style="color: red;">
								<i class="icon-magic-wand progress-group-icon"></i>
								<div>Por aprobar</div>
								<div class="ml-auto font-weight-bold">{{ $a }}% ({{ $ca }} calificaciones)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-warning" role="progressbar" style="width: {{ $a }}%" aria-valuenow="{{ $a }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group small text-muted mb-5">
							@php
								if ($c>0) {
									$cb=count($calificaciones->where('estado',1));
									$b=round($cb/$c*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$b=0;
									$cb=0;
								}
							@endphp
							<div class="progress-group-header">
								<i class="icon-magic-wand progress-group-icon"></i>
								<div>Aprobadas</div>
								{{-- Acá no cuentes las calificaciones de mil cuando compra membresía --}}
								<div class="ml-auto font-weight-bold">{{ $b }}% ({{ $cb }} calificaciones)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-warning" role="progressbar" style="width: {{ $b }}%" aria-valuenow="{{ $b }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div><!-- /.col-sm-4 col-xs-12 -->

					<div class="col-sm-4 col-xs-12">
						@php
							$c=count($comentarios);
						@endphp
						<h6>Comentarios</h6>
						<hr class="mt-0">
						<div class="progress-group small text-muted">
							@php
								if ($c>0) {
									$ca=count($comentarios->where('estado',0));
									$a=round($ca/$c*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$a=0;
									$ca=0;
								}
							@endphp
							<div class="progress-group-header" style="color: red;">
								<i class="icon-bubbles progress-group-icon"></i>
								<div>Por aprobar</div>
								<div class="ml-auto font-weight-bold">{{ $a }}% ({{ $ca }} comentarios)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-info" role="progressbar" style="width: {{ $a }}%" aria-valuenow="{{ $a }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group small text-muted mb-5">
							@php
								if ($c>0) {
									$cb=count($comentarios->where('estado',1));
									$b=round($cb/$c*100,0,PHP_ROUND_HALF_EVEN);
								}
								else{
									$b=0;
									$cb=0;
								}
							@endphp
							<div class="progress-group-header">
								<i class="icon-bubbles progress-group-icon"></i>
								<div>Aprobados</div>
								<div class="ml-auto font-weight-bold">{{ $b }}% ({{ $cb }} comentarios)</div>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs">
									<div class="progress-bar bg-info" role="progressbar" style="width: {{ $b }}%" aria-valuenow="{{ $b }}" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div><!-- /.col-sm-4 col-xs-12 -->
				</div><!-- /.row -->

				<h4>Últimas membresías</h4>
				<hr class="mt-0">
				<table class="table table-responsive-sm table-hover table-outline mb-0">
					<thead class="thead-light">
						<tr class="text-center">
							<th>Empresa</th>
							<th>Membresía</th>
							<th>Método de pago</th>
							<th>Inicio</th>
							<th>Finalización</th>
							<th>Tipo de membresía</th>
						</tr>
					</thead>
					<tbody>
						@if (count($membresias)>0)
							@foreach ($membresias as $membresia)
								<tr class="text-center">
									<td>
										<div class="avatar">
											<img class="img-avatar" src="{{ $membresia->empresa->portada }}">
										</div>
										<div>{{ $membresia->empresa->razon_comercial }}</div>
									</td>
	                                <td>
	                                    <strong>{{ $membresia->membresia->duracion >=2 ? ($membresia->membresia->duracion == 12 ? '1 Año':($membresia->membresia->duracion==24?'2 Años' :($membresia->membresia->duracion==36? '3 Años':$membresia->membresia->duracion.' Meses'))) : '1 Mes' }} de membresía <span class="badge badge-success">{{ $membresia->membresia->membresia }}</span> <i class="fa fa-star text-warning"></i></strong>
	                                </td>
	                                <td>
	                                    @if ($membresia->asignado==0)
	                                        <div class="small text-muted">Depósito bancario</div>
	                                        <i class="fa fa-money text-success" style="font-size:24px;"></i>
	                                    @else
	                                        <div class="small text-muted">Asignado por administrador</div>
	                                        <i class="fa fa-gift text-danger" style="font-size:24px;"></i>
	                                    @endif
	                                </td>
	                                <td>
	                                    <strong>{{ $membresia->fecha_inicio ? Carbon::parse($membresia->fecha_inicio)->format('d/m/Y') : '-'}}</strong>
	                                </td>
	                                <td>
	                                    <strong>{{ $membresia->fecha_fin ? Carbon::parse($membresia->fecha_fin)->format('d/m/Y') : '-' }}</strong>
	                                </td>
	                                <td>
	                                    @if ($membresia->status==0)
	                                        <strong>En Espera</strong>
	                                    @elseif($membresia->status==1)
	                                        {!! $membresia->extendido ==1 ? '<strong>Membresía extendida</strong>' : '<strong>Membresía adquirida</strong>' !!}
	                                    @else
	                                        {!! $membresia->extendido ==1 ? '<strong>Membresía extendida</strong>' : '<strong>Membresía adquirida</strong>' !!}
	                                    @endif
	                                </td>
	                            </tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div><!-- /.container -->
		</div>
	</div>
@endsection

@section('js')

@endsection