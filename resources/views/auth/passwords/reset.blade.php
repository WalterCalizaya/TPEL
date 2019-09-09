<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ $configuracion->favicon }}">
    <title>Cambiar contraseña - ENTACNA.ORG</title>
    <!-- Icons-->
    <link href="/assets/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/assets/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application-->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
</head>
<body class="app flex-row align-items-center" style="background: url({{ $configuracion->login ? $configuracion->login : '/assets/img/login-bg.jpg' }}) #cccccc bottom center no-repeat fixed;background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($error==1)
                		<div id="message-user" style="margin-top: 10px; background-color: #fff; padding: 40px;">
                        <div class="alert alert-danger alert-dismissible">
                            <strong>¡Error!</strong> El token para reestablecer su contraseña es inválido o ya fue utilizado.
                        </div>
                        <div class="row">
                        	 	<div class="col-6">
		                            <a href="{{ url('/login') }}" class="btn btn-primary btn-block px-4"><i class="fa fa-chevron-circle-left"></i> Iniciar sesión</a>
		                        </div>
		                        <div class="col-6">
		                            <a href="{{ url('/password/reset') }}" class="btn btn-primary btn-block px-4">Volver a intentar <i class="fa fa-chevron-circle-right"></i> </a>
		                        </div>
                        </div><!-- /.row -->
                		</div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 {{ $error ==1 ? 'd-none' : ''}}">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Cambiar Contraseña</h1>
                            <p class="text-muted">Ingrese su nueva contraseña</p>
                            <form action="{{ url('/password/reset/'.$token) }}" method="POST">
                                @csrf
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" id="password" name="password" required="">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirmar Contraseña" id="password_confirmation" name="password_confirmation" required="">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Enviar</button>
                                    </div>
                                </div>
                            </form>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/node_modules/pace-progress/pace.min.js"></script>
    <script src="/assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="/assets/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        });
    </script>
</body>
</html>
