@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Mi perfil
@endsection

{{-- @section('perfil')
    active
@endsection --}}

@section('contenido')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h4>Foto de perfil</h4>
                    <img class="img-circle img-responsive" style="height: 300px;" src="{{ Auth::user()->foto ? Auth::user()->foto : '/assets/img/avatars/img.jpg' }}" width="290">
                    <br><br>
                    <form action="{{ url('/admin/lista-administrador/perfil') }}" method="post"  enctype="multipart/form-data">
                        <input type="file"id="foto" class="form-control" name="foto" required accept=".png, .jpg, .jpeg">
                        @csrf
                        <div class="form-actions">
                            <br>
                            <button type="submit" class="btn btn-primary">Subir nueva fotografía</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-6">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-usuario">Usuario</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="perfil-usuario" name="perfil-usuario" value="{{ Auth::user()->username }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-nombres">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="perfil-nombres" name="perfil-usuario" value="{{ Auth::user()->nombres }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-correo">Correo</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="perfil-correo" name="perfil-correo" value="{{ Auth::user()->email }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-telefono">Teléfono / Celular</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="perfil-telefono" name="perfil-telefono" value="{{ Auth::user()->fijo }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-nacimiento">Fecha de nacimiento</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="perfil-nacimiento" name="perfil-nacimiento" value="{{ Auth::user()->nacimiento }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="perfil-ciudad">Ciudad de nacimiento</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="perfil-ciudad" name="perfil-ciudad" value="{{ Auth::user()->ciudad }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="{{ url('/admin/lista-administrador/perfil/modificar') }}" class="btn btn-primary">Editar información del perfil</a>
                        </div>
                        <div class="col-md-6">
                            <a href="" id="button-register" data-toggle="modal" data-target="#edit-pass" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Cambiar Contraseña</a>
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

                    <div class="modal-header" style="background: #dca200db;color: #ffffff;">
                        <h4 align="center" class="modal-title">Cambiar Contraseña</h4>
                        <button type="button" onclick="resetValidacionPassword()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>

                    <div class="modal-body">
                        <fieldset>
                            {{-- <form id="change-password"> --}}
                                {!! Form::token() !!}
                                <div class="form-group">
                                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> La sesión se cerrará cuando cambie la contraseña.
                                </div>

                                <div id="div-pass" class="form-group">
                                    <label id="lbl-pass" for="password">CONTRASEÑA ACTUAL:</label>
                                    <input name="password" id="password" class="form-control" placeholder="Contraseña Actual" type="password">
                                    <span id="sp-pass2" class="invalid-feedback"></span>
                                </div>

                                <div id="div-new-pass" class="form-group">
                                    <label id="lbl-new-pass" for="password_new">NUEVA CONTRASEÑA:</label>
                                    <input name="password_new" id="password_new" class="form-control" disabled="disabled"  placeholder="Contraseña Nueva" type="password">
                                    <span id="sp-new-pass-text" class="invalid-feedback"></span>
                                </div>

                                <div id="div-confirm-pass" class="form-group">
                                    <label id="lbl-confirm-pass" for="password_confirm">REPETIR CONTRASEÑA:</label>
                                    <input name="password_confirm" id="password_confirm" class="form-control"  disabled="disabled" placeholder="Repetir Contraseña" type="password">
                                    <span id="sp-confirm-pass-text" class="invalid-feedback"></span>
                                </div>
                            {{-- </form> --}}
                        </fieldset>

                    </div>

                    <div class="modal-footer">
                        <button id="button-change-password" onclick="
                        change_password()" type="button" disabled="disabled" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Cambiar Contraseña</button>
                        <button class="btn btn-sm btn-secondary" data-dismiss="modal" onclick="resetValidacionPassword()"><i class="fa fa-close"></i> Cancelar</button>
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
            var frame=$(".img-responsive");
            if (files.length==0) {
                frame.attr('src','/assets/img/avatars/img.jpg');
            }
            else{
                pdffile_url=URL.createObjectURL(files[0]);
                frame.attr('src',pdffile_url);
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
                        $("#sp-pass2").html('<strong>Contraseña actual incorrecta </strong>');
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
                    swal({"timer":10000,"title":"<strong style='font-size: 20px'>En breves momentos se cerrará la sesión</strong>","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"center"});
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