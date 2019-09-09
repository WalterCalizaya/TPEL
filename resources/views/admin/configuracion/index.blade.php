@extends('admin.layouts.app')

@section('title')
Configuración general
@endsection

@section('configuracion')
active
@endsection

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>@yield('title')</h5>
			</div>
			<div class="card-block">

				<form action="{{ url('/admin/configuracion-general/'.$configuracion->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<h4 class="sub-title">Configuración básica</h4>
					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<label class="col-md-2 col-form-label" for="titulo">
								Título
							</label>
							<div class="col-md-10">
								<input class="form-control form-control-round" id="titulo" name="titulo" value="{{$configuracion->titulo}}">
							</div>
						</div>

						<div class="form-group {{ $errors->has('descripcion') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="descripcion">
								Descripción corta
							</label>
							<div class="col-md-10">
								<textarea  rows="2" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{$configuracion->descripcion}}</textarea>
								@if ($errors->has('descripcion'))
								<div class="col-form-label">
									{{ $errors->first('descripcion') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('descripcion_larga') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="descripcion_larga">
								Descripción larga
							</label>
							<div class="col-md-10">
								<textarea  rows="5" class="form-control {{ $errors->has('descripcion_larga') ? ' form-control-danger' : '' }}" id="descripcion_larga" name="descripcion_larga" >{{$configuracion->descripcion_larga}}</textarea>
								@if ($errors->has('descripcion_larga'))
								<div class="col-form-label">
									{{ $errors->first('descripcion_larga') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="email">
								E-mail
							</label>
							<div class="col-md-10">
								<input type="email" class="form-control form-control-round {{ $errors->has('email') ? ' form-control-danger' : '' }}" id="email" name="email" value="{{ $configuracion->email }}">
								@if ($errors->has('email'))
								<div class="col-form-label">
									{{ $errors->first('email') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('telefono') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="telefono">
								Teléfono
							</label>
							<div class="col-md-10">
								<input type="telefono" class="form-control form-control-round {{ $errors->has('telefono') ? ' form-control-danger' : '' }}" id="telefono" name="telefono" value="{{ $configuracion->telefono }}">
								@if ($errors->has('telefono'))
								<div class="col-form-label">
									{{ $errors->first('telefono') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('direccion') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="direccion">
								Dirección
							</label>
							<div class="col-md-10">
								<input type="direccion" class="form-control form-control-round {{ $errors->has('direccion') ? ' form-control-danger' : '' }}" id="direccion" name="direccion" value="{{ $configuracion->direccion }}">
								@if ($errors->has('direccion'))
								<div class="col-form-label">
									{{ $errors->first('direccion') }}
								</div>
								@endif
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->

					<h4 class="sub-title">Logo y Favicon</h4>
					<div class="col-sm-10 offset-sm-1">
						<div class="form-group {{ $errors->has('logo') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="logo">
								Logo
							</label>
							<div class="col-md-10">
								<input type="file"id="logo" class="form-control form-control-round {{ $errors->has('logo') ? ' form-control-danger' : '' }}" name="logo"  accept=".png, .jpg, .jpeg, .svg">
								@if ($errors->has('logo'))
								<div class="col-form-label">
									{{ $errors->first('logo') }}
								</div>
								@endif
								<div class="col-form-label text-muted">Una imagen que será mostrada como de la empresa. <i style="color: orange;">Se recomienda el tamaño 240px x 56px</i></div>
								<h6>Previsualización:</h6><img id="img-logo" src="{{ $configuracion->logo? $configuracion->logo : '/resources/img/default.jpg' }}" style="width:240px;height:56px;" alt="Previsualización" class="img-fluid">
							</div>
						</div>

						<div class="form-group {{ $errors->has('favicon') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="favicon">
								Favicon
							</label>
							<div class="col-md-10">
								<input type="file"id="favicon" class="form-control form-control-round {{ $errors->has('favicon') ? ' form-control-danger' : '' }}" name="favicon"  accept=".png, .ico">
								@if ($errors->has('favicon'))
								<div class="col-form-label">
									{{ $errors->first('favicon') }}
								</div>
								@endif
								<div class="col-form-label text-muted">Una imagen <strong>.PNG</strong> o <strong>.ICO</strong> que será mostrada como icono en las pestañas del navegador. <i style="color: orange;">Se recomienda el tamaño 64px x 64px</i></div>
								<h6>Previsualización:</h6><img id="img-favicon" src="{{ $configuracion->favicon? $configuracion->favicon : '/resources/img/default.jpg' }}" width="32px" height="32px" alt="Previsualización" class="img-fluid">
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->

					<h4 class="sub-title">Misión y visión</h4>
					<div class="col-sm-10 offset-sm-1">
						<div class="form-group {{ $errors->has('mision') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="mision">
								Misión
							</label>
							<div class="col-md-10">
								<textarea  rows="5" class="form-control {{ $errors->has('mision') ? ' form-control-danger' : '' }}" id="mision" name="mision" >{{$configuracion->mision}}</textarea>
								@if ($errors->has('mision'))
								<div class="col-form-label">
									{{ $errors->first('mision') }}
								</div>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('vision') ? ' has-danger' : '' }} row">
							<label class="col-md-2 col-form-label" for="vision">
								Visión
							</label>
							<div class="col-md-10">
								<textarea  rows="5" class="form-control {{ $errors->has('vision') ? ' form-control-danger' : '' }}" id="vision" name="vision" >{{$configuracion->vision}}</textarea>
								@if ($errors->has('vision'))
								<div class="col-form-label">
									{{ $errors->first('vision') }}
								</div>
								@endif
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->

					<h4 class="sub-title">Redes sociales</h4>
					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Facebook</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="facebook" value="{{ $configuracion->facebook }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Grupo Fb</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="grupofb" value="{{ $configuracion->grupofb }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Twitter</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="twitter" value="{{ $configuracion->twitter }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Instagram</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="instagram" value="{{ $configuracion->instagram }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Youtube</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="youtube" value="{{ $configuracion->youtube }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">WhatsApp</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="whatsapp" value="{{ $configuracion->whatsapp }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">LinkedIn</label>
							<div class="col-sm-10">
								<input type="text" class="form-control form-control-round" name="linkedin" value="{{ $configuracion->linkedin }}">
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->

					<h4 class="sub-title">Otras configuraciones</h4>
					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Google Analytics ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control form-control-round" name="ganalytics" value="{{ $configuracion->ganalytics }}">
								<div class="col-form-label text-muted">Ingrese su ID de seguimiento de Google Analytics. Ej: UA-124766484-1</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Google Webmaster Tools</label>
							<div class="col-sm-9">
								<input type="text" class="form-control form-control-round" name="gwmt" value="{{ $configuracion->gwmt }}" >
								<div class="col-form-label text-muted">Ingrese su identificador de Google WebMaster Tools (Search Console)</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Google Maps API Key</label>
							<div class="col-sm-9">
								<input type="text" class="form-control form-control-round" name="gmaps" value="{{ $configuracion->gmaps }}" required>
								<div class="col-form-label text-muted">Ingrese su API Key de Google Maps</div>
							</div>
						</div>
					</div><!-- /.col-sm-10 offset-sm-1 -->


					<div class="col-sm-10 offset-sm-1">
						<div class="form-group row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
									<i class="icofont icofont-save"></i> Actualizar información
								</button>
							</div>
							<div class="col-sm-6">
								<button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-0">
									<i class="icofont icofont-refresh"></i> Deshacer cambios
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
<script>
	function archivoFile(evt) {
            var files = evt.target.files; // FileList object
            var frame=$("#img-"+evt.target.name);
            if (files.length==0) {
            	frame.attr('src','/resources/img/default.jpg');
            }
            else{
            	pdffile_url=URL.createObjectURL(files[0]);
            	frame.attr('src',pdffile_url);
            }
        }

        document.getElementById('logo').addEventListener('change', archivoFile, false);
        document.getElementById('favicon').addEventListener('change', archivoFile, false);
    </script>


    @endsection
