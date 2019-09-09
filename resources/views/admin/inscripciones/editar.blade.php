@extends('admin.layouts.app')

@section('title')
Editar cotización:
@endsection

@section('preinscritos')
active
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
            </div>
            <div class="card-block">

                <form action="{{ url('/admin/lista-preinscritos/'.$preinscripcion->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="col-sm-10 offset-sm-1">

                        <div class="form-group {{ $errors->has('usuario') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="usuario">
                                Usuario
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('usuario',$users,$preinscripcion->usuario_id,["class"=>"usuario form-control form-control-round fill select2 ",'placeholder' => '-- SELECCIONE --',"required"=>"","id"=>"usuario"]) !!}
                                @if ($errors->has('usuario'))
                                <div class="col-form-label">
                                    {{ $errors->first('usuario') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        @if (count($talleres)>0)
                        <div class="form-group {{ $errors->has('talleres') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="talleres">
                                Talleres
                            </label>
                            <div class="col-md-10">
                                @foreach ($talleres as $taller)
                                    @php $checked=""; @endphp
                                    @foreach ($preinscripcion->detalles as $curso_llevado)
                                        @php
                                            if ($taller->id==$curso_llevado->evento_id) {
                                                $checked="checked";
                                                break;
                                            }
                                        @endphp
                                    @endforeach
                                    <div class="checkbox-fade fade-in-primary d-block">
                                        <label>
                                            <input type="checkbox" value="{{ $taller->id }}" name="eventos[]" id="eventos" {{ $checked }}>
                                            <span class="cr">
                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                            </span>
                                            <span>{{ $taller->titulo }} {{ $taller->precio ? '('.$taller->moneda.' '.$taller->precio.')' : 'Sin precio' }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if (count($certificaciones)>0)
                        <div class="form-group {{ $errors->has('certificaciones') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="certificaciones">
                                Cursos de certificación
                            </label>
                            <div class="col-md-10">
                                @foreach ($certificaciones as $certificacion)
                                    @php $checked=""; @endphp
                                    @foreach ($preinscripcion->detalles as $curso_llevado)

                                        @php
                                            if ($certificacion->id==$curso_llevado->evento_id) {
                                                $checked="checked";
                                            }
                                            else
                                                $checked="";
                                        @endphp
                                    @endforeach

                                    <div class="checkbox-fade fade-in-primary d-block">
                                        <label>
                                            <input type="checkbox" value="{{ $certificacion->id }}" name="eventos[]" id="eventos" {{ $checked }}>
                                            <span class="cr">
                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                            </span>
                                            <span>{{ $certificacion->titulo }} {{ $certificacion->precio ? '('.$certificacion->moneda.' '.$certificacion->precio.')' : "(Sin precio)" }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-save"></i> Guardar
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-refresh"></i> Limpiar
                                </button>
                            </div>
                        </div>
                    </div><!-- /.col-sm-10 offset-sm-1 -->

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection
