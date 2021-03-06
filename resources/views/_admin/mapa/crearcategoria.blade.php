@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva categoría para el mapa
@endsection

@section('mapas')
    open
@endsection

@section('mapa-categoria')
    active
@endsection

@section('contenido')
	<div class="card">
        <div class="card-header">
            Agregar nueva categoría para el mapa
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/mapa-categoria') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria">
                        		Categoría <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}" id="categoria" name="categoria" required placeholder="Ingrese el nombre de la categoría.">
                            @if ($errors->has('categoria'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="imagen">
                        		Subir ícono <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" accept=".png">
                            @if ($errors->has('imagen'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imagen') }}</strong>
                                </span>
                            @endif
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 32px x 45px en formato PNG</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-imagen" src="/assets/img/avatars/img.jpg" style="width:32px; height:45px;" alt="Previsualización" class="img-responsive">
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