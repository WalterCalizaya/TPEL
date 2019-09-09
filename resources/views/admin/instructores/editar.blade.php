@extends('admin.layouts.app')

@section('title')
Editar instructor: {{ $instructor->nombre }}
@endsection

@section('instructores')
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

				<form action="{{ url('/admin/instructores/'.$instructor->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="estado">
								Estado
							</label>
							<div class="col-md-10">
								<select name="estado" id="estado" class="form-control form-control-round fill select2">
									<option value="0" {{ $instructor->estado == '0' ? 'selected' : '' }}>Borrador</option>
									<option value="1" {{ $instructor->estado == '1' ? 'selected' : '' }}>Publicado</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="titulo">
								Título
							</label>
							<div class="col-md-10">
								<select name="titulo" id="titulo" class="form-control form-control-round fill select2">
									<option value="Ing." {{ $instructor->titulo == 'Ing.' ? 'selected' : '' }}>Ingeniero</option>
									<option value="Tec." {{ $instructor->titulo == 'Tec.' ? 'selected' : '' }}>Técnico</option>
								</select>
							</div>
						</div>

						<div class="form-group {{ $errors->has('nombre') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="nombre">
								Nombres
							</label>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-round {{ $errors->has('nombre') ? ' form-control-danger' : '' }}" id="nombre" name="nombre" value="{{ $instructor->nombre }}">
								@if ($errors->has('nombre'))
								<div class="col-form-label">
									{{ $errors->first('nombre') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('subtitulo') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="subtitulo">
								Subtítulo
							</label>
							<div class="col-md-10">
								<textarea  rows="2" class="form-control {{ $errors->has('subtitulo') ? ' form-control-danger' : '' }}" id="subtitulo" name="subtitulo">{{ $instructor->subtitulo }}</textarea>
								@if ($errors->has('subtitulo'))
								<div class="col-form-label">
									{{ $errors->first('subtitulo') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="pais">
								Nacionalidad
							</label>
							<div class="col-md-10">
								<select name="pais" id="pais" class="form-control select2">
									<option value="peru" {{ $instructor->nacionalidad == 'peru' ? 'selected' : '' }}>Perú</option>
									<option value="ecuador" {{ $instructor->nacionalidad == 'ecuador' ? 'selected' : '' }}>Ecuador</option>
								</select>
							</div>
						</div>

						<div class="form-group {{ $errors->has('foto') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="foto">
								Fotografía
							</label>
							<div class="col-md-10">
								<input type="file" id="foto" class="form-control form-control-round {{ $errors->has('foto') ? ' form-control-danger' : '' }}" name="foto"  accept=".png, .jpg, .jpeg, .svg">
								@if ($errors->has('foto'))
								<div class="col-form-label">
									{{ $errors->first('foto') }}
								</div>
								@endif
								<h6>Previsualización:</h6>
								<img id="img-foto" src="{{ $instructor->foto ? $instructor->foto : '/resources/img/default.jpg' }}" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
							</div>
						</div>
						<div class="form-group {{ $errors->has('contenido') ? ' has-danger' : '' }} row">
							<label class="col-form-label" for="contenido">Contenido</label>
							<textarea name="contenido" id="contenido" class="form-control {{ $errors->has('contenido') ? ' form-control-danger' : '' }}" cols="30" rows="10">{{ $instructor->contenido }}</textarea>
							@if ($errors->has('foto'))
							<div class="col-form-label">
								{{ $errors->first('contenido') }}
							</div>
							@endif
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
					</div>

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
	var editor = textboxio.replace('#contenido');

	$(document).ready(function() {
		$('#estado').select2();
    	$('#titulo').select2();
    	$('#pais').select2();
	});

	$( ".select2" ).select2({
    	theme: "bootstrap4"
	});

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
	document.getElementById('foto').addEventListener('change', archivoFile, false);
</script>
@endsection
