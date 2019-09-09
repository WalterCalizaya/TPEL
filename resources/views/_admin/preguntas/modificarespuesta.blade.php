@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar pregunta y respuesta
@endsection


@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Modificar pregunta y respuesta
        </div>

        <div class="card-body">
            <form action="{{ url('/admin/modificar-pregunta/'.$pregunta->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <h4>
                        Estás editando la pregunta del usuario:
                        <strong>
                            @php
                                $user = $pregunta->user()->first();
                            @endphp
                            {{ $user->username }}
                        </strong><br>
                        {{-- Fecha en la que realizó la pregunta: <strong>{{ Carbon::parse($pregunta->created_at)->format('d/m/Y') }}</strong> a las <strong>{{ Carbon::parse($pregunta->created_at)->format('h:i A') }}</strong> --}}
                    </h4><br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="fecha-hora">Fecha en la que realizó la pregunta</label>
                        <div class="col-md-9">
                            <input type="datetime-local" class="form-control" id="fecha-hora" name="fecha-hora" disabled="" value="{{ Carbon::parse($pregunta->created_at)->format('Y-m-d').'T'.Carbon::parse($pregunta->created_at)->format('h:i') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="usuario">Usuario</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $user->username }}" disabled="">
                            <span class="help-block">Usuario que hizo la pregunta</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="empresa">Empresa</label>
                        <div class="col-md-9">
                            <a href="{{ url('/'.$pregunta->empresa->rubro->categoria->slug.'/'.$pregunta->empresa->rubro->slug.'/'.$pregunta->empresa->slug) }}" target="_blank" class="form-control">{{ $pregunta->empresa->razon_social }}</a>
                            <span class="help-block">Empresa en la que se preguntó</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Estado <span class="pull-right text-danger">(*)</span>
                        </span></label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado" value="1" name="estado" {{ $pregunta->estado ==1 ? 'checked' : '' }} >
                                <label class="form-check-label" for="estado">Pregunta aceptada</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado2" value="2" name="estado" {{ $pregunta->estado ==2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado2">Pregunta rechazada</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="pregunta">
                            Pregunta <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <textarea id="pregunta" name="pregunta" rows="5" class="form-control {{ $errors->has('pregunta') ? ' is-invalid' : '' }}">{{ $pregunta->pregunta }}</textarea>
                            @if ($errors->has('pregunta'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('pregunta') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="respuesta">Respuesta</label>
                        <div class="col-md-9">
                            <textarea id="respuesta" name="respuesta" autofocus="" rows="5" class="form-control">{{ $pregunta->respuesta }}</textarea>
                            <span class="help-block">Su respuesta</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Modificar</button>
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

        });
    </script>
@endsection