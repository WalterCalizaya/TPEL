@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Editar Plan
@endsection

{{-- @section('membresias')
    open
@endsection

@section('agregar-plan')
    active
@endsection --}}

@section('contenido')
    <div class="card">
        <div class="card-header">
            Editar Plan
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/lista-membresia/'.$membresia->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    <h2>Estás editando el plan: <strong>{{ $membresia->membresia }}</strong></h2>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="membresia">
                            Membresía <span class="pull-right text-danger">(*)</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" id="membresia" name="membresia" value="{{ $membresia->membresia }}" class="form-control {{ $errors->has('membresia') ? ' is-invalid' : '' }}" required="" placeholder="Ingrese un nombre para identificar la membresía">
                            @if ($errors->has('membresia'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('membresia') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="duracion">
                            Duración <span class="pull-right text-danger">(*)
                        </label>
                        @php
                            $duracion=[1=>'1 Mes',2=>'2 Meses',3=>'3 Meses',4=>'4 Meses',5=>'5 Meses',6=>'6 Meses',7=>'7 Meses',8=>'8 Meses',9=>'9 Meses',10=>'10 Meses',11=>'11 Meses',12=>'1 Año',24=>'2 Años',36=>'3 Años'];
                        @endphp
                        <div class="col-md-9">
                            {!! Form::select('duracion',$duracion,$membresia->duracion,['class'=>"form-control select2","required"=>""]) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="precio">
                            Precio <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        S/.
                                    </span>
                                </div>
                                <input type="number" id="precio" name="precio" value="{{ $membresia->precio }}" class="form-control {{ $errors->has('precio') ? ' is-invalid' : '' }}" step="1" required="" placeholder="Ingrese el precio de la membresía">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @if ($errors->has('precio'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('precio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            ¿Plan eliminado? <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado" value="0" name="estado" {{ $membresia->estado==0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado">Sí</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="estado2" value="1" name="estado" {{ $membresia->estado==1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="estado2">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            ¿Puede comprarse? <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="visible" value="1" name="visible" {{ $membresia->visible==1 ? 'checked' : '' }} required="">
                                <label class="form-check-label" for="visible">Sí, disponible para todos</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" type="radio" id="visible2" value="0" name="visible" {{ $membresia->visible ==0 ? 'checked' : '' }} required="">
                                <label class="form-check-label" for="visible2">No, sólo el administrador puede asignarla</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="metodo">
                            Método de pago <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <select id="metodo" name="metodo" class="form-control" required="">
                                <option value="1">Depósito bancario</option>
                            </select>
                            <span class="help-block">Elija el método de pago.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="cuenta">
                            Cuenta bancaria <span class="pull-right text-danger">(*)
                        </label>
                        <div class="col-md-9">
                            <textarea id="cuenta" name="cuenta" rows="5" class="form-control {{ $errors->has('cuenta') ? ' is-invalid' : '' }}" required="" placeholder="Numeros de cuenta bancaria">{{ $membresia->cuenta }}</textarea>
                            @if ($errors->has('cuenta'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cuenta') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="descripción">Descripción</label>
                        <div class="col-md-9">
                            <textarea id="descripción" name="descripción" rows="5" class="form-control" placeholder="Campo opcional, descripción de la membresía">{{ $membresia->descripcion }}</textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="reset" class="btn btn-secondary">Restablecer campos</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
        $(document).ready(function () {

        });
    </script>
@endsection