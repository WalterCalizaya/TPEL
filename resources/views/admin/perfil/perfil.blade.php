@extends('admin.layouts.app')

@section('title')
Perfil de usuario
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
                {{-- <div class="card-header-right">
                    <a href="{{ url('/admin/lista-administrador/create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Agregar administrador</a>
                </div> --}}
            </div>
            <div class="card-block">

                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img class="img-perfil img-radius align-top" src="{{ Auth::user()->foto ? Auth::user()->foto : '/resources/img/default.jpg' }}" width="302px" height="302px">
                        <br><br>
                        <form action="{{ url('/admin/perfil-admin') }}" method="post"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7">
                                    @csrf
                                    <input type="file"id="foto" class="form-control mt-2" name="foto" required accept=".png, .jpg, .jpeg">
                                </div>
                                <div class="col-xs-12 col-sm-5">
                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block mt-2">
                                        <i class="icofont icofont-image"></i> Cambiar foto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-6">

                        <dl class="dl-horizontal row mt-2">
                            <dt class="col-sm-3">Tipo</dt>
                            <dd class="col-sm-9">
                                @if (Auth::user()->tipo==1)
                                <span class="label label-danger">Administrador</span>
                                @else
                                <span class="label label-warning">Cliente</span>
                                @endif
                            </dd>

                            <dt class="col-sm-3">Nombre</dt>
                            <dd class="col-sm-9">{{ Auth::user()->nombres }} {{ Auth::user()->apellidos }}</dd>

                            <dt class="col-sm-3">E-mail</dt>
                            <dd class="col-sm-9">{{ Auth::user()->email }}</dd>

                            <dd class="col-sm-12 offset-sm-3">
                                @if (Auth::user()->confirmado==1)
                                <span class="label label-success">Verificado</span>
                                @else
                                <span class="label label-danger">Sin verificar</span>
                                @endif
                            </dd>

                            <dt class="col-sm-3">Teléfono</dt>
                            <dd class="col-sm-9">{{ Auth::user()->telefono }}</dd>

                            <dt class="col-sm-3">Lugar</dt>
                            <dd class="col-sm-9">{{ Auth::user()->distrito->nombre }} / {{ Auth::user()->distrito->provincia->nombre }} / {{ Auth::user()->distrito->provincia->region->nombre }}</dd>

                            <dt class="col-sm-3">Registro</dt>
                            <dd class="col-sm-9">{{ Carbon::parse(Auth::user()->created_at)->format('d \d\e M. \d\e Y') }}</dd>
                            <dd class="col-sm-12 offset-sm-3 text-muted">({{ Carbon::parse(Auth::user()->created_at)->diffForHumans(null, false, false, 2) }})</dd>

                            <dt class="col-sm-3">Modificado</dt>
                            <dd class="col-sm-9">{{ Carbon::parse(Auth::user()->updated_at)->format('d \d\e M. \d\e Y') }}</dd>
                            <dd class="col-sm-12 offset-sm-3 text-muted">({{ Carbon::parse(Auth::user()->updated_at)->diffForHumans(null, false, false, 2) }})</dd>

                        </dl>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="{{ url('/admin/perfil-admin/modificar') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block mt-2">
                                    <i class="icofont icofont-edit"></i> Cambiar mis datos
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="" id="button-register" data-toggle="modal" data-target="#edit-pass" data-backdrop="static" data-keyboard="false" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block mt-2">
                                    <i class="icofont icofont-lock"></i> Cambiar Contraseña
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div id="edit-pass" class="modal fade out_on" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="change-password" >

                <div class="modal-header" style="background: #6B99FF;color: #FFF;">
                    <h4 align="center" class="modal-title">Cambiar Contraseña</h4>
                    <button type="button" onclick="resetValidacionPassword()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>

                <div class="modal-body">
                    <fieldset>
                        {{-- <form id="change-password"> --}}
                            {!! Form::token() !!}
                            <div class="alert alert-danger icons-alert">
                                <p><strong>¡Cuidado!</strong> Tendrá que volver a iniciar sesión después de cambiar la contraseña</p>
                            </div>

                            <div id="div-pass" class="form-group">
                                <label id="lbl-pass" for="password">Contraseña actual:</label>
                                <input name="password" id="password" class="form-control form-control-round" type="password">
                                <span id="sp-pass2" class="invalid-feedback"></span>
                            </div>

                            <div id="div-new-pass" class="form-group">
                                <label id="lbl-new-pass" for="password_new">Nueva contraseña:</label>
                                <input name="password_new" id="password_new" class="form-control form-control-round" disabled="disabled" type="password">
                                <span id="sp-new-pass-text" class="invalid-feedback"></span>
                            </div>

                            <div id="div-confirm-pass" class="form-group">
                                <label id="lbl-confirm-pass" for="password_confirm">Confirmar contraseña:</label>
                                <input name="password_confirm" id="password_confirm" class="form-control form-control-round"  disabled="disabled" type="password">
                                <span id="sp-confirm-pass-text" class="invalid-feedback"></span>
                            </div>
                        {{-- </form> --}}
                    </fieldset>

                </div>

                <div class="modal-footer">
                    <button id="button-change-password" onclick="
                    change_password()" type="button" disabled="disabled" class="btn btn-primary btn-round"><i class="icofont icofont-save"></i> Cambiar contraseña</button>
                    <button class="btn btn-outline-primary btn-round" data-dismiss="modal" onclick="resetValidacionPassword()"><i class="icofont icofont-close"></i> Cancelar</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function archivoFile(evt) {
        var files = evt.target.files; // FileList object
        var frame=$(".img-perfil");
        if (files.length==0) {
            frame.attr('src','/resources/img/default.jpg');
        }
        else{
            file_url=URL.createObjectURL(files[0]);
            frame.attr('src',file_url);
        }
    }
    document.getElementById('foto').addEventListener('change', archivoFile, false);

    $("#password").keyup(function() {
        sendRequest("/admin/perfil/confirmpass",'password='+$("#password").val(),'GET',function(data,textStatus){
            debugger;
            if(data.status==200){
                debugger;
                if (data.responseText=="200") {
                    $('#password').removeClass('is-invalid');
                    $("#sp-pass2").html('');
                    $("#password_new").removeAttr('disabled');
                }
                else {
                    $('#password').addClass('is-invalid');
                    $("#sp-pass2").html('<strong>Contraseña actual incorrecta</strong>');
                }
            }
        });
    });

    $('#password_new').on('keyup', function(event) {
        if (event.currentTarget.value.length >= 1){
            $('#password_new').removeClass('is-invalid');

            $('#sp-new-pass-text').html('');
            $("#password_confirm").removeAttr('disabled');
        }
        else{
            $('#password_new').addClass('is-invalid');
            $("#password_confirm").attr('disabled','disabled');
        }
    });

    $('#password_confirm').on('keyup', function(event) {
        if (event.currentTarget.value == $('#password_new').val()){
            $('#password_confirm').removeClass('is-invalid');
            $("#sp-confirm-pass-text").html('');
            $("#button-change-password").removeAttr('disabled');
        }
        else{
            $('#password_confirm').addClass('is-invalid');
            $("#button-change-password").attr('disabled','disabled');
            $("#sp-confirm-pass-text").html('<strong>Contraseña de confirmación incorrecta</strong>');
        }
    });

    function change_password() {
        $("#button-change-password").html('<i class="fa fa-refresh fa-lg fa-spin"></i> Cambiar Contraseña')
        sendRequest("/admin/perfil/changepass",$("#change-password").serialize(),'POST',function(data,textStatus){
            debugger;
            if(data.status==200){
                debugger;
                $("#change-password")[0].reset();
                $("#edit-pass").modal('hide')
                swal({
                        title: "Estamos cerrando tu sesión actual, deberás ingresar con tu nueva contraseña...",
                        type:  "success",
                        button: "Cerrar",
                        timer: "10000",
                        backdrop: "rgba(165, 220, 134, 0.45)"
                    });
                document.getElementById('logout-form').submit();
            }
            else if (data.status==422) {
                error=JSON.parse(data.responseText);
                var message=error.password;
                if (error.password=!undefined) {
                    $('#password').addClass('is-invalid');
                    $("#sp-pass2").html(message);
                }
                if (error.password_confirm!=undefined) {
                    $('#password_confirm').addClass('is-invalid');
                    $("#sp-confirm-pass-text").html(error.password_confirm);
                }
                if (error.password_new!=undefined) {
                    $('#password_new').addClass('is-invalid');
                    $("#sp-new-pass-text").html(error.password_new);
                }
            }
            else if (data.status==503) {

            }
            else{

            }
        });
    }

    function resetValidacionPassword() {
        $("#change-password")[0].reset();
        $('#password').removeClass('is-invalid');
        $("#sp-pass2").html('');

        $('#password_new').removeClass('is-invalid');
        $("#password_new").attr('disabled','disabled');
        $("#sp-confirm-pass-text").html('');

        $('#password_confirm').removeClass('is-invalid');
        $("#password_confirm").attr('disabled','disabled');
        $("#button-change-password").attr('disabled','disabled');
        $("#sp-confirm-pass-text").html('');
    }
</script>
@endsection

