@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva Subcategoria
@endsection

@section('turismo')
    open
@endsection

@section('turismo-subcategorias')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Modificar subcategoría en la sección turística
        </div>
        <div class="card-body">
        	<h2>Estás editando la subcategoría: <strong>{{ $subcategoria->subcategoria }}</strong></h2><br />
            <form action="{{ url('/admin/subcategorias-turismo/'.$subcategoria->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                	<div class="form-group row">
                        <label class="col-md-3 col-form-label" for="turismo_categoria_id">
                            Categoria <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            {!! Form::select('turismo_categoria_id',$categorias,$subcategoria->turismo_categoria_id,['class'=>"form-control select2". ($errors->has('turismo_categoria_id') ? ' is-invalid' : ''),'placeholder' => 'Seleccione...',"required"=>""]) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="subcategoria">
                            Subcategoría <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->has('subcategoria') ? ' is-invalid' : '' }}" value="{{ $subcategoria->subcategoria }}" id="subcategoria" name="subcategoria" placeholder="Ingrese el nombre de la subcategoría." required>
                            @if ($errors->has('subcategoria'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('subcategoria') }}</strong>
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
                                <input class="form-check-input" type="radio" id="estado" value="1" name="estado" {{ $subcategoria->estado==1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado">Activo</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado2" value="0" name="estado" {{ $subcategoria->estado==0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado2">Inactivo</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripcion">
                        	Descripción <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <textarea id="descripcion" name="descripcion" rows="5" class="form-control" required="">{{ $subcategoria->descripcion }}</textarea>
                             <span class="help-block">Ingrese la descripción de la subcategoría.</span>
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
                            <h6>Previsualización:</h6><img id="img-imagen" src="{{ $subcategoria->imagen }}" style="width:500px;height:166px;" alt="Previsualización" class="img-responsive">
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
        $( ".select2" ).select2({
            theme: "bootstrap4"
        });

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