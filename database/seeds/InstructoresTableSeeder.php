<?php

use Illuminate\Database\Seeder;

class InstructoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('instructores')->delete();

        \DB::table('instructores')->insert(array (
        	0 =>
            array (
                'id' => 1,
                'titulo' => NULL,
                'nombre' => 'Por confirmar',
                'subtitulo' => NULL,
                'nacionalidad' => NULL,
                'foto' => NULL,
                'contenido' => NULL,
                'slug' => 'por-confirmar',
                'estado' => 1,
                'created_at' => '2019-04-10 00:33:52',
                'updated_at' => '2019-04-10 00:33:52',
            ),
            1 =>
            array (
                'id' => 2,
                'titulo' => 'Ing.',
                'nombre' => 'José Miguel Ojeda Flores',
                'subtitulo' => 'Instructor certificado',
                'nacionalidad' => 'ecuador',
                'foto' => '/resources/img/instructores/jose-miguel-ojeda-flores_file_1554874432.jpg',
                'contenido' => '<img class="img-fluid" src="/resources/img/galeria/instructor-jose-miguel-ojeda-flores.jpg" style="margin: 0px auto; display: block;" />
						<h3>Perfil</h3>
						<ul>
						<li>CEO/Owner Home-Capacity SA Latinoamérica</li>
						<li>Ingeniero en Sistemas – Mención Telecomunicaciones</li>
						<li>MBA con Especialidad en Gestión de Proyectos</li>
						<li>Experiencia con MikroTik desde 2009</li>
						<li>Instructor Certificado desde 2001 – TR0151</li>
						<li>Certificaciones Obtenidas: <strong>MTCNA – MTCTCE – MTCWE – MTCUME – MTCRE– MTCINE – MTCIPv6E</strong></li>
						<li>Distribuidor MikroTik para Ecuador</li>
						<li>Consultor MikroTik Certificado</li>
						<li>Experiencia con Equipos Ubiquiti desde 2013</li>
						<li>Instructor Certificado Ubiquiti desde 2015</li>
						<li>Certificaciones Obtenidas:&nbsp;<strong>UBWSS – UBWA – UEWA – UBRSS – UBRSA</strong></li>
						<li>Cursos MikroTik y Ubiquiti en varios países: Ecuador, Perú, Colombia, Chile, Argentina, Honduras, Nicaragua, Panamá, Costa Rica, México, Puerto Rico.</li>
						</ul>',
                'slug' => 'jose-miguel-ojeda-flores',
                'estado' => 1,
                'created_at' => '2019-04-10 00:33:52',
                'updated_at' => '2019-04-10 00:33:52',
            ),
            2 =>
            array (
                'id' => 3,
                'titulo' => 'Tec.',
                'nombre' => 'Juan Eliseo Chura Amones',
                'subtitulo' => 'Consultor certificado',
                'nacionalidad' => 'peru',
                'foto' => '/resources/img/instructores/juan-eliseo-chura-amones_file_1554874600.jpg',
                'contenido' => '<h3>Perfil</h3>
					<ul>
					<li>Gerente de TACNATEL</li>
					<li>Técnico en Computación e Informática</li>
					<li>Técnico en Electrónica Industrial</li>
					<li>Experiencia con BrazilFW desde 2009</li>
					<li>Experiencia con Equipos Ubiquiti desde 2012</li>
					<li>Experiencia con MikroTik desde 2016</li>
					<li>Experiencia con Cambium Networks desde 2018</li>
					<li>Consultor MikroTik Certificado desde 2017– 1802NA3276</li>
					<li>Certificaciones Obtenidas: <strong>MTCNA</strong> – <strong>MTCTCE</strong> – <strong>MTCWE</strong> – <strong>MTCUME</strong> – <strong>MTCRE</strong></li>
					<li>Consultor Ubiquiti Certificado desde 2017 – <strong>UBWS</strong></li>
					</ul>',
                'slug' => 'juan-eliseo-chura-amones',
                'estado' => 1,
                'created_at' => '2019-04-10 00:36:40',
                'updated_at' => '2019-04-10 00:36:40',
            ),
        ));


    }
}
