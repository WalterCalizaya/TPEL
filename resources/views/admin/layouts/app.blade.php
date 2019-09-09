<!DOCTYPE html>
<html lang="es">
<head>
	<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>@yield('title') | Panel de administración - Tacnatel</title>
	<meta name="description" content="@yield('description','Panel de administración de Tacnatel, esta sección está disponible sólo para administradores')" />
	<meta name="author" content="Tacnatel" />

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ url('/resources/admin/assets/images/favicon.ico') }}" type="image/x-icon">

	@include('admin.include.css')
	@include('admin.include.data')

</head>
<body>

	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			@include('admin.include.navbar')

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					@include('admin.include.sidebar')

					<div class="pcoded-content">

						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<div class="page-body">

										@yield('content')

									</div>
								</div>
							</div>
						</div>
					</div>

					{{-- <div id="styleSelector">
					</div>--}}

				</div>
			</div>
		</div>
	</div>

	@include('admin.include.js')

</body>

</html>
