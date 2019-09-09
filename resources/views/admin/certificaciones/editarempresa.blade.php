@extends('admin.layouts.app')

@section('title')
Editar empresa certificadora: {{ $empresa->tipo }}
@endsection

@section('certificaciones')
active pcoded-trigger
@endsection

@section('empresas')
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

				<form action="{{ url('/admin/empresas-certificadoras/'.$empresa->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="col-sm-10 offset-sm-1">

						<div class="form-group {{ $errors->has('tipo') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="tipo">
								Empresa certificadora
							</label>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-round {{ $errors->has('tipo') ? ' form-control-danger' : '' }}" id="tipo" name="tipo" value="{{ $empresa->tipo }}">
								@if ($errors->has('tipo'))
								<div class="col-form-label">
									{{ $errors->first('tipo') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('descripcion') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="descripcion">
								Descripción
							</label>
							<div class="col-md-10">
								<textarea  rows="2" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{ $empresa->descripcion }}</textarea>
								@if ($errors->has('descripcion'))
								<div class="col-form-label">
									{{ $errors->first('descripcion') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('empresa') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="empresa">
								Fotografía
							</label>
							<div class="col-md-10">
								<input type="file" id="empresa" class="form-control form-control-round {{ $errors->has('empresa') ? ' form-control-danger' : '' }}" name="empresa" accept=".png, .jpg, .jpeg, .svg">
								@if ($errors->has('empresa'))
								<div class="col-form-label">
									{{ $errors->first('empresa') }}
								</div>
								@endif
								<h6>Previsualización:</h6><img id="img-empresa" src="{{ $empresa->imagen ? $empresa->imagen : '/resources/img/default.jpg' }}" style="width:269px;height:82px;" alt="Previsualización" class="img-fluid">
							</div>
						</div>

					</div>

					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
									<i class="icofont icofont-save"></i> Actualizar
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

	function archivoFile(evt) {
		var files = evt.target.files;
		var frame=$("#img-"+evt.target.name);

		if (files.length==0) {
			frame.attr('src','/resources/img/default.jpg');
		}
		else{
			pdffile_url=URL.createObjectURL(files[0]);
			frame.attr('src',pdffile_url);
		}
	}
	document.getElementById('empresa').addEventListener('change', archivoFile, false);
</script>
@endsection
