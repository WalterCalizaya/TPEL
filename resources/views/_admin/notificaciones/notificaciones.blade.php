@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Mis notificaciones
@endsection

@section('notificaciones')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
        $NOTIFICATION_TYPES = [
            "empresaEnvia"=> 'App\Notifications\EmpresaEnviaInformacion',
            "adminAceptaEmp"=> 'App\Notifications\AdminAceptaEmpresa',
            "adminRechazaEmp"=> 'App\Notifications\AdminRechazaEmpresa',
            "empresaCompraCalif"=> 'App\Notifications\EmpresaCompraCalificacion',
            "empresaEnviaVoucher"=> 'App\Notifications\EmpresaEnviaVoucher',
            "adminAceptaMembresia"=> 'App\Notifications\AdminAceptaMembresia',
            "adminRechazaMembresia"=> 'App\Notifications\AdminRechazaMembresia',
            "usuarioComenta"=>'App\Notifications\UsuarioComenta',
            "usuarioPregunta"=> 'App\Notifications\UsuarioPregunta',
            "usuarioCalifica"=> 'App\Notifications\UsuarioCalifica',
        ];

        function readNotification($notification) {
            if ($notification["read_at"]==null) {
                if ($notification["created_at"]) {
                    $time=Carbon::parse($notification["created_at"])->format('d/m/Y h:i A');
                }
                else{
                    $time='Hace 1 minuto';
                }
                // $read=["status"=> 'unread',"publish"=>$time, "notify"=> 'notificado'];
                $read=["status"=> 'danger',"publish"=>$time, "notify"=> 'notificado'];
            }
            else{
                // $read=["status"=> 'read',"publish"=> Carbon::parse($notification["read_at"])->format('d/m/Y h:i A'),"notify"=>'leído'];
            	$read=["status"=> 'secondary',"publish"=> Carbon::parse($notification["read_at"])->format('d/m/Y h:i A'),"notify"=>'leído'];
            }
            return $read;
        }

        function routeNotification($notification,$NOTIFICATION_TYPES) {
            if($notification["type"] === $NOTIFICATION_TYPES["empresaEnvia"]) {
                $to = '/admin/moderar-empresa/'.$notification["id"].'/'.$notification["data"]["empresa_id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminAceptaEmp"]) {
                $to = '/admin/empresa/perfil-empresarial?read='.$notification["id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminRechazaEmp"]) {
                $to = '/admin/empresa/perfil-empresarial?read='.$notification["id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["empresaCompraCalif"]) {
                $to = '/admin/calificativos/';
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["empresaEnviaVoucher"]) {
                $to = '/admin/aprobar-pedido-membresia/'.$notification["data"]["membresia_id"].'/'.$notification["id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminAceptaMembresia"]) {
                $to = '/admin/empresa/mis-compras?notify='.$notification["id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminRechazaMembresia"]) {
                $to = '/admin/empresa/enviar-voucher?membresia='.$notification["data"]["membresia_id"].'&notify='.$notification["id"];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioComenta"]) {
                if ($notification["data"]["tipo"]==3) {
                    $to = '/admin/empresa/lista-comentarios?comentario='.$notification["data"]["comentario_id"].'&notify='.$notification["id"];
                }
                else{
                    $to = '/admin/moderar-comentario?comentario='.$notification["data"]["comentario_id"].'&notify='.$notification["id"];
                }
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioPregunta"]) {
                if ($notification["data"]["tipo"]==3) {
                    $to = '/admin/empresa/moderar-pregunta?pregunta='.$notification["data"]["pregunta_id"].'&notify='.$notification["id"];
                }
                else{
                    $to = '/admin/moderar-pregunta?pregunta='.$notification["data"]["pregunta_id"].'&notify='.$notification["id"];
                }
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioCalifica"]) {
                if ($notification["data"]["tipo"]==3) {
                    $to = '/admin/empresa/lista-calificacion?calificacion='.$notification["data"]["calificacion_id"].'&notify='.$notification["id"];
                }
                else{
                    $to = '/admin/moderar-calificacion?calificacion='.$notification["data"]["calificacion_id"].'&notify='.$notification["id"];
                }
            }

            return $to;
        }

        // get the notification text based on it's type
        function makeNotificationText($notification,$NOTIFICATION_TYPES) {
            // var text = '';
            if($notification["type"] === $NOTIFICATION_TYPES["empresaEnvia"]) {
                $section='La empresa <span class="accent">'.$notification["data"]["empresa_name"].
                            '</span> envió información para su aprobación.';
                $icon='fa-envelope text-danger';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminAceptaEmp"]) {
                $section='El administrador <span class="accent">'.$notification["data"]["admin_name"].'</span> '.
                            'aceptó la información enviada de su empresa. '.
                            '<span class="accent text-danger">Felicidades su empresa esta publicado!</span>';
                $icon='fa-thumbs-up text-primary';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminRechazaEmp"]) {
                $section='El administrador <span class="accent">'.$notification["data"]["admin_name"].'</span> '.
                            'rechazó la información enviada, revise nuevamente y envié de nuevo.';
                $icon='fa-exclamation-triangle text-danger';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["empresaEnviaVoucher"]) {
                $section='La empresa <span class="accent">'.$notification["data"]["empresa_name"].'</span> '.
                            'adquirió 1 nueva membresía, <span class="accent">pendiente de aprobación</span>.';
                $icon='fa-university text-primary';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminAceptaMembresia"]) {
                if ($notification["data"]["duracion"]==1) $duracion='1 Mes';
                else if($notification["data"]["duracion"]<=11) $duracion=$notification["data"]["duracion"].' Meses';
                else if($notification["data"]["duracion"]==12) $duracion='1 Año';
                else if($notification["data"]["duracion"]==18) $duracion='18 Meses';
                else if($notification["data"]["duracion"]==24) $duracion='2 Años';
                else if($notification["data"]["duracion"]==36) $duracion='3 Años';
                $section='El administrador <span class="accent">'.$notification["data"]["admin_username"].'</span> '.
                            'Aprobó su <span class="accent">membresía de '.$duracion.' </span> <span class="badge badge-success">'.$notification["data"]["membresia"].'</span>.';
                $icon='fa-university text-success';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["adminRechazaMembresia"]) {
                if ($notification["data"]["duracion"]==1) $duracion='1 Mes';
                else if($notification["data"]["duracion"]<=11) $duracion=$notification["data"]["duracion"].' Meses';
                else if($notification["data"]["duracion"]==12) $duracion='1 Año';
                else if($notification["data"]["duracion"]==18) $duracion='18 Meses';
                else if($notification["data"]["duracion"]==24) $duracion='2 Años';
                else if($notification["data"]["duracion"]==36) $duracion='3 Años';
                $section='El administrador <span class="accent">'.$notification["data"]["admin_username"].'</span> '.
                            'Rechazó su <span class="accent">membresía de '.$duracion.' </span> <span class="badge badge-danger">'.$notification["data"]["membresia"].'</span>. '.
                            'vuelva a subir el voucher';
                $icon='fa-university text-danger';
                $body = ["body"=> $section, "fa"=>$icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioComenta"]) {
                $icon='fa-comment text-success';
                if ($notification["data"]["tipo"]==3) {
                    $forma='en su perfil empresarial ';
                    $verificar='';
                }
                else{
                    $forma='en el perfil de la empresa <span class="accent">'.$notification["data"]["empresa_name"].'</span>. ';
                    $verificar=' pendiente de aprobación.';
                }
                if ($notification["data"]["user_tipo"]==3) {
                    $section='La empresa <span class="accent">'.$notification["data"]["name_empresa"].'</span> '.
                                'comentó '.$forma.$verificar;
                }
                else{
                    $section='El usuario <span class="accent">'.$notification["data"]["user_username"].'</span> '.
                                'comentó '.$forma.$verificar;
                }
                $body = ["body"=> $section, "fa"=> $icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioPregunta"]) {
                $icon='fa-comment text-success';
                if ($notification["data"]["tipo"]==3) {
                    $forma='en su perfil empresarial ';
                    $verificar='';
                }
                else{
                    $forma='en el perfil de la empresa <span class="accent">'.$notification["data"]["empresa_name"].'</span>. ';
                    $verificar=' pendiente de aprobación.';
                }
                if ($notification["data"]["user_tipo"]==3) {
                    $section='La empresa <span class="accent">'.$notification["data"]["name_empresa"].'</span> '.
                                'preguntó '.$forma.$verificar;
                }
                else{
                    $section='El usuario <span class="accent">'.$notification["data"]["user_username"].'</span> '.
                                'preguntó '.$forma.$verificar;
                }
                $body = ["body"=> $section, "fa"=> $icon];
            }
            else if($notification["type"] === $NOTIFICATION_TYPES["usuarioCalifica"]) {
                $icon='fa-star text-warning';
                if ($notification["data"]["tipo"]==3) {
                    $forma='en su perfil empresarial ';
                    $verificar='';
                }
                else{
                    $forma='en el perfil de la empresa <span class="accent">'.$notification["data"]["empresa_name"].'</span>. ';
                    $verificar=' pendiente de aprobación.';
                }
                if ($notification["data"]["user_tipo"]==3) {
                    $section='La empresa <span class="accent">'.$notification["data"]["name_empresa"].'</span> '.
                                'calificó '.$forma.$verificar;
                }
                else{
                    $section='El usuario <span class="accent">'.$notification["data"]["user_username"].'</span> '.
                                'preguntó '.$forma.$verificar;
                }
                $body = ["body"=> $section, "fa"=> $icon];
            }
            return $body;
        }
    @endphp
    <div class="card">
        <div class="card-header">
            <span>Notificaciones: </span>
            <span style="margin-left: 25px; {{ $noleidas>=1? 'color: red;' : '' }}">Tiene <strong>{{ $noleidas }}</strong> notificaciones sin leer</span>
            <span style="margin-left: 25px;"><a class="btn btn-warning btn-sm" href="{{ url('/admin/mis-notificaciones?marcar=todos') }}">Marcar todas como leídas</a></span>
        </div>
        <div class="card-body">
            <div class="col-sm-10 offset-sm-1 col-xs-12">
            	<div class="notifications-container" style="width: 100%;">
                    @if (count($notificaciones)>0)
                        @foreach ($notificaciones as $notification)
                        	<div class="list-group-item list-group-item-accent list-group-item-accent-{{ readNotification($notification)["status"] }}">
                        		<a href="{{ routeNotification($notification,$NOTIFICATION_TYPES) }}" class="notification-link">
                                <div>
                                    <div class="avatar float-right">
                                        <img class="img-avatar" src="{{ $notification["data"]["image"] }}" alt="Avatar">
                                    </div>
                                    <div>
                                      {!! makeNotificationText($notification,$NOTIFICATION_TYPES)["body"] !!}
                                    </div>
                                    <small class="text-muted">
                                        <i class="fa {!! makeNotificationText($notification,$NOTIFICATION_TYPES)["fa"] !!}"></i> {{ readNotification($notification)["notify"] }}
                                        <i class="icon-calendar"></i> {!! readNotification($notification)["publish"] !!}
                                    </small>
                                </div>
                            </a>
                        	</div><!-- /.list-group-item list-group-item-accent -->
                        @endforeach
                    @else
                        <a class="dropdown-item" href="#"><i class="icon-speech text-success"></i> Todavía no tiene ninguna notificación.</a>
                    @endif
                </div>
            </div><!-- /.col-sm-8 -->
            <br>
            <div class="col-sm-10 offset-sm-1 col-xs-12">
                <div class="main-pagination pull-right">
                    <nav aria-label="Page navigation">
                        {!! $notificaciones->links() !!}
                    </nav>
                </div><!-- /.main-pagination -->
            </div><!-- /.row -->
        </div>
    </div>
@endsection

@section('js')

@endsection