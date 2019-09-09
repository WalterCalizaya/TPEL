@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva Categoria
@endsection

@section('turismo')
    open
@endsection

@section('turismo-categorias')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nueva categoría en la sección turística
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/categorias-turismo') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria">
                        		Categoría <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}" value="{{ old('categoria') }}" id="categoria" name="categoria" required placeholder="Ingrese el nombre de la categoría">
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
                            <textarea id="descripcion" name="descripcion" rows="5" class="form-control" required="">{{ old('descripcion') }}</textarea>
                            <span class="help-block">Ingrese la descripción de la categoría.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="imagen">
                        	Imagen de portada <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="" accept=".png, .jpg, .jpeg" required="">
                            @if ($errors->has('imagen'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imagen') }}</strong>
                                </span>
                            @endif
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6>
                            <img id="img-imagen" src="/assets/img/avatars/img.jpg" style="width:500px;height:166px;" alt="Previsualización" class="img-responsive">
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
    </script>
@endsection