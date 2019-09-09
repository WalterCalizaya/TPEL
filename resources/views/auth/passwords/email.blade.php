<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ $configuracion->favicon }}">
    <title>Reestablecer Contraseña - EnTacna.org</title>
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
                <div id="message-user" style="margin-top: 10px;">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Reestablecer contraseña</h1>
                            <p class="text-muted">Le enviaremos por e-mail un enlace privado para que pueda modificar su contraseña.</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" id="email" name="email" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{ url('/login') }}" class="btn btn-secondary"><i class="fa fa-chevron-circle-left"></i> Volver</a>
                                    </div>
                                </div>
                            </form>
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
            //debugger;
            if(location.search){
                var q=location.search.split('=');
                var enlace = location.origin;
                if(q[1]=='reestablecer-correo'){
                    $("#message-user").html('<div class="alert alert-success alert-dismissible">'+
                        '<span>Hemos enviado un correo electrónico con la información necesaria.</span><br><span>Por favor, revise su bandeja de entrada (o la carpeta SPAM).</span>'+
                    '</div>');
                }else if((q[1]=='error')){
                	$("#message-user").html('<div class="alert alert-danger alert-dismissible">'+
                        '<span>Su correo electrónico no está enlazado con ninguna cuenta de EnTacna.</span><br><span>Si desea, puede <a href="'+enlace+'/registro-usuario">registrarse</a> en el portal web.</span>'+
                    '</div>');
                }
                window.history.pushState('',document.title,'/password/reset')
                setTimeout(function(){
                    $("#message-user").html('');
                }, 20000);
            }
        });
    </script>
</body>
</html>

