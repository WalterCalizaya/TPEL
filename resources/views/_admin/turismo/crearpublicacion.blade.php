@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Crear publicación de la sección turística
@endsection

@section('turismo')
    open
@endsection

@section('turismo-publicaciones')
    active
@endsection

@section('contenido')
	<div class="card">
        <div class="card-header">
            Agregar nueva página
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/publicaciones-turismo') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-horizontal col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="titulo">
                        	Título <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="" id="titulo" name="titulo" required="" placeholder="Ingrese el título de la publicación.">
                            @if ($errors->has('titulo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="turismo_categoria_id">
                            Categoría <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    @php
                                        $er=$errors->has('turismo_categoria_id') ? ' is-invalid' : '';
                                    @endphp
                                    {!! Form::select('turismo_categoria_id',$categorias,old('turismo_categoria_id'),["class"=>"form-control select2 ".$er,'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"turismo_categoria_id"]) !!}
                                    @if ($errors->has('turismo_categoria_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('turismo_categoria_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="turismo_subcategoria_id">
                            Sub Categoria <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="turismo_subcategoria_id" name="turismo_subcategoria_id" class="form-control select2 {{ $errors->has('categoria_id') ? ' is-invalid' : '' }}" required>
                                        <option>-- SELECCIONE --</option>
                                    </select>
                                    @if ($errors->has('turismo_subcategoria_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('turismo_subcategoria_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="">Estado de la publicación</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" id="publicado" name="publicado" required="">
                                        <option value="1">Publicada</option>
                                        <option value="0">No publicada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="contenido">
                        	Contenido <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            @include('admin.paginas.modal')
                            <textarea id="contenido" name="contenido" rows="8" class="form-control {{ $errors->has('contenido') ? 'is-invalid' : '' }}" required="">{{ old('contenido') }}</textarea>
                            @if ($errors->has('contenido'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('contenido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="portada">
                        		Portada <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-10">
                            <input type="file" id="portada" name="portada" class="form-control {{ $errors->has('portada') ? 'is-invalid' : '' }}" value="" accept="image/*">
                            @if ($errors->has('portada'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('portada') }}</strong>
                                </span>
                            @endif
                            <span class="help-block">Una imagen que será mostrada como fondo del título de la publicación. <i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6>
                            <img id="img-portada" src="/assets/img/avatars/img.jpg" style="width:500px;height:166px;" alt="Previsualización" class="img-responsive">
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
        $(document).ready(function () {
            //subcategoria por categoria
            $("#turismo_categoria_id").change(function(){
                if(this.value){
                    var route='/admin/subcategorias-turismo/'+this.value;
                    sendRequest(route,null,'GET',function(data,textStatus){
                        if(data.status==200){
                            var option='<option>-- SELECCIONE --</option>';
                            $.each(JSON.parse(data.responseText),function(id,subcategoria){
                                option=option+'<option value="'+subcategoria.id+'">'+subcategoria.subcategoria+'</option>';
                            });
                            $("#turismo_subcategoria_id").html(option);
                        }
                        else{
                            alert('error');
                        }
                    });
                }
                else{
                    $("#turismo_subcategoria_id").html('<option>-- SELECCIONE --</option>');
                }
            });
        });

        CKEDITOR.replace('contenido');

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

        document.getElementById('portada').addEventListener('change', archivoFile, false);
    </script>
@endsection