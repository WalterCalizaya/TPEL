<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">

            <ul class="pcoded-item pcoded-left-item">

            	<li style="background: #233B53">
            		<a href="javascript:void(0)" class="waves-effect waves-dark">
            			<span class="pcoded-micon">
            				<i class="feather icon-user"></i>
            			</span>
            			<span class="pcoded-mtext">{{ Auth::user()->tipo == 2 ? 'Plan Full' : 'Plan gratuito' }}</span>
            		</a>
            	</li>

                <li class="@yield('dashboard')">
                    <a href="{{ url('/admin/usuario') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Principal</span>
                    </a>
                </li>
            </ul>

            @if (Auth::user()->tipo == 2)
            <div class="pcoded-navigation-label">Mi plan</div>
            <ul class="pcoded-item pcoded-left-item">

                <li class="@yield('cepu-invierno')">
                    <a href="{{ url('/admin/usuario/cepu-invierno') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                        <span class="pcoded-mtext">CEPU Invierno</span>
                    </a>
                </li>
            @endif

            <div class="pcoded-navigation-label">Mis intereses</div>
            <ul class="pcoded-item pcoded-left-item">

                <li class="@yield('preinscripcion')">
                    <a href="{{ url('/admin/usuario/inscripcion') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                        <span class="pcoded-mtext">Inscripción</span>
                    </a>
                </li>

                <li class="@yield('cotizaciones')">
                    <a href="{{ url('/admin/usuario/recibos') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-paperclip"></i></span>
                        <span class="pcoded-mtext">Mis recibos</span>
                    </a>
                </li>

                <li class="@yield('voucher')">
                    <a href="{{ url('/admin/usuario/enviar-voucher') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-crosshair"></i></span>
                        <span class="pcoded-mtext">Enviar voucher</span>
                    </a>
                </li>

                <li class="@yield('medios')">
                    <a href="{{ url('/admin/usuario/medios-de-pago') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                        <span class="pcoded-mtext">Medios de pago</span>
                    </a>
                </li>

            </ul>
            <div class="pcoded-navigation-label">Gestión de matrículas</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('eventos-asistidos')">
                    <a href="{{ url('/admin/usuario/mis-matriculas') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-check"></i></span>
                        <span class="pcoded-mtext">Mis matrículas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
