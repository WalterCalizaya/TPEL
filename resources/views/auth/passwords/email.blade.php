@extends('front.layouts.app')

@section('titulo')
Recuperar contraseña
@endsection

@section('content')
<br /><br /><br />
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="{{ route('password.email') }}" id="login-form" class="white-popup-block" method="POST">
					@csrf
					<div class="col-md-12">
						<h4>@yield('titulo')</h4>
						<div id="message-user" style="margin-top: 10px;"></div>
						<p>Le enviaremos por e-mail un enlace privado para que pueda asignar a su cuenta una nueva contraseña.</p>
						<div class="col-md-12">
							<div class="row">
								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" id="email" name="email">
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
								<div class="col-md-10 col-md-offset-1">
									<button type="submit" class="btn-block">
										{{ __('Send Password Reset Link') }}
									</button>
								</div>
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
        if(location.search){
            var q=location.search.split('=');
            var enlace = location.origin;
            if(q[1]=='reestablecer-correo'){
                $("#message-user").html('<div class="alert alert-success background-success">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<i class="icofont icofont-close-line-circled text-white"></i>'+
					'</button>'+
                    'Hemos enviado un correo electrónico con la información necesaria. Por favor, revise su bandeja de entrada (o la carpeta SPAM).'+
                '</div>');
            }else if((q[1]=='error')){
            	$("#message-user").html('<div class="alert alert-warning background-warning">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<i class="icofont icofont-close-line-circled text-white"></i>'+
					'</button>'+
                    'Su correo electrónico no se encuentra en nuestros registros.<br>Si desea, puede <a href="'+enlace+'/registro-usuario">registrar una cuenta</a>.</span>'+
                '</div>');
            }
            window.history.pushState('',document.title,'/password/reset')
            // setTimeout(function(){
            //     $("#message-user").html('');
            // }, 20000);
        }
    });
</script>
@endsection