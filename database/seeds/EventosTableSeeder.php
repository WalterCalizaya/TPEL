<?php

use Illuminate\Database\Seeder;

class EventosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('eventos')->delete();
        
        \DB::table('eventos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo_evento' => 4,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga con MikroTik',
                'slug' => 'balanceo-de-carga-con-mikrotik',
                'descripcion' => '<p><br /></p>',
                'imagen' => '/resources/img/webinars/balanceo-de-carga-con-mikrotik_file_1561873860.jpg',
                'instructor_id' => 2,
                'inicio' => '2017-11-12',
                'fin' => '2017-11-12',
                'hora_inicio' => '20:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 260101,
                'direccion' => NULL,
                'moneda' => NULL,
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => 't2gbPv4mGqk',
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 20,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 01:51:01',
                'updated_at' => '2019-06-30 01:51:01',
            ),
            1 => 
            array (
                'id' => 2,
                'tipo_evento' => 4,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio con MikroTik',
                'slug' => 'calidad-de-servicio-con-mikrotik',
                'descripcion' => '<p><br /></p>',
                'imagen' => '/resources/img/webinars/calidad-de-servicio-con-mikrotik_file_1561873995.jpg',
                'instructor_id' => 2,
                'inicio' => '2017-11-24',
                'fin' => '2017-11-24',
                'hora_inicio' => '20:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 260101,
                'direccion' => NULL,
                'moneda' => NULL,
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => 'M56w2pj0_8k',
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 21,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 01:53:15',
                'updated_at' => '2019-06-30 01:53:15',
            ),
            2 => 
            array (
                'id' => 3,
                'tipo_evento' => 4,
                'certificacion_id' => 1,
                'titulo' => 'Enrutando con MikroTik OSPF',
                'slug' => 'enrutando-con-mikrotik-ospf',
                'descripcion' => '<p><br /></p>',
                'imagen' => '/resources/img/webinars/enrutando-con-mikrotik-ospf_file_1561874115.jpg',
                'instructor_id' => 2,
                'inicio' => '2018-01-31',
                'fin' => '2018-01-31',
                'hora_inicio' => '20:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 260101,
                'direccion' => NULL,
                'moneda' => NULL,
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => 'fj5QEOcg_Tw',
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 22,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 01:55:15',
                'updated_at' => '2019-06-30 01:55:15',
            ),
            3 => 
            array (
                'id' => 4,
                'tipo_evento' => 4,
                'certificacion_id' => 1,
                'titulo' => 'Seguridad Perimetral con MikroTik',
                'slug' => 'seguridad-perimetral-con-mikrotik',
                'descripcion' => '<p><br /></p>',
                'imagen' => '/resources/img/webinars/seguridad-perimetral-con-mikrotik_file_1561874453.jpg',
                'instructor_id' => 1,
                'inicio' => '2018-08-21',
                'fin' => '2018-08-21',
                'hora_inicio' => '20:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 260101,
                'direccion' => NULL,
                'moneda' => NULL,
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => 'LYlXgksqES0',
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 1,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 02:00:53',
                'updated_at' => '2019-06-30 02:00:53',
            ),
            4 => 
            array (
                'id' => 5,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik gratuito - Arequipa 2017',
                'slug' => 'mikrotik-gratuito-arequipa-2017',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2017-12-07',
                'fin' => '2017-12-07',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 23:51:29',
                'updated_at' => '2019-06-30 23:59:15',
            ),
            5 => 
            array (
                'id' => 6,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik RouterOS - Lima 2018',
                'slug' => 'mikrotik-routeros-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-02-15',
                'fin' => '2018-02-15',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-06-30 23:54:44',
                'updated_at' => '2019-06-30 23:58:54',
            ),
            6 => 
            array (
                'id' => 7,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik Gratuito - Tacna 2018',
                'slug' => 'mikrotik-gratuito-tacna-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-09-20',
                'fin' => '2018-09-20',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 230101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-01 00:00:46',
                'updated_at' => '2019-07-01 00:00:46',
            ),
            7 => 
            array (
                'id' => 8,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik Gratuito - Puno 2018',
                'slug' => 'mikrotik-gratuito-puno-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-10-10',
                'fin' => '2018-10-10',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 210101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-01 00:02:10',
                'updated_at' => '2019-07-01 00:02:10',
            ),
            8 => 
            array (
                'id' => 9,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik Gratuito - La Libertad 2018',
                'slug' => 'mikrotik-gratuito-la-libertad-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-10-15',
                'fin' => '2018-10-15',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 130101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-01 00:03:09',
                'updated_at' => '2019-07-01 00:03:09',
            ),
            9 => 
            array (
                'id' => 10,
                'tipo_evento' => 3,
                'certificacion_id' => 1,
                'titulo' => 'MikroTik Gratuito - Cusco 2019',
                'slug' => 'mikrotik-gratuito-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-29',
                'fin' => '2019-04-29',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 80101,
                'direccion' => 'Universidad Nacional de San Antonio de Abad del Cusco',
                'moneda' => 'S/',
                'precio' => '20',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => NULL,
                'dirigido' => NULL,
                'conocimientos' => NULL,
                'requisitos' => NULL,
                'incluye' => NULL,
                'latitud' => '-13.521696748901407',
                'longitud' => '-71.95829606516111',
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 19,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-01 00:08:13',
                'updated_at' => '2019-07-01 00:08:13',
            ),
            10 => 
            array (
                'id' => 11,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Arequipa 2017',
                'slug' => 'mtcna-arequipa-2017',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2017-12-08',
                'fin' => '2017-12-10',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '1190',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 16:53:50',
                'updated_at' => '2019-07-14 16:53:50',
            ),
            11 => 
            array (
                'id' => 12,
                'tipo_evento' => 1,
                'certificacion_id' => 6,
                'titulo' => 'MTCRE - Arequipa 2017',
                'slug' => 'mtcre-arequipa-2017',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2017-12-11',
                'fin' => '2017-12-12',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 3,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 16:59:00',
                'updated_at' => '2019-07-14 16:59:00',
            ),
            12 => 
            array (
                'id' => 13,
                'tipo_evento' => 1,
                'certificacion_id' => 3,
                'titulo' => 'MTCTCE - Arequipa 2017',
                'slug' => 'mtctce-arequipa-2017',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2017-12-13',
                'fin' => '2017-12-14',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 6,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:00:14',
                'updated_at' => '2019-07-14 17:00:14',
            ),
            13 => 
            array (
                'id' => 14,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Lima 2018',
                'slug' => 'mtcna-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-02-16',
                'fin' => '2018-02-18',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:04:21',
                'updated_at' => '2019-07-14 17:04:21',
            ),
            14 => 
            array (
                'id' => 15,
                'tipo_evento' => 1,
                'certificacion_id' => 5,
                'titulo' => 'MTCUME - Lima 2018',
                'slug' => 'mtcume-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-02-19',
                'fin' => '2018-02-20',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 5,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:05:26',
                'updated_at' => '2019-07-14 17:05:26',
            ),
            15 => 
            array (
                'id' => 16,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - La Libertad 2018',
                'slug' => 'mtcna-la-libertad-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-10-19',
                'fin' => '2018-10-21',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Hotel Van Gogh',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:14:06',
                'updated_at' => '2019-07-14 17:14:06',
            ),
            16 => 
            array (
                'id' => 17,
                'tipo_evento' => 1,
                'certificacion_id' => 4,
                'titulo' => 'MTCWE - La Libertad 2018',
                'slug' => 'mtcwe-la-libertad-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-10-22',
                'fin' => '2018-10-23',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Hotel Van Gogh',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 4,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:22:23',
                'updated_at' => '2019-07-14 17:22:23',
            ),
            17 => 
            array (
                'id' => 18,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Arequipa 2018',
                'slug' => 'mtcna-arequipa-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-11-23',
                'fin' => '2018-11-25',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 40110,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:36:48',
                'updated_at' => '2019-07-14 17:36:48',
            ),
            18 => 
            array (
                'id' => 19,
                'tipo_evento' => 1,
                'certificacion_id' => 3,
                'titulo' => 'MTCTCE - Arequipa 2018',
                'slug' => 'mtctce-arequipa-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-11-26',
                'fin' => '2018-11-27',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 40110,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 6,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 17:40:07',
                'updated_at' => '2019-07-14 17:40:07',
            ),
            19 => 
            array (
                'id' => 20,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Lima 2019',
                'slug' => 'mtcna-lima-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-02-03',
                'fin' => '2019-02-05',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Manuel Segura 271',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 21:28:03',
                'updated_at' => '2019-07-14 21:28:03',
            ),
            20 => 
            array (
                'id' => 21,
                'tipo_evento' => 1,
                'certificacion_id' => 5,
                'titulo' => 'MTCUME - Lima 2019',
                'slug' => 'mtcume-lima-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-02-06',
                'fin' => '2019-02-07',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Manuel Segura 271',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 5,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 21:29:12',
                'updated_at' => '2019-07-14 21:29:12',
            ),
            21 => 
            array (
                'id' => 22,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Cusco 2019',
                'slug' => 'mtcna-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-05-03',
                'fin' => '2019-05-05',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 80104,
                'direccion' => 'Avenida Manco Cápac #157',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 21:31:33',
                'updated_at' => '2019-07-14 21:31:33',
            ),
            22 => 
            array (
                'id' => 23,
                'tipo_evento' => 1,
                'certificacion_id' => 3,
                'titulo' => 'MTCTCE - Cusco 2019',
                'slug' => 'mtctce-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-05-06',
                'fin' => '2019-05-07',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 80104,
                'direccion' => 'Avenida Manco Cápac #157',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 6,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-14 21:33:16',
                'updated_at' => '2019-07-14 21:33:16',
            ),
            23 => 
            array (
                'id' => 24,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso nivel avanzado orientado a WISP - Arequipa 2017',
                'slug' => 'curso-nivel-avanzado-orientado-a-wisp-arequipa-2017',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2017-12-15',
                'fin' => '2017-12-15',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<p>Para llevar el Curso de Nivel Avanzado MikroTik orientado a los WISP se tiene como Pre-Requisito llevar las Siguientes Certificaciones:</p>
<p>Requisito Obligatorio:</p>
<ul>
<li>CURSO BÁSICO MIKROTIK</li>
<li>CERTIFICACIÓN MTCNA</li>
</ul>
<p>Requisito Recomendado:</p>
<ul>
<li>CERTIFICACIÓN MTCUME</li>
<li>CERTIFICACIÓN MTCRE</li>
<li>CERTIFICACIÓN MTCTCE</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 23,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:43:37',
                'updated_at' => '2019-07-15 02:45:24',
            ),
            24 => 
            array (
                'id' => 25,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso nivel avanzado orientado a WISP - Lima 2018',
                'slug' => 'curso-nivel-avanzado-orientado-a-wisp-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2018-02-21',
                'fin' => '2018-02-21',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<p>Para llevar el Curso de Nivel Avanzado MikroTik orientado a los WISP se tiene como Pre-Requisito llevar las Siguientes Certificaciones:</p>
<p>Requisito Obligatorio:</p>
<ul>
<li>CURSO BÁSICO MIKROTIK</li>
<li>CERTIFICACIÓN MTCNA</li>
</ul>
<p>Requisito Recomendado:</p>
<ul>
<li>CERTIFICACIÓN MTCUME</li>
<li>CERTIFICACIÓN MTCRE</li>
<li>CERTIFICACIÓN MTCTCE</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 23,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:47:46',
                'updated_at' => '2019-07-15 02:47:46',
            ),
            25 => 
            array (
                'id' => 26,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Arequipa 2018',
                'slug' => 'curso-basico-mikrotik-arequipa-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-05-26',
                'fin' => '2018-05-26',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:52:12',
                'updated_at' => '2019-07-15 02:52:12',
            ),
            26 => 
            array (
                'id' => 27,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso MikroTik Hotspot - Arequipa 2018',
                'slug' => 'curso-mikrotik-hotspot-arequipa-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-05-26',
                'fin' => '2018-05-26',
                'hora_inicio' => '14:00:00',
                'hora_fin' => '19:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:54:23',
                'updated_at' => '2019-07-15 02:54:23',
            ),
            27 => 
            array (
                'id' => 28,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Tacna 2018',
                'slug' => 'curso-basico-mikrotik-tacna-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-02',
                'fin' => '2018-06-02',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 230101,
                'direccion' => 'DM Hoteles Tacna, Av. Bolognesi #300',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:56:23',
                'updated_at' => '2019-07-15 02:56:23',
            ),
            28 => 
            array (
                'id' => 29,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso MikroTik Hotspot - Tacna 2018',
                'slug' => 'curso-mikrotik-hotspot-tacna-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-02',
                'fin' => '2018-06-02',
                'hora_inicio' => '14:00:00',
                'hora_fin' => '19:00:00',
                'distrito_id' => 230101,
                'direccion' => 'DM Hoteles Tacna, Av. Bolognesi #300',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:57:49',
                'updated_at' => '2019-07-15 02:57:49',
            ),
            29 => 
            array (
                'id' => 30,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Tacna 2018',
                'slug' => 'curso-basico-mikrotik-tacna-2018-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-23',
                'fin' => '2018-06-23',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 230101,
                'direccion' => 'DM Hoteles Tacna, Av. Bolognesi #300',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 02:58:59',
                'updated_at' => '2019-07-15 02:58:59',
            ),
            30 => 
            array (
                'id' => 31,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Tacna 2018',
                'slug' => 'balanceo-de-carga-pcc-tacna-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-23',
                'fin' => '2018-06-23',
                'hora_inicio' => '17:00:00',
                'hora_fin' => '21:00:00',
                'distrito_id' => 230101,
                'direccion' => 'DM Hoteles Tacna, Av. Bolognesi #300',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:01:17',
                'updated_at' => '2019-07-15 03:01:17',
            ),
            31 => 
            array (
                'id' => 32,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Piura 2018',
                'slug' => 'curso-basico-mikrotik-piura-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-28',
                'fin' => '2018-06-28',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Intiotel Piura, Jr. Arequipa 691',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:03:50',
                'updated_at' => '2019-07-15 03:03:50',
            ),
            32 => 
            array (
                'id' => 33,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso MikroTik Hotspot - Piura 2018',
                'slug' => 'curso-mikrotik-hotspot-piura-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-28',
                'fin' => '2018-06-28',
                'hora_inicio' => '15:00:00',
                'hora_fin' => '19:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Intiotel Piura - Jr. Arequipa 691',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:04:51',
                'updated_at' => '2019-07-15 03:04:51',
            ),
            33 => 
            array (
                'id' => 34,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - La Libertad 2018',
                'slug' => 'curso-basico-mikrotik-la-libertad-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-30',
                'fin' => '2018-06-30',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Universidad Privada Leonardo Da Vinci, Av. España #163',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:07:03',
                'updated_at' => '2019-07-15 03:07:03',
            ),
            34 => 
            array (
                'id' => 35,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso MikroTik Hotspot - La Libertad 2018',
                'slug' => 'curso-mikrotik-hotspot-la-libertad-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-06-30',
                'fin' => '2018-06-30',
                'hora_inicio' => '14:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Universidad Privada Leonardo Da Vinci, Av. España #163',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:08:25',
                'updated_at' => '2019-07-15 03:08:25',
            ),
            35 => 
            array (
                'id' => 36,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Lima 2018',
                'slug' => 'curso-basico-mikrotik-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-07-03',
                'fin' => '2018-07-03',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:09:57',
                'updated_at' => '2019-07-15 03:09:57',
            ),
            36 => 
            array (
                'id' => 37,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso MikroTik Hotspot - Lima 2018',
                'slug' => 'curso-mikrotik-hotspot-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-07-03',
                'fin' => '2018-07-03',
                'hora_inicio' => '16:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:10:54',
                'updated_at' => '2019-07-15 03:10:54',
            ),
            37 => 
            array (
                'id' => 38,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Lima 2018',
                'slug' => 'curso-basico-mikrotik-lima-2018-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-08-25',
                'fin' => '2018-08-25',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '16:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:12:34',
                'updated_at' => '2019-07-15 03:12:34',
            ),
            38 => 
            array (
                'id' => 39,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Áncash 2018',
                'slug' => 'curso-basico-mikrotik-ancash-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-08-27',
                'fin' => '2018-08-27',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 21801,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:13:45',
                'updated_at' => '2019-07-15 03:13:45',
            ),
            39 => 
            array (
                'id' => 40,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Tacna 2018',
                'slug' => 'curso-basico-mikrotik-tacna-2018-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-10-06',
                'fin' => '2018-10-06',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 230101,
                'direccion' => 'DM Hoteles Tacna, Av. Bolognesi #300',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:15:13',
                'updated_at' => '2019-07-15 03:15:13',
            ),
            40 => 
            array (
                'id' => 41,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Arequipa 2018',
                'slug' => 'curso-basico-mikrotik-arequipa-2018-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-10-08',
                'fin' => '2018-10-08',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '13:00:00',
                'distrito_id' => 40101,
                'direccion' => 'Hotel Sideral **',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:16:34',
                'updated_at' => '2019-07-15 03:16:34',
            ),
            41 => 
            array (
                'id' => 42,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico MikroTik - Puno 2018',
                'slug' => 'curso-basico-mikrotik-puno-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-10-10',
                'fin' => '2018-10-10',
                'hora_inicio' => '12:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 210101,
                'direccion' => 'Instituto Superior De Educación Pública "Jose Antonio Encinas", Av. Don Bosco S/N Rinconada Salcedo',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:18:47',
                'updated_at' => '2019-07-15 03:18:47',
            ),
            42 => 
            array (
                'id' => 43,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Lima 2018',
                'slug' => 'configuracion-de-equipos-mikrotik-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-12-15',
                'fin' => '2018-12-15',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '21:00:00',
                'distrito_id' => 150122,
                'direccion' => 'Calle General Suárez #979',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:20:46',
                'updated_at' => '2019-07-15 03:20:46',
            ),
            43 => 
            array (
                'id' => 44,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Lima 2018',
                'slug' => 'balanceo-de-carga-pcc-lima-2018',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2018-12-16',
                'fin' => '2018-12-16',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '15:00:00',
                'distrito_id' => 150122,
                'direccion' => 'Calle General Suárez #979',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:21:56',
                'updated_at' => '2019-07-15 03:21:56',
            ),
            44 => 
            array (
                'id' => 45,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Piura 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-piura-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-01',
                'fin' => '2019-03-01',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:24:07',
                'updated_at' => '2019-07-15 03:24:07',
            ),
            45 => 
            array (
                'id' => 46,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Piura 2019',
                'slug' => 'balanceo-de-carga-pcc-piura-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-02',
                'fin' => '2019-03-02',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:25:02',
                'updated_at' => '2019-07-15 03:25:02',
            ),
            46 => 
            array (
                'id' => 47,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Piura 2019',
                'slug' => 'calidad-de-servicio-qos-piura-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-03',
                'fin' => '2019-03-03',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:26:01',
                'updated_at' => '2019-07-15 03:26:01',
            ),
            47 => 
            array (
                'id' => 48,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Lima 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-lima-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-04',
                'fin' => '2019-03-04',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:27:41',
                'updated_at' => '2019-07-15 03:27:41',
            ),
            48 => 
            array (
                'id' => 49,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Lima 2019',
                'slug' => 'balanceo-de-carga-pcc-lima-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-05',
                'fin' => '2019-03-05',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:28:42',
                'updated_at' => '2019-07-15 03:28:42',
            ),
            49 => 
            array (
                'id' => 50,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Lima 2019',
                'slug' => 'calidad-de-servicio-qos-lima-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-06',
                'fin' => '2019-03-06',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Candamo 332, Of. 301',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:30:27',
                'updated_at' => '2019-07-15 03:30:27',
            ),
            50 => 
            array (
                'id' => 51,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Arequipa 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-15',
                'fin' => '2019-03-15',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:34:30',
                'updated_at' => '2019-07-15 03:34:30',
            ),
            51 => 
            array (
                'id' => 52,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Arequipa 2019',
                'slug' => 'balanceo-de-carga-pcc-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-16',
                'fin' => '2019-03-16',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:35:41',
                'updated_at' => '2019-07-15 03:35:41',
            ),
            52 => 
            array (
                'id' => 53,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Arequipa 2019',
                'slug' => 'calidad-de-servicio-qos-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-03-17',
                'fin' => '2019-03-17',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:36:48',
                'updated_at' => '2019-07-15 03:36:48',
            ),
            53 => 
            array (
                'id' => 54,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - La Libertad 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-la-libertad-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-05',
                'fin' => '2019-04-05',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. F Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:39:37',
                'updated_at' => '2019-07-15 03:39:37',
            ),
            54 => 
            array (
                'id' => 55,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - La Libertad 2019',
                'slug' => 'balanceo-de-carga-pcc-la-libertad-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-06',
                'fin' => '2019-04-06',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. F Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:40:33',
                'updated_at' => '2019-07-15 03:40:33',
            ),
            55 => 
            array (
                'id' => 56,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de Servicio QoS - La Libertad 2019',
                'slug' => 'calidad-de-servicio-qos-la-libertad-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-07',
                'fin' => '2019-04-07',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. F Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:41:33',
                'updated_at' => '2019-07-15 03:41:33',
            ),
            56 => 
            array (
                'id' => 57,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Lima 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-lima-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-09',
                'fin' => '2019-04-09',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 150117,
                'direccion' => 'Estadio Guadalupano, Av. Angélica Gamarra',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:46:08',
                'updated_at' => '2019-07-15 03:46:08',
            ),
            57 => 
            array (
                'id' => 58,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Lima 2019',
                'slug' => 'balanceo-de-carga-pcc-lima-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-10',
                'fin' => '2019-04-10',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150117,
                'direccion' => 'Estadio Guadalupano, Av. Angélica Gamarra',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:47:08',
                'updated_at' => '2019-07-15 03:47:08',
            ),
            58 => 
            array (
                'id' => 59,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Lima 2019',
                'slug' => 'calidad-de-servicio-qos-lima-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-11',
                'fin' => '2019-04-11',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150117,
                'direccion' => 'Estadio Guadalupano, Av. Angélica Gamarra',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 03:48:09',
                'updated_at' => '2019-07-15 03:48:09',
            ),
            59 => 
            array (
                'id' => 60,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Puno 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-puno-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-12',
                'fin' => '2019-04-12',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:07:58',
                'updated_at' => '2019-07-15 13:07:58',
            ),
            60 => 
            array (
                'id' => 61,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Puno 2019',
                'slug' => 'balanceo-de-carga-pcc-puno-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-13',
                'fin' => '2019-04-13',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:08:49',
                'updated_at' => '2019-07-15 13:08:49',
            ),
            61 => 
            array (
                'id' => 62,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de Servicio QoS - Puno 2019',
                'slug' => 'calidad-de-servicio-qos-puno-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-14',
                'fin' => '2019-04-14',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:09:49',
                'updated_at' => '2019-07-15 13:09:49',
            ),
            62 => 
            array (
                'id' => 63,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Arequipa 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-arequipa-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-19',
                'fin' => '2019-04-19',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:12:38',
                'updated_at' => '2019-07-15 13:12:38',
            ),
            63 => 
            array (
                'id' => 64,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Arequipa 2019',
                'slug' => 'balanceo-de-carga-pcc-arequipa-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-20',
                'fin' => '2019-04-20',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:14:15',
                'updated_at' => '2019-07-15 13:14:15',
            ),
            64 => 
            array (
                'id' => 65,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Arequipa 2019',
                'slug' => 'calidad-de-servicio-qos-arequipa-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-21',
                'fin' => '2019-04-21',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:15:09',
                'updated_at' => '2019-07-15 13:15:09',
            ),
            65 => 
            array (
                'id' => 66,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Lima 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-lima-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-27',
                'fin' => '2019-04-27',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Cutervo #1818 Int. 303, Piso 3 Edificio N',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:21:34',
                'updated_at' => '2019-07-15 13:21:34',
            ),
            66 => 
            array (
                'id' => 67,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Lima 2019',
                'slug' => 'balanceo-de-carga-pcc-lima-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-04-28',
                'fin' => '2019-04-28',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Cutervo #1818 Int. 303, Piso 3 Edificio N',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:22:36',
                'updated_at' => '2019-07-15 13:22:36',
            ),
            67 => 
            array (
                'id' => 68,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Arequipa 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-arequipa-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-17',
                'fin' => '2019-05-17',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:25:54',
                'updated_at' => '2019-07-15 13:25:54',
            ),
            68 => 
            array (
                'id' => 69,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Arequipa 2019',
                'slug' => 'balanceo-de-carga-pcc-arequipa-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-18',
                'fin' => '2019-05-18',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:27:03',
                'updated_at' => '2019-07-15 13:27:03',
            ),
            69 => 
            array (
                'id' => 70,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de Servicio QoS - Arequipa 2019',
                'slug' => 'calidad-de-servicio-qos-arequipa-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-19',
                'fin' => '2019-05-19',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:28:00',
                'updated_at' => '2019-07-15 13:28:00',
            ),
            70 => 
            array (
                'id' => 71,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Puno 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-puno-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-24',
                'fin' => '2019-05-24',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 210101,
                'direccion' => 'Av. Alfonso Ugarte N° 550',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:30:02',
                'updated_at' => '2019-07-15 13:30:02',
            ),
            71 => 
            array (
                'id' => 72,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Puno 2019',
                'slug' => 'balanceo-de-carga-pcc-puno-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-25',
                'fin' => '2019-05-25',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 210101,
                'direccion' => 'Av. Alfonso Ugarte N° 550',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:31:04',
                'updated_at' => '2019-07-15 13:31:04',
            ),
            72 => 
            array (
                'id' => 73,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Puno 2019',
                'slug' => 'calidad-de-servicio-qos-puno-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-26',
                'fin' => '2019-05-26',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 210101,
                'direccion' => 'Av. Alfonso Ugarte N° 550',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:32:04',
                'updated_at' => '2019-07-15 13:32:04',
            ),
            73 => 
            array (
                'id' => 74,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - La Libertad 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-la-libertad-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-05-31',
                'fin' => '2019-05-31',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. LL Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:34:40',
                'updated_at' => '2019-07-15 13:34:40',
            ),
            74 => 
            array (
                'id' => 75,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - La Libertad 2019',
                'slug' => 'balanceo-de-carga-pcc-la-libertad-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-01',
                'fin' => '2019-06-01',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. LL Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:35:47',
                'updated_at' => '2019-07-15 13:35:47',
            ),
            75 => 
            array (
                'id' => 76,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de Servicio QoS - La Libertad 2019',
                'slug' => 'calidad-de-servicio-qos-la-libertad-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-02',
                'fin' => '2019-06-02',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Av. Metropolitana II Mz. LL Lt. 07',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:36:44',
                'updated_at' => '2019-07-15 13:36:44',
            ),
            76 => 
            array (
                'id' => 77,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Piura 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-piura-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-07',
                'fin' => '2019-06-07',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:39:01',
                'updated_at' => '2019-07-15 13:39:01',
            ),
            77 => 
            array (
                'id' => 78,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Piura 2019',
                'slug' => 'balanceo-de-carga-pcc-piura-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-08',
                'fin' => '2019-06-08',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:40:07',
                'updated_at' => '2019-07-15 13:40:07',
            ),
            78 => 
            array (
                'id' => 79,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Piura 2019',
                'slug' => 'calidad-de-servicio-qos-piura-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-09',
                'fin' => '2019-06-09',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 200101,
                'direccion' => 'Avenida Sánchez Cerro #136',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:41:10',
                'updated_at' => '2019-07-15 13:41:10',
            ),
            79 => 
            array (
                'id' => 80,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Junín 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-junin-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-14',
                'fin' => '2019-06-14',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 120101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:42:36',
                'updated_at' => '2019-07-15 13:42:36',
            ),
            80 => 
            array (
                'id' => 81,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Junín 2019',
                'slug' => 'balanceo-de-carga-pcc-junin-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-15',
                'fin' => '2019-06-15',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 120101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:43:33',
                'updated_at' => '2019-07-15 13:43:33',
            ),
            81 => 
            array (
                'id' => 82,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Junín 2019',
                'slug' => 'calidad-de-servicio-qos-junin-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-16',
                'fin' => '2019-06-16',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 120101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 13:44:30',
                'updated_at' => '2019-07-15 13:44:30',
            ),
            82 => 
            array (
                'id' => 83,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Arequipa 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-arequipa-2019-3',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-28',
                'fin' => '2019-06-28',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:26:59',
                'updated_at' => '2019-07-15 17:26:59',
            ),
            83 => 
            array (
                'id' => 84,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Arequipa 2019',
                'slug' => 'balanceo-de-carga-pcc-arequipa-2019-3',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-29',
                'fin' => '2019-06-29',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:27:53',
                'updated_at' => '2019-07-15 17:27:53',
            ),
            84 => 
            array (
                'id' => 85,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Arequipa 2019',
                'slug' => 'calidad-de-servicio-qos-arequipa-2019-3',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-06-30',
                'fin' => '2019-06-30',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:29:05',
                'updated_at' => '2019-07-15 17:29:05',
            ),
            85 => 
            array (
                'id' => 86,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Lima 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-lima-2019-3',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-06',
                'fin' => '2019-07-06',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Cutervo #1818 Int. 303, Piso 3 Edificio N',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:30:44',
                'updated_at' => '2019-07-15 17:30:44',
            ),
            86 => 
            array (
                'id' => 87,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Lima 2019',
                'slug' => 'balanceo-de-carga-pcc-lima-2019-3',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-07',
                'fin' => '2019-07-07',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Cutervo #1818 Int. 303, Piso 3 Edificio N',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:31:38',
                'updated_at' => '2019-07-15 17:31:38',
            ),
            87 => 
            array (
                'id' => 88,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Lima 2019',
                'slug' => 'calidad-de-servicio-qos-lima-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-08',
                'fin' => '2019-07-08',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 150101,
                'direccion' => 'Jirón Cutervo #1818 Int. 303, Piso 3 Edificio N',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:32:49',
                'updated_at' => '2019-07-15 17:32:49',
            ),
            88 => 
            array (
                'id' => 89,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Cajamarca 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-cajamarca-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-12',
                'fin' => '2019-07-12',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 60101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:40:13',
                'updated_at' => '2019-07-15 17:40:13',
            ),
            89 => 
            array (
                'id' => 90,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Cajamarca 2019',
                'slug' => 'balanceo-de-carga-pcc-cajamarca-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-13',
                'fin' => '2019-07-13',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 60101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:41:20',
                'updated_at' => '2019-07-15 17:41:20',
            ),
            90 => 
            array (
                'id' => 91,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Cajamarca 2019',
                'slug' => 'calidad-de-servicio-qos-cajamarca-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-14',
                'fin' => '2019-07-14',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 60101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:42:19',
                'updated_at' => '2019-07-15 17:42:19',
            ),
            91 => 
            array (
                'id' => 92,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Cusco 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-19',
                'fin' => '2019-07-19',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 80101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:47:59',
                'updated_at' => '2019-07-26 19:57:42',
            ),
            92 => 
            array (
                'id' => 93,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Cusco 2019',
                'slug' => 'balanceo-de-carga-pcc-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-20',
                'fin' => '2019-07-20',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 80101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:50:14',
                'updated_at' => '2019-07-26 19:58:13',
            ),
            93 => 
            array (
                'id' => 94,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Calidad de servicio QoS - Cusco 2019',
                'slug' => 'calidad-de-servicio-qos-cusco-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-21',
                'fin' => '2019-07-21',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 80101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 17,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:51:09',
                'updated_at' => '2019-07-26 19:58:39',
            ),
            94 => 
            array (
                'id' => 95,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico de redes MikroTik - Puno 2019',
                'slug' => 'curso-basico-de-redes-mikrotik-puno-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-27',
                'fin' => '2019-07-27',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 24,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:57:11',
                'updated_at' => '2019-07-29 22:46:33',
            ),
            95 => 
            array (
                'id' => 96,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Puno 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-puno-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-28',
                'fin' => '2019-07-28',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:58:34',
                'updated_at' => '2019-07-28 02:03:48',
            ),
            96 => 
            array (
                'id' => 97,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Balanceo de carga PCC - Puno 2019',
                'slug' => 'balanceo-de-carga-pcc-puno-2019-2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-29',
                'fin' => '2019-07-29',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 16,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 17:59:44',
                'updated_at' => '2019-07-29 03:38:09',
            ),
            97 => 
            array (
                'id' => 98,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Hotspot MikroTik - Puno 2019',
                'slug' => 'hotspot-mikrotik-puno-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-07-30',
                'fin' => '2019-07-30',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 211101,
                'direccion' => NULL,
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 18,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 18:00:58',
                'updated_at' => '2019-07-30 01:28:52',
            ),
            98 => 
            array (
                'id' => 99,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Curso básico de redes MikroTik - Arequipa 2019',
                'slug' => 'curso-basico-de-redes-mikrotik-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-08-01',
                'fin' => '2019-08-01',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 24,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 18:05:34',
                'updated_at' => '2019-08-02 11:18:14',
            ),
            99 => 
            array (
                'id' => 100,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Configuración de equipos MikroTik - Arequipa 2019',
                'slug' => 'configuracion-de-equipos-mikrotik-arequipa-2019-4',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-08-02',
                'fin' => '2019-08-02',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '22:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 15,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 18:07:04',
                'updated_at' => '2019-08-02 11:18:49',
            ),
            100 => 
            array (
                'id' => 101,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'Prevención de intrusos MikroTik - Arequipa 2019',
                'slug' => 'prevencion-de-intrusos-mikrotik-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-08-03',
                'fin' => '2019-08-03',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 26,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 18:15:04',
                'updated_at' => '2019-08-05 14:45:19',
            ),
            101 => 
            array (
                'id' => 102,
                'tipo_evento' => 2,
                'certificacion_id' => 1,
                'titulo' => 'PPPoE MikroTik - Arequipa 2019',
                'slug' => 'pppoe-mikrotik-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-08-04',
                'fin' => '2019-08-04',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => '250',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este taller es para personas que quieran aprender a configurar equipos MikroTik desde cero, sin mucha teoría. Lo más importante es que aprenderás en un corto tiempo porque el material ofrecido es información de primera mano y lo mejor de todo: te preparamos para las certificaciones oficiales del fabricante MikroTik.</p>
<p>Consta de ejercicios y laboratorios de casos reales en una red empresarial y dar soluciones a los problemas comunes que se presentan.</p>
<p>El taller MikroTik se desarrolla con un 70% práctica y 30% de teoría, que proporciona al participante los conocimientos necesarios para la instalación, configuración, administración, monitorización y solución de problemas para redes LAN, utilizando equipamiento MikroTik.</p>
<p>Al finalizar el taller, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar configuraciones básicas en un router MikroTik y proveer servicios básicos a los clientes.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => NULL,
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de picos</li>
</ul>',
                'incluye' => '<ul>
<li>Curso de capacitación</li>
<li>Manual de lectura en español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 25,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 18:17:02',
                'updated_at' => '2019-08-05 14:46:01',
            ),
            102 => 
            array (
                'id' => 103,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Arequipa 2019',
                'slug' => 'mtcna-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-09-26',
                'fin' => '2019-09-30',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 40109,
                'direccion' => 'Calle Capitan Novoa N° 121',
                'moneda' => 'S/',
                'precio' => '1190',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => '-16.39855183210111',
                'longitud' => '-71.51035643083799',
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 2,
                'estado' => 1,
                'created_at' => '2019-07-15 19:45:55',
                'updated_at' => '2019-09-01 23:59:54',
            ),
            103 => 
            array (
                'id' => 104,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - Lima 2019',
                'slug' => 'mtcna-lima-2019-1',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 3,
                'inicio' => '2019-08-30',
                'fin' => '2019-09-01',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 150116,
                'direccion' => 'Jr. Manuel Segura 332',
                'moneda' => 'S/',
                'precio' => '1190',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 0,
                'estado' => 1,
                'created_at' => '2019-07-15 19:50:52',
                'updated_at' => '2019-09-02 00:01:09',
            ),
            104 => 
            array (
                'id' => 105,
                'tipo_evento' => 1,
                'certificacion_id' => 2,
                'titulo' => 'MTCNA - La Libertad 2019',
                'slug' => 'mtcna-la-libertad-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-09-06',
                'fin' => '2019-09-08',
                'hora_inicio' => '09:00:00',
                'hora_fin' => '17:00:00',
                'distrito_id' => 130101,
                'direccion' => 'Natasha Alta - Covicorti, Av. América Oeste',
                'moneda' => 'S/',
                'precio' => '1190',
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
                'objetivos' => '<p>Este curso abarca los conceptos básicos del sistema operativo RouterOS, así como también temas de enrutamiento, bridging, firewall, wireless, administración de ancho de banda, buenas prácticas para servicios en la red LAN, calidad de servicio y túneles.</p>
<p>Proporcionar una visión general de IPv6, de los mecanismos de transición más comunes y cómo implementarlo en RouterOS, así como una formación práctica para la configuración, mantenimiento y resolución de problemas IPv6 en MikroTik RouterOS.</p>
<p>Al finalizar el curso, el estudiante estará familiarizado con el software RouterOS y con los productos RouterBoard y tendrá la capacidad de configurar, administrar y realizar troubleshooting básico de un router MikroTik y proveer servicios básicos a los clientes.</p>
<p>El estudiante podrá configurar, gestionar y realizar la resolución de problemas básicos de una red IPv6 en un dispositivo MikroTik, proporcionar servicios IPv6 a los clientes y tener una base sólida y herramientas valiosas para administrar una red IPv6.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => '<ul>
<li>Entrenamiento personalizado</li>
<li>Derecho al Examen de Certificación MikroTik</li>
<li>Libro digital en Español</li>
<li>Certificado de capacitación</li>
<li>Pertenecer al grupo de consultores de Tacnatel</li>
<li>Licencia MikroTik Level 04</li>
</ul>',
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 2,
                'vigencia' => 2,
                'estado' => 1,
                'created_at' => '2019-07-15 19:54:32',
                'updated_at' => '2019-08-21 21:35:37',
            ),
            105 => 
            array (
                'id' => 106,
                'tipo_evento' => 1,
                'certificacion_id' => 10,
                'titulo' => 'UBWAv2 - Arequipa 2019',
                'slug' => 'ubwav2-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-09-21',
                'fin' => '2019-09-22',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '20:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
            'objetivos' => '<p>El curso de Administración inalámbrica de banda ancha de Ubiquiti (UBWAv2) es un curso de capacitación en clase de dos días que enseña los conceptos más importantes en Redes inalámbricas en exteriores. El curso ha sido completamente rediseñado con nuevos materiales de curso y actividades de laboratorio utilizando equipos de airMAX-ac, mientras se hace especial hincapié en cómo diseñar, construir y gestionar un ISP inalámbrico exitoso.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 9,
                'vigencia' => 2,
                'estado' => 1,
                'created_at' => '2019-07-15 20:03:00',
                'updated_at' => '2019-08-21 21:34:42',
            ),
            106 => 
            array (
                'id' => 107,
                'tipo_evento' => 1,
                'certificacion_id' => 11,
                'titulo' => 'UEWA - Arequipa 2019',
                'slug' => 'uewa-arequipa-2019',
                'descripcion' => NULL,
                'imagen' => NULL,
                'instructor_id' => 2,
                'inicio' => '2019-09-28',
                'fin' => '2019-09-29',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '18:00:00',
                'distrito_id' => 40110,
                'direccion' => 'Urb. Alameda Salaverry Mz H1 Lt 19',
                'moneda' => 'S/',
                'precio' => NULL,
                'oferta' => 0,
                'precio_oferta' => NULL,
                'fin_oferta' => NULL,
            'objetivos' => '<p>The Ubiquiti Enterprise Wireless Admin (UEWA) course is a two-day, in-class course designed to prepare professionals to meet the challenges faced by today’s enterprise networks through hands-on lab activities using UniFi Access Points and the UniFi controller. Discover UniFi’s unique, featurerich platform as you design and build Wireless LANs relative to user density, bandwidth, and traffic requirements.</p>',
                'dirigido' => '<ul>
<li>Ingenieros y técnicos en sistemas, electrónica, computación, informática, telecomunicaciones y profesionales afines que deseen implementar y dar soporte a:
<ul>
<li>Redes Corporativas</li>
<li>Clientes WISP e ISP</li>
<li>Pequeña y mediana empresa</li>
</ul>
</li>
<li>Ingenieros de TI, redes, administradores de red, técnicos en soporte de redes, técnicos de soporte a usuario y aficionados.</li>
</ul>',
                'conocimientos' => '<ul>
<li>Los estudiantes deben tener conocimientos del protocolo TCP/IP y Subneting.</li>
</ul>',
                'requisitos' => '<ul>
<li>1 Laptop</li>
<li>1 Patch Cord</li>
<li>1 Supresor de Picos</li>
</ul>',
                'incluye' => NULL,
                'latitud' => NULL,
                'longitud' => NULL,
                'youtube_code' => NULL,
                'material' => NULL,
                'mensaje' => NULL,
                'temario_id' => 11,
                'vigencia' => 1,
                'estado' => 1,
                'created_at' => '2019-07-15 20:16:58',
                'updated_at' => '2019-08-21 21:34:21',
            ),
        ));
        
        
    }
}