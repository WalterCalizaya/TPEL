<?php

use Illuminate\Database\Seeder;

class DetalleInscripcionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detalle_inscripciones')->delete();
        
        \DB::table('detalle_inscripciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'inscripcion_id' => 1,
                'evento_id' => 101,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 250,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-03 19:43:29',
                'updated_at' => '2019-08-03 19:43:29',
            ),
            1 => 
            array (
                'id' => 2,
                'inscripcion_id' => 1,
                'evento_id' => 102,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 250,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-03 19:43:29',
                'updated_at' => '2019-08-03 19:43:29',
            ),
            2 => 
            array (
                'id' => 3,
                'inscripcion_id' => 2,
                'evento_id' => 103,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 1190,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-05 15:41:28',
                'updated_at' => '2019-08-05 15:41:28',
            ),
            3 => 
            array (
                'id' => 4,
                'inscripcion_id' => 3,
                'evento_id' => 104,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 1190,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-13 12:54:43',
                'updated_at' => '2019-08-13 12:54:43',
            ),
            4 => 
            array (
                'id' => 5,
                'inscripcion_id' => 4,
                'evento_id' => 104,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 1190,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-25 17:45:25',
                'updated_at' => '2019-08-25 17:45:25',
            ),
            5 => 
            array (
                'id' => 6,
                'inscripcion_id' => 5,
                'evento_id' => 106,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => NULL,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-26 07:06:34',
                'updated_at' => '2019-08-26 07:06:34',
            ),
            6 => 
            array (
                'id' => 7,
                'inscripcion_id' => 6,
                'evento_id' => 106,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => NULL,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-26 07:08:31',
                'updated_at' => '2019-08-26 07:08:31',
            ),
            7 => 
            array (
                'id' => 8,
                'inscripcion_id' => 6,
                'evento_id' => 107,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => NULL,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-26 07:08:31',
                'updated_at' => '2019-08-26 07:08:31',
            ),
            8 => 
            array (
                'id' => 9,
                'inscripcion_id' => 7,
                'evento_id' => 104,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 1190,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-26 07:16:32',
                'updated_at' => '2019-08-26 07:16:32',
            ),
            9 => 
            array (
                'id' => 10,
                'inscripcion_id' => 8,
                'evento_id' => 105,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 1190,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-08-26 07:17:06',
                'updated_at' => '2019-08-26 07:17:06',
            ),
        ));
        
        
    }
}