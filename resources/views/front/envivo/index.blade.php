@extends('front.layouts.app')

@section('envivo')
En vivo
@endsection

@section('titulo')
En vivo
@endsection


@section('content')

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/25.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Transmisiones en vivo</h1>
                    {{-- <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Event</li>
                    </ul> --}}
			</div>
        </div>
	</div>
</div>

<div class="course-details-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="course-details-info">
					<!-- Star Top Info -->
					<div class="top-info">
						<!-- Title-->
						<div class="title">
							<h2>Sistema de Numeración y Cuatro Operaciones (Práctica de Reforzamiento)</h2>
						</div>
						<!-- End Title-->

						 @if (Auth::check())
						<!-- Thumbnail -->
						{{-- <div class="thumb">
							<iframe width="100%" height="500" src="https://www.youtube.com/embed/W9Y0vzNgujo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> --}}
						<!-- End Thumbnail -->

						<!-- Course Meta -->
						<div class="course-meta">
							<div class="item author">
								<div class="desc">
									<h4>Clase</h4>
									<a href="#">01</a>
								</div>
							</div>
						</div>
						<!-- End Course Meta -->
						@else
		                    <div class="callout callout-warning">
		                        <h5>¡Contenido bloqueado!</h5>
		                        <p>Necesitas <a href="{{ url('/login') }}">iniciar sesión</a> o <a href="{{ url('/registro-usuario') }}">crear una nueva cuenta</a> para poder ver esta clase.</p>
		                        <center><img class="img-fluid" src="{{ url('/resources/img/contenido-bloqueado.jpg') }}" alt="Contenido bloqueado" /></center>
		                    </div>
		                @endif
					</div>
					<!-- End Top Info -->
				</div>
			</div>
			<!-- Start Sidebar -->
			{{-- <div class="col-md-4">
				<div class="sidebar">
					<aside>

					</aside>
				</div>
			</div> --}}
			<!-- End Sidebar -->
		</div>
	</div>
</div>
@endsection
