@extends('admin.layouts.app')

@section('title')
Editar tipo de certificacion: {{ $certificacion->certificacion }}
@endsection

@section('certificaciones')
active pcoded-trigger
@endsection

@section('tipos')
active
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>@yield('title')</h5>
			</div>
			<div class="card-block">

				<form action="{{ url('/admin/tipos-certificacion/'.$certificacion->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="col-sm-10 offset-sm-1">

						<div class="form-group {{ $errors->has('empresa') ? ' has-danger' : '' }} row">
							<label class="col-md-3 col-form-label" for="empresa">
								Empresa certificadora
							</label>
							<div class="col-md-9">
								{!! Form::select('empresa',$empresas,$certificacion->tipo_certificacion_id,['id'=>"empresa",'class'=>"form-control form-control-round fill select2". ($errors->has('empresa') ? ' is-invalid' : ''),'placeholder' => 'Seleccione...',"required"=>""]) !!}
								@if ($errors->has('empresa'))
									<div class="col-form-label">
										{{ $errors->first('empresa') }}
									</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('certificacion') ? ' has-danger' : '' }} row">
							<label class="col-md-3 col-form-label" for="certificacion">
								Nombre corto (siglas)
							</label>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-round {{ $errors->has('certificacion') ? ' form-control-danger' : '' }}" id="certificacion" name="certificacion" value="{{ $certificacion->certificacion }}">
								@if ($errors->has('certificacion'))
								<div class="col-form-label">
									{{ $errors->first('certificacion') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('nombrecompleto') ? ' has-danger' : '' }} row">
							<label class="col-md-3 col-form-label" for="nombrecompleto">
								Nombre completo
							</label>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-round {{ $errors->has('nombrecompleto') ? ' form-control-danger' : '' }}" id="nombrecompleto" name="nombrecompleto" value="{{ $certificacion->nombre_certificacion }}">
								@if ($errors->has('nombrecompleto'))
								<div class="col-form-label">
									{{ $errors->first('nombrecompleto') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('descripcion') ? ' has-danger' : '' }} row">
							<label class="col-md-3 col-form-label" for="descripcion">
								Descripción
							</label>
							<div class="col-md-9">
								<textarea  rows="2" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{ $certificacion->descripcion }}</textarea>
								@if ($errors->has('descripcion'))
								<div class="col-form-label">
									{{ $errors->first('descripcion') }}
								</div>
								@endif
							</div>
						</div>

					</div>

					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
									<i class="icofont icofont-save"></i> Guardar
								</button>
							</div>
							<div class="col-sm-6">
								<button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-0">
									<i class="icofont icofont-refresh"></i> Limpiar
								</button>
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->

				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

<script src="/resources/lib/textboxio/textboxio.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    	$('#empresa').select2();
	});
	$( ".select2" ).select2({
    	theme: "bootstrap4"
	});
</script>
@endsection
