<?php

use Illuminate\Database\Seeder;

class ConfiguracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('configuracion')->delete();

        \DB::table('configuracion')->insert(array (
            0 =>
            array (
                'id' => 1,
                'favicon' => '/resources/img/favicon.ico',
                'logo' => '/resources/img/logo.png',
                'titulo' => 'Tu Profe en Línea',
                'descripcion'=>'Estudia online cuando quieras, como quieras y dónde quieras.',
                'descripcion_larga'=>'<p>Somos una academia virtual cuya principal meta es ofrecer ayuda en los cursos matemáticos que comprenden la mayor parte de los examenes de admisión en todo el Perú.</p>
                <p>Contamos con profesores de excelente calidad académica y tecnología adecuada que permiten el óptimo aprendizaje de nuestros alumnos.</p>',
                'mision' => '',
                'vision' => '',
                'email' => 'info@tuprofeenlinea.com',
                'telefono' => '(+51) 952 801 373',
                'direccion' => 'Av. 02 de mayo #889 int. 308',
                'ruc' => '',
                'razon_social' => '',
	            'facebook' => 'https://www.facebook.com/TuProfeEnLineaPeru',
	            'grupofb' => 'https://www.facebook.com/groups/practicascepu/',
	            'whatsapp' => 'https://api.whatsapp.com/send?phone=+51952801373&text=Quiero información sobre los planes de Tu Profe en Línea',
	            'instagram' => '',
	            'twitter' => '',
	            'youtube' => '',
	            'linkedin' => '',
	            'ganalytics' => '',
	            'gwmt' => '',
	            'gmaps' => '',
	            'created_at' => '2019-01-23 00:00:00',
                'updated_at' => '2019-01-23 00:00:00',
            ),

        ));
    }
}
