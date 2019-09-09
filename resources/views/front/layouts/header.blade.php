<div class="top-bar-area address-one-lines inc-transparent-nav bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            ¿Tienes alguna pregunta?  952801373 | 921892150
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            info@tuprofeenlinea.com
                        </li>
                    </ul>
                </div>
            </div>
            @if (!Auth::check())
            <div class="user-login text-right col-md-4">
                <a class="popup-with-form" href="{{ url('/registro-usuario') }}">
                    <i class="fas fa-edit"></i> Registro
                </a>
                <a  class="popup-with-form" href="{{ url('/login') }}">
                    <i class="fas fa-user"></i> Iniciar sesión
                </a>
            </div>
            @endif
        </div>
    </div>
</div>

<header id="home">
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white pad-top bootsnav">
        <div class="container">

            @if (Auth::check())
            <div class="attr-nav">
                <ul>
                    {{-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> --}}
                    <li class="side-menu"><a href="#">Mi cuenta <i class="fas fa-angle-down"></i></a></li>
                </ul>
            </div>
            @endif

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('assets/img/logo-light.png') }}" class="logo logo-display" alt="Logo">
                    <img src="{{ url('assets/img/logo.png') }}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/pizarritas') }}">Pizarritas</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Tutoriales</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/tutoriales/aritmetica') }}">Nociones Básicas</a></li>
                            <li><a href="{{ url('/tutoriales/aritmetica') }}">Aritmética</a></li>
                            <li><a href="{{ url('/tutoriales/algebra') }}">Álgebra</a></li>
                            <li><a href="{{ url('/tutoriales/razonamiento-matematico') }}">Razonamiento Matemático</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Extras</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/extras/practicas-cepu') }}">Prácticas CEPU</a></li>
                            <li><a href="{{ url('/extras/seminarios') }}">Seminarios en vivo</a></li>
                            <li><a href="{{ url('/simulador-de-examenes') }}">Simulador de Exámenes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>

        @if (Auth::check())
	        @if (Auth::user()->tipo==1) {{-- Admin --}}

	        <div class="side">
	            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
	            <div class="widget">
	                <h4 class="title">Mi cuenta</h4>
	                <div class="profile-thumb">
	                	<img src="{{ Auth::user()->foto ? Auth::user()->foto : '/resources/img/user/default.png' }}" class="img-responsive" alt="{{ Auth::user()->email }}">
	                </div>
	                <h4><span class="label label-danger">Usuario administrador</span></h4>
	                <ul>
	                    <li><a href="{{ url('/admin') }}">Panel de usuario</a></li>
	                    <li><a href="{{ url('/admin/perfil-admin') }}">Perfil</a></li>
	                    <li><a href="{{ url('/admin/perfil-admin/modificar') }}">Editar perfil</a></li>
	                    <li>
	                    	<a href="#">
	                    		<form action="{{ url('/logout') }}" method="post">
	                    			@csrf
	                    			<button type="submit" class="btn btn-theme effect btn-md">
	                    				Cerrar sesión
	                    			</button>
	                    		</form>
	                    	</a>
	                    </li>
	                </ul>
	            </div>
	            <div class="widget social">
	                <h4 class="title">Contacta con nosotros</h4>
	                <ul class="link">
	                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/TuProfeEnLineaPeru"><i class="fab fa-facebook-f"></i></a></li>
	                    <li class="twitter"><a target="_blank" href="https://www.facebook.com/groups/practicascepu/"><i class="fab fa-facebook-messenger"></i></a></li>
	                    <li class="pinterest"><a target="_blank" href="https://api.whatsapp.com/send?phone=+51952801373&text=Hola soy {{ Auth::user()->nombres }} y mi correo es {{ Auth::user()->email }}, tengo una consulta"><i class="fab fa-whatsapp"></i></a></li>
	                </ul>
	            </div>
	        </div>

	        @else {{-- Usuario --}}
	        <div class="side">
	            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
	            <div class="widget">
	                <h4 class="title">Mi cuenta</h4>
	                <div class="profile-thumb">
	                	<img src="{{ Auth::user()->foto ? Auth::user()->foto : '/resources/img/user/default.png' }}" class="img-responsive" alt="{{ Auth::user()->email }}">
	                </div>
	                <h4><span class="label label-success">{{ Auth::user()->tipo == 2 ? 'Plan Full' : 'Plan gratuito' }}</span></h4>
	                <ul>
	                    <li><a href="{{ url('/admin/usuario') }}">Panel de usuario</a></li>
	                    <li><a href="{{ url('/usuario/perfil') }}">Perfil</a></li>
	                    <li><a href="{{ url('/usuario/perfil/modificar') }}">Editar perfil</a></li>
	                    <li><a href="{{ url('/usuario/mis-compras') }}">Historial de compras</a></li>
	                    <li>
	                    	<a href="#">
	                    		<form action="{{ url('/logout') }}" method="post">
	                    			@csrf
	                    			<button type="submit" class="btn btn-theme effect btn-md">
	                    				Cerrar sesión
	                    			</button>
	                    		</form>
	                    	</a>
	                    </li>
	                </ul>
	            </div>
	            <div class="widget social">
	                <h4 class="title">Contacta con nosotros</h4>
	                <ul class="link">
	                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/TuProfeEnLineaPeru"><i class="fab fa-facebook-f"></i></a></li>
	                    <li class="twitter"><a target="_blank" href="https://www.facebook.com/groups/practicascepu/"><i class="fab fa-facebook-messenger"></i></a></li>
	                    <li class="pinterest"><a target="_blank" href="https://api.whatsapp.com/send?phone=+51952801373&text=Hola soy {{ Auth::user()->nombres }} y mi correo es {{ Auth::user()->email }}, tengo una consulta"><i class="fab fa-whatsapp"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        @endif
        @endif

    </nav>
</header>