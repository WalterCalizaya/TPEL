@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nuevo Administrador
@endsection

@section('administradores')
    open
@endsection

@section('agregar-administrador')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nuevo Administrador
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-administrador') }}" method="post">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">
                            Administrador <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" id="username" name="username" placeholder="Username" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">
                            Correo electrónico <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="email" name="email" placeholder="example@email.com" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password">
                            Contraseña <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group ">
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" id="password" name="password" placeholder="******" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                                <div class="input-group-prepend" id="password_show">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye fa-2x" id="password_icon"></i>
                                    </span>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password_confirmation">
                            Confirmar contraseña <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group ">
                                <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" placeholder="******" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                                <div class="input-group-prepend" id="password_confirmation_show">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye fa-2x" id="password_confirmation_icon"></i>
                                    </span>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="nombres">
                            Nombres y apellidos <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('nombres') ? ' is-invalid' : '' }}" value="{{ old('nombres') }}" id="nombres" name="nombres" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="num_doc">
                            DNI <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('num_doc') ? ' is-invalid' : '' }}" value="{{ old('num_doc') }}" id="num_doc" name="num_doc" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('num_doc'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('num_doc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="fijo">
                            Celular/Teléfono <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control {{ $errors->has('fijo') ? ' is-invalid' : '' }}" value="{{ old('fijo') }}" id="fijo" name="fijo" required {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('fijo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('fijo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="direccion">Dirección</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ old('direccion') }}" id="direccion" name="direccion" {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    @if (Auth::user()->id==1||Auth::user()->id==2)
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar campos</button>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#password_show').click(function () {
                if($('#password').attr('type')=="password"){
                    $('#password').attr('type', 'text');
                    $('#password_icon').removeClass('fa-eye').addClass('fa-eye-slash');
                }
                else{
                    $('#password').attr('type', 'password');
                    $('#password_icon').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
            $('#password_confirmation_show').click(function () {
                if($('#password_confirmation').attr('type')=="password"){
                    $('#password_confirmation').attr('type', 'text');
                    $('#password_confirmation_icon').removeClass('fa-eye').addClass('fa-eye-slash');
                }
                else{
                    $('#password_confirmation').attr('type', 'password');
                    $('#password_confirmation_icon').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

        });
    </script>
@endsection