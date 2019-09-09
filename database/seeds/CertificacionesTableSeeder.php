<?php

use Illuminate\Database\Seeder;

class CertificacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('certificaciones')->delete();

        \DB::table('certificaciones')->insert(array (
            0 =>
            array (
                'id' => 1,
                'tipo_certificacion_id' => 1,
                'certificacion' => 'Ninguno',
                'nombre_certificacion' => 'Ninguno',
                'slug' => 'ninguno',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            1 =>
            array (
                'id' => 2,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCNA',
                'nombre_certificacion' => 'MikroTik Certified Network Associate',
                'slug' => 'mtcna',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            2 =>
            array (
                'id' => 3,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCTCE',
                'nombre_certificacion' => 'MikroTik Certified Control Traffic Engineer',
                'slug' => 'mtctce',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            3 =>
            array (
                'id' => 4,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCWE',
                'nombre_certificacion' => 'MikroTik Certified Wireless Associate',
                'slug' => 'mtcwe',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            4 =>
            array (
                'id' => 5,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCUME',
                'nombre_certificacion' => 'MikroTik Certified User Management Engineer',
                'slug' => 'mtcume',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            5 =>
            array (
                'id' => 6,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCRE',
                'nombre_certificacion' => 'MikroTik Certified Routing Engineer',
                'slug' => 'mtcre',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            6 =>
            array (
                'id' => 7,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCIPv6E',
                'nombre_certificacion' => 'MikroTik Certified IPv6 Engineer',
                'slug' => 'mtcipv6e',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            7 =>
            array (
                'id' => 8,
                'tipo_certificacion_id' => 2,
                'certificacion' => 'MTCINE',
                'nombre_certificacion' => 'MikroTik Certified Inter Networking Engineer',
                'slug' => 'mtcine',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            8 =>
            array (
                'id' => 9,
                'tipo_certificacion_id' => 3,
                'certificacion' => 'UBWS',
                'nombre_certificacion' => 'Ubiquiti Broadband Wireless Specialist',
                'slug' => 'ubws',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            9 =>
            array (
                'id' => 10,
                'tipo_certificacion_id' => 3,
                'certificacion' => 'UBWAv2',
                'nombre_certificacion' => 'Ubiquiti Broadband Wireless Admin',
                'slug' => 'ubwav2',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            10 =>
            array (
                'id' => 11,
                'tipo_certificacion_id' => 3,
                'certificacion' => 'UEWA',
                'nombre_certificacion' => 'Ubiquiti Enterprise Wireless Admin',
                'slug' => 'uewa',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            11 =>
            array (
                'id' => 12,
                'tipo_certificacion_id' => 3,
                'certificacion' => 'UBRSS',
                'nombre_certificacion' => 'Ubiquiti Broadband Routing & Switching Specialist',
                'slug' => 'ubrss',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            12 =>
            array (
                'id' => 13,
                'tipo_certificacion_id' => 3,
                'certificacion' => 'UBRSA',
                'nombre_certificacion' => 'Ubiquiti Broadband Routing & Switching Admin',
                'slug' => 'ubrsa',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
            13 =>
            array (
                'id' => 14,
                'tipo_certificacion_id' => 4,
                'certificacion' => 'ePMP',
                'nombre_certificacion' => 'ePMP Punto a Multipunto',
                'slug' => 'epmp',
                'descripcion' => NULL,
                'imagen' => NULL,
                'estado' => 1,
                'created_at' => '2019-04-14 00:36:52',
                'updated_at' => '2019-04-14 00:36:52',
            ),
        ));


    }
}
