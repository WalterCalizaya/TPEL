@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar categoría para el mapa
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
            Modificar categoría para el mapa
        </div>
        <div class="card-body">
        	<h2>Estás modificando la categoría: <strong>{{ $categoria->categoria }}</strong></h2>
        	<br />

            <form action="{{ url('/admin/mapa-categoria/'.$categoria->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria">
                        		Categoría <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="categoria" name="categoria" required value="{{ $categoria->categoria }}">
                             <span class="help-block">Ingrese el nombre de la categoría.</span>
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
                        <label class="col-md-3 col-form-label" for="imagen">
                        		Subir ícono <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control" accept=".png">
                            <span class="help-block"><i style="color: red;">Se recomienda el tamaño 32px x 45px en formato PNG</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-imagen" src="{{ $categoria->imagen ? $categoria->imagen : '/assets/img/avatars/img.jpg' }}" style="width:32px; height:45px;" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                        <button type="reset" class="btn btn-secondary">Reestablecer campos</button>
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