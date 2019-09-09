@extends('admin.layouts.app')

@section('title')
Agregar temario
@endsection

@section('temarios')
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

                <form action="{{ url('/admin/temarios') }}" method="post">
                    @csrf

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group {{ $errors->has('titulo') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="titulo">
                                Título
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-round {{ $errors->has('titulo') ? ' form-control-danger' : '' }}" id="titulo" name="titulo" value="{{ old('titulo') }}">
                                @if ($errors->has('titulo'))
                                <div class="col-form-label">
                                    {{ $errors->first('titulo') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('tipo') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="tipo">
                                Tipo
                            </label>
                            <div class="col-md-10">
                                <select name="tipo" id="tipo" class="form-control form-control-round fill select2 {{ $errors->has('tipo') ? ' form-control-danger' : '' }}" required>
                                    <option>-- SELECCIONE --</option>
                                    <option value="1" {{ old('tipo') == '1' ? 'selected' : '' }}>Curso de certificación</option>
                                    <option value="2" {{ old('tipo') == '2' ? 'selected' : '' }}>Taller</option>
                                    <option value="3" {{ old('tipo') == '3' ? 'selected' : '' }}>Seminario</option>
                                    <option value="4" {{ old('tipo') == '4' ? 'selected' : '' }}>Webinar</option>
                                </select>
                                @if ($errors->has('tipo'))
                                <div class="col-form-label">
                                    {{ $errors->first('tipo') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('temario') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="temario">
                                Código para web
                            </label>
                            <div class="col-md-10">
                                <textarea name="temario" id="temario" class="form-control {{ $errors->has('temario') ? ' form-control-danger' : '' }}" cols="30" rows="10">{{ old('temario') }}</textarea>
                                @if ($errors->has('temario'))
                                <div class="col-form-label">
                                    {{ $errors->first('temario') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('contenido') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="contenido">
                                Código HTML para PDF
                            </label>
                            <div class="col-md-10">
                                <textarea name="contenido" id="contenido" class="form-control {{ $errors->has('contenido') ? ' form-control-danger' : '' }}" cols="30" rows="10">{{ old('contenido') }}</textarea>
                                @if ($errors->has('contenido'))
                                <div class="col-form-label">
                                    {{ $errors->first('contenido') }}
                                </div>
                                @endif
                            </div>
                        </div>

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

<script src="/resources/lib/textboxio/textboxio.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    var editor = textboxio.replaceAll('textarea');

    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection
