@extends('usuario.layouts.app')

@section('title')
Pre-Inscripción
@endsection

@section('preinscripcion')
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
                <p style="font-weight: 600;">Selecciona los eventos en los que deseas participar. Al inscribirte se generará una cotización con la información detallada del pago por cada curso que hayas seleccionado, <span style="color: red;">tu inscripción no estará completa hasta que realices el pago y envíes el voucher correspondiente</span>.</p>

                <form action="{{ url('/admin/usuario/pre-inscripcion') }}" method="post" onsubmit="return checkForm(this);">
                    @csrf

                    <div class="col-sm-12 m-b-30">
                        <h4 class="sub-title">Talleres</h4>
                        <div class="row">
                            <div class="col-md-7">
                                @foreach ($talleres as $taller)
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label>
                                        <input type="checkbox" value="{{ $taller->id }}" name="eventos[]" id="eventos">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>{{ $taller->titulo }}</span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-5">
                                <div class="alert alert-info border-info">
                                    <p><strong>Promoción de pre-venta:</strong></p>
                                    <ul>
                                        <li>Costo por 1 taller: <del>S/. 250 + IGV</del> S/. 250 + IGV</li>
                                        <li>Costo por 2 talleres: <del>S/. 500 + IGV</del> S/. 450 + IGV</li>
                                        <li>Costo por 3 talleres: <del>S/. 750 + IGV</del> S/. 650 + IGV</li>
                                        <li>Costo por 4 talleres: <del>S/. 1000 + IGV</del> S/. 750 + IGV</li>
                                    </ul>
                                    <p class="m-t-10">Promoción válida para pago con reservación anticipada de 01 mes.</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="sub-title m-t-20">Cursos de certificación</h4>
                        <div class="row">
                            <div class="col-md-7">
                                @foreach ($certificaciones as $certificacion)
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label>
                                        <input type="checkbox" value="{{ $certificacion->id }}" name="eventos[]" id="eventos">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>{{ $certificacion->titulo }}</span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-5">
                                <div class="alert alert-info border-info">
                                    <p><strong>Promoción de pre-venta:</strong></p>
                                    <ul>
                                        <li>Costo por cada curso de certificación: <del>S/. 1190 + IGV</del> S/. 990 + IGV</li>
                                    </ul>
                                    <p class="m-t-10">Promoción válida para pago con reservación anticipada de 01 mes.</p>
                                </div>
                            </div>
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
                                    <i class="icofont icofont-check"></i> Inscribirme
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
<script>
    function checkForm(form){
        if(!form.terms.checked) {
            swal({
                title: 'Es necesario que aceptes las políticas antes de realizar la pre-inscripción.',
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
