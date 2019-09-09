<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link @yield('dashboard')" href="{{ url('/admin/dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> Principal
                </a>
            </li>
            <li class="nav-title">Opciones</li>
            <li class="nav-item nav-dropdown @yield('administradores')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon fa fa-users"></i> Administradores
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-administrador')" href="{{ url('/admin/lista-administrador') }}">
                            <i class="fa fa-users"></i> Lista administradores
                        </a>
                    </li>
                    @if (Auth::user()->id==1||Auth::user()->id==2)
                        <li class="nav-item">
                            <a class="nav-link @yield('agregar-administrador')" href="{{ url('/admin/lista-administrador/create') }}">
                                <i class="fa fa-user-plus"></i> Agregar administrador
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('usuarios')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-people"></i> Usuarios
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-usuario')" href="{{ url('/admin/lista-usuario') }}">
                            <i class="nav-icon icon-people"></i> Lista de usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-usuario')" href="{{ url('/admin/lista-usuario/create') }}">
                            <i class="nav-icon icon-user-follow"></i> Agregar usuario
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('categorias')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-tag"></i> Categorías
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-rubro')" href="{{ url('/admin/lista-rubro') }}">
                            <i class="nav-icon icon-tag"></i> Lista de rubros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-rubro')" href="{{ url('/admin/lista-rubro/create') }}">
                            <i class="nav-icon icon-plus"></i> Agregar rubro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-categoria')" href="{{ url('/admin/lista-categoria') }}">
                            <i class="nav-icon icon-tag"></i> Lista de categorías
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-categoria')" href="{{ url('/admin/lista-categoria/create') }}">
                            <i class="nav-icon icon-plus"></i> Agregar categoría
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('adsenses')" href="{{ url('/admin/lista-adsense') }}">
                    <i class="nav-icon icon-diamond"></i> AdSense
                </a>
            </li>
            <li class="nav-item nav-dropdown @yield('paginas')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-note"></i> Páginas
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-pagina')" href="{{ url('/admin/lista-pagina') }}">
                            <i class="nav-icon fa fa-list-alt"></i> Lista de páginas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-pagina')" href="{{ url('/admin/lista-pagina/create') }}">
                            <i class="nav-icon icon-note"></i> Agregar página
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('mapas')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-map"></i> Mapa interactivo
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('mapa-interactivo')" href="{{ url('/admin/mapa-interactivo') }}">
                            <i class="nav-icon icon-location-pin"></i> Ver ubicaciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-mapa')" href="{{ url('/admin/mapa-interactivo/create') }}">
                            <i class="nav-icon icon-note"></i> Agregar ubicación
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('mapa-categoria')" href="{{ url('/admin/mapa-categoria') }}">
                            <i class="nav-icon icon-tag"></i> Moderar categorías
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('turismo')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-direction"></i> Sección turística
                </a>
                <ul class="nav-dropdown-items">
                	<li class="nav-item">
                        <a class="nav-link @yield('turismo-publicaciones')" href="{{ url('/admin/publicaciones-turismo') }}">
                            <i class="nav-icon icon-list"></i> Publicaciones
                        </a>
                    </li>
                	<li class="nav-item">
                        <a class="nav-link @yield('turismo-subcategorias')" href="{{ url('/admin/subcategorias-turismo') }}">
                            <i class="nav-icon icon-tag"></i> Subcategorías
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('turismo-categorias')" href="{{ url('/admin/categorias-turismo') }}">
                            <i class="nav-icon icon-tag"></i> Categorías
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('membresias')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-star"></i> Membresías
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link @yield('aprobar-pedidos')" href="{{ url('/admin/aprobar-pedidos-membresia') }}">
                            <i class="nav-icon icon-basket-loaded"></i> Aprobar pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-pedidos')" href="{{ url('/admin/lista-pedidos-membresia') }}">
                            <i class="nav-icon icon-chart"></i> Todos los pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('lista-plan')" href="{{ url('/admin/lista-membresia') }}">
                            <i class="nav-icon icon-badge"></i> Lista de planes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('agregar-plan')" href="{{ url('/admin/lista-membresia/create') }}">
                            <i class="nav-icon icon-plus"></i> Agregar plan
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('empresas')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-briefcase"></i> Empresas
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
				                <a class="nav-link @yield('moderar-empresa')" href="{{ url('/admin/moderar-empresas') }}">
				                    <i class="nav-icon icon-magic-wand"></i> Moderar empresas
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('lista-empresa')" href="{{ url('/admin/lista-empresa') }}">
				                    <i class="nav-icon icon-briefcase"></i> Lista de empresas
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('destacar-empresa')" href="{{ url('/admin/destacar-empresa') }}">
				                    <i class="nav-icon icon-trophy"></i> Destacar empresas
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('agregar-empresa')" href="{{ url('/admin/lista-empresa/create') }}">
				                    <i class="nav-icon icon-plus"></i> Agregar empresa
				                </a>
				            </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('preguntasrespuestas')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-question"></i> Preguntas
                </a>
                <ul class="nav-dropdown-items">
                		<li class="nav-item">
				                <a class="nav-link @yield('moderar-preguntas')" href="{{ url('/admin/moderar-preguntas') }}">
				                    <i class="nav-icon icon-pencil"></i> Esperando respuesta
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('lista-preguntas')" href="{{ url('/admin/lista-preguntas') }}">
				                    <i class="nav-icon icon-question"></i> Listado de preguntas
				                </a>
				            </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('comentarios')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-bubbles"></i> Comentarios
                </a>
                <ul class="nav-dropdown-items">
                		<li class="nav-item">
				                <a class="nav-link @yield('moderar-comentarios')" href="{{ url('/admin/moderar-comentarios') }}">
				                    <i class="nav-icon icon-magic-wand"></i> Moderar comentarios
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('lista-comentarios')" href="{{ url('/admin/lista-comentarios') }}">
				                    <i class="nav-icon icon-bubbles"></i> Todos los comentarios
				                </a>
				            </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown @yield('valoraciones')">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-magic-wand"></i> Calificaciones
                </a>
                <ul class="nav-dropdown-items">
                		<li class="nav-item">
				                <a class="nav-link @yield('moderar-califi')" href="{{ url('/admin/moderar-calificaciones') }}">
				                    <i class="nav-icon icon-magic-wand"></i> Moderar calificaciones
				                </a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link @yield('lista-califi')" href="{{ url('/admin/lista-calificaciones') }}">
				                    <i class="nav-icon icon-bubbles"></i> Lista de calificaciones
				                </a>
				            </li>
                </ul>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>