@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva Categoria
@endsection

@section('categorias')
    open
@endsection

@section('agregar-categoria')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nueva categoría
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-categoria') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria">
                        		Categoría <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}" value="{{ old('categoria') }}" id="categoria" name="categoria" >
                            {{--  <span class="help-block">Ingrese el nombre de la categoría.</span>  --}}
                            @if ($errors->has('categoria'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripcion">
                        		Descripción <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <textarea id="descripcion" name="descripcion" rows="5" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}">{{ old('descripcion') }}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="imagen">
                        		Imagen de portada <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="{{ old('imagen') }}" accept=".png, .jpg, .jpeg">
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 750px x 450px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-imagen" src="/assets/img/avatars/img.jpg" style="width:500px; height:300px;" alt="Previsualización" class="img-responsive">
                            @if ($errors->has('imagen'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imagen') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="icono">
                        	Ícono en mapa interactivo <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="icono" name="icono" class="form-control {{ $errors->has('icono') ? ' is-invalid' : '' }}" value="{{ old('icono') }}" accept=".png">
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 32px x 45px en formato PNG</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-icono" src="/assets/img/avatars/img.jpg" style="width:32px; height:45px;" alt="Previsualización" class="img-responsive">
                            @if ($errors->has('icono'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('icono') }}</strong>
                                </span>
                            @endif
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
        function archivoFile(evt) {
            var files = evt.target.files; // FileList object
            var frame=$("#img-"+evt.target.name);
            if (files.length==0) {
                frame.attr('src','/assets/img/avatars/img.jpg');
            }
            else{
                pdffile_url=URL.createObjectURL(files[0]);
                frame.attr('src',pdffile_url);
            }
        }

        document.getElementById('imagen').addEventListener('change', archivoFile, false);
        document.getElementById('icono').addEventListener('change', archivoFile, false);
    </script>
@endsection