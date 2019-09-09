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
            Editar usuario
        </div>
        <div class="card-body">
            <h2>Estás editante el usuario: <strong>{{ $user->username }}</strong></h2>
            <br>
            <form action="{{ url('/admin/lista-usuario/'.$user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">
                        		Usuario <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ $user->username }}" id="username" name="username" required>
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
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $user->email }}" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Estado del usuario</label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="activo" value="1" name="activo" {{ $user->activo==1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="activo">Usuario permitido</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="activo2" value="0" name="activo" {{ $user->activo==0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="activo2">Usuario bloqueado</label>
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
                                <input class="form-check-input" type="radio" value="2" id="normal" name="tipo" required {{ $user->tipo==2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="normal">
                                    Usuario normal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" id="empresa" name="tipo" required {{ $user->tipo==3 ? 'checked' : '' }}>
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
                            <input type="text" class="form-control {{ $errors->has('nombres') ? ' is-invalid' : '' }}" value="{{ $user->nombres }}" id="nombres" name="nombres" required>
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row {{ $user->tipo==2 ? 'd-none' : '' }}" id="razon_social_div">
                        <label class="col-md-3 col-form-label" for="razon_social">
                        		Razon Social/Nombre de la empresa <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('razon_social') ? ' is-invalid' : '' }}" value="{{ $user->razon_social }}" id="razon_social" name="razon_social" {{ $user->activo==3 ? 'required' : '' }}>
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
                            <input type="text" class="form-control {{ $errors->has('ruc') ? ' is-invalid' : '' }}" value="{{ $user->num_doc ? $user->num_doc : $user->ruc }}" id="ruc" name="ruc" required>
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
                            <input type="number" class="form-control {{ $errors->has('fijo') ? ' is-invalid' : '' }}" value="{{ $user->fijo }}" id="fijo" name="fijo" required>
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
                            <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ $user->direccion }}" id="direccion" name="direccion">
                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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