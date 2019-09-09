<header class="app-header navbar" id="app">
	<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">
		<strong>ENTACNA.ORG</strong>
	</a>
	<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
		<span class="navbar-toggler-icon"></span>
	</button>
	<ul class="nav navbar-nav d-md-down-none">
		<li class="nav-item px-3">
			<a class="nav-link" target="_blank" href="{{ url('/') }}">Ver portal web</a>
		</li>
		{{-- <li class="nav-item px-3">
			<a class="nav-link" href="{{ url('/admin/lista-usuario') }}">Lista de usuarios</a>
		</li> --}}
		<li class="nav-item px-3">
			<a class="nav-link" href="{{ url('/admin/configuracion-general') }}">Configuración general</a>
		</li>
	</ul>
	<ul class="nav navbar-nav ml-auto">
		<li class="nav-item dropdown d-md-down-none">
			<a class="nav-link" data-toggle="dropdown" id="notifications" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				<i class="icon-bell"></i>
				{{-- <span class="badge badge-pill badge-danger">{{ auth()->user()->unreadNotifications->count() }}</span> --}}
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg notifications-container" id="notificationsMenu">
				<div class="dropdown-header text-center">
					<strong>Últimas notificaciones</strong>
				</div>
				{{-- @if (auth()->user()->unreadNotifications->count())
					@foreach (auth()->user()->unreadNotifications as $notification)
						<a class="dropdown-item" href="#">
							<i class="icon-speech text-success"></i> {{ $notification->data['msm']['razon_social'] }}
						</a>
					@endforeach
				@else
					<a class="dropdown-item" href="#">
						<i class="icon-speech text-success"></i> No hay notificaciones
					</a>
				@endif --}}

        {{-- <a href="" class="notification-item">
        	<div class="read">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://2.bp.blogspot.com/-QIee1GmeIac/WKYQU2eWoaI/AAAAAAAAD1I/4iabp4KGUrgEhxlSVHQSITCryA2Rkqs2wCK4B/s000/descargar-imagenes-graciosas%2B%252826%2529.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        <span class="accent">Zack Alien</span> comentó en el perfil de la empresa
                        <span class="accent">Fix page load performance issue</span>.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-comments text-success"></i> leído
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a>

        <a href="" class="notification-item">
        	<div class="read">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        <span class="accent">Zack Alien</span> calificó a la empresa
                        <span class="accent">Fix page load performance issue</span>.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-star text-warning"></i> leído
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>
        	</div>
        </a>

        <a href="" class="notification-item">
        	<div class="unread">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        La empresa <span class="accent">Zack Alien</span> envió información para su aprobación.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-envelope text-danger"></i>
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a>

        <a href="" class="notification-item">
        	<div class="unread">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        La empresa <span class="accent">Zack Alien</span> compró paquete de calificaciones, pendiente de aprobación.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-star text-info"></i>
                    	<i class="fa fa-star text-info"></i>
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a>

        <a href="" class="notification-item">
        	<div class="unread">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        La empresa <span class="accent">Zack Alien</span> compró el paquete premiun, pendiente de aprobación.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-university text-primary"></i>
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a>

        <a href="" class="notification-item">
        	<div class="unread">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        El administrador <span class="accent">Zack Alien</span> rechazó la información enviada, revise nuevamente y envié de nuevo.
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-exclamation-triangle text-danger"></i>
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a>
        <a href="" class="notification-item">
        	<div class="unread">
                <div class="img-col">
                    <div class="img" style="background-image: url('https://modularcode.io/modular-admin-html/assets/faces/3.jpg')"></div>
                </div>
                <div class="body-col">
                    <p>
                        El administrador <span class="accent">Zack Alien</span> aceptó la información enviada de su empresa. <span class="accent text-danger">Felicidades su empresa esta publicado!</span>
                    </p>
                    <p class="small text-muted">
                    	<i class="fa fa-thumbs-up text-primary"></i>
                    	<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                    </p>
                </div>

        	</div>
        </a> --}}
				<div class="dropdown-header text-center">
					<strong><a href="#">Ver todas las notificaciones</a></strong>
				</div>

			</div>
		</li>
		<li class="nav-item dropdown" style="margin-right: 10px;">
			<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				<img class="img-avatar" src="{{ Auth::user()->foto ? Auth::user()->foto : '/assets/img/avatars/img.jpg' }}" alt="{{ Auth::user()->email }}">
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<div class="dropdown-header text-center">
					<strong>Mi cuenta</strong>
				</div>
				<a class="dropdown-item" href="#">
					<i class="fa fa-comments"></i> Mis comentarios
				</a>
				<a class="dropdown-item" href="#">
					<i class="fa fa-star"></i> Mis calificaciones
				</a>
				<div class="dropdown-header text-center">
					<strong>Configuración</strong>
				</div>
				<a class="dropdown-item" href="{{ url('/admin/lista-administrador/perfil') }}">
					<i class="fa fa-user"></i> Perfil
				</a>
				<a class="dropdown-item" href="{{ url('/admin/lista-administrador/perfil/modificar') }}">
					<i class="fa fa-wrench"></i> Actualizar datos
				</a>
				<div class="divider"></div>

				<form action="{{ url('/logout') }}" method="post" id="logout-form">
					@csrf
					<button type="submit" class="dropdown-item">
						<i class="fa fa-lock"></i> Cerrar sesión
					</button>
				</form>
			</div>
		</li>
	</ul>
</header>