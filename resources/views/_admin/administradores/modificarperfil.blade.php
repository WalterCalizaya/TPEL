@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar Mi Perfil
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Editar perfil
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-administrador/perfil/modificar') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">Administrador</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ Auth::user()->username }}" required>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="nombres">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ Auth::user()->nombres }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">Correo</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ Auth::user()->email }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="fijo">Teléfono / Celular</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="fijo" name="fijo" value="{{ Auth::user()->fijo }}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="nacimiento">Fecha de nacimiento</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control {{ $errors->has('nacimiento') ? ' is-invalid' : '' }}" id="nacimiento" name="nacimiento" value="{{ Auth::user()->nacimiento }}" >
                            @if ($errors->has('nacimiento'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nacimiento') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="ciudad">Ciudad de nacimiento</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ Auth::user()->ciudad }}" >
                        </div>
                    </div>

                    <hr>
                    <h5>Modificar contraseña</h5>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password">Nueva contraseña</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password_confirmation">Confirmar contraseña</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-actions text-center">
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar información</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    
@endsection