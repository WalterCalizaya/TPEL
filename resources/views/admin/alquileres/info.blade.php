@extends('admin.layouts.app')

@section('title')
Alquiler de local
@endsection

@section('alquiler')
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

                <form action="{{ url('/admin/info-de-local/'.$alquiler->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-sm-10 offset-sm-1">

                        <div class="form-group {{ $errors->has('descripcion') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="descripcion">
                                Descripción
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="6" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{$alquiler->descripcion}}</textarea>
                                @if ($errors->has('descripcion'))
                                <div class="col-form-label">
                                    {{ $errors->first('descripcion') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('caracteristicas') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="caracteristicas">
                                Características
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="10" class="form-control {{ $errors->has('caracteristicas') ? ' form-control-danger' : '' }}" id="caracteristicas" name="caracteristicas">{{$alquiler->caracteristicas}}</textarea>
                                @if ($errors->has('caracteristicas'))
                                <div class="col-form-label">
                                    {{ $errors->first('caracteristicas') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('precio') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="precio">
                                Precio
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="6" class="form-control {{ $errors->has('precio') ? ' form-control-danger' : '' }}" id="precio" name="precio">{{$alquiler->precio}}</textarea>
                                @if ($errors->has('precio'))
                                <div class="col-form-label">
                                    {{ $errors->first('precio') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('promocion') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="promocion">
                                Promoción
                            </label>
                            <div class="col-md-10">
                                <textarea  rows="6" class="form-control {{ $errors->has('promocion') ? ' form-control-danger' : '' }}" id="promocion" name="promocion">{{$alquiler->promocion}}</textarea>
                                @if ($errors->has('promocion'))
                                <div class="col-form-label">
                                    {{ $errors->first('promocion') }}
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-save"></i> Actualizar información
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-outline-primary btn-round btn-block m-b-0">
                                    <i class="icofont icofont-refresh"></i> Deshacer cambios
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
<script>
    var editor = textboxio.replaceAll('textarea');
</script>
@endsection
