@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nuevo lugar en el mapa
@endsection

@section('mapas')
    open
@endsection

@section('agregar-mapa')
    active
@endsection

@section('contenido')
	<div class="card">
        <div class="card-header">
            Agregar nuevo lugar en el mapa
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/mapa-interactivo') }}" method="post">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="lugar">
                        	Nombre del lugar <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('lugar') ? ' is-invalid' : '' }}" id="lugar" name="lugar" required placeholder="Ingrese el nombre del lugar">
                            @if ($errors->has('lugar'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('lugar') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
	                    <label class="col-md-3 col-form-label" for="categoria_mapa_id">
	                    		Categoría <span class="pull-right text-danger">(*)</span>
	                  	</label>
	                    <div class="col-md-9">
                            @php
                                $a=$errors->has('categoria_mapa_id') ? ' is-invalid' : '';
                            @endphp
                            {!! Form::select('categoria_mapa_id',$categorias,null,['class'=>'form-control select2 '.$a,'id'=>'categoria_mapa_id','required'=>'required','placeholder'=>'--SELECCIONE--']) !!}
                            @if ($errors->has('categoria_mapa_id'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('categoria_mapa_id') }}</strong>
                                </span>
                            @endif
	                    </div>
	                </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripcion">
                            Descripción
                        </label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
                        </div>
                    </div>

                    <h4>Elija la ubicación del lugar</h4>
                    <br />

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="latitud">
                            Latitud: <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" id="latitud" name="latitud" class="form-control {{ $errors->has('latitud') ? ' is-invalid' : '' }}" readonly required="" />
                                @if ($errors->has('latitud'))
                                    <span class="invalid-feedback">
                                        <strong>Seleccione una ubicación</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="longitud">
                            Longitud: <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" id="longitud" name="longitud" class="form-control {{ $errors->has('longitud') ? ' is-invalid' : '' }}" readonly required="" />
                                @if ($errors->has('longitud'))
                                    <span class="invalid-feedback">
                                        <strong>Seleccione una ubicación</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
	                    <div class="col-sm-12" style="margin-top:25px;">
	                        <div id="mapa"></div>
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

	<script>
        var latitud = parseFloat(document.getElementById('latitud').value);
		var longitud = parseFloat(document.getElementById('longitud').value);

		if (isNaN(latitud)) { latitud = -18.014236;}
		if (isNaN(longitud)) { longitud = -70.251513;}

		console.log(latitud);

        function initMap() {
        	var latLng = {
        		lat: latitud,
        		lng: longitud
        	}

            var map = new google.maps.Map(document.getElementById('mapa'), {
                center: latLng,
                zoom: 17
            });

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                title: 'Ubicación'
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

@endsection