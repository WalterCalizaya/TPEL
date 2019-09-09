<?php

use Illuminate\Database\Seeder;

class TemariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temarios')->delete();
        
        \DB::table('temarios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'Por definir',
                'tipo_temario' => 0,
                'slug' => 'por-definir',
                'temario' => '<p>--</p>',
                'contenido' => '<p>--</p>',
                'estado' => 1,
                'created_at' => '2019-06-29 03:18:39',
                'updated_at' => '2019-06-29 03:18:39',
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'MTCNA',
                'tipo_temario' => 1,
                'slug' => 'mtcna',
                'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Introducción
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Acerca de MikroTik
<ul>
<li><em>Qué es RouterOS</em></li>
<li><em>Qué es RouterBoard</em></li>
</ul>
</li>
<li>Accediendo por primera vez al router
<ul>
<li><em>Winbox/Mac-Winbox</em></li>
<li><em>Webfig/Quickset</em></li>
</ul>
</li>
<li>Interfaz de línea de comandos (CLI)
<ul>
<li><em>Cable NULL-Módem</em></li>
<li><em>SSH/Telnet</em></li>
<li><em>Terminal en Winbox/Webfig</em></li>
</ul>
</li>
<li>Comandos principales de CLI
<ul>
<li><em>&lt;tab&gt;, doble &lt;tab&gt;, ?, navegación</em></li>
<li><em>Comandos históricos y sus beneficios</em></li>
</ul>
</li>
<li>Configuración incial (Acceso a Internet)
<ul>
<li><em>WAN – Cliente DHCP</em></li>
<li><em>Direccionamiento LAN y Default Gateway</em></li>
<li><em>Firewall básico y NAT (Enmascaramiento)</em></li>
</ul>
</li>
<li>Actualización de RouterOS
<ul>
<li><em>Tipos de paquetes</em></li>
<li><em>Formas de actualización RouterOS</em></li>
<li><em>Actualización de Firmware</em></li>
</ul>
</li>
<li>Administración de usuarios de RouterOS</li>
<li>Administración de servicios de RouterOS</li>
<li>Gestión de archivos de respaldo
<ul>
<li><em>Generar y restaurar archivos de respaldo</em></li>
<li><em>Editar archivos exportados</em></li>
</ul>
</li>
<li>Licencias de RouterOS
<ul>
<li><em>Niveles de licencias</em></li>
<li><em>Actualización de licencias</em></li>
</ul>
</li>
<li> Netinstall
<ul>
<li><em>Reinstalación de RouterOS</em></li>
<li><em>Resetear RouterOS</em></li>
</ul>
</li>
<li>Información adicional de MikroTik
<ul>
<li><em>Wiki</em></li>
<li><em>Tiktube</em></li>
<li><em>Foro</em></li>
<li><em>Distribuidores/Consultores/Instructores</em></li>
<li><em>Soporte MikroTik</em></li>
</ul>
</li>
<li><strong><em>Laboratorio Módulo 1</em></strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Enrutamiento (Routing)
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Introducción de Enrutamiento
<ul>
<li><em>Conceptos de ruteo</em></li>
<li><em>Descripción de rutas</em></li>
</ul>
</li>
<li>Enrutamiento Estático
<ul>
<li><em>Creación de rutas</em></li>
<li><em>Configuración de ruta por defecto</em></li>
<li><em>Rutas dinámicas</em></li>
<li><em>Implementación de enrutamiento simple y una red</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 2</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Bridging
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Introducción de Bridging
<ul>
<li><em>Conceptos de bridge</em></li>
<li><em>Creación de bridge</em></li>
<li><em>Agregar puertos al bridge</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 3</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Wireless
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Conceptos 802.11n
<ul>
<li><em>Frecuencias (bandas, canales, canales avanzados)</em></li>
<li><em>Data rates, HT Chains (Tx/Rx), regulaciones de país.</em></li>
<li><em>Configuraciones 802.11 a/b/g</em></li>
</ul>
</li>
<li>Configuración de un enlace inalámbrico simple
<ul>
<li><em>Configuración de AP</em></li>
<li><em>Configuración de Clientes</em></li>
</ul>
</li>
<li>Filtrado de direcciones MAC
<ul>
<li><em>Autenticación por defecto</em></li>
<li><em>Access-list (AP)</em></li>
<li><em>Connect-list (Cliente)</em></li>
<li><em>Default-Forwarding</em></li>
</ul>
</li>
<li>Seguridad y encriptación en redes inalámbricas
<ul>
<li><em>WPA-PSK</em></li>
<li><em>WPA2-PSK</em></li>
</ul>
</li>
<li>Protocolos de MikroTik para redes inalámbricas
<ul>
<li><em>Configuración NV2 (TDMA)</em></li>
</ul>
</li>
<li>Herramientas de monitoreo
<ul>
<li><em>Scan</em></li>
<li><em>Snooper</em></li>
<li><em>Tabla de registro</em></li>
</ul>
</li>
<li>Bridge sobre redes inalámbricas
<ul>
<li><em>Configuración Station-bridge</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 4</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Administración de Red
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>ARP
<ul>
<li><em>Modos de ARP</em></li>
<li><em>Tabla ARP de RouterOS</em></li>
</ul>
</li>
<li>Servidor y Cliente DHCP
<ul>
<li><em>Cliente DHCP</em></li>
<li><em>Servidor DHCP</em></li>
<li><em>Administración de Leases</em></li>
</ul>
</li>
<li>Herramientas de RouterOS
<ul>
<li><em>E-mail</em></li>
<li><em>Netwatch</em></li>
<li><em>Ping, Traceroute</em></li>
<li><em>Profile (carga de CPU)</em></li>
</ul>
</li>
<li>Contactando al soporte de MikroTik
<ul>
<li><em>rif, auotsupout.rif, viewer</em></li>
<li><em>Logs y debug</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 5</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Firewall
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Principios de Firewall
<ul>
<li><em>Sistema de rastero y estado de conexiones</em></li>
<li><em>Estructura del firewall, cadenas y acciones</em></li>
</ul>
</li>
<li>Filtrado de paquetes
<ul>
<li><em>Acciones de filtrado</em></li>
<li><em>Protección del router (input)</em></li>
<li><em>Protección de clientes (forward)</em></li>
</ul>
</li>
<li>Lista de direcciones</li>
<li>Source NAT
<ul>
<li><em>Acciones masquerada y src-nat</em></li>
</ul>
</li>
<li>Destination NAT
<ul>
<li><em>Acciones redirect y dst-nat</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 6</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: QoS (Calidad de Servicio)
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Colas simples
<ul>
<li><em>Target</em></li>
<li><em>Destinos</em></li>
<li><em>Límites máximos y mínimos de ancho de banda</em></li>
<li><em>Ráfagas de consumo (burst)</em></li>
</ul>
</li>
<li>Una cola simple para toda la red (PCQ)
<ul>
<li><em>Configuración pcq-rate</em></li>
<li><em>Configuración pcq-limit</em></li>
</ul>
</li>
<li>Monitoreo
<ul>
<li><em>Monitorear tráfico de las interfaces</em></li>
<li><em>Torch</em></li>
<li><em>Gráficos</em></li>
<li><em>SNMP</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 7</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="ocho">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloOcho" aria-expanded="false" aria-controls="moduloOcho">
Módulo 08: Túneles
</button>
</h5>
</div>
<div id="moduloOcho" class="collapse" aria-labelledby="ocho" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuraciones PPP
<ul>
<li><em>Perfiles</em></li>
<li><em>Usuarios</em></li>
<li><em>Estado de conexión</em></li>
</ul>
</li>
<li>Pool de direcciones IP
<ul>
<li><em>Creación de Pool</em></li>
<li><em>Administración de rangos</em></li>
<li><em>Asignación a servicios</em></li>
</ul>
</li>
<li>Redes locales seguras
<ul>
<li><em>Service-name PPPoE</em></li>
<li><em>Servidor PPPoE</em></li>
<li><em>Direccionamiento punto a punto</em></li>
<li><em>Cliente PPPoE</em></li>
</ul>
</li>
<li>Redes remotas seguras
<ul>
<li><em>Servidor y Cliente PPTP</em></li>
<li><em>Servidor y Cliente SSTP sin certificados</em></li>
<li><em>Configuración de rutas entre redes</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 8</strong></li>
</ul>
</div>
</div>
</div>
</div>',
                'contenido' => '<h3>Módulo 01: Introducción</h3>
<ul>
<li>Acerca de MikroTik
<ul>
<li><em>Qué es RouterOS</em></li>
<li><em>Qué es RouterBoard</em></li>
</ul>
</li>
<li>Accediendo por primera vez al router
<ul>
<li><em>Winbox/Mac-Winbox</em></li>
<li><em>Webfig/Quickset</em></li>
</ul>
</li>
<li>Interfaz de línea de comandos (CLI)
<ul>
<li><em>Cable NULL-Módem</em></li>
<li><em>SSH/Telnet</em></li>
<li><em>Terminal en Winbox/Webfig</em></li>
</ul>
</li>
<li>Comandos principales de CLI
<ul>
<li><em>&lt;tab&gt;, doble &lt;tab&gt;, ?, navegación</em></li>
<li><em>Comandos históricos y sus beneficios</em></li>
</ul>
</li>
<li>Configuración incial (Acceso a Internet)
<ul>
<li><em>WAN – Cliente DHCP</em></li>
<li><em>Direccionamiento LAN y Default Gateway</em></li>
<li><em>Firewall básico y NAT (Enmascaramiento)</em></li>
</ul>
</li>
<li>Actualización de RouterOS
<ul>
<li><em>Tipos de paquetes</em></li>
<li><em>Formas de actualización RouterOS</em></li>
<li><em>Actualización de Firmware</em></li>
</ul>
</li>
<li>Administración de usuarios de RouterOS</li>
<li>Administración de servicios de RouterOS</li>
<li>Gestión de archivos de respaldo
<ul>
<li><em>Generar y restaurar archivos de respaldo</em></li>
<li><em>Editar archivos exportados</em></li>
</ul>
</li>
<li>Licencias de RouterOS
<ul>
<li><em>Niveles de licencias</em></li>
<li><em>Actualización de licencias</em></li>
</ul>
</li>
<li> Netinstall
<ul>
<li><em>Reinstalación de RouterOS</em></li>
<li><em>Resetear RouterOS</em></li>
</ul>
</li>
<li>Información adicional de MikroTik
<ul>
<li><em>Wiki</em></li>
<li><em>Tiktube</em></li>
<li><em>Foro</em></li>
<li><em>Distribuidores/Consultores/Instructores</em></li>
<li><em>Soporte MikroTik</em></li>
</ul>
</li>
<li><strong><em>Laboratorio Módulo 1</em></strong></li>
</ul>
<h3>Módulo 02: Enrutamiento (Routing)</h3>
<ul>
<li>Introducción de Enrutamiento
<ul>
<li><em>Conceptos de ruteo</em></li>
<li><em>Descripción de rutas</em></li>
</ul>
</li>
<li>Enrutamiento Estático
<ul>
<li><em>Creación de rutas</em></li>
<li><em>Configuración de ruta por defecto</em></li>
<li><em>Rutas dinámicas</em></li>
<li><em>Implementación de enrutamiento simple y una red</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 2</strong></li>
</ul>
<h3>Módulo 03: Bridging</h3>
<ul>
<li>Introducción de Bridging
<ul>
<li><em>Conceptos de bridge</em></li>
<li><em>Creación de bridge</em></li>
<li><em>Agregar puertos al bridge</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 3</strong></li>
</ul>
<h3>Módulo 04: Wireless</h3>
<ul>
<li>Conceptos 802.11n
<ul>
<li><em>Frecuencias (bandas, canales, canales avanzados)</em></li>
<li><em>Data rates, HT Chains (Tx/Rx), regulaciones de país.</em></li>
<li><em>Configuraciones 802.11 a/b/g</em></li>
</ul>
</li>
<li>Configuración de un enlace inalámbrico simple
<ul>
<li><em>Configuración de AP</em></li>
<li><em>Configuración de Clientes</em></li>
</ul>
</li>
<li>Filtrado de direcciones MAC
<ul>
<li><em>Autenticación por defecto</em></li>
<li><em>Access-list (AP)</em></li>
<li><em>Connect-list (Cliente)</em></li>
<li><em>Default-Forwarding</em></li>
</ul>
</li>
<li>Seguridad y encriptación en redes inalámbricas
<ul>
<li><em>WPA-PSK</em></li>
<li><em>WPA2-PSK</em></li>
</ul>
</li>
<li>Protocolos de MikroTik para redes inalámbricas
<ul>
<li><em>Configuración NV2 (TDMA)</em></li>
</ul>
</li>
<li>Herramientas de monitoreo
<ul>
<li><em>Scan</em></li>
<li><em>Snooper</em></li>
<li><em>Tabla de registro</em></li>
</ul>
</li>
<li>Bridge sobre redes inalámbricas
<ul>
<li><em>Configuración Station-bridge</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 4</strong></li>
</ul>
<h3>Módulo 05: Administración de Red</h3>
<ul>
<li>ARP
<ul>
<li><em>Modos de ARP</em></li>
<li><em>Tabla ARP de RouterOS</em></li>
</ul>
</li>
<li>Servidor y Cliente DHCP
<ul>
<li><em>Cliente DHCP</em></li>
<li><em>Servidor DHCP</em></li>
<li><em>Administración de Leases</em></li>
</ul>
</li>
<li>Herramientas de RouterOS
<ul>
<li><em>E-mail</em></li>
<li><em>Netwatch</em></li>
<li><em>Ping, Traceroute</em></li>
<li><em>Profile (carga de CPU)</em></li>
</ul>
</li>
<li>Contactando al soporte de MikroTik
<ul>
<li><em>rif, auotsupout.rif, viewer</em></li>
<li><em>Logs y debug</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 5</strong></li>
</ul>
<h3>Módulo 06: Firewall</h3>
<ul>
<li>Principios de Firewall
<ul>
<li><em>Sistema de rastero y estado de conexiones</em></li>
<li><em>Estructura del firewall, cadenas y acciones</em></li>
</ul>
</li>
<li>Filtrado de paquetes
<ul>
<li><em>Acciones de filtrado</em></li>
<li><em>Protección del router (input)</em></li>
<li><em>Protección de clientes (forward)</em></li>
</ul>
</li>
<li>Lista de direcciones</li>
<li>Source NAT
<ul>
<li><em>Acciones masquerada y src-nat</em></li>
</ul>
</li>
<li>Destination NAT
<ul>
<li><em>Acciones redirect y dst-nat</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 6</strong></li>
</ul>
<h3>Módulo 07: QoS (Calidad de Servicio)</h3>
<ul>
<li>Colas simples
<ul>
<li><em>Target</em></li>
<li><em>Destinos</em></li>
<li><em>Límites máximos y mínimos de ancho de banda</em></li>
<li><em>Ráfagas de consumo (burst)</em></li>
</ul>
</li>
<li>Una cola simple para toda la red (PCQ)
<ul>
<li><em>Configuración pcq-rate</em></li>
<li><em>Configuración pcq-limit</em></li>
</ul>
</li>
<li>Monitoreo
<ul>
<li><em>Monitorear tráfico de las interfaces</em></li>
<li><em>Torch</em></li>
<li><em>Gráficos</em></li>
<li><em>SNMP</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 7</strong></li>
</ul>
<h3>Módulo 08: Túneles</h3>
<ul>
<li>Configuraciones PPP
<ul>
<li><em>Perfiles</em></li>
<li><em>Usuarios</em></li>
<li><em>Estado de conexión</em></li>
</ul>
</li>
<li>Pool de direcciones IP
<ul>
<li><em>Creación de Pool</em></li>
<li><em>Administración de rangos</em></li>
<li><em>Asignación a servicios</em></li>
</ul>
</li>
<li>Redes locales seguras
<ul>
<li><em>Service-name PPPoE</em></li>
<li><em>Servidor PPPoE</em></li>
<li><em>Direccionamiento punto a punto</em></li>
<li><em>Cliente PPPoE</em></li>
</ul>
</li>
<li>Redes remotas seguras
<ul>
<li><em>Servidor y Cliente PPTP</em></li>
<li><em>Servidor y Cliente SSTP sin certificados</em></li>
<li><em>Configuración de rutas entre redes</em></li>
</ul>
</li>
<li><strong>Laboratorio Módulo 8</strong></li>
</ul>',
                'estado' => 1,
                'created_at' => '2019-06-29 03:19:54',
                'updated_at' => '2019-06-29 03:19:54',
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'MTCRE',
                'tipo_temario' => 1,
                'slug' => 'mtcre',
                'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Enrutamiento Estático
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Rutas Estáticas</li>
<li>Rutas ECMP (Laboratorio)</li>
<li>Forzar el tráfico a través de una interfaz determinada</li>
<li>Disponibilidad de Gateway (check-gateway) y Distancia (Laboratorio)</li>
<li>Marcas (routing-mark) y políticas de enrutamiento (Laboratorio)</li>
<li>Enrutamiento Recursivo, scope y target-scope (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Ruteo Dinámico OSPF
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es OSPF</li>
<li>Cómo funciona OSPF
<ul>
<li>Protocolo Hello</li>
<li>Distribución de Rutas</li>
<li>LSA</li>
</ul>
</li>
<li>Estructura de red OSPF
<ul>
<li>Areas</li>
<li>Tipos de rutas</li>
</ul>
</li>
<li>Vecinos y estados de vecinos OSPF (Laboratorio)
<ul>
<li>Router Designado (DR)</li>
<li>Router Designado Backup (BDR)</li>
</ul>
</li>
<li>Métodos de distribución de rutas tipo 1 y tipo 2 (Laboratorio)</li>
<li>Costo de interfaces y tipos de interfaces + Laboratorio
<ul>
<li>Broadcast</li>
<li>NBMA</li>
</ul>
</li>
<li>Protocolo Spannig Tree (STP)</li>
<li>OSPF y Multicast</li>
<li>Áreas STUB y NSSA (Laboratorio)</li>
<li>Virtual Links (Laboratorio)</li>
<li>Filtros de ruteo (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: VPN
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es una VPN</li>
<li>Tipos de VPN</li>
<li>Conectividad Site-to-Site con túneles (Laboratorio)
<ul>
<li>IPIP</li>
<li>EOIP</li>
<li>PPTP, SSTP, L2TP</li>
</ul>
</li>
<li>VLAN y sus usos + Laboratorio</li>
<li>Implementación Q-in-Q (Laboratorio)</li>
<li>VLAN y Switch administrables</li>
<li>VLAN y configuración de switch en las RouterBoards.</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Direccionamiento PtP
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuración de direccionamiento Punto a Punto (PtP) (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: VRRP
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es y cómo funciona VRRP (Laboratorio)</li>
<li>Configuraciones VRRP Master y VRRP Backup (Laboratorio)</li>
<li>Implementación básica VRRP (Laboratorio)</li>
<li>Implementación de VRRP + ECMP (Laboratorio)</li>
<li>Implementación de VRRP + ECMP + BRIDGE + RSTP(Laboratorio</li>
</ul>
</div>
</div>
</div>
</div>',
                    'contenido' => '<h3>Módulo 01: Enrutamiento Estático</h3>
<ul>
<li>Rutas Estáticas</li>
<li>Rutas ECMP (Laboratorio)</li>
<li>Forzar el tráfico a través de una interfaz determinada</li>
<li>Disponibilidad de Gateway (check-gateway) y Distancia (Laboratorio)</li>
<li>Marcas (routing-mark) y políticas de enrutamiento (Laboratorio)</li>
<li>Enrutamiento Recursivo, scope y target-scope (Laboratorio)</li>
</ul>
<h3>Módulo 02: Ruteo Dinámico OSPF</h3>
<ul>
<li>Qué es OSPF</li>
<li>Cómo funciona OSPF
<ul>
<li>Protocolo Hello</li>
<li>Distribución de Rutas</li>
<li>LSA</li>
</ul>
</li>
<li>Estructura de red OSPF
<ul>
<li>Areas</li>
<li>Tipos de rutas</li>
</ul>
</li>
<li>Vecinos y estados de vecinos OSPF (Laboratorio)
<ul>
<li>Router Designado (DR)</li>
<li>Router Designado Backup (BDR)</li>
</ul>
</li>
<li>Métodos de distribución de rutas tipo 1 y tipo 2 (Laboratorio)</li>
<li>Costo de interfaces y tipos de interfaces + Laboratorio
<ul>
<li>Broadcast</li>
<li>NBMA</li>
</ul>
</li>
<li>Protocolo Spannig Tree (STP)</li>
<li>OSPF y Multicast</li>
<li>Áreas STUB y NSSA (Laboratorio)</li>
<li>Virtual Links (Laboratorio)</li>
<li>Filtros de ruteo (Laboratorio)</li>
</ul>
<h3>Módulo 03: VPN</h3>
<ul>
<li>Qué es una VPN</li>
<li>Tipos de VPN</li>
<li>Conectividad Site-to-Site con túneles (Laboratorio)
<ul>
<li>IPIP</li>
<li>EOIP</li>
<li>PPTP, SSTP, L2TP</li>
</ul>
</li>
<li>VLAN y sus usos + Laboratorio</li>
<li>Implementación Q-in-Q (Laboratorio)</li>
<li>VLAN y Switch administrables</li>
<li>VLAN y configuración de switch en las RouterBoards.</li>
</ul>
<h3>Módulo 04: Direccionamiento PtP</h3>
<ul>
<li>Configuración de direccionamiento Punto a Punto (PtP) (Laboratorio)</li>
</ul>
<h3>Módulo 05: VRRP</h3>
<ul>
<li>Qué es y cómo funciona VRRP (Laboratorio)</li>
<li>Configuraciones VRRP Master y VRRP Backup (Laboratorio)</li>
<li>Implementación básica VRRP (Laboratorio)</li>
<li>Implementación de VRRP + ECMP (Laboratorio)</li>
<li>Implementación de VRRP + ECMP + BRIDGE + RSTP(Laboratorio</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:22:16',
                        'updated_at' => '2019-06-29 03:22:16',
                    ),
                    3 => 
                    array (
                        'id' => 4,
                        'titulo' => 'MTCWE',
                        'tipo_temario' => 1,
                        'slug' => 'mtcwe',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Instalaciones Inalámbricas
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Instalaciones inalámbricas o Enrutadores inalámbricos
<ul>
<li>Hardware de RouterBoard</li>
<li>Tarjetas inalámbricas</li>
<li>Tipos de antena</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Estándares de Redes Inalámbricas
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Estándar inalámbrico 0 802.11 a / b / g / n
<ul>
<li>Bandas y ancho de canal</li>
<li>Frecuencias</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Herramientas Inalámbricas
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Herramientas inalámbricas + LAB
<ul>
<li>Escanear</li>
<li>Uso de frecuencia</li>
<li>Escaneo espectral / historial</li>
<li>Snooper</li>
<li>Alinear</li>
<li>Sniffer</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Solución de Problemas
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Soluciones de problemas de clientes inalámbricos + LAB
<ul>
<li>Análisis de tabla de registro</li>
<li>Ack-Timeout / Distancia</li>
<li>CCQ</li>
<li>Fuerza de la señal TX / RX</li>
<li>Marcos y marcos HW</li>
<li>Tasas de datos</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Configuraciones Avanzadas
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuración de ficha inalámbrica avanzada + LAB
<ul>
<li>HW-retries</li>
<li>HW-proteccion</li>
<li>Adaptive-noise-immunity</li>
<li>WMM</li>
<li>Configuración de regulación del país</li>
<li>TX-power + LAB</li>
<li>Virtual-AP</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: 802.11n
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Protocolo inalámbrico 802.11n o 802.11n + LAB
<ul>
<li>Características</li>
<li>Tasas de datos</li>
<li>Vinculación de canales</li>
<li>Agregación de cuadros</li>
<li>TX-power para N tarjetas</li>
<li>Configuración de cadena</li>
<li>Depuración de enlace inalámbrico</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: Seguridad
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Medidas de seguridad inalámbricas + LAB
<ul>
<li>Gestión de acceso</li>
<li>Access-List / Connect-List</li>
<li>RADIUS</li>
<li>Autenticación</li>
<li>Encriptación</li>
<li>EAP</li>
<li>Protección del marco de gestión</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="ocho">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloOcho" aria-expanded="false" aria-controls="moduloOcho">
Módulo 08: WDS y MESH
</button>
</h5>
</div>
<div id="moduloOcho" class="collapse" aria-labelledby="ocho" data-parent="#accordion">
<div class="card-block">
<ul>
<li>WDS y MESH o Protocolo inalámbrico WDS + LAB
<ul>
<li>Dynamic / Static WDS</li>
<li>Puente RSTP</li>
<li>Wireless MESH + LAB</li>
<li>HWMP + malla</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="nueve">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloNueve" aria-expanded="false" aria-controls="moduloNueve">
Módulo 09: Bridge
</button>
</h5>
</div>
<div id="moduloNueve" class="collapse" aria-labelledby="nueve" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Puente transparente inalámbrico + LAB
<ul>
<li>Puente WDS</li>
<li>AP / Estación-WDS</li>
<li>Pseudobridge</li>
<li>Túnel MPLS / VPLS</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="diez">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDiez" aria-expanded="false" aria-controls="moduloDiez">
Módulo 10: Protocolo Nstreme
</button>
</h5>
</div>
<div id="moduloDiez" class="collapse" aria-labelledby="diez" data-parent="#accordion">
<div class="card-block">
<ul>
<li>MikroTik Wireless Nstreme Protocol + LAB
<ul>
<li>Características</li>
<li>Opciones de configuración</li>
<li>Nstreme Dual</li>
<li>Solución de problemas</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="once">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloOnce" aria-expanded="false" aria-controls="moduloOnce">
Módulo 11: Protocolo Nv2
</button>
</h5>
</div>
<div id="moduloOnce" class="collapse" aria-labelledby="once" data-parent="#accordion">
<div class="card-block">
<ul>
<li>MikroTik Wireless Nv2 Protocol + LAB
<ul>
<li>Características</li>
<li>Opciones de configuración</li>
<li>Solución de problemas</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Instalaciones Inalámbricas</h3>
<ul>
<li>Instalaciones inalámbricas o Enrutadores inalámbricos
<ul>
<li>Hardware de RouterBoard</li>
<li>Tarjetas inalámbricas</li>
<li>Tipos de antena</li>
</ul>
</li>
</ul>
<h3>Módulo 02: Estándares de Redes Inalámbricas</h3>
<ul>
<li>Estándar inalámbrico 0 802.11 a / b / g / n
<ul>
<li>Bandas y ancho de canal</li>
<li>Frecuencias</li>
</ul>
</li>
</ul>
<h3>Módulo 03: Herramientas Inalámbricas</h3>
<ul>
<li>Herramientas inalámbricas + LAB
<ul>
<li>Escanear</li>
<li>Uso de frecuencia</li>
<li>Escaneo espectral / historial</li>
<li>Snooper</li>
<li>Alinear</li>
<li>Sniffer</li>
</ul>
</li>
</ul>
<h3>Módulo 04: Solución de Problemas</h3>
<ul>
<li>Soluciones de problemas de clientes inalámbricos + LAB
<ul>
<li>Análisis de tabla de registro</li>
<li>Ack-Timeout / Distancia</li>
<li>CCQ</li>
<li>Fuerza de la señal TX / RX</li>
<li>Marcos y marcos HW</li>
<li>Tasas de datos</li>
</ul>
</li>
</ul>
<h3>Módulo 05: Configuraciones Avanzadas</h3>
<ul>
<li>Configuración de ficha inalámbrica avanzada + LAB
<ul>
<li>HW-retries</li>
<li>HW-proteccion</li>
<li>Adaptive-noise-immunity</li>
<li>WMM</li>
<li>Configuración de regulación del país</li>
<li>TX-power + LAB</li>
<li>Virtual-AP</li>
</ul>
</li>
</ul>
<h3>Módulo 06: 802.11n</h3>
<ul>
<li>Protocolo inalámbrico 802.11n o 802.11n + LAB
<ul>
<li>Características</li>
<li>Tasas de datos</li>
<li>Vinculación de canales</li>
<li>Agregación de cuadros</li>
<li>TX-power para N tarjetas</li>
<li>Configuración de cadena</li>
<li>Depuración de enlace inalámbrico</li>
</ul>
</li>
</ul>
<h3>Módulo 07: Seguridad</h3>
<ul>
<li>Medidas de seguridad inalámbricas + LAB
<ul>
<li>Gestión de acceso</li>
<li>Access-List / Connect-List</li>
<li>RADIUS</li>
<li>Autenticación</li>
<li>Encriptación</li>
<li>EAP</li>
<li>Protección del marco de gestión</li>
</ul>
</li>
</ul>
<h3>Módulo 08: WDS y MESH</h3>
<ul>
<li>WDS y MESH o Protocolo inalámbrico WDS + LAB
<ul>
<li>Dynamic / Static WDS</li>
<li>Puente RSTP</li>
<li>Wireless MESH + LAB</li>
<li>HWMP + malla</li>
</ul>
</li>
</ul>
<h3>Módulo 09: Bridge</h3>
<ul>
<li>Puente transparente inalámbrico + LAB
<ul>
<li>Puente WDS</li>
<li>AP / Estación-WDS</li>
<li>Pseudobridge</li>
<li>Túnel MPLS / VPLS</li>
</ul>
</li>
</ul>
<h3>Módulo 10: Protocolo Nstreme</h3>
<ul>
<li>MikroTik Wireless Nstreme Protocol + LAB
<ul>
<li>Características</li>
<li>Opciones de configuración</li>
<li>Nstreme Dual</li>
<li>Solución de problemas</li>
</ul>
</li>
</ul>
<h3>Módulo 11: Protocolo Nv2</h3>
<ul>
<li>MikroTik Wireless Nv2 Protocol + LAB
<ul>
<li>Características</li>
<li>Opciones de configuración</li>
<li>Solución de problemas</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:25:26',
                        'updated_at' => '2019-06-29 03:25:26',
                    ),
                    4 => 
                    array (
                        'id' => 5,
                        'titulo' => 'MTCUME',
                        'tipo_temario' => 1,
                        'slug' => 'mtcume',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: PPP
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Perfil PPP (Laboratorio)
<ul>
<li>Direcciones locales y remotas</li>
<li>Filtros de entrada y salida</li>
<li>Lista de direcciones (Address-List)</li>
<li>Modificación de TCP-MSS</li>
<li>Cifrado</li>
<li>Tiempo límite de sesión</li>
<li>Configuración de ancho de banda (rate-limit)</li>
<li>Configuración “Only-one”</li>
</ul>
</li>
<li>Usuarios PPP (Laboratorio)
<ul>
<li>Perfiles</li>
<li>Direcciones locales y remotas</li>
<li>Configuración de rutas</li>
<li>Límite de Bytes de entrada y salida</li>
</ul>
</li>
<li>Pool de direcciones IP
<ul>
<li>Configuración de rango de direcciones</li>
<li>Anidar varios Pools (next-pool)</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: PPTP/L2TP
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>PPTP y L2TP
<ul>
<li>Conceptos</li>
<li>Comparación</li>
</ul>
</li>
<li>Configuración Cliente PPTP (Laboratorio)
<ul>
<li>Configurar la conexión del Cliente</li>
<li>Configurar de perfil</li>
<li>Agregación de ruta por defecto y rutas estáticas</li>
</ul>
</li>
<li>Configuración Servidor PPTP (Laboratorio)
<ul>
<li>Habilitar Servidor</li>
<li>Configurar Perfil</li>
<li>Creación de clientes</li>
<li>Establecer la interfaz estática para los clientes</li>
</ul>
</li>
<li>Configuración Cliente L2TP (Laboratorio)
<ul>
<li>Configurar la conexión del Cliente</li>
<li>Configurar de perfil</li>
<li>Agregación de ruta por defecto y rutas estáticas</li>
</ul>
</li>
<li>Configuración Servidor L2TP (Laboratorio)
<ul>
<li>Habilitar Servidor</li>
<li>Configurar Perfil</li>
<li>Creación de clientes</li>
<li>Establecer la interfaz estática para los clientes</li>
</ul>
</li>
<li>Servidor y Cliente PPPoE
<ul>
<li>Conceptos</li>
<li>Entornos de uso</li>
</ul>
</li>
<li>Comparación con otros protocolos PPP</li>
<li>Configuración del Cliente PPPoE (Laboratorio)
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
<li>Configurar Perfil</li>
</ul>
</li>
<li>Configuración Servidor PPPoE (Laboratorio)
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
<li>Servidor seguro al eliminar cualquier dirección IP de la interfaz de</li>
<li>servidor PPPoE</li>
</ul>
</li>
<li>Cifrado (Laboratorio)
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
</li>
<li>Interface ECMP
<ul>
<li>Configurar rutas ECMP para interfaces PPP</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: PPPoE
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Servidor y Cliente PPPoE
<ul>
<li>Conceptos</li>
<li>Entornos de uso</li>
</ul>
</li>
<li>Comparación con otros protocolos PPP</li>
<li>Configuración del Cliente PPPoE (Laboratorio)
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
<li>Configurar Perfil</li>
</ul>
</li>
<li>Configuración Servidor PPPoE (Laboratorio)
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
<li>Servidor seguro al eliminar cualquier dirección IP de la interfaz de servidor PPPoE</li>
</ul>
</li>
<li>Cifrado (Laboratorio)
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
</li>
<li>Interface ECMP
<ul>
<li>Configurar rutas ECMP para interfaces PPP</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: PPP Bridging
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Túneles L2TP y EoIP (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Configurar Túnel EoIP</li>
<li>Crear bridge y agregar las interfaces necesarias para los puertos</li>
<li>Verificar conectividad Ethernet entre los sitios remotos</li>
</ul>
</li>
<li>Túneles L2TP y VPLS (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Configurar Túnel VPLS</li>
<li>Crear bridge y agregar las interfaces necesarias para los puertos</li>
</ul>
</li>
<li>Túnel L2TP y Protocolo BCP (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Utilizar BCP para unir interfaces PPP</li>
<li>Agregar al bridge las interfaces necesarias</li>
</ul>
</li>
<li>Protocolo Multi-Link
<ul>
<li>Habilitar Multi-Link especificando los valores correctos de MRRU</li>
<li>Desactivar reglas de Mangle para los ajustes de MSS</li>
</ul>
</li>
<li>MLPP
<ul>
<li>Configurar el cliente PPP</li>
<li>Especificar múltiples interfaces para un solo cliente</li>
<li>Configurar servidor PPPoE con soporte MLPPP</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: IPSec
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Introducción
<ul>
<li>Conceptos</li>
<li>Comparación a otros protocolos de VPN</li>
</ul>
</li>
<li>IPSec Peer
<ul>
<li>Métodos de Autenticación</li>
<li>Modos de intercambio de IPSec</li>
<li>Cifrado y Algoritmos Hash</li>
<li>NAT-Traversal</li>
<li>Lifetime y Lifebytes</li>
<li>Protocolo DPD</li>
</ul>
</li>
<li>Políticas
<ul>
<li>Protocolo IPSec y acciones</li>
<li>Túneles</li>
<li>Políticas de Generación Dinámica</li>
</ul>
</li>
<li>Proposals (Políticas de cifrado)
<ul>
<li>Algoritmos de Cifrado y Autenticación</li>
<li>Lifetime</li>
<li>PFS</li>
</ul>
</li>
<li>Installed-SA
<ul>
<li>Flush SA</li>
</ul>
</li>
<li>Crear IPSec entre dos routers con NAT (Laboratorio)
<ul>
<li>Establecer Peer</li>
<li>Establecer Políticas</li>
<li>Establecer reglas de NAT</li>
<li>Confirmar que la conexión segura esta establecida</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Hostpot
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Introducción
<ul>
<li>Conceptos</li>
<li>Entorno de Uso</li>
<li>Configurar HotSpot con parámetros por defecto (Laboratorio)</li>
</ul>
</li>
<li>Métodos de Inicio de Sesión de HotSpot (Laboratorio)
<ul>
<li>HTTP CHAP/PAP</li>
<li>MAC</li>
<li>Cookie</li>
<li>HTTPS</li>
<li>Trial</li>
<li>RADIUS</li>
</ul>
</li>
<li>Usuarios (Laboratorio)
<ul>
<li>Agregar Usuarios</li>
<li>Configurar Direcciones MAC para usuarios</li>
<li>Configurar Direcciones MAC como nombre de usuario</li>
<li>Limit Uptime y Limit Bytes In/Out</li>
<li>Configurar límites de usuarios</li>
</ul>
</li>
<li>Monitoreo de Usuarios
<ul>
<li>Tabla de Usuarios</li>
<li>Tabla de Usuarios Activos</li>
<li>SNMP para usuarios</li>
</ul>
</li>
<li>Perfil (Laboratorio)
<ul>
<li>Tiempo límite de conexión</li>
<li>Usuarios compartidos</li>
<li>Límites de ancho de banda (rate-limit)</li>
<li>Listas de direcciones (address-list)</li>
<li>Filtros de Entrada/Salida</li>
<li>Marcado de Paquetes de Entrada/Salida</li>
</ul>
</li>
<li>HotSpot Bypass
<ul>
<li>Walled-Garden</li>
<li>Walled-Garden-IP</li>
<li>IP-Binding</li>
</ul>
</li>
<li>HotSpot Personalizado (Laboratorio)</li>
<li>Publicidades</li>
<li>Páginas Personalizadas</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: RADIUS
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Cliente RADIUS (Laboratorio)
<ul>
<li>Agregar Cliente RADIUS</li>
<li>Configurar Servicios</li>
<li>Usar RADIUS para servicios específicos</li>
</ul>
</li>
<li>Servidor RADIUS</li>
<li>User Manager (Laboratorio)
<ul>
<li>Instalar la última versión de User-Manager</li>
<li>Agregar Enrutadores</li>
<li>Agregar Usuarios</li>
<li>Configurar Perfiles</li>
</ul>
</li>
<li>Habilitar la opción “RADIUS Incoming”</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: PPP</h3>
<ul>
<li>Perfil PPP (Laboratorio)
<ul>
<li>Direcciones locales y remotas</li>
<li>Filtros de entrada y salida</li>
<li>Lista de direcciones (Address-List)</li>
<li>Modificación de TCP-MSS</li>
<li>Cifrado</li>
<li>Tiempo límite de sesión</li>
<li>Configuración de ancho de banda (rate-limit)</li>
<li>Configuración “Only-one”</li>
</ul>
</li>
<li>Usuarios PPP (Laboratorio)
<ul>
<li>Perfiles</li>
<li>Direcciones locales y remotas</li>
<li>Configuración de rutas</li>
<li>Límite de Bytes de entrada y salida</li>
</ul>
</li>
<li>Pool de direcciones IP
<ul>
<li>Configuración de rango de direcciones</li>
<li>Anidar varios Pools (next-pool)</li>
</ul>
</li>
</ul>
<h3>Módulo 02: PPTP/L2TP</h3>
<ul>
<li>PPTP y L2TP
<ul>
<li>Conceptos</li>
<li>Comparación</li>
</ul>
</li>
<li>Configuración Cliente PPTP (Laboratorio)
<ul>
<li>Configurar la conexión del Cliente</li>
<li>Configurar de perfil</li>
<li>Agregación de ruta por defecto y rutas estáticas</li>
</ul>
</li>
<li>Configuración Servidor PPTP (Laboratorio)
<ul>
<li>Habilitar Servidor</li>
<li>Configurar Perfil</li>
<li>Creación de clientes</li>
<li>Establecer la interfaz estática para los clientes</li>
</ul>
</li>
<li>Configuración Cliente L2TP (Laboratorio)
<ul>
<li>Configurar la conexión del Cliente</li>
<li>Configurar de perfil</li>
<li>Agregación de ruta por defecto y rutas estáticas</li>
</ul>
</li>
<li>Configuración Servidor L2TP (Laboratorio)
<ul>
<li>Habilitar Servidor</li>
<li>Configurar Perfil</li>
<li>Creación de clientes</li>
<li>Establecer la interfaz estática para los clientes</li>
</ul>
</li>
<li>Servidor y Cliente PPPoE
<ul>
<li>Conceptos</li>
<li>Entornos de uso</li>
</ul>
</li>
<li>Comparación con otros protocolos PPP</li>
<li>Configuración del Cliente PPPoE (Laboratorio)
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
<li>Configurar Perfil</li>
</ul>
</li>
<li>Configuración Servidor PPPoE (Laboratorio)
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
<li>Servidor seguro al eliminar cualquier dirección IP de la interfaz de</li>
<li>servidor PPPoE</li>
</ul>
</li>
<li>Cifrado (Laboratorio)
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
</li>
<li>Interface ECMP
<ul>
<li>Configurar rutas ECMP para interfaces PPP</li>
</ul>
</li>
</ul>
<h3>Módulo 03: PPPoE</h3>
<ul>
<li>Servidor y Cliente PPPoE
<ul>
<li>Conceptos</li>
<li>Entornos de uso</li>
</ul>
</li>
<li>Comparación con otros protocolos PPP</li>
<li>Configuración del Cliente PPPoE (Laboratorio)
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
<li>Configurar Perfil</li>
</ul>
</li>
<li>Configuración Servidor PPPoE (Laboratorio)
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
<li>Servidor seguro al eliminar cualquier dirección IP de la interfaz de servidor PPPoE</li>
</ul>
</li>
<li>Cifrado (Laboratorio)
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
</li>
<li>Interface ECMP
<ul>
<li>Configurar rutas ECMP para interfaces PPP</li>
</ul>
</li>
</ul>
<h3>Módulo 04: PPP Bridging</h3>
<ul>
<li>Túneles L2TP y EoIP (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Configurar Túnel EoIP</li>
<li>Crear bridge y agregar las interfaces necesarias para los puertos</li>
<li>Verificar conectividad Ethernet entre los sitios remotos</li>
</ul>
</li>
<li>Túneles L2TP y VPLS (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Configurar Túnel VPLS</li>
<li>Crear bridge y agregar las interfaces necesarias para los puertos</li>
</ul>
</li>
<li>Túnel L2TP y Protocolo BCP (Laboratorio)
<ul>
<li>Configurar Túnel L2TP</li>
<li>Utilizar BCP para unir interfaces PPP</li>
<li>Agregar al bridge las interfaces necesarias</li>
</ul>
</li>
<li>Protocolo Multi-Link
<ul>
<li>Habilitar Multi-Link especificando los valores correctos de MRRU</li>
<li>Desactivar reglas de Mangle para los ajustes de MSS</li>
</ul>
</li>
<li>MLPP
<ul>
<li>Configurar el cliente PPP</li>
<li>Especificar múltiples interfaces para un solo cliente</li>
<li>Configurar servidor PPPoE con soporte MLPPP</li>
</ul>
</li>
</ul>
<h3>Módulo 05: IPSec</h3>
<ul>
<li>Introducción
<ul>
<li>Conceptos</li>
<li>Comparación a otros protocolos de VPN</li>
</ul>
</li>
<li>IPSec Peer
<ul>
<li>Métodos de Autenticación</li>
<li>Modos de intercambio de IPSec</li>
<li>Cifrado y Algoritmos Hash</li>
<li>NAT-Traversal</li>
<li>Lifetime y Lifebytes</li>
<li>Protocolo DPD</li>
</ul>
</li>
<li>Políticas
<ul>
<li>Protocolo IPSec y acciones</li>
<li>Túneles</li>
<li>Políticas de Generación Dinámica</li>
</ul>
</li>
<li>Proposals (Políticas de cifrado)
<ul>
<li>Algoritmos de Cifrado y Autenticación</li>
<li>Lifetime</li>
<li>PFS</li>
</ul>
</li>
<li>Installed-SA
<ul>
<li>Flush SA</li>
</ul>
</li>
<li>Crear IPSec entre dos routers con NAT (Laboratorio)
<ul>
<li>Establecer Peer</li>
<li>Establecer Políticas</li>
<li>Establecer reglas de NAT</li>
<li>Confirmar que la conexión segura esta establecida</li>
</ul>
</li>
</ul>
<h3>Módulo 06: Hostpot</h3>
<ul>
<li>Introducción
<ul>
<li>Conceptos</li>
<li>Entorno de Uso</li>
<li>Configurar HotSpot con parámetros por defecto (Laboratorio)</li>
</ul>
</li>
<li>Métodos de Inicio de Sesión de HotSpot (Laboratorio)
<ul>
<li>HTTP CHAP/PAP</li>
<li>MAC</li>
<li>Cookie</li>
<li>HTTPS</li>
<li>Trial</li>
<li>RADIUS</li>
</ul>
</li>
<li>Usuarios (Laboratorio)
<ul>
<li>Agregar Usuarios</li>
<li>Configurar Direcciones MAC para usuarios</li>
<li>Configurar Direcciones MAC como nombre de usuario</li>
<li>Limit Uptime y Limit Bytes In/Out</li>
<li>Configurar límites de usuarios</li>
</ul>
</li>
<li>Monitoreo de Usuarios
<ul>
<li>Tabla de Usuarios</li>
<li>Tabla de Usuarios Activos</li>
<li>SNMP para usuarios</li>
</ul>
</li>
<li>Perfil (Laboratorio)
<ul>
<li>Tiempo límite de conexión</li>
<li>Usuarios compartidos</li>
<li>Límites de ancho de banda (rate-limit)</li>
<li>Listas de direcciones (address-list)</li>
<li>Filtros de Entrada/Salida</li>
<li>Marcado de Paquetes de Entrada/Salida</li>
</ul>
</li>
<li>HotSpot Bypass
<ul>
<li>Walled-Garden</li>
<li>Walled-Garden-IP</li>
<li>IP-Binding</li>
</ul>
</li>
<li>HotSpot Personalizado (Laboratorio)</li>
<li>Publicidades</li>
<li>Páginas Personalizadas</li>
</ul>
<h3>Módulo 07: RADIUS</h3>
<ul>
<li>Cliente RADIUS (Laboratorio)
<ul>
<li>Agregar Cliente RADIUS</li>
<li>Configurar Servicios</li>
<li>Usar RADIUS para servicios específicos</li>
</ul>
</li>
<li>Servidor RADIUS</li>
<li>User Manager (Laboratorio)
<ul>
<li>Instalar la última versión de User-Manager</li>
<li>Agregar Enrutadores</li>
<li>Agregar Usuarios</li>
<li>Configurar Perfiles</li>
</ul>
</li>
<li>Habilitar la opción “RADIUS Incoming”</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:30:15',
                        'updated_at' => '2019-06-29 03:30:15',
                    ),
                    5 => 
                    array (
                        'id' => 6,
                        'titulo' => 'MTCTCE',
                        'tipo_temario' => 1,
                        'slug' => 'mtctce',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Cliente DNS / Caché
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuración básica</li>
<li>Servidor DNS y caché</li>
<li>Entradas estáticas DNS (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: DHCP
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Comunicación DHCP</li>
<li>Configuración del Cliente DHCP (Laboratorio)</li>
<li>Configuración del Servidor DHCP (Laboratorio)
<ul>
<li><em>Servidor DHCP</em></li>
<li><em>Información de Red</em></li>
<li><em>Opciones DHCP</em></li>
<li><em>Pool de direcciones IP</em></li>
</ul>
</li>
<li>Configuración del DHCP Relay (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Firewall
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Sistema de rastreo de conexiones (Connection Tracking)</li>
<li>Reglas de Filtrado (Laboratorio)
<ul>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
</ul>
</li>
<li>Reglas de Enmascaramiento (NAT) (Laboratorio)
<ul>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
<li><em>NAT helpers</em></li>
</ul>
</li>
<li>Reglas de Marcación (Mangle) (Laboratorio)</li>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
<li>Condiciones más complejas para el uso de las reglas</li>
<li>uPNP</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Prevención de Intrusos
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Prevención de Ataques
<ul>
<li><em>Inundamiento ICMP (Ping Flood) &#8211; (Laboratorio)</em></li>
<li><em>Escaneo de puertos (Port Scan) &#8211; (Laboratorio)</em></li>
<li><em>Denegación de servicios (DoS) &#8211; (Laboratorio)</em></li>
<li><em>Denegación de servicios distribuido (DdoS) &#8211; (Laboratorio)</em></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Calidad de Servicio (QoS)
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>HTB
<ul>
<li><em>Conceptos básicos de HTB</em></li>
<li><em>Implementación de HTB (Árbol de Colas)</em></li>
<li><em>Estructura HTB (Laboratorio)</em></li>
<li><em>Doble Limitación HTB (Laboratorio)</em></li>
<li><em>Prioridades en HTB (Laboratorio)</em></li>
</ul>
</li>
<li>Burst (Laboratorio)</li>
<li>Tipos de Colas (Queue Types)
<ul>
<li><em>FIFO (Laboratorio)</em></li>
<li><em>SFQ (Laboratorio)</em></li>
<li><em>RED (Laboratorio)</em></li>
<li><em>PCQ (Laboratorios)</em></li>
<li><em>Tamaño de Cola (Queue Size) (Laboratorio)</em></li>
</ul>
</li>
<li>Colas Simples (Laboratorio)</li>
<li>Interacción de Colas Simples y Árbol de Colas</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Web Proxy
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuración básica</li>
<li>Lista de reglas de Proxy
<ul>
<li><em>Access List (Laboratorio)</em></li>
<li><em>Direct Access List (Laboratorio)</em></li>
<li><em>Cache List (Laboratorio)</em></li>
</ul>
</li>
<li>Expresion Regulares</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Cliente DNS / Caché</h3>
<ul>
<li>Configuración básica</li>
<li>Servidor DNS y caché</li>
<li>Entradas estáticas DNS (Laboratorio)</li>
</ul>
<h3>Módulo 02: DHCP</h3>
<ul>
<li>Comunicación DHCP</li>
<li>Configuración del Cliente DHCP (Laboratorio)</li>
<li>Configuración del Servidor DHCP (Laboratorio)
<ul>
<li><em>Servidor DHCP</em></li>
<li><em>Información de Red</em></li>
<li><em>Opciones DHCP</em></li>
<li><em>Pool de direcciones IP</em></li>
</ul>
</li>
<li>Configuración del DHCP Relay (Laboratorio)</li>
</ul>
<h3>Módulo 03: Firewall</h3>
<ul>
<li>Sistema de rastreo de conexiones (Connection Tracking)</li>
<li>Reglas de Filtrado (Laboratorio)
<ul>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
</ul>
</li>
<li>Reglas de Enmascaramiento (NAT) (Laboratorio)
<ul>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
<li><em>NAT helpers</em></li>
</ul>
</li>
<li>Reglas de Marcación (Mangle) (Laboratorio)</li>
<li><em>Cadenas (Por defecto, Personalizadas)</em></li>
<li><em>Acciones aplicables a las reglas</em></li>
<li><em>Condicionamientos más comunes</em></li>
<li>Condiciones más complejas para el uso de las reglas</li>
<li>uPNP</li>
</ul>
<h3>Módulo 04: Prevención de Intrusos</h3>
<ul>
<li>Prevención de Ataques
<ul>
<li><em>Inundamiento ICMP (Ping Flood) &#8211; (Laboratorio)</em></li>
<li><em>Escaneo de puertos (Port Scan) &#8211; (Laboratorio)</em></li>
<li><em>Denegación de servicios (DoS) &#8211; (Laboratorio)</em></li>
<li><em>Denegación de servicios distribuido (DdoS) &#8211; (Laboratorio)</em></li>
</ul>
</li>
</ul>
<h3>Módulo 05: Calidad de Servicio (QoS)</h3>
<ul>
<li>HTB
<ul>
<li><em>Conceptos básicos de HTB</em></li>
<li><em>Implementación de HTB (Árbol de Colas)</em></li>
<li><em>Estructura HTB (Laboratorio)</em></li>
<li><em>Doble Limitación HTB (Laboratorio)</em></li>
<li><em>Prioridades en HTB (Laboratorio)</em></li>
</ul>
</li>
<li>Burst (Laboratorio)</li>
<li>Tipos de Colas (Queue Types)
<ul>
<li><em>FIFO (Laboratorio)</em></li>
<li><em>SFQ (Laboratorio)</em></li>
<li><em>RED (Laboratorio)</em></li>
<li><em>PCQ (Laboratorios)</em></li>
<li><em>Tamaño de Cola (Queue Size) (Laboratorio)</em></li>
</ul>
</li>
<li>Colas Simples (Laboratorio)</li>
<li>Interacción de Colas Simples y Árbol de Colas</li>
</ul>
<h3>Módulo 06: Web Proxy</h3>
<ul>
<li>Configuración básica</li>
<li>Lista de reglas de Proxy
<ul>
<li><em>Access List (Laboratorio)</em></li>
<li><em>Direct Access List (Laboratorio)</em></li>
<li><em>Cache List (Laboratorio)</em></li>
</ul>
</li>
<li>Expresion Regulares</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:32:12',
                        'updated_at' => '2019-06-29 03:32:12',
                    ),
                    6 => 
                    array (
                        'id' => 7,
                        'titulo' => 'MTCINE',
                        'tipo_temario' => 1,
                        'slug' => 'mtcine',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Protocolo de Borde - BGP
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es un Sistema Autónomo</li>
<li>Qué es BGP</li>
<li>Algortimo Path-Vector</li>
<li>Transporte BGP y tipos de paquetes</li>
<li>iBGP y eBGP (Laboratorio)</li>
<li>Escenarios de Redes Stub y eliminación de AS privados (Laboratorio)</li>
<li>Escenarios Non-Stub (Laboratorio)</li>
<li>iBGP y eBGP con Multihop, direccionamiento Loopback (Laboratorio)</li>
<li>Distribución de rutas y filtros de enrutamiento (Laboratorio)</li>
<li>Algoritmo de selección del mejor camino BGP (Laboratorio)</li>
<li>Atributos de BGP y sus usos (Laboratorio)</li>
<li>Reflectores de rutas BGP y confederaciones (Laboratorio)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Multi Protocol Label Switching
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es MPLS (Básico)</li>
<li>Distribución estática de etiquetas (Laboratorio)</li>
<li>Distribución dinámica de etiquetas (LDP) (Laboratorio)</li>
<li>Qué es el Penultimate-Hop-Popping</li>
<li>Diferencias de Traceroute MPLS</li>
<li>Túneles VPLS basados en LDP (Laboratorio)</li>
<li>Qué es el Bridge Split Horizon (Laboratorio)</li>
<li>Uso del VPLS CW (Control-Word)</li>
<li>Importancia del L2MTU y fragmentaciónMPLS</li>
<li>Túneles VPLS basados en BGP (Laboratorio)</li>
<li>VRF y rutas de escape (Laboratorio)</li>
<li>L3VPN (Túneles L3 basados en BGP) (Laboratorio)</li>
<li>OSPF como protocolo para enrutadores CE-PE</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Túneles de Ingeniería
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Qué es ingeniería de tráfico y cómo funciona</li>
<li>Protocolo RSVP</li>
<li>Caminos estáticos y caminos dinámicos(CSPF)(Laboratorio)</li>
<li>Configuraciones y Diferencias entre asignación de ancho de banda y limitación de ancho de banda (Laboratorio)</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Protocolo de Borde - BGP</h3>
<ul>
<li>Qué es un Sistema Autónomo</li>
<li>Qué es BGP</li>
<li>Algortimo Path-Vector</li>
<li>Transporte BGP y tipos de paquetes</li>
<li>iBGP y eBGP (Laboratorio)</li>
<li>Escenarios de Redes Stub y eliminación de AS privados (Laboratorio)</li>
<li>Escenarios Non-Stub (Laboratorio)</li>
<li>iBGP y eBGP con Multihop, direccionamiento Loopback (Laboratorio)</li>
<li>Distribución de rutas y filtros de enrutamiento (Laboratorio)</li>
<li>Algoritmo de selección del mejor camino BGP (Laboratorio)</li>
<li>Atributos de BGP y sus usos (Laboratorio)</li>
<li>Reflectores de rutas BGP y confederaciones (Laboratorio)</li>
</ul>
<h3>Módulo 02: Multi Protocol Label Switching</h3>
<ul>
<li>Qué es MPLS (Básico)</li>
<li>Distribución estática de etiquetas (Laboratorio)</li>
<li>Distribución dinámica de etiquetas (LDP) (Laboratorio)</li>
<li>Qué es el Penultimate-Hop-Popping</li>
<li>Diferencias de Traceroute MPLS</li>
<li>Túneles VPLS basados en LDP (Laboratorio)</li>
<li>Qué es el Bridge Split Horizon (Laboratorio)</li>
<li>Uso del VPLS CW (Control-Word)</li>
<li>Importancia del L2MTU y fragmentaciónMPLS</li>
<li>Túneles VPLS basados en BGP (Laboratorio)</li>
<li>VRF y rutas de escape (Laboratorio)</li>
<li>L3VPN (Túneles L3 basados en BGP) (Laboratorio)</li>
<li>OSPF como protocolo para enrutadores CE-PE</li>
</ul>
<h3>Módulo 03: Túneles de Ingeniería</h3>
<ul>
<li>Qué es ingeniería de tráfico y cómo funciona</li>
<li>Protocolo RSVP</li>
<li>Caminos estáticos y caminos dinámicos(CSPF)(Laboratorio)</li>
<li>Configuraciones y Diferencias entre asignación de ancho de banda y limitación de ancho de banda (Laboratorio)</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:33:35',
                        'updated_at' => '2019-06-29 03:33:35',
                    ),
                    7 => 
                    array (
                        'id' => 8,
                        'titulo' => 'MTCIPv6E',
                        'tipo_temario' => 1,
                        'slug' => 'mtcipv6e',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Introducción IPv6
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>IPv6 address
<ul>
<li>Differences between IPv4 and IPv6</li>
</ul>
</li>
<li>Address distribution</li>
<li>Address notation
<ul>
<li>SLAAC IPv6 address creation (EUI-64)</li>
</ul>
</li>
<li>Subnetting</li>
<li>Address types
<ul>
<li>Link-local</li>
<li>Global</li>
<li>Multicast</li>
<li>Anycast</li>
<li>Unique local</li>
<li>Special addresses</li>
</ul>
</li>
<li>Reserved IPv6 addresses</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Protocolo IPv6
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Address configuration</li>
<li>Auto-configuration</li>
<li>Stateless – SLAAC, DHCPv6</li>
<li>Stateful – DHCPv6</li>
<li>Neighbor discovery protocol</li>
<li>Pv6 routing basics</li>
<li>IPv6 prefix</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Paquete IPv6
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>IPv6 header</li>
<li>Header field description</li>
<li>Next header (daisy chaining)</li>
<li>Fragmentation</li>
<li>Path MTU discovery</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Seguridad IPv6
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>ICMPv6</li>
<li>Neighbor discovery protocol</li>
<li>Router solicitation</li>
<li>Router advertisement</li>
<li>Neighbor solicitation</li>
<li>Duplicate address detection</li>
<li>Neighbor unreachability detection</li>
<li>Neighbor advertisement</li>
<li>‘Managed address configuration’ flag</li>
<li>‘Other configuration’ flag</li>
<li>Redirect</li>
<li>MLD (Multicast Listener Discovery)</li>
<li>Temporary addresses</li>
<li>Firewall</li>
<li>Ipsec</li>
<li>Header only encryption (AH)</li>
<li>Data only encryption (ESP)</li>
<li>Header and data encryption (AH+ESP)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Mecanismos de Transición
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Dual stack (RIPE recommended)</li>
<li>6to4</li>
<li>6RD</li>
<li>Teredo</li>
<li>DS-lite (Dual stack lite)</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Interoperabilidad
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>IPv6 pool</li>
<li>DHCP
<ul>
<li>DHCP PD server</li>
<li>DHCP PD client</li>
<li>DHCPv6 client</li>
</ul>
</li>
<li>IPv6 tunnels
<ul>
<li>IPIPv6</li>
<li>EoIPv6</li>
<li>GRE6</li>
</ul>
</li>
<li>IP version agnostic
<ul>
<li>DNS</li>
<li>Reverse DNS</li>
<li>NTP</li>
</ul>
</li>
<li>PPP IPv6 support</li>
<li>Routing</li>
<li>Using global addresses as in IPv4</li>
<li>Using link-local addresses as in IPv6</li>
<li>RouterOS features not yet available for IPv6
<ul>
<li>NAT</li>
<li>HotSpot</li>
<li>RADIUS integration</li>
<li>Policy routing</li>
<li>DHCPv6 server</li>
</ul>
</li>
<li>Tools
<ul>
<li>Ping</li>
<li>Traceroute</li>
<li>Torch</li>
<li>Traffic generator</li>
<li>Email</li>
<li>Netwatch</li>
<li>Traffic flow</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Introducción IPv6</h3>
<ul>
<li>IPv6 address
<ul>
<li>Differences between IPv4 and IPv6</li>
</ul>
</li>
<li>Address distribution</li>
<li>Address notation
<ul>
<li>SLAAC IPv6 address creation (EUI-64)</li>
</ul>
</li>
<li>Subnetting</li>
<li>Address types
<ul>
<li>Link-local</li>
<li>Global</li>
<li>Multicast</li>
<li>Anycast</li>
<li>Unique local</li>
<li>Special addresses</li>
</ul>
</li>
<li>Reserved IPv6 addresses</li>
</ul>
<h3>Módulo 02: Protocolo IPv6</h3>
<ul>
<li>Address configuration</li>
<li>Auto-configuration</li>
<li>Stateless – SLAAC, DHCPv6</li>
<li>Stateful – DHCPv6</li>
<li>Neighbor discovery protocol</li>
<li>Pv6 routing basics</li>
<li>IPv6 prefix</li>
</ul>
<h3>Módulo 03: Paquete IPv6</h3>
<ul>
<li>IPv6 header</li>
<li>Header field description</li>
<li>Next header (daisy chaining)</li>
<li>Fragmentation</li>
<li>Path MTU discovery</li>
</ul>
<h3>Módulo 04: Seguridad IPv6</h3>
<ul>
<li>ICMPv6</li>
<li>Neighbor discovery protocol</li>
<li>Router solicitation</li>
<li>Router advertisement</li>
<li>Neighbor solicitation</li>
<li>Duplicate address detection</li>
<li>Neighbor unreachability detection</li>
<li>Neighbor advertisement</li>
<li>‘Managed address configuration’ flag</li>
<li>‘Other configuration’ flag</li>
<li>Redirect</li>
<li>MLD (Multicast Listener Discovery)</li>
<li>Temporary addresses</li>
<li>Firewall</li>
<li>Ipsec</li>
<li>Header only encryption (AH)</li>
<li>Data only encryption (ESP)</li>
<li>Header and data encryption (AH+ESP)</li>
</ul>
<h3>Módulo 05: Mecanismos de Transición</h3>
<ul>
<li>Dual stack (RIPE recommended)</li>
<li>6to4</li>
<li>6RD</li>
<li>Teredo</li>
<li>DS-lite (Dual stack lite)</li>
</ul>
<h3>Módulo 06: Interoperabilidad</h3>
<ul>
<li>IPv6 pool</li>
<li>DHCP
<ul>
<li>DHCP PD server</li>
<li>DHCP PD client</li>
<li>DHCPv6 client</li>
</ul>
</li>
<li>IPv6 tunnels
<ul>
<li>IPIPv6</li>
<li>EoIPv6</li>
<li>GRE6</li>
</ul>
</li>
<li>IP version agnostic
<ul>
<li>DNS</li>
<li>Reverse DNS</li>
<li>NTP</li>
</ul>
</li>
<li>PPP IPv6 support</li>
<li>Routing</li>
<li>Using global addresses as in IPv4</li>
<li>Using link-local addresses as in IPv6</li>
<li>RouterOS features not yet available for IPv6
<ul>
<li>NAT</li>
<li>HotSpot</li>
<li>RADIUS integration</li>
<li>Policy routing</li>
<li>DHCPv6 server</li>
</ul>
</li>
<li>Tools
<ul>
<li>Ping</li>
<li>Traceroute</li>
<li>Torch</li>
<li>Traffic generator</li>
<li>Email</li>
<li>Netwatch</li>
<li>Traffic flow</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:35:47',
                        'updated_at' => '2019-06-29 03:35:47',
                    ),
                    8 => 
                    array (
                        'id' => 9,
                        'titulo' => 'UBWAv2',
                        'tipo_temario' => 1,
                        'slug' => 'ubwav2',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Teoría de RF
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Frecuencia vs Propagación</li>
<li>Bandas sin licencia</li>
<li>Máscaras espectrales OFDM</li>
<li>Frecuencias licenciadas</li>
<li>Decibeles en sistemas de radiofrecuencia</li>
<li>Pérdida de ruta de espacio libre</li>
<li>EIRP</li>
<li>Line of Sight &amp; Fresnel Zones</li>
<li>Link Power Budgets</li>
<li>Margen de desvanecimiento</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Operación de radio
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Circuito de RF estándar</li>
<li>Carrier Signals</li>
<li>Sensibilidad de radio</li>
<li>Selectividad de radio</li>
<li>Señal, ruido e interferencia</li>
<li>Cadenas, tasas de datos y MIMO</li>
<li>Ruido térmico</li>
<li>Flexión de canales</li>
<li>Tecnología AirPrism</li>
<li>Modulación, EVM y tasas de datos</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Teoría de la antena
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>¿Qué es Ganancia?</li>
<li>Radiadores isotrópicos</li>
<li>Función de antena</li>
<li>Ganancia, Eficiencia y VSWR</li>
<li>Ganancia, área de superficie y directividad</li>
<li>Parcelas polares</li>
<li>MIMO, Polarización y XPD</li>
<li>Tipos de antenas</li>
<li>Alineación de la antena</li>
<li>Downtilt, Lobes &amp; Nulls</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Proveedores de servicios de Ubiquiti
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>TDMA y el protocolo airMAX</li>
<li>802.11, CSMA / CA y cubierta</li>
<li>Problema del nodo oculto</li>
<li>airMAX-AC, airOS-5 y -7</li>
<li>Traffic Shaping &amp; Burst</li>
<li>Escalabilidad vs. Rendimiento</li>
<li>Seguridad y VLAN</li>
<li>Tecnología y protocolos AirFiber</li>
<li>AirOS Tools &amp; Redudancy</li>
<li>ISP puenteado frente a enrutado</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Teoría de RF</h3>
<ul>
<li>Frecuencia vs Propagación</li>
<li>Bandas sin licencia</li>
<li>Máscaras espectrales OFDM</li>
<li>Frecuencias licenciadas</li>
<li>Decibeles en sistemas de radiofrecuencia</li>
<li>Pérdida de ruta de espacio libre</li>
<li>EIRP</li>
<li>Line of Sight &amp; Fresnel Zones</li>
<li>Link Power Budgets</li>
<li>Margen de desvanecimiento</li>
</ul>
<h3>Módulo 02: Operación de radio</h3>
<ul>
<li>Circuito de RF estándar</li>
<li>Carrier Signals</li>
<li>Sensibilidad de radio</li>
<li>Selectividad de radio</li>
<li>Señal, ruido e interferencia</li>
<li>Cadenas, tasas de datos y MIMO</li>
<li>Ruido térmico</li>
<li>Flexión de canales</li>
<li>Tecnología AirPrism</li>
<li>Modulación, EVM y tasas de datos</li>
</ul>
<h3>Módulo 03: Teoría de la antena</h3>
<ul>
<li>¿Qué es Ganancia?</li>
<li>Radiadores isotrópicos</li>
<li>Función de antena</li>
<li>Ganancia, Eficiencia y VSWR</li>
<li>Ganancia, área de superficie y directividad</li>
<li>Parcelas polares</li>
<li>MIMO, Polarización y XPD</li>
<li>Tipos de antenas</li>
<li>Alineación de la antena</li>
<li>Downtilt, Lobes &amp; Nulls</li>
</ul>
<h3>Módulo 04: Proveedores de servicios de Ubiquiti</h3>
<ul>
<li>TDMA y el protocolo airMAX</li>
<li>802.11, CSMA / CA y cubierta</li>
<li>Problema del nodo oculto</li>
<li>airMAX-AC, airOS-5 y -7</li>
<li>Traffic Shaping &amp; Burst</li>
<li>Escalabilidad vs. Rendimiento</li>
<li>Seguridad y VLAN</li>
<li>Tecnología y protocolos AirFiber</li>
<li>AirOS Tools &amp; Redudancy</li>
<li>ISP puenteado frente a enrutado</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:42:05',
                        'updated_at' => '2019-06-29 03:42:05',
                    ),
                    9 => 
                    array (
                        'id' => 10,
                        'titulo' => 'UBWS',
                        'tipo_temario' => 1,
                        'slug' => 'ubws',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Course outline
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>The Ubiquiti Network
<ul>
<li>WISP Past &amp; Present</li>
<li>Service Providers</li>
</ul>
</li>
<li>Point-to-Point Links
<ul>
<li>Radios &amp; Antennas</li>
<li>Ubiquiti airOS</li>
<li>Wireless Settings</li>
<li>Link Planning</li>
<li>Link Characteristics</li>
</ul>
</li>
<li>Point-to-MultiPoint Links
<ul>
<li>airMAX TDMA Protocol</li>
<li>Best Practices for PtMP Network</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Course outline</h3>
<ul>
<li>The Ubiquiti Network
<ul>
<li>WISP Past &amp; Present</li>
<li>Service Providers</li>
</ul>
</li>
<li>Point-to-Point Links
<ul>
<li>Radios &amp; Antennas</li>
<li>Ubiquiti airOS</li>
<li>Wireless Settings</li>
<li>Link Planning</li>
<li>Link Characteristics</li>
</ul>
</li>
<li>Point-to-MultiPoint Links
<ul>
<li>airMAX TDMA Protocol</li>
<li>Best Practices for PtMP Network</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:43:12',
                        'updated_at' => '2019-06-29 03:43:12',
                    ),
                    10 => 
                    array (
                        'id' => 11,
                        'titulo' => 'UEWA',
                        'tipo_temario' => 1,
                        'slug' => 'uewa',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Course outline
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>WLAN Fundamentals
<ul>
<li>Unlicensed Radio Spectrum</li>
<li>Channel Operation</li>
<li>Regulatory Domains</li>
<li>WLAN Standards</li>
<li>Wireless Access Methods</li>
<li>Network Equipment</li>
</ul>
</li>
<li>WLAN Planning
<ul>
<li>Wireless Technology</li>
<li>Coverage &amp; Channels</li>
<li>TX Power</li>
<li>Antenna Gain</li>
<li>Channel Availability</li>
<li>Signals vs. Noise</li>
<li>Airtime, Capacity &amp; Density</li>
<li>Mixed Networks</li>
</ul>
</li>
<li>Deployment
<ul>
<li>Site Surveys</li>
<li>Overlap</li>
<li>Wiring &amp; PoE</li>
<li>Benchmarking</li>
</ul>
</li>
<li>Basic Adoption &amp; Configuration
<ul>
<li>Multi-Site</li>
<li>Layer-2 Adoption</li>
<li>WLAN Groups</li>
<li>SSID, Security &amp; VLANs</li>
<li>Analytics</li>
</ul>
</li>
<li>Advanced Adoption &amp; Guests
<ul>
<li>Cloud Hosting</li>
<li>Layer-3 Adoption</li>
<li>Discovery, SSH, DNS &amp; DHCP</li>
<li>Minimum RSSI</li>
<li>Zero-Handoff Roaming</li>
<li>Guest Portal</li>
<li>Access Controls</li>
<li>Customization</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Course outline</h3>
<ul>
<li>WLAN Fundamentals
<ul>
<li>Unlicensed Radio Spectrum</li>
<li>Channel Operation</li>
<li>Regulatory Domains</li>
<li>WLAN Standards</li>
<li>Wireless Access Methods</li>
<li>Network Equipment</li>
</ul>
</li>
<li>WLAN Planning
<ul>
<li>Wireless Technology</li>
<li>Coverage &amp; Channels</li>
<li>TX Power</li>
<li>Antenna Gain</li>
<li>Channel Availability</li>
<li>Signals vs. Noise</li>
<li>Airtime, Capacity &amp; Density</li>
<li>Mixed Networks</li>
</ul>
</li>
<li>Deployment
<ul>
<li>Site Surveys</li>
<li>Overlap</li>
<li>Wiring &amp; PoE</li>
<li>Benchmarking</li>
</ul>
</li>
<li>Basic Adoption &amp; Configuration
<ul>
<li>Multi-Site</li>
<li>Layer-2 Adoption</li>
<li>WLAN Groups</li>
<li>SSID, Security &amp; VLANs</li>
<li>Analytics</li>
</ul>
</li>
<li>Advanced Adoption &amp; Guests
<ul>
<li>Cloud Hosting</li>
<li>Layer-3 Adoption</li>
<li>Discovery, SSH, DNS &amp; DHCP</li>
<li>Minimum RSSI</li>
<li>Zero-Handoff Roaming</li>
<li>Guest Portal</li>
<li>Access Controls</li>
<li>Customization</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:44:07',
                        'updated_at' => '2019-06-29 03:44:07',
                    ),
                    11 => 
                    array (
                        'id' => 12,
                        'titulo' => 'UBRSS',
                        'tipo_temario' => 1,
                        'slug' => 'ubrss',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Course outline
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Device Management
<ul>
<li>Configure Lab Equipment</li>
<li>EdgeMAX Product Family</li>
</ul>
</li>
<li>IPv4 &amp; Subnetting
<ul>
<li>Addressing Basics</li>
<li>Subnetting</li>
<li>VLSM for Providers</li>
<li>Summarization</li>
</ul>
</li>
<li>Network Design
<ul>
<li>OSI Model &amp; Encapsulation</li>
<li>Network Topology Foundations</li>
<li>Network Interfaces</li>
<li>The Local Network</li>
<li>Network Communication</li>
<li>The Wide Area Network</li>
</ul>
</li>
<li>Routing
<ul>
<li>Routing Tables</li>
<li>Static Routing Protocols</li>
<li>Dynamic Routing Protocols</li>
</ul>
</li>
<li>Services &amp; Security
<ul>
<li>DHCP</li>
<li>DNS</li>
<li>NAT</li>
<li>Firewalls</li>
<li>Tunnels &amp; VPN</li>
</ul>
</li>
<li>Appendices
<ul>
<li>IPv6 Intro</li>
<li>EdgeOS Commands</li>
<li>Addressing &amp; Routing Tables</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Course outline</h3>
<ul>
<li>Device Management
<ul>
<li>Configure Lab Equipment</li>
<li>EdgeMAX Product Family</li>
</ul>
</li>
<li>IPv4 &amp; Subnetting
<ul>
<li>Addressing Basics</li>
<li>Subnetting</li>
<li>VLSM for Providers</li>
<li>Summarization</li>
</ul>
</li>
<li>Network Design
<ul>
<li>OSI Model &amp; Encapsulation</li>
<li>Network Topology Foundations</li>
<li>Network Interfaces</li>
<li>The Local Network</li>
<li>Network Communication</li>
<li>The Wide Area Network</li>
</ul>
</li>
<li>Routing
<ul>
<li>Routing Tables</li>
<li>Static Routing Protocols</li>
<li>Dynamic Routing Protocols</li>
</ul>
</li>
<li>Services &amp; Security
<ul>
<li>DHCP</li>
<li>DNS</li>
<li>NAT</li>
<li>Firewalls</li>
<li>Tunnels &amp; VPN</li>
</ul>
</li>
<li>Appendices
<ul>
<li>IPv6 Intro</li>
<li>EdgeOS Commands</li>
<li>Addressing &amp; Routing Tables</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:44:53',
                        'updated_at' => '2019-06-29 03:44:53',
                    ),
                    12 => 
                    array (
                        'id' => 13,
                        'titulo' => 'UBRSA',
                        'tipo_temario' => 1,
                        'slug' => 'ubrsa',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Course outline
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Virtual LANs</li>
<li>Advanced L2 Studies</li>
<li>BGP Operation</li>
<li>Multi-Area OSPF</li>
<li>QoS Implementation</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Course outline</h3>
<ul>
<li>Virtual LANs</li>
<li>Advanced L2 Studies</li>
<li>BGP Operation</li>
<li>Multi-Area OSPF</li>
<li>QoS Implementation</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:45:45',
                        'updated_at' => '2019-06-29 03:45:45',
                    ),
                    13 => 
                    array (
                        'id' => 14,
                        'titulo' => 'ePMP',
                        'tipo_temario' => 1,
                        'slug' => 'epmp',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Course outline
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Visión general de las soluciones PMP y PTP</li>
<li>Fundamentos de Radio Frecuencia</li>
<li>Potencia, Ganancias, EIRP, Interferencia</li>
<li>Eficiencia Espectral y como calcularía</li>
<li>Agendamiento de RF y Sincronización</li>
<li>Reusó de Canal – OFDM</li>
<li>Conceptos avanzados de modulación y cálculos</li>
<li>eDETECT</li>
<li>eFORTIFY</li>
<li>Instalación hardware</li>
<li>Mejores practicas</li>
<li>AP &amp; STA (laboratorio)</li>
<li>Monitorización de radio</li>
<li>GUI Walk-Through</li>
<li>Configuraciones avanzadas</li>
<li>NAT</li>
<li>QoS</li>
<li>Parámetros de seguridad</li>
<li>Networking</li>
<li>Firewall</li>
<li>Planeación de una red ePMP</li>
<li>Link Budget</li>
<li>Network capacity planning (LABORATORIO)</li>
<li>Cobertura RF y sus cálculos</li>
<li>Herramientas de comprobación</li>
<li>Troubleshooting</li>
<li>Wrap-up</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Course outline</h3>
<ul>
<li>Visión general de las soluciones PMP y PTP</li>
<li>Fundamentos de Radio Frecuencia</li>
<li>Potencia, Ganancias, EIRP, Interferencia</li>
<li>Eficiencia Espectral y como calcularía</li>
<li>Agendamiento de RF y Sincronización</li>
<li>Reusó de Canal – OFDM</li>
<li>Conceptos avanzados de modulación y cálculos</li>
<li>eDETECT</li>
<li>eFORTIFY</li>
<li>Instalación hardware</li>
<li>Mejores practicas</li>
<li>AP &amp; STA (laboratorio)</li>
<li>Monitorización de radio</li>
<li>GUI Walk-Through</li>
<li>Configuraciones avanzadas</li>
<li>NAT</li>
<li>QoS</li>
<li>Parámetros de seguridad</li>
<li>Networking</li>
<li>Firewall</li>
<li>Planeación de una red ePMP</li>
<li>Link Budget</li>
<li>Network capacity planning (LABORATORIO)</li>
<li>Cobertura RF y sus cálculos</li>
<li>Herramientas de comprobación</li>
<li>Troubleshooting</li>
<li>Wrap-up</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 03:46:40',
                        'updated_at' => '2019-06-29 03:46:40',
                    ),
                    14 => 
                    array (
                        'id' => 15,
                        'titulo' => 'Configuración de equipos MikroTik',
                        'tipo_temario' => 2,
                        'slug' => 'configuracion-de-equipos-mikrotik',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Introducción
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Definición de RouterOS
<ul>
<li>Niveles de licencias</li>
</ul>
</li>
<li>Definición de RouterBoard
<ul>
<li>Arquitecturas Soportadas</li>
</ul>
</li>
<li>Ejercicio Práctico N° 01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Nomenclatura
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Definición teórica
<ul>
<li>Nombre de la placa</li>
<li>Características de la placa</li>
<li>Inalámbrico incorporado</li>
<li>Características de la tarjeta inalámbrica</li>
<li>Tipo de conector</li>
<li>Tipo de recinto</li>
</ul>
</li>
<li>Ejercicio práctico N° 02</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Inicio de sesión
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Winbox/Mac.Winbox</li>
<li>Opciones de menú
<ul>
<li>Barra</li>
<li>Ventanas</li>
<li>Pestañas</li>
<li>Iconos</li>
</ul>
</li>
<li>Webfig</li>
<li>SSH/Telnet</li>
<li>Terminal en Winbox/Webfig</li>
<li>Interfaz de línea de comandos (CLI)
<ul>
<li>Comandos y sus beneficios</li>
</ul>
</li>
<li>Ejercicio práctico N°03</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Interfaces
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Asignación de nombre</li>
<li>Tipos
<ul>
<li>ether</li>
<li>wlan</li>
<li>sfp</li>
</ul>
</li>
<li>Bridge
<ul>
<li>New interface</li>
<li>New port Bridge</li>
</ul>
</li>
<li>VLAN
<ul>
<li>Uso de etiquetado VLAN</li>
<li>Opciones de VLANS</li>
</ul>
</li>
<li>Ejercicio práctico N° 04</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Wireless Básico
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Interfaces inalámbricas</li>
<li>Name</li>
<li>Modo AP/Station Bridge</li>
<li>Band</li>
<li>Frecuency</li>
<li>SSID</li>
<li>Wireless Protocol</li>
<li>Security profile</li>
<li>Tx power</li>
<li>Tipos de antena</li>
<li>Estándar inalámbrico</li>
<li>802.11 a/b/g/n</li>
<li>Niveles de señal</li>
<li>Tx/Rx Signal</li>
<li>Tx/Rx Rate</li>
<li>Laboratorio práctico N° 01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Internet
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Direccionamiento LAN
<ul>
<li>IP Adress</li>
<li>Network</li>
<li>Máscara de red</li>
</ul>
</li>
<li>Direccionamiento WAN
<ul>
<li>Default Gateway</li>
<li>Distancia</li>
<li>Use peer DNS</li>
<li>Use peer NTP</li>
</ul>
</li>
<li>IP Routes
<ul>
<li>Enrutamiento estático</li>
</ul>
</li>
<li>Reglas de NAT
<ul>
<li>Reglas de enmascaramiento</li>
</ul>
</li>
<li>DNS
<ul>
<li>Entradas estáticas DNS</li>
</ul>
</li>
<li>Servidor DHCP
<ul>
<li>Adress Pool</li>
<li>Administrador de Leases</li>
</ul>
</li>
<li>Tabla ARP
<ul>
<li>Modos de ARP</li>
<li>Tabla ARP de RouterOS</li>
</ul>
</li>
<li>Laboratorio práctico N° 02</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: Actualización
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Tipos de paquetes</li>
<li>Formas de actualización RouterOS</li>
<li>Actualización de Firmware</li>
<li>Ejercicio práctico N° 05</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="ocho">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloOcho" aria-expanded="false" aria-controls="moduloOcho">
Módulo 08: Copia de seguridad
</button>
</h5>
</div>
<div id="moduloOcho" class="collapse" aria-labelledby="ocho" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Gestión de archivos de respaldo</li>
<li>Generar y restaurar archivos de respaldo</li>
<li>Editar archivos exportados</li>
<li>Laboratorio práctico N° 03</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="nueve">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloNueve" aria-expanded="false" aria-controls="moduloNueve">
Módulo 09: Reseteo
</button>
</h5>
</div>
<div id="moduloNueve" class="collapse" aria-labelledby="nueve" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Netinstall</li>
<li>Reinstalación de RouterOs</li>
<li>Resetear RouterOS</li>
<li>Laboratorio práctico N° 04</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="diez">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDiez" aria-expanded="false" aria-controls="moduloDiez">
Módulo 10: Niveles de certificación
</button>
</h5>
</div>
<div id="moduloDiez" class="collapse" aria-labelledby="diez" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Cursos de certificación MikroTik</li>
<li>Certificación Básica
<ul>
<li>MTCNA</li>
</ul>
</li>
<li>Certificación avanzada
<ul>
<li>MTCRE</li>
<li>MTCWE</li>
<li>MTCTCE</li>
<li>MTCIPv6E</li>
</ul>
</li>
<li>Certificación avanzado de lo avanzado
<ul>
<li>MTCINE</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Introducción</h3>
<ul>
<li>Definición de RouterOS
<ul>
<li>Niveles de licencias</li>
</ul>
</li>
<li>Definición de RouterBoard
<ul>
<li>Arquitecturas Soportadas</li>
</ul>
</li>
<li>Ejercicio Práctico N° 01</li>
</ul>
<h3>Módulo 02: Nomenclatura</h3>
<ul>
<li>Definición teórica
<ul>
<li>Nombre de la placa</li>
<li>Características de la placa</li>
<li>Inalámbrico incorporado</li>
<li>Características de la tarjeta inalámbrica</li>
<li>Tipo de conector</li>
<li>Tipo de recinto</li>
</ul>
</li>
<li>Ejercicio práctico N° 02</li>
</ul>
<h3>Módulo 03: Inicio de sesión</h3>
<ul>
<li>Winbox/Mac.Winbox</li>
<li>Opciones de menú
<ul>
<li>Barra</li>
<li>Ventanas</li>
<li>Pestañas</li>
<li>Iconos</li>
</ul>
</li>
<li>Webfig</li>
<li>SSH/Telnet</li>
<li>Terminal en Winbox/Webfig</li>
<li>Interfaz de línea de comandos (CLI)
<ul>
<li>Comandos y sus beneficios</li>
</ul>
</li>
<li>Ejercicio práctico N°03</li>
</ul>
<h3>Módulo 04: Interfaces</h3>
<ul>
<li>Asignación de nombre</li>
<li>Tipos
<ul>
<li>ether</li>
<li>wlan</li>
<li>sfp</li>
</ul>
</li>
<li>Bridge
<ul>
<li>New interface</li>
<li>New port Bridge</li>
</ul>
</li>
<li>VLAN
<ul>
<li>Uso de etiquetado VLAN</li>
<li>Opciones de VLANS</li>
</ul>
</li>
<li>Ejercicio práctico N° 04</li>
</ul>
<h3>Módulo 05: Wireless Básico</h3>
<ul>
<li>Interfaces inalámbricas</li>
<li>Name</li>
<li>Modo AP/Station Bridge</li>
<li>Band</li>
<li>Frecuency</li>
<li>SSID</li>
<li>Wireless Protocol</li>
<li>Security profile</li>
<li>Tx power</li>
<li>Tipos de antena</li>
<li>Estándar inalámbrico</li>
<li>802.11 a/b/g/n</li>
<li>Niveles de señal</li>
<li>Tx/Rx Signal</li>
<li>Tx/Rx Rate</li>
<li>Laboratorio práctico N° 01</li>
</ul>
<h3>Módulo 06: Internet</h3>
<ul>
<li>Direccionamiento LAN
<ul>
<li>IP Adress</li>
<li>Network</li>
<li>Máscara de red</li>
</ul>
</li>
<li>Direccionamiento WAN
<ul>
<li>Default Gateway</li>
<li>Distancia</li>
<li>Use peer DNS</li>
<li>Use peer NTP</li>
</ul>
</li>
<li>IP Routes
<ul>
<li>Enrutamiento estático</li>
</ul>
</li>
<li>Reglas de NAT
<ul>
<li>Reglas de enmascaramiento</li>
</ul>
</li>
<li>DNS
<ul>
<li>Entradas estáticas DNS</li>
</ul>
</li>
<li>Servidor DHCP
<ul>
<li>Adress Pool</li>
<li>Administrador de Leases</li>
</ul>
</li>
<li>Tabla ARP
<ul>
<li>Modos de ARP</li>
<li>Tabla ARP de RouterOS</li>
</ul>
</li>
<li>Laboratorio práctico N° 02</li>
</ul>
<h3>Módulo 07: Actualización</h3>
<ul>
<li>Tipos de paquetes</li>
<li>Formas de actualización RouterOS</li>
<li>Actualización de Firmware</li>
<li>Ejercicio práctico N° 05</li>
</ul>
<h3>Módulo 08: Copia de seguridad</h3>
<ul>
<li>Gestión de archivos de respaldo</li>
<li>Generar y restaurar archivos de respaldo</li>
<li>Editar archivos exportados</li>
<li>Laboratorio práctico N° 03</li>
</ul>
<h3>Módulo 09: Reseteo</h3>
<ul>
<li>Netinstall</li>
<li>Reinstalación de RouterOs</li>
<li>Resetear RouterOS</li>
<li>Laboratorio práctico N° 04</li>
</ul>
<h3>Módulo 10: Niveles de certificación</h3>
<ul>
<li>Cursos de certificación MikroTik</li>
<li>Certificación Básica
<ul>
<li>MTCNA</li>
</ul>
</li>
<li>Certificación avanzada
<ul>
<li>MTCRE</li>
<li>MTCWE</li>
<li>MTCTCE</li>
<li>MTCIPv6E</li>
</ul>
</li>
<li>Certificación avanzado de lo avanzado
<ul>
<li>MTCINE</li>
</ul>
</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 20:06:17',
                        'updated_at' => '2019-06-29 20:06:17',
                    ),
                    15 => 
                    array (
                        'id' => 16,
                        'titulo' => 'Balanceo de carga PCC',
                        'tipo_temario' => 2,
                        'slug' => 'balanceo-de-carga-pcc',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Conceptos básicos
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>IP pública</li>
<li>IP privada</li>
<li>Configuración de routers</li>
<li>Modo router
<ul>
<li>DMZ</li>
</ul>
</li>
<li>Modo bridge
<ul>
<li>Puente</li>
</ul>
</li>
<li>Ejercicio práctico N°01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Firewall básico
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Filtrar rules</li>
<li>NAT</li>
<li>Mangle
<ul>
<li>Prerouting</li>
<li>Mark connection</li>
<li>Output</li>
</ul>
</li>
<li>Connections</li>
<li>Ejercicio práctico N°02</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Ruteo estático básico
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Dst. Adress</li>
<li>Gateway</li>
<li>Check Gateway</li>
<li>Distances</li>
<li>Routing mark</li>
<li>Ejercicio práctico N°03</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Servidor DNS
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Servera</li>
<li>Dynamic servers</li>
<li>Allie remite requests</li>
<li>Cache size</li>
<li>Ejercicio PrácticoN°04</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Balanceo de carga con proveedores diferentes
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Movistar</li>
<li>Claro</li>
<li>Bitel</li>
<li>Entel</li>
<li>Laboratorio práctico N° 01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Balanceo de carga con velocidades diferentes
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>20 Mbps</li>
<li>80 Mbps</li>
<li>200 Mbps</li>
<li>Laboratorio práctico N° 02</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: Balanceo de carga con tecnologías diferentes
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>ADSL</li>
<li>HFC</li>
<li>LTE</li>
<li>Fibra óptica</li>
<li>Laboratorio práctico N° 03</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Conceptos básicos</h3>
<ul>
<li>IP pública</li>
<li>IP privada</li>
<li>Configuración de routers</li>
<li>Modo router
<ul>
<li>DMZ</li>
</ul>
</li>
<li>Modo bridge
<ul>
<li>Puente</li>
</ul>
</li>
<li>Ejercicio práctico N°01</li>
</ul>
<h3>Módulo 02: Firewall básico</h3>
<ul>
<li>Filtrar rules</li>
<li>NAT</li>
<li>Mangle
<ul>
<li>Prerouting</li>
<li>Mark connection</li>
<li>Output</li>
</ul>
</li>
<li>Connections</li>
<li>Ejercicio práctico N°02</li>
</ul>
<h3>Módulo 03: Ruteo estático básico</h3>
<ul>
<li>Dst. Adress</li>
<li>Gateway</li>
<li>Check Gateway</li>
<li>Distances</li>
<li>Routing mark</li>
<li>Ejercicio práctico N°03</li>
</ul>
<h3>Módulo 04: Servidor DNS</h3>
<ul>
<li>Servera</li>
<li>Dynamic servers</li>
<li>Allie remite requests</li>
<li>Cache size</li>
<li>Ejercicio PrácticoN°04</li>
</ul>
<h3>Módulo 05: Balanceo de carga con proveedores diferentes</h3>
<ul>
<li>Movistar</li>
<li>Claro</li>
<li>Bitel</li>
<li>Entel</li>
<li>Laboratorio práctico N° 01</li>
</ul>
<h3>Módulo 06: Balanceo de carga con velocidades diferentes</h3>
<ul>
<li>20 Mbps</li>
<li>80 Mbps</li>
<li>200 Mbps</li>
<li>Laboratorio práctico N° 02</li>
</ul>
<h3>Módulo 07: Balanceo de carga con tecnologías diferentes</h3>
<ul>
<li>ADSL</li>
<li>HFC</li>
<li>LTE</li>
<li>Fibra óptica</li>
<li>Laboratorio práctico N° 03</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 20:12:25',
                        'updated_at' => '2019-06-29 20:12:25',
                    ),
                    16 => 
                    array (
                        'id' => 17,
                        'titulo' => 'Calidad de Servicio QoS',
                        'tipo_temario' => 2,
                        'slug' => 'calidad-de-servicio-qos',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Conceptos básicos
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Calidad de Servicio</li>
<li>Reuso de ancho de banda</li>
<li>Disponibilidad</li>
<li>Tiempre de respuesta</li>
<li>Latencia</li>
<li>ICMP</li>
<li>TCP</li>
<li>UDP</li>
<li>Ejercicio práctico N°01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Colas simples
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Asignación de ancho de banda</li>
<li>Colas simples
<ul>
<li>Queues</li>
<li>Name</li>
<li>Target</li>
<li>Max limit</li>
</ul>
</li>
<li>Ejercicio práctico N°02</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Firewall
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Reglas de marcación (Mangle)</li>
<li>Cadenas (Por defecto, personalizadas)</li>
<li>Condicionamiento más comunes</li>
<li>Sistema de rastreo de conexiones (Connection Tracking)</li>
<li>Ejercicio práctico N°03</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Árbol de colas
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Conceptos básicos de HTB</li>
<li>Implementación de HTB (Árbol de colas)</li>
<li>Laboratorio Práctico N°01</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Priorización de tráfico
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Voz</li>
<li>Datos</li>
<li>VoIP</li>
<li>Streaming</li>
<li>Juegos online</li>
<li>Navegación web</li>
<li>Laboratorio práctico N° 02</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Conceptos básicos</h3>
<ul>
<li>Calidad de Servicio</li>
<li>Reuso de ancho de banda</li>
<li>Disponibilidad</li>
<li>Tiempre de respuesta</li>
<li>Latencia</li>
<li>ICMP</li>
<li>TCP</li>
<li>UDP</li>
<li>Ejercicio práctico N°01</li>
</ul>
<h3>Módulo 02: Colas simples</h3>
<ul>
<li>Asignación de ancho de banda</li>
<li>Colas simples
<ul>
<li>Queues</li>
<li>Name</li>
<li>Target</li>
<li>Max limit</li>
</ul>
</li>
<li>Ejercicio práctico N°02</li>
</ul>
<h3>Módulo 03: Firewall</h3>
<ul>
<li>Reglas de marcación (Mangle)</li>
<li>Cadenas (Por defecto, personalizadas)</li>
<li>Condicionamiento más comunes</li>
<li>Sistema de rastreo de conexiones (Connection Tracking)</li>
<li>Ejercicio práctico N°03</li>
</ul>
<h3>Módulo 04: Árbol de colas</h3>
<ul>
<li>Conceptos básicos de HTB</li>
<li>Implementación de HTB (Árbol de colas)</li>
<li>Laboratorio Práctico N°01</li>
</ul>
<h3>Módulo 05: Priorización de tráfico</h3>
<ul>
<li>Voz</li>
<li>Datos</li>
<li>VoIP</li>
<li>Streaming</li>
<li>Juegos online</li>
<li>Navegación web</li>
<li>Laboratorio práctico N° 02</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 20:15:51',
                        'updated_at' => '2019-06-29 20:15:51',
                    ),
                    17 => 
                    array (
                        'id' => 18,
                        'titulo' => 'MikroTik Hotspot',
                        'tipo_temario' => 2,
                        'slug' => 'mikrotik-hotspot',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Introducción
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Conceptos</li>
<li>Entorno de uso</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Inicio de sesión
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>HTTP CHAP/PAP</li>
<li>MAC</li>
<li>Cookie</li>
<li>HTTPS</li>
<li>Trial</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Usuarios
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configurar direcciones MAC para usuarios</li>
<li>Configurar direcciones MAC con nombre de usuario</li>
<li>Limit Uptime y Limit Bytes In/Out</li>
<li>Configurar límites de usuarios</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Monitoreo
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Tabla de usuarios</li>
<li>Tabla de usuarios activos</li>
<li>SNMP para usuarios</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Perfiles
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Tiempo límite de conexión</li>
<li>Usuarios compartidos</li>
<li>Límites de ancho de banda (rate-limit)</li>
<li>Listas de direcciones (adress-list)</li>
<li>Filtros de entrada/salida</li>
<li>Marca de paquetes de entrada/salida</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Bypass
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Walled-Garden</li>
<li>Walled-Garden-IP</li>
<li><strong>IP-Binding</strong></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="siete">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSiete" aria-expanded="false" aria-controls="moduloSiete">
Módulo 07: Redes sociales
</button>
</h5>
</div>
<div id="moduloSiete" class="collapse" aria-labelledby="siete" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Publicidades</li>
<li>Páginas personalizadas</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 01: Introducción</h3>
<ul>
<li>Conceptos</li>
<li>Entorno de uso</li>
</ul>
<h3>Módulo 02: Inicio de sesión</h3>
<ul>
<li>HTTP CHAP/PAP</li>
<li>MAC</li>
<li>Cookie</li>
<li>HTTPS</li>
<li>Trial</li>
</ul>
<h3>Módulo 03: Usuarios</h3>
<ul>
<li>Configurar direcciones MAC para usuarios</li>
<li>Configurar direcciones MAC con nombre de usuario</li>
<li>Limit Uptime y Limit Bytes In/Out</li>
<li>Configurar límites de usuarios</li>
</ul>
<h3>Módulo 04: Monitoreo</h3>
<ul>
<li>Tabla de usuarios</li>
<li>Tabla de usuarios activos</li>
<li>SNMP para usuarios</li>
</ul>
<h3>Módulo 05: Perfiles</h3>
<ul>
<li>Tiempo límite de conexión</li>
<li>Usuarios compartidos</li>
<li>Límites de ancho de banda (rate-limit)</li>
<li>Listas de direcciones (adress-list)</li>
<li>Filtros de entrada/salida</li>
<li>Marca de paquetes de entrada/salida</li>
</ul>
<h3>Módulo 06: Bypass</h3>
<ul>
<li>Walled-Garden</li>
<li>Walled-Garden-IP</li>
<li><strong>IP-Binding</strong></li>
</ul>
<h3>Módulo 07: Redes sociales</h3>
<ul>
<li>Publicidades</li>
<li>Páginas personalizadas</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 20:31:58',
                        'updated_at' => '2019-06-29 20:31:58',
                    ),
                    18 => 
                    array (
                        'id' => 19,
                        'titulo' => 'Seminario gratuito MikroTik',
                        'tipo_temario' => 3,
                        'slug' => 'seminario-gratuito-mikrotik',
                        'temario' => '<ul>
<li>MikroTik</li>
<li>RouterOS</li>
<li>Routerboard</li>
<li>Nomenclatura</li>
<li>Equipos MikroTik</li>
<li>Licencias MikroTik</li>
<li>Niveles de certificación</li>
</ul>',
                        'contenido' => '<ul>
<li>MikroTik</li>
<li>RouterOS</li>
<li>Routerboard</li>
<li>Nomenclatura</li>
<li>Equipos MikroTik</li>
<li>Licencias MikroTik</li>
<li>Niveles de certificación</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-29 20:39:33',
                        'updated_at' => '2019-06-29 20:39:33',
                    ),
                    19 => 
                    array (
                        'id' => 20,
                        'titulo' => 'Balanceo de carga con MikroTik',
                        'tipo_temario' => 4,
                        'slug' => 'balanceo-de-carga-con-mikrotik',
                        'temario' => '<ul>
<li>Balanceo de Carga con proveedores diferentes</li>
<li>Balanceo de Carga con velocidades diferentes</li>
</ul>',
                        'contenido' => '<ul>
<li>Balanceo de Carga con proveedores diferentes</li>
<li>Balanceo de Carga con velocidades diferentes</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-30 00:41:43',
                        'updated_at' => '2019-06-30 00:41:43',
                    ),
                    20 => 
                    array (
                        'id' => 21,
                        'titulo' => 'Calidad de servicio con MikroTik QoS',
                        'tipo_temario' => 4,
                        'slug' => 'calidad-de-servicio-con-mikrotik-qos',
                        'temario' => '<ul>
<li>Conceptos de Calidad de Servicio</li>
<li>Colas Simples</li>
<li>Firewall Mangle</li>
<li>Árbol de Colas (Queue Tree)</li>
<li>Priorización de Tráfico</li>
<li>Ráfaga de Ancho de Banda (Burst)</li>
<li>Tipos de Colas (FIFO, RED, SFQ, PCQ)</li>
<li>Ejercicio Práctico (Creación de Planes Corporativos y Residenciales)</li>
</ul>',
                        'contenido' => '<ul>
<li>Conceptos de Calidad de Servicio</li>
<li>Colas Simples</li>
<li>Firewall Mangle</li>
<li>Árbol de Colas (Queue Tree)</li>
<li>Priorización de Tráfico</li>
<li>Ráfaga de Ancho de Banda (Burst)</li>
<li>Tipos de Colas (FIFO, RED, SFQ, PCQ)</li>
<li>Ejercicio Práctico (Creación de Planes Corporativos y Residenciales)</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-30 00:43:18',
                        'updated_at' => '2019-06-30 00:43:18',
                    ),
                    21 => 
                    array (
                        'id' => 22,
                        'titulo' => 'Enrutando con MikroTik OSPF',
                        'tipo_temario' => 4,
                        'slug' => 'enrutando-con-mikrotik-ospf',
                        'temario' => '<ul>
<li>Conceptos básicos de ruteo</li>
<li>Ruteo estático</li>
<li>Ruteo dinámico con OSPF</li>
</ul>',
                        'contenido' => '<ul>
<li>Conceptos básicos de ruteo</li>
<li>Ruteo estático</li>
<li>Ruteo dinámico con OSPF</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-06-30 00:45:32',
                        'updated_at' => '2019-06-30 00:45:32',
                    ),
                    22 => 
                    array (
                        'id' => 23,
                        'titulo' => 'WISP',
                        'tipo_temario' => 2,
                        'slug' => 'wisp',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Topic
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Conversión binaria y decimal</li>
<li>Subnetting</li>
<li>Tráfico de broadcast</li>
<li>Problemática dentro de un WISP</li>
<li>Diseño de una red WISP</li>
<li>Laboratorio – Creación de un WISP</li>
<li>Protección a la red interna y externa</li>
<li>
Implementación de Servicios
<ul>
<li>OSPF</li>
<li>Radius</li>
<li>PPPoE</li>
<li>VLANs</li>
<li>QoS</li>
</ul>
</li>
<li>The Dude</li>
<li>Balanceo por Tráfico</li>
<li>Priorización de Tráfico</li>
<li>Balanceo PCC y NTH</li>
<li>Planes corporativos y residenciales</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<ul>
<li>Conversión binaria y decimal</li>
<li>Subnetting</li>
<li>Tráfico de broadcast</li>
<li>Problemática dentro de un WISP</li>
<li>Diseño de una red WISP</li>
<li><strong>Laboratorio – Creación de un WISP</strong></li>
<li>Protección a la red interna y externa</li>
<li>Implementación de Servicios
<ul>
<li>OSPF</li>
<li>Radius</li>
<li>PPPoE</li>
<li>VLANs</li>
<li>QoS</li>
</ul>
</li>
<li>The Dude</li>
<li>Balanceo por Tráfico</li>
<li>Priorización de Tráfico</li>
<li>Balanceo PCC y NTH</li>
<li>Planes corporativos y residenciales</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-07-15 01:44:36',
                        'updated_at' => '2019-07-29 21:42:38',
                    ),
                    23 => 
                    array (
                        'id' => 24,
                        'titulo' => 'Curso básico de redes MikroTik',
                        'tipo_temario' => 2,
                        'slug' => 'curso-basico-de-redes-mikrotik',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Topics
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Módulo 1: Definición de Red</li>
<li>Módulo 2: Fundamentos de Networking </li>
<li>Modulo 3: TCP/IPv4</li>
<li>Módulo 4: OSI</li>
<li>Modulo 5: Subneting</li>
<li>Módulo 6: Protocolos de red</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<ul>
<li>Módulo 1: Definición de Red</li>
<li>Módulo 2: Fundamentos de Networking </li>
<li>Modulo 3: TCP/IPv4</li>
<li>Módulo 4: OSI</li>
<li>Modulo 5: Subneting</li>
<li>Módulo 6: Protocolos de red</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-07-29 21:45:41',
                        'updated_at' => '2019-07-29 21:45:41',
                    ),
                    24 => 
                    array (
                        'id' => 25,
                        'titulo' => 'Administración PPPoE MikroTik',
                        'tipo_temario' => 2,
                        'slug' => 'administracion-pppoe-mikrotik',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Conceptos
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Entornos de uso</li>
<li>Comparación con otros protocolos PPP</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Configuración del Cliente PPPoE
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Configuración Servidor PPPoE
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Cifrado PPOE
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Perfiles PPPOE
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Asignación de pool de direcciones IPs</li>
<li>Limitación de ancho de banda</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="seis">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloSeis" aria-expanded="false" aria-controls="moduloSeis">
Módulo 06: Laboratorio PPPOE
</button>
</h5>
</div>
<div id="moduloSeis" class="collapse" aria-labelledby="seis" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Implementación de una red PPPoE</li>
<li>Usuarios</li>
<li>Estado de conexión</li>
<li>Creación de Pool</li>
<li>Administración de rangos</li>
<li>Asignación a servicios</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 1: Conceptos</h3>
<ul>
<li>Entornos de uso</li>
<li>Comparación con otros protocolos PPP</li>
</ul>
<h3>Módulo 2: Configuración del Cliente PPPoE</h3>
<ul>
<li>Configuración Cliente</li>
<li>Seleccionar Interfaz</li>
<li>Nombre del servicio</li>
</ul>
<h3>Módulo 3: Configuración Servidor PPPoE</h3>
<ul>
<li>Habilitar Servidor PPPoE</li>
<li>Establecer Perfil</li>
<li>Crear clientes</li>
<li>Agregar interfaces estáticas para los clientes</li>
</ul>
<h3>Módulo 4: Cifrado PPOE</h3>
<ul>
<li>Configurar perfil sin cifrado</li>
<li>Configurar perfil con cifrado</li>
<li>Configurar cliente PPPoE sin cifrado</li>
</ul>
<h3>Módulo 5: Perfiles PPPOE</h3>
<ul>
<li>Asignación de pool de direcciones IPs</li>
<li>Limitación de ancho de banda</li>
</ul>
<h3>Módulo 6: Laboratorio PPPOE</h3>
<ul>
<li>Implementación de una red PPPoE</li>
<li>Usuarios</li>
<li>Estado de conexión</li>
<li>Creación de Pool</li>
<li>Administración de rangos</li>
<li>Asignación a servicios</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-07-29 21:56:23',
                        'updated_at' => '2019-07-29 21:56:23',
                    ),
                    25 => 
                    array (
                        'id' => 26,
                        'titulo' => 'Prevención de intrusos MikroTik',
                        'tipo_temario' => 2,
                        'slug' => 'prevencion-de-intrusos-mikrotik',
                        'temario' => '<div id="accordion" role="tablist" aria-multiselectable="true" class="curricula">
<div class="card">
<div class="card-header" id="uno">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link" data-toggle="collapse" data-target="#moduloUno" aria-expanded="true" aria-controls="moduloUno">
Módulo 01: Principios de firewall
</button>
</h5>
</div>

<div id="moduloUno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Connection Tracking</li>
<li>Sistema de rastero y estado de conexiones</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="dos">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloDos" aria-expanded="false" aria-controls="moduloDos">
Módulo 02: Estructura del firewall
</button>
</h5>
</div>
<div id="moduloDos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Cadenas y acciones</li>
<li>Filtrado de paquetes</li>
<li>Acciones de filtrado</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="tres">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloTres" aria-expanded="false" aria-controls="moduloTres">
Módulo 03: Reglas Básicas
</button>
</h5>
</div>
<div id="moduloTres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Protección del router (input)</li>
<li>Protección de clientes (forward)</li>
<li>Lista de direcciones</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cuatro">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCuatro" aria-expanded="false" aria-controls="moduloCuatro">
Módulo 04: Prevención de Ataques
</button>
</h5>
</div>
<div id="moduloCuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Inundamiento ICMP (Ping Flood)</li>
<li>Escaneo de puertos (Port Scan)</li>
<li>Denegación de servicios (DoS)</li>
<li>Denegación de servicios distribuido</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="cinco">
<h5 class="mb-0">
<i class="fa fa-file-text-o" aria-hidden="true"></i>
<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#moduloCinco" aria-expanded="false" aria-controls="moduloCinco">
Módulo 05: Laboratorio
</button>
</h5>
</div>
<div id="moduloCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
<div class="card-block">
<ul>
<li>Comprobar lo aprendido</li>
</ul>
</div>
</div>
</div>
</div>',
                        'contenido' => '<h3>Módulo 1: Principios de Firewall</h3>
<ul>
<li>Connection Tracking</li>
<li>Sistema de rastero y estado de conexiones</li>
</ul>
<h3>Módulo 2: Estructura del firewall</h3>
<ul>
<li>Cadenas y acciones</li>
<li>Filtrado de paquetes</li>
<li>Acciones de filtrado</li>
</ul>
<h3>Módulo 3: Reglas Básicas</h3>
<ul>
<li>Protección del router (input)</li>
<li>Protección de clientes (forward)</li>
<li>Lista de direcciones</li>
</ul>
<h3>Módulo 4: Prevención de Ataques</h3>
<ul>
<li>Inundamiento ICMP (Ping Flood)</li>
<li>Escaneo de puertos (Port Scan)</li>
<li>Denegación de servicios (DoS)</li>
<li>Denegación de servicios distribuido</li>
</ul>
<h3>Módulo 5: Laboratorio</h3>
<ul>
<li>Comprobar lo aprendido</li>
</ul>',
                        'estado' => 1,
                        'created_at' => '2019-07-29 22:03:23',
                        'updated_at' => '2019-07-29 22:03:23',
                    ),
                ));
        
        
    }
}