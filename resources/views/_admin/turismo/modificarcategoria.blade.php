@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar categoria
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
            Editar categoría en la sección turística
        </div>
        <div class="card-body">
        	<h2>Estás editando la categoría: <strong>{{ $categoria->categoria }}</strong></h2><br />
            <form action="{{ url('/admin/categorias-turismo/'.$categoria->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                	{{-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="id-categoria">ID de la categoría</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="123" disabled="">
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria">
                        	Categoría <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}" value="{{ $categoria->categoria }}" id="categoria" name="categoria" required>
                            @if ($errors->has('categoria'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Estado <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado" value="1" name="estado" {{ $categoria->estado==1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado">Activo</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado2" value="0" name="estado" {{ $categoria->estado==0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado2">Inactivo</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripcion">
                        		Descripción <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <textarea id="descripcion" name="descripcion" rows="5" class="form-control">{{ $categoria->descripcion }}</textarea>
                             <span class="help-block">Ingrese la descripción de la categoría.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="imagen">
                        	Imagen de portada <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="" accept=".png, .jpg, .jpeg">
                            @if ($errors->has('imagen'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imagen') }}</strong>
                                </span>
                            @endif
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6>
                            <img id="img-imagen" src="{{ $categoria->imagen }}" style="width:500px;height:166px;" alt="Previsualización" class="img-responsive">
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