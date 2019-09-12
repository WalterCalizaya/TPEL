<nav class="pcoded-navbar">
	<div class="nav-list">
		<div class="pcoded-inner-navbar main-menu">

			<ul class="pcoded-item pcoded-left-item">
				<li class="@yield('dashboard')">
					<a href="{{ url('/admin/dashboard') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-home"></i></span>
						<span class="pcoded-mtext">Principal</span>
					</a>
				</li>
				<li class="@yield('configuracion')">
					<a href="{{ url('/admin/configuracion-general') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-settings"></i></span>
						<span class="pcoded-mtext">Configuración general</span>
					</a>
				</li>
			</ul>
			<div class="pcoded-navigation-label">Gestión de usuarios</div>
			<ul class="pcoded-item pcoded-left-item">
				<li class="@yield('administradores')">
					<a href="{{ url('/admin/lista-administrador') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-user"></i></span>
						<span class="pcoded-mtext">Administradores</span>
					</a>
				</li>
				<li class="@yield('usuarios')">
					<a href="{{ url('/admin/lista-usuario') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-users"></i></span>
						<span class="pcoded-mtext">Usuarios</span>
					</a>
				</li>
			</ul>
            <div class="pcoded-navigation-label">Gestión de alumnos</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu @yield('preinscritos')">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                        <span class="pcoded-mtext">Verificar inscritos</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="@yield('por-calificar')">
                            <a href="{{ url('/admin/lista-inscritos') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Por verificar</span>
                            </a>
                        </li>
                        <li class="@yield('historial-preinscritos')">
                            <a href="{{ url('/admin/historial-inscritos') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Historial de verificaciones</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@yield('voucher')">
                    <a href="{{ url('/admin/verificar-pagos') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                        <span class="pcoded-mtext">Verificar pagos</span>
                    </a>
                </li>
                <li class="@yield('matriculados')">
                    <a href="{{ url('/admin/lista-matriculados') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-check"></i></span>
                        <span class="pcoded-mtext">Lista de matriculados</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Gestión del alquiler</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu @yield('alquileres')">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Alquiler de local</span>
                    </a>
                    <ul class="pcoded-submenu">
                        {{-- <li class="@yield('listado')">
                            <a href="{{ url('/admin/alquiler-de-local') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Ver solicitudes</span>
                            </a>
                        </li> --}}
                        <li class="@yield('tipo')">
                            <a href="{{ url('/admin/info-de-local') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Cambiar información</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<div class="pcoded-navigation-label">Gestión de cursos</div>
			<ul class="pcoded-item pcoded-left-item">
				<li class="pcoded-hasmenu @yield('certificaciones')">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-award"></i></span>
						<span class="pcoded-mtext">Certificaciones</span>
					</a>
					<ul class="pcoded-submenu">
						<li class="@yield('listado')">
							<a href="{{ url('/admin/certificaciones') }}" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Cursos de certificación</span>
							</a>
						</li>
						<li class="@yield('tipo')">
							<a href="{{ url('/admin/tipos-certificacion') }}" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Tipos de certificación</span>
							</a>
						</li>
						<li class="@yield('empresas')">
							<a href="{{ url('/admin/empresas-certificadoras') }}" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Empresas certificadoras</span>
							</a>
						</li>

					</ul>
				</li>

				<li class="@yield('talleres')">
					<a href="{{ url('/admin/talleres') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-book"></i></span>
						<span class="pcoded-mtext">Talleres</span>
					</a>
				</li>
                <li class="@yield('seminarios')">
                    <a href="{{ url('/admin/seminarios') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-speaker"></i></span>
                        <span class="pcoded-mtext">Seminarios</span>
                    </a>
                </li>
				<li class="@yield('webinars')">
					<a href="{{ url('/admin/webinars') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
						<span class="pcoded-mtext">Webinars</span>
					</a>
				</li>
                <div class="pcoded-navigation-label">Gestión de contenido</div>
                <li class="@yield('temarios')">
                    <a href="{{ url('/admin/temarios') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Temarios</span>
                    </a>
                </li>
				<li class="@yield('instructores')">
					<a href="{{ url('/admin/instructores') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
						<span class="pcoded-mtext">Instructores</span>
					</a>
				</li>
                <li class="@yield('papelera')">
                    <a href="{{ url('/admin/papelera') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-trash"></i></span>
                        <span class="pcoded-mtext">Papelera de reciclaje</span>
                    </a>
                </li>
			</ul>

		</div>
	</div>
</nav>
