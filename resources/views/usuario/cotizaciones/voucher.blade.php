@extends('usuario.layouts.app')

@section('title')
Enviar voucher
@endsection

@section('voucher')
active
@endsection

@section('content')
@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');
@endphp

<div class="row">
    <div class="col-sm-12">

        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
            </div>
            <div class="card-block">

                @if (count($elegirCotizacion)>0)
                <form action="{{ url('/admin/usuario/enviar-voucher') }}" method="post" onsubmit="return checkForm(this);" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-10 offset-sm-1">

                        <div class="form-group {{ $errors->has('banco') ? ' has-danger' : '' }} row">
                            <label class="col-md-3 col-form-label" for="banco">
                                Seleccionar banco
                            </label>
                            <div class="col-md-9">
                                {!! Form::select('banco',$elegirBanco,old('banco'),["class"=>"banco form-control fill ",'placeholder' => 'Seleccione el banco en el que depositó',"required"=>"","id"=>"banco"]) !!}
                                @if ($errors->has('banco'))
                                    <div class="col-form-label">
                                        {{ $errors->first('banco') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('cotizacion') ? ' has-danger' : '' }} row">
                            <label class="col-md-3 col-form-label" for="cotizacion">
                                Seleccionar cotización
                            </label>
                            <div class="col-md-9">
                                {!! Form::select('cotizacion',$elegirCotizacion,old('cotizacion'),["class"=>"cotizacion form-control fill ",'placeholder' => 'Seleccione la cotización',"required"=>"","id"=>"cotizacion"]) !!}
                                @if ($errors->has('cotizacion'))
                                    <div class="col-form-label">
                                        {{ $errors->first('cotizacion') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('voucher') ? ' has-danger' : '' }} row">
                            <label class="col-md-3 col-form-label" for="voucher">
                                Adjuntar Voucher
                            </label>
                            <div class="col-md-9">
                                <input type="file"id="voucher" class="form-control {{ $errors->has('voucher') ? ' form-control-danger' : '' }}" name="voucher"  accept=".png, .jpg, .jpeg">
                                @if ($errors->has('voucher'))
                                <div class="col-form-label">
                                    {{ $errors->first('voucher') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('observaciones') ? ' has-danger' : '' }} row">
                            <label class=" col-md-3 col-form-label" for="observaciones">Observaciones</label>
                            <div class="col-md-9">
                                <textarea name="observaciones" id="observaciones" class="form-control {{ $errors->has('contenido') ? ' form-control-danger' : '' }}" cols="30" rows="10">{{ old('observaciones') }}</textarea>
                                @if ($errors->has('observaciones'))
                                <div class="col-form-label">
                                    {{ $errors->first('observaciones') }}
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="alert alert-secondary background-secondary m-t-10" role="alert">
                            <h4 class="sub-title">Políticas</h4>
                            <ul>
                                <li>El evento puede ser postergado faltando 10 días como máximo para iniciar el curso, en caso falten cubrir los cupos disponibles.</li>
                                <li>Si Usted no puede asistir en la nueva fecha, entonces puede reservar su cupo para el próximo curso o solicitar la devolución de su dinero.</li>
                                <li>La devolución de dinero no incluye comisiones bancarias.</li>
                                <li>Plazo de reembolso: 15 días hábiles.</li>
                                <li><strong>No hay devolución una vez iniciado el curso.</strong></li>
                            </ul>
                        </div>

                        <div class="checkbox-fade fade-in-primary d-block">
                            <label>
                                <input type="checkbox" name="terms">
                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span>
                                <span style="font-weight: 700;">Estoy de acuerdo con las políticas</span>
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6 offset-sm-3">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-check"></i> Enviar voucher
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
                @else
                    <div class="alert alert-danger background-danger">
                        El formulario de envío de comprobantes de pago se habilita cuando tengas al menos una cotización por pagar
                    </div>
                    <p>
                        Te invitamos a participar en alguno de nuestros <a href="{{ url('/admin/usuario/pre-inscripcion') }}">próximos eventos</a>.
                    </p>
                @endif

            </div>
        </div>
    </div>
    @if (count($elegirCotizacion)>0)
        @include('usuario.include.medios-de-pago')
    @endif
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
<script>
    function checkForm(form){
        if(!form.terms.checked) {
            swal({
                title: 'Es necesario que aceptes las políticas antes de enviar tu voucher.',
                type:  'error',
                button: 'Cerrar',
                timer: '15000',
                backdrop: 'rgba(248, 215, 218, 0.45)'
            });
          form.terms.focus();
          return false;
        }
        return true;
    }
</script>
@endsection
