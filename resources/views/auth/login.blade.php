@extends('front.layouts.app')

@section('titulo')
Inicio de sesión
@endsection

@section('content')
<br /><br /><br />
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="{{ route('login') }}" id="login-form" class="white-popup-block" method="POST">
					@csrf
					<div class="col-md-12">
						<h4>Inicia sesión</h4>
						<div id="message-user" style="margin-top: 10px;"></div>
						<div class="col-md-12">
							<div class="row">
								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" id="email" name="email">
					                @if ($errors->has('email'))
					                    <span class="help-block">
					                        <strong>{{ $errors->first('email') }}</strong>
					                    </span>
					                @endif
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
									<input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
					                @if ($errors->has('password'))
					                    <span class="help-block">
					                        <strong>{{ $errors->first('password') }}</strong>
					                    </span>
					                @endif
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<label for="login-remember"><input type="checkbox" id="login-remember">Recordar credenciales</label>
								<a title="Lost Password" href="{{ url('/password/reset') }}" class="lost-pass-link">¿Perdiste tu contraseña?</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<button type="submit">
									Iniciar sesión
								</button>
							</div>
						</div>
						<p class="link-bottom">¿Todavía no estás registrado? <a href="{{ url('/registro-usuario') }}">¡Hazlo ahora!</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		//debugger;
		if(location.search){
			var q=location.search.split('=');
			if(q[1]=='verificado'){
				$("#message-user").html('<div class="alert alert-success alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>¡Cuenta verificada!</strong> Ahora puedes iniciar sesión y acceder a la plataforma.'+
				'</div>');
			}
			else if(q[1]=='link-invalido'){
				$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>Opss!</strong> El usuario ya está verificado.'+
				'</div>');
			}
			else if(q[1]=='sin-confirmar'){
				$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>¡Su cuenta no está verificada!</strong> Confirme su correo electrónico.'+
				'</div>');
			}
			else if(q[1]=='incorrectos'){
				$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>¡Datos incorrectos!</strong> Usuario o contraseña incorrectos'+
				'</div>');
			}
			else if (q[1]==1) {
				$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>¡Usuario cancelado!</strong> Por favor pongase en contacto con el Administrador del sistema.'+
				'</div>');
			}
			else if(q[1]==0){
				$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'<strong>¡Su cuenta esta siendo utilizada en este momento!</strong> Sí esto es un error contacte con el administrador inmediamente.'+
				'</div>');
			}
			window.history.pushState('',document.title,'/login')
			setTimeout(function(){
				$("#message-user").html('');
			}, 20000);
		}
	});
</script>
@endsection