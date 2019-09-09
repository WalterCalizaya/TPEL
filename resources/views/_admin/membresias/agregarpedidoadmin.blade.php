@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Agregar membresía a empresa
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar membresía a empresa
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/agregar-pedido-membresia') }}" method="post">
                <div class="form-horizontal col-sm-8 offset-sm-2">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="empresa">Empresa</label>
                        <div class="col-md-9">
                            {!! Form::select('empresa_id',$empresa,null,['class'=>'form-control select2','id'=>'empresa_id','required'=>'','placeholder'=>'-- Seleccionar --']) !!}
                            <span class="help-block">Elija la empresa que será beneficiada.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="membresia_id">Membresía</label>
                        <div class="col-md-9">
                            {!! Form::select('membresia_id',$membresia,null,['class'=>'form-control select2','id'=>'membresia_id','required'=>'','placeholder'=>'-- Seleccionar --']) !!}
                            <span class="help-block">Elija la membresía a asignar.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="comentario">Comentario</label>
                        <div class="col-md-9">
                            <textarea id="comentario" name="comentario" rows="5" class="form-control"></textarea>
                            <span class="help-block">Campo opcional.</span>
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
        $(document).ready( function () {
        });
        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
    </script>
@endsection