@extends('front.layouts.app')

@section('titulo')
Inicio
@endsection

@section('inicio')
active
@endsection

@section('content')

<div class="banner-area transparent-nav content-top-heading text-normal">
    <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

        <div class="carousel-inner text-light carousel-zoom">
            <div class="item active">
                <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/7.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInDown">Tu profesor las <span>24 horas</span> del día</h1>
                                        <p data-animation="animated slideInUp">
                                            ¿Tienes un examen de admisión y no tienes tiempo para asistir a una academia presencial? ¡No esperes más, aprende ahora!
                                        </p>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="{{ url('/registro-usuario') }}">Registrarse ahora</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ url('/login') }}">Iniciar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/8.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInDown">Interacción <span>Alumno - Profesor</span></h1>
                                        <p data-animation="animated slideInUp">
                                            Nuestras clases virtuales en vivo te permiten tener interacción directa con el profesor con el fin de resolver cualquier duda que tengas, todo desde el lugar donde te encuentres
                                        </p>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="{{ url('/registro-usuario') }}">Registrarse ahora</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ url('/login') }}">Iniciar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Siguiente</span>
        </a>

    </div>
</div>


<div id="pricing" class="pricing-area default-padding bg-gray bottom-less">
    <div class="container">
        <div class="row">
            <div class="pricing pricing-simple text-center">
                <div class="col-md-4 equal-height" style="height: 626px;">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h4>Gratuito</h4>
                                <h2><sup></sup>Gratis<sub></sub></h2>
                            </li>
                            <li><strong>Acceso limitado gratuito</strong></li>
                            <li>Sección pizarritas</li>
                            <li><strong>Tutoriales</strong></li>
                            <li class="footer">
                                <a class="btn circle btn-dark border btn-sm" href="{{ url('/registro-usuario') }}">Registrarse ahora</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 equal-height" style="height: 626px;">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h4>Básico</h4>
                                <h2><sup>S/</sup>85<sub>/ Ciclo</sub></h2>
                            </li>
                            <li style="color: red;"><strong>Todo el plan gratuito más:</strong></li>
                            <li><strong>Acceso a clases en vivo</strong></li>
                            <li>Descarga de material en PDF</li>
                            <li class="footer">
                                <a class="btn circle btn-dark border btn-sm" href="{{ url('/registro-usuario') }}">Adquirir</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 equal-height" style="height: 626px;">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h4>Full</h4>
                                <h2 style="font-size: 32px;"><del><sup>S/</sup> 100<sub>/ Ciclo</sub></del></h2>
                                <h2><sup>S/</sup> 85<sub>/ Ciclo</sub></h2>
                            </li>
                            <li style="color: red;"><strong>Todo el plan básico más:</strong></li>
                            <li><strong>Acceso a clases grabadas</strong></li>
                            <li>Simuladores virtuales de exámenes</li>
                            <li>Banco de preguntas de CEPUs pasados</li>
                            <li class="footer">
                                <a class="btn circle btn-theme effect btn-sm" href="{{ url('/registro-usuario') }}">Adquirir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-featues-area about-area default-padding bg-dark">
    <div class="container">
            <div class="our-features">
                <div class="col-md-4 col-sm-4">
                    <div class="item mariner">
                        <div class="icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="info">
                            <h4>¡Donde quieras!</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item java">
                        <div class="icon">
                            <i class="flaticon-learning"></i>
                        </div>
                        <div class="info">
                            <h4>¡Cuando quieras!</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item malachite">
                        <div class="icon">
                            <i class="flaticon-book-2"></i>
                        </div>
                        <div class="info">
                            <h4>¡Cómo quieras!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subscribe-area text-center text-light default-padding bg-fixed shadow dark-hard" style="background-image: url(assets/img/banner/20.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="content">
                    <h2>¡Comienza ahora mismo!</h2>
                    <p>Tenemos una gran cantidad de clases que puedes ver completamente gratis. ¿Quieres aprender? No esperes más y hazlo ya mismo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
