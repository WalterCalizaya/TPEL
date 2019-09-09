@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nueva Empresa
@endsection

@section('agregar-empresa')
    open
@endsection

{{--  @section('agregar-usuario')
    active
@endsection  --}}

@section('contenido')
    <form action="{{ url('/admin/lista-empresa') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Información básica
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal col-sm-8 offset-sm-2">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="seccion">
                                		Usuario <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <select id="user_id" name="user_id" class="form-control select2 {{ $errors->has('user_id') ? ' is-invalid' : '' }}" required>
                                        <option selected value="">-- SELECCIONE --</option>
                                        @foreach ($users as $user)
                                            @if (!$user->empresa)
                                                <option value="{{ $user->id }}">{{ $user->username.' - '.$user->razon_social }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                		Tipo de empresa <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" id="menbresia" value="0" name="menbresia" required="">
                                        <label class="form-check-label" for="menbresia">Empresa gratuita</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" id="menbresia2" value="1" name="menbresia" required="">
                                        <label class="form-check-label" for="activo2">Empresa premiun</label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="razon_comercial">
                                		Nombre comercial <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('razon_comercial') ? ' is-invalid' : '' }}" value="{{ old('razon_comercial') }}" id="razon_comercial" name="razon_comercial" required placeholder="Ingrese el nombre comercial o corto de la empresa">
                                    @if ($errors->has('razon_comercial'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('razon_comercial') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="razon_social">
                                		Razón Social <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('razon_social') ? ' is-invalid' : '' }}" value="{{ old('razon_social') }}" id="razon_social" name="razon_social" required readonly>
                                    @if ($errors->has('razon_social'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('razon_social') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="ruc">
                                		RUC/DNI <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('ruc') ? ' is-invalid' : '' }}" value="{{ old('ruc') }}" id="ruc" name="ruc" required readonly>
                                    @if ($errors->has('ruc'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ruc') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="categoria_id">
                                		Categoría <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    @php
                                        $er=$errors->has('categoria_id') ? ' is-invalid' : '';
                                    @endphp
                                    {!! Form::select('categoria_id',$categorias,old('categoria_id'),["class"=>"form-control select2 ".$er,'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"categoria_id"]) !!}
                                    @if ($errors->has('categoria_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('categoria_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="rubro_id">
                                		Rubro <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <select id="rubro_id" name="rubro_id" class="form-control select2 {{ $errors->has('categoria_id') ? ' is-invalid' : '' }}" required>
                                        <option>-- SELECCIONE --</option>
                                    </select>
                                    @if ($errors->has('rubro_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('rubro_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="perfil">
                                		Imagen de perfil <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="file" id="perfil" name="perfil" class="form-control file" required accept=".jpg, .png, .jpeg">
                                    <br>
                                    <span class="help-block">Una imagen que será mostrada en el perfil de la empresa. <i style="color: red;">Se recomienda el tamaño 550px x 500px</i></span>
                                    <br><br>
                                    <h6>Previsualización:</h6><img id="img-perfil" src="/assets/img/avatars/img.jpg" style="width:305px; height:277px;" alt="Previsualización" class="img-responsive">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="portada">
                                		Imagen de portada <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="file" id="portada" name="portada" class="form-control file" required accept=".jpg, .png, .jpeg">
                                    <br>
                                    <span class="help-block">Una imagen que será mostrada en el perfil empresarial. <i style="color: red;">Se recomienda el tamaño 1200px x 600px</i></span>
                                    <br><br>
                                    <h6>Previsualización:</h6><img id="img-portada" src="/assets/img/avatars/img.jpg" style="width:400px; height: 200px;" alt="Previsualización" class="img-responsive">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="url">
                                		Contacto (URL)
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('url') }}" id="url" name="url">
                                    <span class="help-block">Ej: https://entacna.org/contacto <i style="color: red;">No e-mail, no teléfono</i>.</span>
                                </div>
                            </div>

                            <hr>

                            <h5>Redes sociales</h5>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="facebook">
                                		Facebook <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}" value="{{ old('facebook') }}" id="facebook" name="facebook" required>
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('facebook') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: https://www.facebook.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="twitter">Twitter</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('twitter') }}" id="twitter" name="twitter">
                                    <span class="help-block">Ej: https://www.twitter.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="instagram">Instagram</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('instagram') }}" id="instagram" name="instagram">
                                    <span class="help-block">Ej: https://www.instagram.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="youtube">Youtube</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('youtube') }}" id="youtube" name="youtube">
                                    <span class="help-block">Ej: https://www.youtube.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="google">Google</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('google') }}" id="google" name="google">
                                    <span class="help-block">Ej: https://www.google-plus.com/EnTacna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Información de la empresa
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal col-sm-8 offset-sm-2">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="inicio">
                                		Hora de apertura <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('inicio') ? ' is-invalid' : '' }}" value="{{ old('inicio') }}" id="inicio" name="inicio" required>
                                    @if ($errors->has('inicio'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('inicio') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 9:00 hrs</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fin">
                                		Hora de cierre <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('fin') ? ' is-invalid' : '' }}" value="{{ old('fin') }}" id="fin" name="fin" required>
                                    @if ($errors->has('fin'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fin') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 17:00 hrs</span>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fundacion">
                                		Se fundó <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control {{ $errors->has('fundacion') ? ' is-invalid' : '' }}" value="{{ old('fundacion') }}" id="fundacion" name="fundacion">
                                    @if ($errors->has('fundacion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fundacion') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 20/02/2010</span>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="pais">
                                		País <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('pais') ? ' is-invalid' : '' }}" value="Perú" id="pais" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="ciudad">
                                		Ciudad <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="Tacna" id="ciudad" name="ciudad">
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="mision">
                                		Misión <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <textarea id="mision" name="mision" rows="3" class="form-control {{ $errors->has('mision') ? ' is-invalid' : '' }}">{{ old('mision') }}</textarea>
                                    @if ($errors->has('mision'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mision') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="vision">
                                		Visión <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <textarea id="vision" name="vision" rows="3" class="form-control {{ $errors->has('vision') ? ' is-invalid' : '' }}">{{ old('vision') }}</textarea>
                                    @if ($errors->has('vision'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('vision') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>--}}

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fijo">
                                		Celular/Teléfono <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control {{ $errors->has('fijo') ? ' is-invalid' : '' }}" value="{{ old('fijo') }}" id="fijo" name="fijo" required>
                                    @if ($errors->has('fijo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fijo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fijo2">
                                		Teléfono alternativo
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ old('fijo2') }}" id="fijo2" name="fijo2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="direccion">
                                		Dirección <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ old('direccion') }}" id="direccion" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="descripcion">
                                		Descripción <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <textarea id="descripcion" name="descripcion" rows="6" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" required>{{ old('descripcion') }}</textarea>
                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ubicación
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal">

                            <h4>Elija la ubicación de su empresa en el mapa</h4>

                            <div class="form-group col-md-8 offset-md-2 row">
                                <label class="col-md-3 col-form-label" for="latitud">Latitud: </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('latitud') }}" id="latitud" name="latitud" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-8 offset-md-2 row">
                                <label class="col-md-3 col-form-label" for="longitud">Longitud: </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('longitud') }}" id="longitud" name="longitud" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div id="mapa"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="form-actions col-sm-6">
                <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                <br>
            </div>
            <div class="form-actions col-sm-6">
                <button type="reset" class="btn btn-block btn-secondary">Limpiar campos</button>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script>
        // var latitud = parseFloat(document.getElementById('latitud').value);
        // var longitud = parseFloat(document.getElementById('longitud').value);

        // if (isNaN(latitud)) { latitud = -18.014236;}
        // if (isNaN(longitud)) { longitud = -70.251513;}

        // function initMap() {
        //     var latLng = {
        //         lat: latitud,
        //         lng: longitud
        //     }

        //     var map = new google.maps.Map(document.getElementById('mapa'), {
        //         center: latLng,
        //         zoom: 17
        //     });

        //     var marker = new google.maps.Marker({
        //         position: latLng,
        //         map: map,
        //         draggable: true,
        //             animation: google.maps.Animation.DROP,
        //         title: 'Ubicación'
        //     });

        //     marker.addListener('click', toggleBounce);
        //     marker.addListener( 'dragend', function (event){
        //         document.getElementById("latitud").value = this.getPosition().lat();
        //         document.getElementById("longitud").value = this.getPosition().lng();
        //     });
        // }

        // function toggleBounce() {
        //     if (marker.getAnimation() !== null) {
        //         marker.setAnimation(null);
        //     } else {
        //         marker.setAnimation(google.maps.Animation.BOUNCE);
        //     }
        // }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAin7CPd7GEi2ZxrEOAAuF1eH3iI2gF4tk&callback=initMap"></script>

    <script>
        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
        $("#descripcion").hashtags();
        $(document).ready(function () {
            //rubros por categoria
            $("#categoria_id").change(function(){
                if(this.value){
                    var route='/admin/lista-empresa-rubros/'+this.value;
                    sendRequest(route,null,'GET',function(data,textStatus){
                        if(data.status==200){
                            var option='<option>-- SELECCIONE --</option>';
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
                    $("#rubro_id").html('<option>-- SELECCIONE --</option>');
                }
            });

            $("#user_id").change(function(){
                if(this.value){
                    var route='/admin/lista-empresa-user/'+this.value;
                    sendRequest(route,null,'GET',function(data,textStatus){
                        if(data.status==200){
                            var objeto=JSON.parse(data.responseText);
                            $("#razon_social").val(objeto.razon_social);
                            $("#ruc").val(objeto.ruc);
                            $("#fijo").val(objeto.fijo);
                            $("#direccion").val(objeto.direccion);
                        }
                        else{
                            alert('error');
                        }
                    });
                }
                else{
                    $("#razon_social").val('');
                    $("#ruc").val('');
                    $("#fijo").val('');
                    $("#direccion").val('');
                }
            });
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

        document.getElementById('perfil').addEventListener('change', archivoFile, false);
        document.getElementById('portada').addEventListener('change', archivoFile, false);
    </script>
@endsection