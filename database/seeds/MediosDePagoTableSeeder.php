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
                'comision' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'banco' => 'Efectivo',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '-',
                'nro_cci' => NULL,
                'titular' => '',
                'logo' => '/resources/img/default.jpg',
                'ancho_img' => '100px',
                'estado' => 1,
                'comision' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'banco' => 'BCP',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '540-39617118-0-14',
                'nro_cci' => NULL,
                'titular' => 'Jesus Eduardo Cordova Condori',
                'logo' => '/resources/img/bancos/bcp.png',
                'ancho_img' => '60px',
                'estado' => 1,
                'comision' => 'S/7.50 adicionales por depósito en <strong>agentes</strong> desde fuera de Tacna.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'banco' => 'BCP',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '540-95256933-0-47',
                'nro_cci' => NULL,
                'titular' => 'Walter Alfredo Calizaya Limache',
                'logo' => '/resources/img/bancos/bcp.png',
                'ancho_img' => '60px',
                'estado' => 1,
                'comision' => 'S/7.50 soles adicionales por depósito en <strong>agentes</strong> desde fuera de Tacna.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'banco' => 'Interbank',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '3423108295255',
                'nro_cci' => NULL,
                'titular' => 'Walter Alfredo Calizaya Limache',
                'logo' => '/resources/img/bancos/interbank.svg',
                'ancho_img' => '100px',
                'estado' => 1,
                'comision' => 'Sin comisión por depósito en <strong>agentes y cajeros automáticos</strong> en todo el Perú.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'banco' => 'Banco de la Nación',
                'tipo_cuenta' => 1,
                'nro_cuenta' => '04-157-311242',
                'nro_cci' => NULL,
                'titular' => 'Walter Alfredo Calizaya Limache',
                'logo' => '/resources/img/bancos/banco-de-la-nacion.gif',
                'ancho_img' => '150px',
                'estado' => 1,
                'comision' => 'S/5 soles adicionales por depósito en <strong>agentes</strong> desde fuera de Tacna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));


    }
}