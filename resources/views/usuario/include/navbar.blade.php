<nav class="navbar header-navbar pcoded-header">
	<div class="navbar-wrapper">
		<div class="navbar-logo">
			<a href="{{ url('/') }}">
				<img class="img-fluid" src="{{ url('resources/admin/assets/images/logo.png') }}" alt="Logo Tacnatel" title="Volver a Tacnatel.pe" />
			</a>
			<a class="mobile-menu" id="mobile-collapse" href="#!">
				<i class="feather icon-menu icon-toggle-right"></i>
			</a>
			<a class="mobile-options waves-effect waves-light">
				<i class="feather icon-more-horizontal"></i>
			</a>
		</div>
		<div class="navbar-container container-fluid">
			<ul class="nav-left">
				<li>
					<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
						<i class="full-screen feather icon-maximize"></i>
					</a>
				</li>
			</ul>
			<ul class="nav-right">
				<li class="user-profile header-notification">
					<div class="dropdown-primary dropdown">
						<div class="dropdown-toggle" data-toggle="dropdown">
							<span>¡Hola {{ Auth::user()->nombres }}!</span>
							<img src="{{ Auth::user()->foto ? Auth::user()->foto : '/resources/img/user/default.png' }}" class="img-radius img-40" width="40px" height="40px" alt="{{ Auth::user()->email }}">
							<i class="feather icon-chevron-down"></i>
						</div>
						<ul class="profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							{{-- <li>
								<a href="{{ url('/admin/perfil-admin') }}">
									<i class="feather icon-user"></i> Mi perfil
								</a>
							</li>

							<li>
								<a href="{{ url('/admin/perfil-admin/modificar') }}">
									<i class="feather icon-settings"></i> Editar perfil
								</a>
							</li> --}}

							<form action="{{ url('/logout') }}" method="post" id="logout-form">
								@csrf
								<li style="cursor: default;">
									<button type="submit" class="btn-light btn-block" style="border:none; margin-left:-6px; cursor: pointer; text-align: left; font-size: 15px;">
										<i class="feather icon-log-out"></i> Cerrar sesión
									</button>
								</li>
							</form>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
