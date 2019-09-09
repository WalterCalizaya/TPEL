@extends('plataforma.layouts.app')

@section('css')
    {{--  --}}
@endsection

@section('titulo')
    Error 404
@endsection

@section('navbar')
navbar-menu
@endsection

@section('header-hero')

@endsection

@section('contenido')
	<section class="section page-content">
		<div class="container">
			<div class="row">

				<div class="col-xs-12">
					<div class="no-content-error">
						<h1>Error 404</h1>
						<h2>Opps! Esto es embarazoso... 😰</h2>
						<p>La página que está buscando se movió, eliminó, renombró o quizás nunca existió.</p>
						<a href="//entacna.org" class="btn btn-home">Ir a la página principal</a>
					</div><!-- /.no-content-error -->
				</div><!-- /.col-xs-12 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.section categories -->

@endsection

@section('js')

@endsection
