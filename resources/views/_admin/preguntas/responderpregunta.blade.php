@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Responder pregunta
@endsection


@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Responder pregunta
        </div>

        <div class="card-body">
            <form action="{{ url('/admin/responder-pregunta/'.$pregunta->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <h4>
                        Estás respondiendo la pregunta del usuario:
                        <strong>
                            @php
                                $user = $pregunta->user()->first();
                            @endphp
                            {{ $user->username }}
                        </strong><br>
                        {{-- Fecha de creación: <strong>{{ Carbon::parse($pregunta->created_at)->format('d/m/Y') }}</strong> a las <strong>{{ Carbon::parse($pregunta->created_at)->format('h:i A') }}</strong> --}}
                    </h4><br>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="fecha-hora">Fecha de creación</label>
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
                        <label class="col-md-3 col-form-label" for="pregunta">Pregunta</label>
                        <div class="col-md-9">
                            <textarea id="pregunta" name="pregunta" rows="5" class="form-control" disabled="" >{{ $pregunta->pregunta }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="respuesta">
                        		Respuesta <span class="pull-right text-danger">(*)</span>
                      	</label>
                        <div class="col-md-9">
                            <textarea id="respuesta" name="respuesta" autofocus="" rows="5" class="form-control" required></textarea>
                            <span class="help-block">Su respuesta</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Responder</button>
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