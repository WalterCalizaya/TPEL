@extends('admin.layouts.app')

@section('title')
Agregar usuario
@endsection

@section('usuarios')
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

                <form action="{{ url('/admin/lista-usuario') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-10 offset-sm-1">
                        <div class="form-group {{ $errors->has('nombres') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="nombres">
                                Nombres
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-round {{ $errors->has('nombres') ? ' form-control-danger' : '' }}" id="nombres" name="nombres" value="{{ old('nombres') }}">
                                @if ($errors->has('nombres'))
                                <div class="col-form-label">
                                    {{ $errors->first('nombres') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('apellidos') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="apellidos">
                                Apellidos
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-round {{ $errors->has('apellidos') ? ' form-control-danger' : '' }}" id="apellidos" name="apellidos" value="{{ old('apellidos') }}">
                                @if ($errors->has('apellidos'))
                                <div class="col-form-label">
                                    {{ $errors->first('apellidos') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('telefono') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="telefono">
                                Fono / Cel
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-round {{ $errors->has('telefono') ? ' form-control-danger' : '' }}" id="telefono" name="telefono" value="{{ old('telefono') }}">
                                @if ($errors->has('telefono'))
                                <div class="col-form-label">
                                    {{ $errors->first('telefono') }}
                                </div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="email">
                                E-mail
                            </label>
                            <div class="col-md-10">
                                <input type="email" class="form-control form-control-round {{ $errors->has('email') ? ' form-control-danger' : '' }}" value="{{ old('email') }}" id="email" name="email" required>
                                @if ($errors->has('email'))
                                <div class="col-form-label">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="password">
                                Contraseña
                            </label>
                            <div class="col-md-10">
                                <input type="password" class="form-control form-control-round {{ $errors->has('password') ? ' form-control-danger' : '' }}" value="{{ old('password') }}" id="password" name="password" placeholder="********" required>
                                @if ($errors->has('email'))
                                <div class="col-form-label">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="password_confirmation">
                                Confirmar contraseña
                            </label>
                            <div class="col-md-10">
                                <input type="password" class="form-control form-control-round {{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}" value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                                @if ($errors->has('email'))
                                <div class="col-form-label">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('region') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="region">
                                Región
                            </label>
                            <div class="col-md-10">
                                {!! Form::select('region',$regiones,old('region'),["class"=>"region form-control form-control-round fill select2 ",'placeholder' => '-- Región --',"required"=>"","id"=>"region"]) !!}
                                @if ($errors->has('region'))
                                    <div class="col-form-label">
                                        {{ $errors->first('region') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('provincia') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="provincia">
                                Provincia
                            </label>
                            <div class="col-md-10">
                                <select name="provincia" id="provincia" class="form-control form-control-round fill select2" required>
                                    <option>-- Provincia --</option>
                                </select>
                                @if ($errors->has('provincia'))
                                    <div class="col-form-label">
                                        {{ $errors->first('provincia') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('distrito') ? ' has-danger' : '' }} row">
                            <label class="col-md-2 col-form-label" for="distrito">
                                Distrito
                            </label>
                            <div class="col-md-10">
                                <select name="distrito" id="distrito" class="form-control form-control-round fill select2" required>
                                    <option>-- Distrito --</option>
                                </select>
                                @if ($errors->has('distrito'))
                                    <div class="col-form-label">
                                        {{ $errors->first('distrito') }}
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        //cargar provincias
        $("#region").change(function(){
            if(this.value){
                var route='/admin/provincias/'+this.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option>-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,provincia){
                            option=option+'<option value="'+provincia.id+'">'+provincia.nombre+'</option>';
                        });
                        $("#provincia").html(option);
                    }
                    else{
                        alert('Error, no se pudo cargar la información');
                    }
                });
            }
            else{
                $("#provincia").html('<option>-- SELECCIONE --</option>');
                $("#distrito").html('<option>-- SELECCIONE --</option>');
            }
        });

        //cargar distritos
        $("#provincia").change(function(){
            if(this.value){
                var route='/admin/distritos/'+this.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='<option>-- SELECCIONE --</option>';
                        $.each(JSON.parse(data.responseText),function(id,distrito){
                            option=option+'<option value="'+distrito.id+'">'+distrito.nombre+'</option>';
                        });
                        $("#distrito").html(option);
                    }
                    else{
                        alert('Error, no se pudo cargar la información');
                    }
                });
            }
            else{
                $("#distrito").html('<option>-- SELECCIONE --</option>');
            }
        });

    });

    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection
