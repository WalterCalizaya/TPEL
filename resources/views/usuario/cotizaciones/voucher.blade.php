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
                <form action="{{ url('/admin/usuario/enviar-voucher') }}" method="post" enctype="multipart/form-data">
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
                                Seleccionar recibo
                            </label>
                            <div class="col-md-9">
                                {!! Form::select('cotizacion',$elegirCotizacion,old('cotizacion'),["class"=>"cotizacion form-control fill ",'placeholder' => 'Seleccione el recibo',"required"=>"","id"=>"cotizacion"]) !!}
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
                        El formulario de envío de comprobantes de pago se habilita cuando tengas al menos un recibo por pagar
                    </div>
                    <p>
                        Te invitamos a adquirir alguno de nuestros <a href="{{ url('/admin/usuario/inscripcion') }}">planes</a>.
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
