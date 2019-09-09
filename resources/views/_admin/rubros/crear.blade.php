@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nuevo Rubro
@endsection

@section('categorias')
    open
@endsection

@section('agregar-rubro')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar rubro
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-rubro') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="categoria_id">
                        		Categoria <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            {!! Form::select('categoria_id',$categorias,null,['class'=>"form-control select2 $errors->has('categoria_id') ? ' is-invalid' : ''",'placeholder' => 'Seleccione...',"required"=>""]) !!}
                            @if ($errors->has('categoria_id'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="rubro">
                        		Rubro <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('rubro') ? ' is-invalid' : '' }}" value="{{ old('rubro') }}" id="rubro" name="rubro" >
                            @if ($errors->has('rubro'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('rubro') }}</strong>
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

                    {{-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="imagen">Galería del rubro</label>
                        <div class="col-md-9">
                            <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="{{ old('imagen') }}" accept=".png, .jpg, .jpeg"
                            @if ($errors->has('imagen'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imagen') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="">
                        		Galería del rubro <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="file" id="img" name="img[]" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}" value="{{ old('img') }}" accept="image/*" multiple="">
                             <span class="help-block">Puede agregar varias imágenes a la vez. <i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                            @if ($errors->has('img'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('img') }}</strong>
                                </span>
                            @endif
                            <div class="img-galeria2">
                                <div class="row galeria-add">
                                </div>
                            </div>
                        </div>
                        <br>
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
        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
        function archivoFile(evt) {
            var files = evt.target.files; // FileList object
            var frame=$(".galeria-add");
            frame.html('')
            debugger;
            if (files.length!=0) {
                for (var i = 0; i < files.length; i++) {
                    pdffile_url=URL.createObjectURL(files[i]);
                    frame.append('<div class="col-md-4" id="galeria-'+i+'">'+
                                    '<center>'+
                                        '<img src="'+pdffile_url+'" title="titulo">'+
                                    '</center>'+
                                '</div>');
                }
            }
        }

        document.getElementById('img').addEventListener('change', archivoFile, false);
    </script>
@endsection