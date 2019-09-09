@extends('admin.layouts.app')

@section('title')
Editar webinar: {{ $evento->titulo }}
@endsection

@section('webinars')
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

				<form action="{{ url('/admin/webinars/'.$evento->id) }}" method="post" enctype="multipart/form-data">
					@csrf
                    @method('PUT')

					<div class="col-sm-10 offset-sm-1">

						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="estado">
								Estado
							</label>
							<div class="col-md-10">
								<select name="estado" id="estado" class="form-control form-control-round fill select2">
									<option value="1" {{ $evento->estado == '1' ? 'selected' : '' }}>Publicar inmediatamente</option>
									<option value="0" {{ $evento->estado == '0' ? 'selected' : '' }}>Guardar como borrador</option>
								</select>
							</div>
						</div>

						<div class="form-group {{ $errors->has('titulo') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="titulo">
								Nombre del webinar
							</label>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-round {{ $errors->has('titulo') ? ' form-control-danger' : '' }}" id="titulo" name="titulo" value="{{ $evento->titulo }}">
								@if ($errors->has('titulo'))
								<div class="col-form-label">
									{{ $errors->first('titulo') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('fecha') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="fecha">
								Fecha del webinar
							</label>
							<div class="col-md-10">
								<input type="date" class="form-control form-control-round {{ $errors->has('fecha') ? ' form-control-danger' : '' }}" id="fecha" name="fecha" value="{{ $evento->inicio }}">

								@if ($errors->has('fecha'))
								<div class="col-form-label">
									{{ $errors->first('fecha') }}
								</div>
								@endif
							</div>
						</div>

                        <div class="form-group {{ $errors->has('hora') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="hora">
                                Hora del webinar
                            </label>
                            <div class="col-md-10">
                                <input type="time" class="form-control form-control-round {{ $errors->has('hora') ? ' form-control-danger' : '' }}" id="hora" name="hora" value="{{ $evento->hora_inicio }}" step="1">

                                @if ($errors->has('hora'))
                                <div class="col-form-label">
                                    {{ $errors->first('hora') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('temario') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="temario">
                                Temario
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('temario',$temarios,$evento->temario_id,["class"=>"temario form-control form-control-round fill select2",'placeholder' => 'Seleccione...',"required"=>"","id"=>"temario"]) !!}
                                @if ($errors->has('temario'))
                                    <div class="col-form-label">
                                        {{ $errors->first('temario') }}
                                    </div>
                                @endif
                            </div>
                        </div>

						<div class="form-group {{ $errors->has('instructor') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="instructor">
								Instructor
							</label>
							<div class="col-md-10">
								{!! Form::select('instructor',$instructores,$evento->instructor_id,['id'=>"instructor",'class'=>"form-control form-control-round fill select2". ($errors->has('instructor') ? ' form-control-danger' : ''),'placeholder' => 'Seleccione...',"required"=>""]) !!}
								@if ($errors->has('instructor'))
									<div class="col-form-label">
										{{ $errors->first('instructor') }}
									</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('youtube') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="youtube">
								ID Youtube
							</label>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-round {{ $errors->has('youtube') ? ' form-control-danger' : '' }}" id="youtube" name="youtube" value="{{ $evento->youtube_code }}">
								@if ($errors->has('youtube'))
								<div class="col-form-label">
									{{ $errors->first('youtube') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('shared') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="shared">
								Imagen Facebook
							</label>
							<div class="col-md-10">
								<input type="file" id="shared" class="form-control form-control-round {{ $errors->has('shared') ? ' form-control-danger' : '' }}" name="shared" accept=".png, .jpg, .jpeg, .svg">
								@if ($errors->has('shared'))
								<div class="col-form-label">
									{{ $errors->first('shared') }}
								</div>
								@endif
								<h6>Previsualización:</h6><img id="img-shared" src="{{ $evento->imagen ? $evento->imagen : '/resources/img/default.jpg' }}" style="width:400px;height:210px;" alt="Previsualización" class="img-fluid">
							</div>
						</div>

						<div class="form-group {{ $errors->has('descripcion') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="descripcion">
								Descripción
							</label>
							<div class="col-md-10">
								<textarea  rows="10" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{ $evento->descripcion }}</textarea>
								@if ($errors->has('descripcion'))
								<div class="col-form-label">
									{{ $errors->first('descripcion') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('filewebinar') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="filewebinar">
								Archivos del webinar
							</label>
							<div class="col-md-10">
								<input type="file" id="filewebinar" class="form-control form-control-round {{ $errors->has('filewebinar') ? ' form-control-danger' : '' }}" name="filewebinar">
								@if ($errors->has('filewebinar'))
								<div class="col-form-label">
									{{ $errors->first('filewebinar') }}
								</div>
								@endif
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
	var editor = textboxio.replace('#descripcion');

	$(document).ready(function() {
    	$('.select2').select2();
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
	document.getElementById('shared').addEventListener('change', archivoFile, false);
</script>
@endsection
