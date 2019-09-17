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
							<h2>Práctica 03: Divisibilidad</h2>
						</div>
						<!-- End Title-->

						 @if (Auth::check())
						<!-- Thumbnail -->
						<div class="row">
							<div class="col-md-8">
								<h3>Hoy a las 07:00 pm</h3>
								{{-- <div class="thumb">
									<iframe width="100%" height="400" src="https://www.youtube.com/embed/cd08vEt-rEE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div> --}}
								<!-- End Thumbnail -->

								<!-- Course Meta -->
								<div class="course-meta">
									<div class="item author">
										<div class="desc">
											<h4>Clase</h4>
											<a href="#">03</a>
										</div>
									</div>
									<div class="align-right">
										<a class="btn btn-dark effect btn-sm" href="{{ url('practicas/03-divisibilidad.pdf') }}">
											<i class="fas fa-download"></i> Descargar práctica en PDF
										</a>
									</div>
								</div>
								<!-- End Course Meta -->
							</div><!-- /.col-md-8 -->
							<div class="col-md-4">
								{{-- <iframe src="https://www.youtube.com/live_chat?v=cd08vEt-rEE&embed_domain=tuprofeenlinea.com" width="100%" height="400" frameborder="0"></iframe> --}}
							</div><!-- /.col-md-4 -->
						</div><!-- /.row -->
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
