@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Nuevo Usuario
@endsection

{{--  @section('administradores')
    open
@endsection

@section('agregar-usuario')
    active
@endsection  --}}

@section('contenido')
    <div class="card">
        <div class="card-header">
            Modificar Administrador
        </div>
        <div class="card-body">
            <h2>Estás editando el administrador: <strong>{{ $user->username }}</strong></h2>
            <br>
            <form action="{{ url('/admin/lista-administrador/'.$user->id) }}" method="post">
                @csrf
                @method('PUT')
                @php
                    if(Auth::user()->id==1||Auth::user()->id==2){
                        if ($user->id==1) {
                            $disabled='disabled';
                        }
                        else $disabled='';
                    }
                    else $disabled='';
                @endphp
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">
                            Administrador <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ $user->username }}" id="username" name="username" required {{ $disabled }}>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">
                            Correo electrónico <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $user->email }}" id="email" name="email" required {{ $disabled }}>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Estado del administrador <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="activo" value="1" name="activo" {{ $user->activo==1 ? 'checked' : '' }} {{ Auth::user()->id==1||Auth::user()->id==2 ? '' : 'disabled' }}>
                                <label class="form-check-label" for="activo">Administrador permitido</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="activo2" value="0" name="activo" {{ $user->activo==0 ? 'checked' : '' }} {{ $disabled }}>
                                <label class="form-check-label" for="activo2">Administrador bloqueado</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="nombres">
                            Nombres y apellidos <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('nombres') ? ' is-invalid' : '' }}" value="{{ $user->nombres }}" id="nombres" name="nombres" required {{ $disabled }}>
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="num_doc">
                            DNI <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control {{ $errors->has('num_doc') ? ' is-invalid' : '' }}" value="{{ $user->num_doc }}" id="num_doc" name="num_doc" required {{ $disabled }}>
                            @if ($errors->has('num_doc'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('num_doc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="fijo">
                            Celular/Teléfono <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control {{ $errors->has('fijo') ? ' is-invalid' : '' }}" value="{{ $user->fijo }}" id="fijo" name="fijo" required {{ $disabled }}>
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
                            <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ $user->direccion }}" id="direccion" name="direccion" {{ $disabled }}>
                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    @if (Auth::user()->id==1||Auth::user()->id==2)
                        @if ($user->id!=1)
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <button type="reset" class="btn btn-secondary">Limpiar campos</button>
                            </div>
                        @endif
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection