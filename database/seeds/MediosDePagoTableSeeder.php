<?php

use Illuminate\Database\Seeder;

class MediosDePagoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medios_de_pago')->delete();
        
        \DB::table('medios_de_pago')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banco' => 'Ninguno',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '-',
                'nro_cci' => NULL,
                'titular' => 'No definido',
                'logo' => '/resources/img/default.jpg',
                'ancho_img' => '100px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'banco' => 'Caja Arequipa',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '00224238502100002001',
                'nro_cci' => '80300300224238500237',
                'titular' => 'Soluciones Tecnológicas Tacnatel E.I.R.L.',
                'logo' => '/resources/img/bancos/caja-arequipa.png',
                'ancho_img' => '80px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'banco' => 'Banco de la Nación',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '04-157-167184',
                'nro_cci' => NULL,
                'titular' => 'Juan Eliseo Chura Amones',
                'logo' => '/resources/img/bancos/banco-de-la-nacion.gif',
                'ancho_img' => '150px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'banco' => 'BBVA',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '0011-0222-0200350267',
                'nro_cci' => NULL,
                'titular' => 'Juan Eliseo Chura Amones',
                'logo' => '/resources/img/bancos/bbva.svg',
                'ancho_img' => '60px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'banco' => 'Scotiabank',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '077-7071507',
                'nro_cci' => NULL,
                'titular' => 'Juan Eliseo Chura Amones',
                'logo' => '/resources/img/bancos/scotiabank.svg',
                'ancho_img' => '120px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'banco' => 'Interbank',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '3173083380248',
                'nro_cci' => NULL,
                'titular' => 'Juan Eliseo Chura Amones',
                'logo' => '/resources/img/bancos/interbank.svg',
                'ancho_img' => '100px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'banco' => 'BCP',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '215-32477528-0-79',
                'nro_cci' => NULL,
                'titular' => 'Juan Eliseo Chura Amones',
                'logo' => '/resources/img/bancos/bcp.png',
                'ancho_img' => '60px',
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}