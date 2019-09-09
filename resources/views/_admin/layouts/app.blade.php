<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>@yield('title') | Panel de Administración - EnTacna</title>
	@include('admin.layouts.css')
    @include('admin.layouts.data')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	@include('admin.layouts.header')
	<div class="app-body">
		@include('admin.layouts.sidebar')
		<main class="main">
			<div class="container-fluid">
				<div class="animated fadeIn">
					@yield('contenido')
				</div>
			</div>
		</main>

	</div>
	<footer class="app-footer">
		<div class="ml-auto">
			<span>Powered by</span>
			<a href="https://scala.pe">Scala Studio</a>
		</div>
	</footer>
    @include('admin.layouts.js')
</body>
</html>