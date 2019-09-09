@extends('front.layouts.app')

@section('titulo')
Registrar una nueva cuenta
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<style>
	.d-none {
		display: none !important;
	}
</style>
@endsection

@section('content')
<br /><br /><br />
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="message-user" style="margin-top: 10px;"></div>
				<form action="{{ url('/registro-usuario') }}" id="register-form" class="white-popup-block" method="POST">
					@csrf
					<div class="col-md-12">
						<h4>@yield('titulo')</h4>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('nombres') ? ' has-error' : '' }}">
								<label class="control-label">Nombre:</label>
								<input type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" id="nombres" name="nombres">
								@if ($errors->has('nombres'))
				                    <span class="help-block">
				                        <strong>{{ $errors->first('nombres') }}</strong>
				                    </span>
				                @endif
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('apellido') ? ' has-error' : '' }}">
								<label class="control-label">Apellidos:</label>
								<input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" id="apellido" name="apellido">
	                            @if ($errors->has('apellido'))
	                            	<span class="help-block">
				                        <strong>{{ $errors->first('apellido') }}</strong>
				                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('celular') ? ' has-error' : '' }}">
								<label class="control-label">Celular:</label>
								<input type="text" class="form-control" name="celular" value="{{ old('celular') }}" id="celular" name="celular">
	                            @if ($errors->has('celular'))
	                            	<span class="help-block">
				                        <strong>{{ $errors->first('celular') }}</strong>
				                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<label class="control-label">E-mail:</label>
								<input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" name="email">
	                            @if ($errors->has('email'))
	                            	<span class="help-block">
				                        <strong>{{ $errors->first('email') }}</strong>
				                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-4">
							<div class="form-group {{ $errors->has('region') ? ' has-error' : '' }}">
								<label class="control-label">Región:</label>
								{!! Form::select('region',$regiones,old('region'),["class"=>"region form-control select2",'placeholder' => '-- Región --',"required"=>"","id"=>"region"]) !!}
	                            @if ($errors->has('region'))
                            	<span class="help-block">
			                        <strong>{{ $errors->first('region') }}</strong>
			                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-4">
							<div class="form-group {{ $errors->has('provincia') ? ' has-error' : '' }}">
								<label class="control-label">Provincia:</label>
								<select name="provincia" id="provincia" class="form-control select2" required="" placehoder="-- Provincia --"></select>
	                            @if ($errors->has('provincia'))
                            	<span class="help-block">
			                        <strong>{{ $errors->first('provincia') }}</strong>
			                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-4">
							<div class="form-group {{ $errors->has('distrito') ? ' has-error' : '' }}">
								<label class="control-label">Distrito:</label>
								<select name="distrito" id="distrito" class="form-control select2" required="" placeholder="-- Distrito --"></select>
	                            @if ($errors->has('distrito'))
                            	<span class="help-block">
			                        <strong>{{ $errors->first('distrito') }}</strong>
			                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<label class="control-label">Contraseña:</label>
								<input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" name="password">
	                            @if ($errors->has('password'))
	                            	<span class="help-block">
				                        <strong>{{ $errors->first('password') }}</strong>
				                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								<label class="control-label">Repetir contraseña:</label>
								<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation">
	                            @if ($errors->has('password_confirmation'))
	                            	<span class="help-block">
				                        <strong>{{ $errors->first('password_confirmation') }}</strong>
				                    </span>
	                            @endif
	                        </div>
						</div>

						<div class="col-md-6 col-md-offset-3">
							<div class="row">
								<button class="btn-block" type="submit">
									Registrarme
								</button>
							</div>
						</div>
						<p class="link-bottom text-center">¿Ya tienes una cuenta? <a href="{{ url('/login') }}"> Inicia sesión</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if(location.search){
                var q=location.search.split('=');
                if(q[1]=='confirmar-correo'){
                    $("#message-user").html('<div class="alert alert-success background-success">'+
                        '<h5>¡Un último paso!</h5>'+
                        '</div>'+
                        '<p>Por favor, revise el e-mail que le enviamos a su bandeja de entrada o la carpeta de SPAM (correo no deseado) y siga las instrucciones.</p>'+
                        '<p>La confirmación del registro de su cuenta de correo permite verificar la validez de la información registrada, a la vez que es el medio principal de comunicación entre el usuario y <strong>Tu Profe en Línea</strong>.</p>'+
                        '<p>Muchas Gracias.</p>'+
                        '<a href="{{ url('login') }}" class="btn btn-theme effect btn-md">Click aquí para iniciar sesión</a>');
                }
                else if(q[1]=='link-invalido'){
                    $("#message-user").html('<div class="alert alert-danger background-danger">'+
                        '<strong>Link inválido!</strong> No tenemos registro del enlace al que acabas de acceder.'+
                        '</div>'+
                        '<a href="{{ url('/') }}" class="btn btn-theme effect btn-md">Ir a la página principal</a>');
                }
                else{
                    $("#message-user").html('<div class="alert alert-danger background-danger">'+
                        '<strong>¡Cuidado!</strong> No deberías estar aquí 😡'+
                        '</div>'+
                        '<a href="{{ url('/') }}" class="btn btn-theme effect btn-md"><i class="icofont icofont-arrow-left"></i> Ir a la página principal</a>');
                }
                //window.history.pushState('',document.title,'/login')
                $("#register-form").addClass('d-none');
                $("#register-title").addClass('d-none');
                // setTimeout(function(){
                //     $("#message-user").html('');
                //     $("#register-form").removeClass('d-none');
                // }, 20000);
            }
        });
    </script>

    <script type="text/javascript">
        function sendRequest(url,data,method,cb) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            opts={};
            opts.url=url;
            if (data) opts.data=data;
            opts.method=method;
            opts.complete=cb;
            $.ajax(opts);
        }

        $(document).ready(function () {
            //cargar provincias
            $("#region").change(function(){
                if(this.value){
                    var route='/obtener-provincias/'+this.value;
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
                    var route='/obtener-distritos/'+this.value;
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


        $(document).ready(function() {
            $('.select2').select2();
        });

        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
    </script>
@endsection