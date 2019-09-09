@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar Rubro
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Editar rubro
        </div>
        <div class="card-body">
            <h2>Estás editando el rubro: <strong>{{ $rubro->rubro }}</strong></h2><br>
            <div class="form-horizontal col-sm-8 offset-sm-2">
                <form action="{{ url('/admin/lista-rubro/'.$rubro->id) }}" id="form-rubro" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="id-rubro">ID del Rubro</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ $rubro->id }}" required disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="rubro">
                    		Rubro <span class="pull-right text-danger">(*)</span>
                  	</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control {{ $errors->has('rubro') ? ' is-invalid' : '' }}" value="{{ $rubro->rubro }}" id="rubro" name="rubro" >
                        @if ($errors->has('rubro'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('rubro') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="categoria_id">
                    		Categoria <span class="pull-right text-danger">(*)</span>
                  	</label>
                    <div class="col-md-9">
                        {!! Form::select('categoria_id',$categorias,$rubro->categoria_id,['class'=>"form-control select2 $errors->has('categoria_id') ? ' is-invalid' : ''",'placeholder' => 'Seleccione...',"required"=>""]) !!}
                        @if ($errors->has('categoria_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('categoria_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="descripcion">
                    		Descripción <span class="pull-right text-danger">(*)</span>
                  	</label>
                    <div class="col-md-9">
                        <textarea id="descripcion" name="descripcion" rows="5" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}">{{ $rubro->descripcion }}</textarea>
                        @if ($errors->has('descripcion'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="imagen">Galería de la categoría</label>
                    <div class="col-md-9">
                        <input type="file" id="imagen" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="" accept=".png, .jpg, .jpeg"
                        @if ($errors->has('imagen'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('imagen') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
                </form>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="">Galería del rubro</label>
                    <div class="col-md-9">
                        <input type="file" id="img" name="img[]" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}" form="form-rubro" value="" multiple="" accept="image/*">
                        <span class="help-block">Puede agregar varias imágenes a la vez. <i style="color: red;">Se recomienda el tamaño 1920px x 640px</i></span>
                        @if ($errors->has('img'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('img') }}</strong>
                            </span>
                        @endif
                        <div class="img-galeria2">
                            <div class="row galeria-add">
                                @if (count($rubro->imgs)>0)
                                    @foreach ($rubro->imgs as $img)
                                        <div class="col-md-4" id="galeria-{{ $img->id }}">
                                            <center>
                                                <img src="{{ $img->img }}" title="Titulo">
                                                <button class="btn btn-eliminar" onclick="deleteGaleria({{ $img->id }})">Eliminar</button>
                                            </center>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" form="form-rubro" class="btn btn-primary">Modificar</button>
                    <button type="reset" form="form-rubro" class="btn btn-secondary">Limpiar campos</button>
                </div>
            </div>
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
            debugger;
            if (files.length!=0) {
                var form=$("#form-rubro");
                var formData  = new FormData(form[0]);
                formData.delete('_method');
                var id=location.pathname.split('/')[3];
                var route='/admin/agregar-galeria-rubro/'+id;
                sendRequestFile(route,formData,'POST',function(data,textStatus){
                    $("#img").val('');
                    debugger;
                    if(data.status==200){
                        var objeto=JSON.parse(data.responseText);
                        for (var i = 0; i < objeto.length; i++) {
                            var img='<div class="col-md-4" id="galeria-'+objeto[i].id+'">'+
                                        '<center>'+
                                            '<img src="'+objeto[i].img+'" title="Titulo">'+
                                            '<button class="btn btn-eliminar" onclick="deleteGaleria('+objeto[i].id+')">Eliminar</button>'+
                                        '</center>'+
                                    '</div>';
                            $(".galeria-add").prepend(img);
                        }
                        swal({"timer":4000,"title":"Imagen(es) agregada(s) satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                    }
                    else alert('error!')
                });
            }
        }

        function deleteGaleria(id){
            var token=$("#form-rubro").find('input[name=_token]').val();
            var route='/admin/eliminar-galeria-rubro/'+id;
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                if(data.status==200){
                    $("#galeria-"+id).remove();
                    swal({"timer":4000,"title":"Imagen(es) eliminada(s) satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
            });
        }

        document.getElementById('img').addEventListener('change', archivoFile, false);
    </script>
@endsection