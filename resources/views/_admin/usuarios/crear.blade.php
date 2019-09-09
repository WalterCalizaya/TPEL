@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nuevo Usuario
@endsection

@section('usuarios')
    open
@endsection

@section('agregar-usuario')
    active
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nuevo usuario
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-usuario') }}" method="post">
                @csrf
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">
                        	Usuario <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" id="username" name="username" required>
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
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="email" name="email" required>
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
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" id="password" name="password" required>
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
                                <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" required>
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
                        <label class="col-md-3 col-form-label">
                        		Tipo de usuario <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" id="normal" name="tipo" required>
                                <label class="form-check-label" for="normal">
                                    Usuario normal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" id="empresa" name="tipo" required>
                                <label class="form-check-label" for="empresa">
                                    Usuario empresarial
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="nombres">
                        		Nombres y apellidos (Representante) <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('nombres') ? ' is-invalid' : '' }}" value="{{ old('nombres') }}" id="nombres" name="nombres" required>
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row" id="razon_social_div">
                        <label class="col-md-3 col-form-label" for="razon_social">
                        		Razon Social/Nombre de la empresa <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('razon_social') ? ' is-invalid' : '' }}" value="{{ old('razon_social') }}" id="razon_social" name="razon_social" required>
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
                            <input type="text" class="form-control {{ $errors->has('ruc') ? ' is-invalid' : '' }}" value="{{ old('ruc') }}" id="ruc" name="ruc" required max="11" min="7">
                            @if ($errors->has('ruc'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('ruc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

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
                        <label class="col-md-3 col-form-label" for="direccion">
                        		Dirección <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ old('direccion') }}" id="direccion" name="direccion">
                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
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

            $("input:radio[name='tipo']").change(function () {
                if(this.value==2){
                    $('#razon_social_div').addClass('d-none');
                    $('#razon_social').removeAttr('required');
                }
                else{
                    $('#razon_social_div').removeClass('d-none');
                    $('#razon_social').attr('required','required');
                }
            });

        });
    </script>
@endsection