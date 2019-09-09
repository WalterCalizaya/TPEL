@extends('admin.layouts.app')

@section('title')
Agregar curso de certificación
@endsection

@section('certificaciones')
active pcoded-trigger
@endsection

@section('listado')
active
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<style>
    #mapa{
        height: 500px;
        width: 100%;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
            </div>
            <div class="card-block">

                <form action="{{ url('/admin/certificaciones') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-10 offset-sm-1">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="estado">
                                Estado
                            </label>
                            <div class="col-md-10">
                                <select name="estado" id="estado" class="form-control form-control-round fill select2">
                                    <option value="1" {{ old('estado') == '1' ? 'selected' : '' }}>Publicar inmediatamente</option>
                                    <option value="0" {{ old('estado') == '0' ? 'selected' : '' }}>Guardar como borrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tipo_certificacion') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="tipo_certificacion">
                                Empresa
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('tipo_certificacion',$tipocertificaciones,old('tipo_certificacion'),["class"=>"tipo_certificacion form-control form-control-round fill select2 ",'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"tipo_certificacion"]) !!}
                                @if ($errors->has('tipo_certificacion'))
                                    <div class="col-form-label">
                                        {{ $errors->first('tipo_certificacion') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('clase_certificacion') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="clase_certificacion">
                                Certificación
                            </label>
                            <div class="col-md-10">
                                <select name="clase_certificacion" id="clase_certificacion" class="form-control form-control-round fill select2" required>
                                    <option>-- SELECCIONE --</option>
                                </select>
                                @if ($errors->has('clase_certificacion'))
                                    <div class="col-form-label">
                                        {{ $errors->first('clase_certificacion') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('objetivos') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="objetivos">
                                Objetivos
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('objetivos') ? ' form-control-danger' : '' }}" id="objetivos" name="objetivos">
                                    {{ old('objetivos') ? old('objetivos') : '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p><p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p><p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p><p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>' }}
                                </textarea>
                                @if ($errors->has('objetivos'))
                                <div class="col-form-label">
                                    {{ $errors->first('objetivos') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('dirigido') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="dirigido">
                                Dirigido a
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('dirigido') ? ' form-control-danger' : '' }}" id="dirigido" name="dirigido">
                                    {{ old('dirigido') ? old('dirigido') : '<ul>
                                    <li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
                                    <ul>
                                    <li>Redes Corporativas</li>
                                    <li>Clientes WISP e ISP</li>
                                    <li>Pequeña y mediana empresa</li>
                                    </ul>
                                    </li>
                                    <li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
                                    </ul>' }}
                                </textarea>
                                @if ($errors->has('dirigido'))
                                <div class="col-form-label">
                                    {{ $errors->first('dirigido') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('conocimientos') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="conocimientos">
                                Conocimientos
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('conocimientos') ? ' form-control-danger' : '' }}" id="conocimientos" name="conocimientos">
                                    {{ old('conocimientos') ? old('conocimientos') : '<ul>
                                    <li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
                                    </ul>' }}
                                </textarea>
                                @if ($errors->has('conocimientos'))
                                <div class="col-form-label">
                                    {{ $errors->first('conocimientos') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('requisitos') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="requisitos">
                                Requisitos
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('requisitos') ? ' form-control-danger' : '' }}" id="requisitos" name="requisitos">
                                    {{ old('requisitos') ? old('requisitos') : '<ul>
                                    <li>1 Laptop</li>
                                    <li>1 Patch Cord</li>
                                    <li>1 Supresor de Picos</li>
                                    </ul>' }}
                                </textarea>
                                @if ($errors->has('requisitos'))
                                <div class="col-form-label">
                                    {{ $errors->first('requisitos') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('incluye') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="incluye">
                                Incluye
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('incluye') ? ' form-control-danger' : '' }}" id="incluye" name="incluye">
                                    {{ old('incluye') ? old('incluye') : '<ul>
                                    <li>Entrenamiento personalizado</li>
                                    <li>Derecho al Examen de Certificación MikroTik</li>
                                    <li>Libro digital en Español</li>
                                    <li>Certificado de capacitación</li>
                                    <li>Pertenecer al grupo de consultores de Tacnatel</li>
                                    <li>Licencia MikroTik Level 04</li>
                                    </ul>' }}
                                </textarea>
                                @if ($errors->has('incluye'))
                                <div class="col-form-label">
                                    {{ $errors->first('incluye') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('fecha_inicio') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="fecha_inicio">
                                Fecha inicial
                            </label>
                            <div class="col-md-10">
                                <input type="date" class="form-control form-control-round {{ $errors->has('fecha_inicio') ? ' form-control-danger' : '' }}" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}">

                                @if ($errors->has('fecha_inicio'))
                                <div class="col-form-label">
                                    {{ $errors->first('fecha_inicio') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('fecha_fin') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="fecha_fin">
                                Fecha final
                            </label>
                            <div class="col-md-10">
                                <input type="date" class="form-control form-control-round {{ $errors->has('fecha_fin') ? ' form-control-danger' : '' }}" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin') }}">

                                @if ($errors->has('fecha_fin'))
                                <div class="col-form-label">
                                    {{ $errors->first('fecha_fin') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('hora_inicio') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="hora_inicio">
                                Hora inicial
                            </label>
                            <div class="col-md-10">
                                <input type="time" class="form-control form-control-round {{ $errors->has('hora_inicio') ? ' form-control-danger' : '' }}" id="hora_inicio" name="hora_inicio" value="{{ old('hora_inicio') }}" step="1">

                                @if ($errors->has('hora_inicio'))
                                <div class="col-form-label">
                                    {{ $errors->first('hora_inicio') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('hora_fin') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="hora_fin">
                                Hora final
                            </label>
                            <div class="col-md-10">
                                <input type="time" class="form-control form-control-round {{ $errors->has('hora_fin') ? ' form-control-danger' : '' }}" id="hora_fin" name="hora_fin" value="{{ old('hora_fin') }}" step="1">

                                @if ($errors->has('hora_fin'))
                                <div class="col-form-label">
                                    {{ $errors->first('hora_fin') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('precio') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="precio">
                                Precio
                            </label>
                            <div class="col-md-3">
                                <select name="moneda" id="moneda" class="form-control form-control-round fill select2">
                                    <option value="S/">Soles (S/)</option>
                                    <option value="US$">Dólares (US$)</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control form-control-round {{ $errors->has('precio') ? ' form-control-danger' : '' }}" id="precio" name="precio" value="{{ old('precio') }}">
                                @if ($errors->has('precio'))
                                <div class="col-form-label">
                                    {{ $errors->first('precio') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('instructor') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="instructor">
                                Instructor
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('instructor',$instructores,null,['id'=>"instructor",'class'=>"form-control form-control-round fill select2". ($errors->has('instructor') ? ' form-control-danger' : ''),'placeholder' => '-- SELECCIONE --',"required"=>""]) !!}
                                @if ($errors->has('instructor'))
                                    <div class="col-form-label">
                                        {{ $errors->first('instructor') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('temario') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="temario">
                                Temario
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('temario',$temarios,old('temario'),["class"=>"temario form-control form-control-round fill select2 ",'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"temario"]) !!}
                                @if ($errors->has('temario'))
                                    <div class="col-form-label">
                                        {{ $errors->first('temario') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('region') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="region">
                                Región
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('region',$regiones,old('region'),["class"=>"region form-control form-control-round fill select2 ",'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"region"]) !!}
                                @if ($errors->has('region'))
                                    <div class="col-form-label">
                                        {{ $errors->first('region') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('provincia') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="provincia">
                                Provincia
                            </label>
                            <div class="col-md-10">
                                <select name="provincia" id="provincia" class="form-control form-control-round fill select2" required>
                                    <option>-- SELECCIONE --</option>
                                </select>
                                @if ($errors->has('provincia'))
                                    <div class="col-form-label">
                                        {{ $errors->first('provincia') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('distrito') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="distrito">
                                Distrito
                            </label>
                            <div class="col-md-10">
                                <select name="distrito" id="distrito" class="form-control form-control-round fill select2" required>
                                    <option>-- SELECCIONE --</option>
                                </select>
                                @if ($errors->has('distrito'))
                                    <div class="col-form-label">
                                        {{ $errors->first('distrito') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('direccion') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="direccion">
                                Dirección
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-round {{ $errors->has('direccion') ? ' form-control-danger' : '' }}" id="direccion" name="direccion" value="{{ old('direccion') }}">
                                @if ($errors->has('direccion'))
                                <div class="col-form-label">
                                    {{ $errors->first('direccion') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="coordenadas">
                                Coordenadas
                            </label>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-round" id="latitud" name="latitud" value="{{ old('latitud') }}" readonly>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-round" id="longitud" name="longitud" value="{{ old('longitud') }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div id="mapa"></div>
                        </div>
                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-save"></i> Guardar
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-refresh"></i> Limpiar
                                </button>
                            </div>
                        </div>
                    </div><!-- /.col-sm-10 offset-sm-1 -->

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script src="/resources/lib/textboxio/textboxio.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
        var latitud = parseFloat(document.getElementById('latitud').value);
        var longitud = parseFloat(document.getElementById('longitud').value);

        if (isNaN(latitud)) { latitud = -12.0551637 }
        if (isNaN(longitud)) { longitud = -77.0802424 }

        //console.log(latitud);

        function initMap() {
            var latLng = {
                lat: latitud,
                lng: longitud
            }

            var styles = [{
                featureType: "poi",
                elementType: "labels",
                stylers: [{ visibility: "off" }]
            }];

            var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

            var map = new google.maps.Map(document.getElementById('mapa'), {
                center: latLng,
                zoom: 5
            });

            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                icon: '{{ url('/resources/img/default-map.png') }}',
            });

            marker.addListener('click', toggleBounce);
            marker.addListener( 'dragend', function (event){
                document.getElementById("latitud").value = this.getPosition().lat();
                document.getElementById("longitud").value = this.getPosition().lng();
            });
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAin7CPd7GEi2ZxrEOAAuF1eH3iI2gF4tk&callback=initMap"></script>


<script type="text/javascript">
    $(document).ready(function () {
        //Cargar certificaciones de empresas
        $("#tipo_certificacion").change(function(){
            if(this.value){
                var route='/admin/tipos-certificacion/'+this.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option>-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,tipocertificacion){
                            option=option+'<option value="'+tipocertificacion.id+'">'+tipocertificacion.certificacion+'</option>';
                        });
                        $("#clase_certificacion").html(option);
                    }
                    else{
                        alert('Error, no se pudo cargar la información');
                    }
                });
            }
            else{
                $("#clase_certificacion").html('<option>-- SELECCIONE --</option>');
            }
        });

        //cargar provincias
        $("#region").change(function(){
            if(this.value){
                var route='/admin/provincias/'+this.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option>-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,provincia){
                            option=option+'<option value="'+provincia.id+'">'+provincia.nombre+'</option>';
                        });
                        $("#provincia").html(option);
                    }
                    else{
                        alert('Error, no se pudo cargar la información');
                    }
                });
            }
            else{
                $("#provincia").html('<option>-- SELECCIONE --</option>');
                $("#distrito").html('<option>-- SELECCIONE --</option>');
            }
        });

        //cargar distritos
        $("#provincia").change(function(){
            if(this.value){
                var route='/admin/distritos/'+this.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option>-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,distrito){
                            option=option+'<option value="'+distrito.id+'">'+distrito.nombre+'</option>';
                        });
                        $("#distrito").html(option);
                    }
                    else{
                        alert('Error, no se pudo cargar la información');
                    }
                });
            }
            else{
                $("#distrito").html('<option>-- SELECCIONE --</option>');
            }
        });

    });

    var editor = textboxio.replaceAll('textarea');

    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection
