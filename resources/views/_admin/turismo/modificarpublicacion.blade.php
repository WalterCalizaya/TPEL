@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar la publicación de la sección turística
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
            Modificar la publicación
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/publicaciones-turismo/'.$turismo->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="titulo">
                            Título <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ $turismo->titulo }}" id="titulo" name="titulo" required="" placeholder="Ingrese el título de la publicación.">
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
                                    {!! Form::select('turismo_categoria_id',$categorias,$turismo->subcategoria->categoria->id,["class"=>"form-control select2 ".$er,'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"turismo_categoria_id"]) !!}
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
                                    @php
                                        $er2=$errors->has('turismo_subcategoria_id') ? ' is-invalid' : '';
                                    @endphp
                                    {!! Form::select('turismo_subcategoria_id',$subcategorias,$turismo->subcategoria->id,["class"=>"form-control select2 ".$er2,'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"turismo_subcategoria_id"]) !!}
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
                                    {!! Form::select('publicado',[1=>'Publicadada',0=>'No Publicadada'],$turismo->publicado,['class'=>'form-control','id'=>'publicado']) !!}
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
                            <textarea id="contenido" name="contenido" rows="8" class="form-control {{ $errors->has('contenido') ? 'is-invalid' : '' }}" required="">{!! $turismo->contenido !!}</textarea>
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
                            <img id="img-portada" src="{{ $turismo->portada }}" style="width:500px;height:166px;" alt="Previsualización" class="img-responsive">
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

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Galería de videos
                </div>
                <div class="card-body">
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="youtube">Añadir video</label>
                            <div class="col-md-9">
                                <form id="form-youtube" onsubmit="return false">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" id="youtube" name="youtube" class="form-control">
                                        <span class="input-group-append">
                                            <button type="button" id="btn-youtube" class="btn btn-primary">Añadir</button>
                                        </span>
                                    </div>
                                    <span class="help-block">Coloque sólo el ID del vídeo.
                                        <i style="color: red;">https://www.youtube.com/watch?v=<strong>UDa5Lr0cwX8</strong></i>
                                        <i style="color: red;">https://www.youtube.com/watch?v=<strong>Y7QMt0umYes</strong>&index=2&list=RDIZUJsixsO4Q</i>
                                    </span>
                                </form>
                            </div>
                            <div class="col-sm-12">
                                <div>
                                    <ul class="service-list video-list">
                                        @if (count($youtubes)>0)
                                            @foreach ($youtubes as $youtube)
                                                <li id="list-{{ $youtube->id }}">
                                                    <a href="https://www.youtube.com/watch?v={{ $youtube->youtube }}" target="_blank">{{ $youtube->titulo ? $youtube->titulo : $youtube->youtube }}</a>
                                                    <span class="delete-service" id="btn-eliminar-video-{{ $youtube->id }}" onclick="deleteVideo({{ $youtube->id }})" style="cursor:pointer" ><i class="fa fa-times-circle"></i></span>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Agregar empresas a la publicación
                </div>
                <div class="card-body">
                    <div class="form-horizontal">
                        <form id="form-empresas">
                            @csrf
                            <div class="form-group col-md-12 row">
                                <label class="col-md-3 col-form-label" for="categoria_id">Categoría </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::select('categoria_id',$categories,null,['class'=>'form-control select2','id'=>'categoria_id','placeholder'=>'-- SELECCIONE --']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 row">
                                <label class="col-md-3 col-form-label" for="rubro_id">Rubro </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="form-control select2" id="rubro_id" name="rubro_id" required="">
	                                        <option value="">-- SELECCIONE -- </option>
	                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 row">
                                <label class="col-md-3 col-form-label" for="empresa_id">Empresa </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="form-control select2" id="empresa_id" name="empresa_id" required="">
	                                        <option value="">-- SELECCIONE -- </option>
	                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 row">
                                <button type="submit" class="btn btn-sm btn-primary btn-block" id="btn-empresa">Agregar</button>
                            </div>
                        </form>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                <div>
                                    <ul class="service-list add-empresa">
                                        @if (count($empresas)>0)
                                            @foreach ($empresas as $empresa)
                                                <li id="empresa-{{ $empresa->id }}">
                                                    <a href="{{ url('/'.$empresa->empresa->rubro->categoria->slug.'/'.$empresa->empresa->rubro->slug.'/'.$empresa->empresa->slug) }}" target="_blank">{{ $empresa->empresa->razon_social }} </a>
                                                    <span class="delete-service" id="btn-eliminar-empresa-{{ $empresa->id }}" onclick="deleteEmpresa({{ $empresa->id }})" style="cursor:pointer">
                                                        <i class="fa fa-times-circle"></i>
                                                    </span>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
	<script type="text/javascript">
        CKEDITOR.replace('contenido');

        $( ".select2" ).select2({
            theme: "bootstrap4"
        });

        $(document).ready(function () {
            //rubros por categoria
            $("#categoria_id").change(function(){
                changeCategoria(this);
            });
            $("#btn-youtube").click(function(){
                agregarVideo();
            });
            $('#youtube').keyup(function(e) {
                if(e.keyCode == 13) {
                    agregarVideo();
                }
            });
            $("#rubro_id").change(function() {
                changeRubro(this);
            });
            $("#form-empresas").submit(function(e) {
                $("#btn-empresa").html('<i class="fa fa-refresh fa-lg fa-spin"></i> Agregando');
                var form=$("#form-empresas");
                var id=location.pathname.split('/')[3];
                var route='/admin/agregar-empresa/'+id;
                var formData=form.serialize();
                sendRequest(route,formData,'POST',function (data,textStatus) {
                    $("#form-empresas")[0].reset();
                    resetSelect();
                    $("#btn-empresa").html('Agregar');
                    if(data.status==200){
                        var objeto=JSON.parse(data.responseText);
                        $(".add-empresa").prepend('<li id="empresa-'+objeto.turismo+'"><a href="/categoria-slug/'+objeto.rubro.slug+'/'+objeto.slug+'" target="_blank">'+objeto.razon_social+' </a> <span class="delete-service" id="btn-eliminar-empresa-'+objeto.turismo+'" onclick="deleteEmpresa('+objeto.turismo+')" style="cursor:pointer"><i class="fa fa-times-circle"></i></span></li>');
                        swal({"timer":4000,"title":"Empresa agregada satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                    }
                    else{
                        swal({"timer":10000,"title":"<strong style='font-size: 20px'>Por favor, intente nuevamente.</strong>","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"error","position":"center"});
                    }
                })
                e.preventDefault();
                return false;
            });
        });

        function resetSelect() {
            $("#empresa_id").html('<option value="">-- SELECCIONE--</option>');
            $("#rubro_id").html('<option value="">-- SELECCIONE --</option>');
            $("#categoria_id").select2('destroy');
            $("#categoria_id").select2({
                theme: "bootstrap4"
            });
        }

        function changeCategoria(a){
            if(a.value){
                var route='/admin/lista-empresa-rubros/'+a.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option value="">-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,rubro){
                            option=option+'<option value="'+id+'">'+rubro+'</option>';
                        });
                        $("#rubro_id").html(option);
                    }
                    else{
                        alert('error');
                    }
                });
            }
            else{
                $("#rubro_id").html('<option value="">-- SELECCIONE --</option>');
            }
        }

        function changeRubro(a) {
            if (a.value) {
                var route='/admin/obtener-empresa-rubro/'+a.value;
                sendRequest(route,null,'GET',function (data,textStatus) {
                    if (data.status==200) {
                        debugger;
                        var objeto=JSON.parse(data.responseText);
                        $("#empresa_id").html('');
                        $("#empresa_id").append('<option value="">-- SELECCIONE --</option>');
                        for (var i = 0; i < objeto.length; i++) {
                            $("#empresa_id").append('<option value="'+objeto[i].id+'">'+objeto[i].razon_social+' - '+(objeto[i].menbresia==1 ? 'Empresa Premium' : 'Empresa Gratuita')+' </option>');
                        }
                    }
                    else{
                        alert('error');
                    }
                })
            }
            else{
                $("#empresa_id").html('<option value="">-- SELECCIONE --</option>');
            }
        }

        function agregarEmpresa(){
            if($("#youtube").val()){
                if ($("#youtube").val().length==11) {
                    $("#btn-youtube").html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i>');
                    var form=$("#form-youtube");
                    var id=location.pathname.split('/')[3];
                    var route='/admin/agregar-video/'+id;
                    var formData=form.serialize();
                    sendRequest(route,formData,'POST',function(data,textStatus){
                        $("#btn-youtube").html('Añadir');
                        form[0].reset();
                        if(data.status==201){
                            var objeto=JSON.parse(data.responseText);
                            $(".video-list").prepend('<li id="list-'+objeto.id+'"><a href="https://www.youtube.com/watch?v='+objeto.youtube+'" target="_blank">'+(objeto.titulo ? objeto.titulo : objeto.youtube)+' </a> <span class="delete-service" id="btn-eliminar-video-'+objeto.id+'" onclick="deleteVideo('+objeto.id+')" style="cursor:pointer"><i class="fa fa-times-circle"></i></span></li>');
                            swal({"timer":4000,"title":"El ID del video de YouTube se agregó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                        }
                        else alert('error!')
                    });
                }
                else{
                    swal({"timer":4000,"title":"El ID de un video de YouTube solo debe de tener 11 caracteres","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"warning","position":"bottom-center"});
                }
            }
        }

        function agregarVideo(){
            if($("#youtube").val()){
                if ($("#youtube").val().length==11) {
                    $("#btn-youtube").html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i>');
                    var form=$("#form-youtube");
                    var id=location.pathname.split('/')[3];
                    var route='/admin/agregar-video/'+id;
                    var formData=form.serialize();
                    sendRequest(route,formData,'POST',function(data,textStatus){
                        $("#btn-youtube").html('Añadir');
                        form[0].reset();
                        if(data.status==201){
                            var objeto=JSON.parse(data.responseText);
                            $(".video-list").prepend('<li id="list-'+objeto.id+'"><a href="https://www.youtube.com/watch?v='+objeto.youtube+'" target="_blank">'+(objeto.titulo ? objeto.titulo : objeto.youtube)+' </a> <span class="delete-service" id="btn-eliminar-video-'+objeto.id+'" onclick="deleteVideo('+objeto.id+')" style="cursor:pointer"><i class="fa fa-times-circle"></i></span></li>');
                            swal({"timer":4000,"title":"El ID del video de YouTube se agregó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                        }
                        else alert('error!')
                    });
                }
                else{
                    swal({"timer":4000,"title":"El ID de un video de YouTube solo debe de tener 11 caracteres","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"warning","position":"bottom-center"});
                }
            }
        }

        function deleteVideo(id){
            var token=$("#form-youtube").find('input[name=_token]').val();
            var route='/admin/eliminar-video/'+id;
            $("#btn-eliminar-video-"+id).html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i>');
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                $("#btn-eliminar-video-"+id).html('<i class="fa fa-times-circle"></i>');
                if(data.status==200){
                    $("#list-"+id).remove();
                    swal({"timer":4000,"title":"El ID del video de YouTube se eliminó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
            });
        }

        function deleteEmpresa(id){
            var token=$("#form-empresas").find('input[name=_token]').val();
            var route='/admin/eliminar-empresa-turismo/'+id;
            $("#btn-eliminar-empresa-"+id).html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i>');
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                $("#btn-eliminar-empresa-"+id).html('<i class="fa fa-times-circle"></i>');
                if(data.status==200){
                    $("#empresa-"+id).remove();
                    swal({"timer":4000,"title":"La empresa asociada se eliminó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
            });
        }
    </script>
@endsection