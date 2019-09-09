<?php

use Illuminate\Database\Seeder;

class TipoCertificacionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tipo_certificacion')->delete();

        \DB::table('tipo_certificacion')->insert(array (
            0 =>
            array (
                'id' => 1,
                'tipo' => 'Ninguno',
                'descripcion' => NULL,
                'slug' => 'ninguno',
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:32:52',
                'updated_at' => '2019-04-14 00:32:52',
            ),
            1 =>
            array (
                'id' => 2,
                'tipo' => 'MikroTik',
                'descripcion' => NULL,
                'slug' => 'mikrotik',
                'imagen' => '/resources/img/certificaciones/mikrotik.svg',
                'estado' => 1,
                'created_at' => '2019-04-14 00:33:22',
                'updated_at' => '2019-04-14 00:33:22',
            ),
            2 =>
            array (
                'id' => 3,
                'tipo' => 'Ubiquiti Networks',
                'descripcion' => NULL,
                'slug' => 'ubiquiti',
                'imagen' => '/resources/img/certificaciones/ubiquiti.svg',
                'estado' => 1,
                'created_at' => '2019-04-14 00:33:34',
                'updated_at' => '2019-04-14 00:33:34',
            ),
            3 =>
            array (
                'id' => 4,
                'tipo' => 'Cambium Networks',
                'descripcion' => NULL,
                'slug' => 'cambium-networks',
                'imagen' => '/resources/img/certificaciones/cambium-networks.svg',
                'estado' => 1,
                'created_at' => '2019-04-14 00:33:52',
                'updated_at' => '2019-04-14 00:33:52',
            ),
        ));


    }
}
