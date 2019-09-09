<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">

            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('dashboard')">
                    <a href="{{ url('/admin/usuario') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Principal</span>
                    </a>
                </li>
                <li class="@yield('proximos')">
                    <a href="{{ url('/admin/usuario/proximos-eventos') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                        <span class="pcoded-mtext">Próximos eventos</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Mis intereses</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('preinscripcion')">
                    <a href="{{ url('/admin/usuario/pre-inscripcion') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                        <span class="pcoded-mtext">Pre-Inscripción</span>
                    </a>
                </li>
                <li class="@yield('cotizaciones')">
                    <a href="{{ url('/admin/usuario/cotizaciones') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-paperclip"></i></span>
                        <span class="pcoded-mtext">Mis cotizaciones</span>
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