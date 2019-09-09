@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva Página
@endsection

@section('paginas')
    open
@endsection

@section('agregar-pagina')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nueva página
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-pagina') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tipo" id="tipo" value="0">
                <div class="form-horizontal col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="titulo">
                        		Título <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo') }}" id="titulo" name="titulo" required="">
                                <span class="help-block">Ingrese el título de la página.</span>
                            @if ($errors->has('titulo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="">Prioridad publicación</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <span class="help-block">Ingrese el título de la página.</span> --}}
                                    <select class="form-control" id="prioridad" name="prioridad" required="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="publicado" name="publicado" required="">
                                        <option value="1">Página publicada</option>
                                        <option value="0">Página inactiva</option>
                                    </select>
                                    {{-- <span class="help-block">Ingrese el título de la página.</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                    		<label class="col-md-2 col-form-label" for="lateral">
                        		¿Agregar sidebar? <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                        	 <label class="span-check">
                                <input type="checkbox" name="lateral" id="lateral" value="0">
                                <span>Seleccione para agregar una columna lateral con publicidad y la página de Facebook de EnTacna</span>
                            </label>
                        </div>
                    </div><!-- /.form-group row -->

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="descripcion">
                        		Contenido <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            @include('admin.paginas.modal')
                            <textarea id="descripcion" name="descripcion" rows="8" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" required="">{{ old('descripcion') }}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="portada">
                        		Portada <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            <input type="file" id="portada" name="portada" class="form-control {{ $errors->has('portada') ? ' is-invalid' : '' }}" value="{{ old('portada') }}" accept="image/*">
                            @if ($errors->has('portada'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('portada') }}</strong>
                                </span>
                            @endif
                            <span class="help-block">Una imagen que será mostrada como fondo del título de la página. <i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6>
                            <img id="img-portada" src="/assets/img/avatars/img.jpg" style="width:768px;height:256px;" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="reset" class="btn btn-secondary">Limpiar campos</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        CKEDITOR.replace('descripcion');
        $("#lateral").click(function(event) {
            if (this.value==0) {
                $(this).prop('checkbox', true);
                this.value=1;
            }
            else{
                $(this).prop('checkbox', false);
                this.value=0;
            }
        });
        function archivoImage(evt) {
            var files = evt.target.files; // FileList object
            var frame=$("#img-portada");
            if (files.length==0) {
                frame.attr('src','/assets/img/avatars/img.jpg');
            }
            else{
                pdffile_url=URL.createObjectURL(files[0]);
                frame.attr('src',pdffile_url);
            }
        }

        document.getElementById('portada').addEventListener('change', archivoImage, false);
    </script>
@endsection