@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Configuración general
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
            Configuración general
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/configuracion-general/'.$configuracion->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <form action="#" action="post">
                    <h5>Información básica de En Tacna</h5>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-favicon">
                            <span class="pull-right text-danger">(*)</span>Favicon
                        </label>
                        <div class="col-md-9">
                            <input type="file"id="favicon" class="form-control {{ $errors->has('favicon') ? ' is-invalid' : '' }}" name="favicon"  accept=".png, .ico">
                            @if ($errors->has('favicon'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('favicon') }}</strong>
                                </span>
                            @endif
                            <br>
                            <span class="help-block">Una imagen <strong>.PNG</strong> o <strong>.ICO</strong> que será mostrada como icono en las pestañas del navegador. <i style="color: red;">Se recomienda el tamaño 64px x 64px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-favicon" src="{{ $configuracion->favicon? $configuracion->favicon : '/assets/img/avatars/img.jpg' }}" width="64px" height="64px" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-logo">
                            <span class="pull-right text-danger">(*)</span>Logo
                        </label>
                        <div class="col-md-9">
                            <input type="file"id="logo" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo"  accept=".png, .jpg, .jpeg">
                            @if ($errors->has('logo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                            <br>
                            <span class="help-block">Una imagen que será mostrada como de la empresa. <i style="color: red;">Se recomienda el tamaño 600px x 150px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-logo" src="{{ $configuracion->logo? $configuracion->logo : '/assets/img/avatars/img.jpg' }}" style="width:300px;height:75px;" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-login">
                            <span class="pull-right text-danger">(*)</span>Imagen de fondo de registro y inicio sesión
                        </label>
                        <div class="col-md-9">
                            <input type="file"id="login" class="form-control {{ $errors->has('login') ? ' is-invalid' : '' }}" name="login"  accept=".png, .jpg, .jpeg">
                            @if ($errors->has('login'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('login') }}</strong>
                                </span>
                            @endif
                            <br>
                            <span class="help-block">Una imagen de fondo que será mostrada en las pestañas inicio de sesión y registro. <i style="color: red;">Se recomienda el tamaño 1920px x 1080px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-login" src="{{ $configuracion->login? $configuracion->login : '/assets/img/avatars/img.jpg' }}" width="100%" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-logo">
                            <span class="pull-right text-danger">(*)</span>Imagen descriptiva
                        </label>
                        <div class="col-md-9">
                            <input type="file"id="image_desc" class="form-control {{ $errors->has('image_desc') ? ' is-invalid' : '' }}" name="image_desc"  accept=".png, .jpg, .jpeg">
                            @if ($errors->has('image_desc'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('image_desc') }}</strong>
                                </span>
                            @endif
                            <br>
                            <span class="help-block">Una imagen que será mostrada en la página de inicio junto con la descripción. <i style="color: red;">Se recomienda el tamaño 350px x 450px</i></span>
                            <br><br>
                            <h6>Previsualización:</h6><img id="img-image_desc" src="{{ $configuracion->image_desc? $configuracion->image_desc : '/assets/img/avatars/img.jpg' }}" width="350px" alt="Previsualización" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripcion">
                            <span class="pull-right text-danger">(*)</span>Descripción
                        </label>
                        <div class="col-md-9">
                            <textarea  rows="5" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="descripcion" name="descripcion" >{{$configuracion->descripcion}}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="titulo">
                            Título de la página
                        </label>
                        <div class="col-md-9">
                            <input class="form-control" id="titulo" name="titulo" value="{{$configuracion->titulo}}" placeholder="Título opcional de la página">
                            <span class="help-block">Este título será mostrado cuando no haya logo configurado.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-correo">
                            <span class="pull-right text-danger">(*)</span>Correo electrónico
                        </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ $configuracion->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-telefono">
                            <span class="pull-right text-danger">(*)</span>Teléfono
                        </label>
                        <div class="col-md-9">
                            <input type="tex" class="form-control {{ $errors->has('favicon') ? ' is-invalid' : '' }}" id="telefono" name="telefono" value="{{ $configuracion->telefono }}">
                            @if ($errors->has('favicon'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('favicon') }}</strong>
                                </span>
                            @endif
                            <span class="help-block">Ingrese el teléfono de contacto.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="direccion">
                            <span class="pull-right text-danger">(*)</span>Dirección
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('favicon') ? ' is-invalid' : '' }}" id="direccion" name="direccion" value="{{ $configuracion->direccion }}">
                            @if ($errors->has('favicon'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('favicon') }}</strong>
                                </span>
                            @endif
                            <span class="help-block">Ingrese la dirección de la oficina.</span>
                        </div>
                    </div>

                    <hr>
                    <h5>Redes sociales de EnTacna</h5>
                    <br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-facebook">Facebook</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-facebook" name="facebook" value="{{ $configuracion->facebook }}" placeholder="https://www.facebook.com/EnTacna">
                            {{-- <span class="help-block">Ej: https://www.facebook.com/EnTacna</span> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-twitter">Twitter</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-twitter" name="twitter" value="{{ $configuracion->twitter }}" placeholder="https://www.twitter.com/EnTacna">
                            {{-- <span class="help-block">Ej: https://www.twitter.com/EnTacna</span> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-instagram">Instagram</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-instagram" name="instagram" value="{{ $configuracion->instagram }}" placeholder="https://www.instagram.com/EnTacna">
                            {{-- <span class="help-block">Ej: https://www.instagram.com/EnTacna</span> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-youtube">Youtube</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-youtube" name="youtube" value="{{ $configuracion->youtube }}" placeholder="https://www.youtube.com/EnTacna">
                            {{-- <span class="help-block">Ej: https://www.youtube.com/EnTacna</span> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-whatsapp">WhatsApp</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-whatsapp" name="whatsapp" value="{{ $configuracion->whatsapp }}" placeholder="+51972123456">
                            {{-- <span class="help-block">Ej: +51 972123456</span> --}}
                        </div>
                    </div>

                    <hr>
                    <h5>Configuración del portal web</h5>
                    <br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-analitycs">Google Analytics ID</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-analitycs" name="googleID" value="{{ $configuracion->googleID }}" placeholder="UA-124766484-1" required>
                            <span class="help-block">Ingrese su ID de seguimiento de Google Analytics. Ej: UA-124766484-1</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-webmastertools">Google Webmaster Tools</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="entacna-webmastertools" name="googleTools" value="{{ $configuracion->googleTools }}" placeholder="wLg33KYtYgBXfQZDU-9Ipoa5eNaovv4lNvtyHfZcikk" required>
                            <span class="help-block">Ingrese su identificador de Google WebMaster Tools (Search Console)</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="entacna-keygooglemaps">Google Maps API Key</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="googleAPIKey" name="googleAPIKey" value="{{ $configuracion->googleAPIKey }}" required>
                            <span class="help-block">Ingrese su API Key de Google Maps</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <button type="submit" class="btn btn-block btn-primary">Guardar</button>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button type="reset" class="btn btn-block btn-secondary">Limpiar campos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Galería de Fondos
            </div>
            <div class="card-body">
                <div class="form-horizontal">
                    <form id="form-galeria" onsubmit="return false" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group col-md-12 row">
                            <label class="col-md-3 col-form-label" for="titulo">Titulo: </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" id="titulo" name="titulo" class="form-control"/>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group col-md-12 row">
                            <label class="col-md-2 col-form-label" for="imagen">Añadir imagen: </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="imagen" name="imagen" class="form-control" accept=".png, .jpg, .jpeg"/>
                                </div>
                            </div>
				                    </form>
				                    <div class="col-md-4">
				                        <button type="button" class="btn btn-primary btn-block" id="btn-galeria" style="height: 100%;">Agregar</button>
				                    </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="img-galeria">
                                <div class="row galeria-add">
                                    @if (count($galerias)>0)
                                        @foreach ($galerias as $galeria)
                                            <div class="col-xs-3" id="galeria-{{ $galeria->id }}">
                                                <center>
                                                    <a href="{{ $galeria->imagen }}" target="_blank">
                                                        <img src="{{ $galeria->imagen }}" title="{{ $galeria->titulo }}">
                                                    </a>
                                                    <button class="btn btn-eliminar" onclick="deleteGaleria({{ $galeria->id }})">Eliminar</button>
                                                </center>
                                            </div>
                                        @endforeach
                                    @endif
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
    <script>

        $(document).ready(function () {
            //rubros por categoria

            $("#btn-galeria").click(function(){
                agregarGaleria();
            });
        });

        function agregarGaleria(){
            if($("#imagen").val()){
                var form=$("#form-galeria");
                var formData  = new FormData(form[0]);
                //var id=location.pathname.split('/')[3];
                var route='/admin/agregar-galeria-configuracion';
                sendRequestFile(route,formData,'POST',function(data,textStatus){
                    form[0].reset();
                    if(data.status==201){
                        var objeto=JSON.parse(data.responseText);
                        var img='<div class="col-xs-3" id="galeria-'+objeto.id+'">'+
                                    '<center>'+
                                        '<a href="'+objeto.imagen+'" target="_blank">'+
                                            '<img src="'+objeto.imagen+'" title="'+objeto.titulo+'">'+
                                        '</a>'+
                                        '<button class="btn btn-eliminar" onclick="deleteGaleria('+objeto.id+')">Eliminar</button>'+
                                    '</center>'+
                                '</div>';
                        $(".galeria-add").prepend(img);
                        swal({"timer":4000,"title":"La imagen se agregó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                    }
                    else alert('eroor hola!')
                });
            }
        }

        function deleteGaleria(id){
            var token=$("#form-galeria").find('input[name=_token]').val();
            var route='/admin/eliminar-galeria-configuracion/'+id;
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                if(data.status==200){
                    $("#galeria-"+id).remove();
                    swal({"timer":4000,"title":"La imagen se eliminó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
            });
        }

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

        document.getElementById('logo').addEventListener('change', archivoFile, false);
        document.getElementById('image_desc').addEventListener('change', archivoFile, false);
        document.getElementById('favicon').addEventListener('change', archivoFile, false);
        document.getElementById('login').addEventListener('change', archivoFile, false);
    </script>


@endsection