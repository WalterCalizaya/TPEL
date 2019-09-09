@extends('front.layouts.app')

@section('titulo')
Recuperar cuenta
@endsection

@section('css')
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
			@if ($error == 1)
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12">
						<h4>@yield('titulo')</h4>
						<div id="message-user" style="margin-top: 10px;">
							<div class="alert alert-danger background-danger">
								<strong>¡Error!</strong> El enlace para reestablecer su contraseña es inválido o ya fue utilizado.
							</div>
						</div>
						<p class="link-bottom">¿Desea generar un nuevo enlace? <a href="{{ url('/password/reset') }}">¡Clic aquí!</a></p>

					</div>
				</div>
			@else
				<div class="col-md-8 col-md-offset-2">
					<form action="{{ url('/password/reset/'.$token) }}" id="login-form" class="white-popup-block" method="POST">
						@csrf
						<div class="col-md-12">
							<h4>@yield('titulo')</h4>
							<p>Seguiste un enlace válido, ingresa una nueva contraseña para tu cuenta.</p>
							<div id="message-user" style="margin-top: 10px;"></div>
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
									<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
										<input type="password" class="form-control" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation">
						                @if ($errors->has('password_confirmation'))
						                    <span class="help-block">
						                        <strong>{{ $errors->first('password_confirmation') }}</strong>
						                    </span>
						                @endif
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<button type="submit">
										Cambiar contraseña
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			@endif

		</div>
	</div>
</div>
@endsection