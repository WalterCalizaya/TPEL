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
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-09 23:55:51',
                'updated_at' => '2019-09-09 23:55:51',
            ),
            1 => 
            array (
                'id' => 2,
                'inscripcion_id' => 2,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-10 12:16:10',
                'updated_at' => '2019-09-10 12:16:10',
            ),
            2 => 
            array (
                'id' => 3,
                'inscripcion_id' => 3,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-10 13:38:40',
                'updated_at' => '2019-09-10 13:38:40',
            ),
            3 => 
            array (
                'id' => 4,
                'inscripcion_id' => 4,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-10 18:15:52',
                'updated_at' => '2019-09-10 18:15:52',
            ),
            4 => 
            array (
                'id' => 5,
                'inscripcion_id' => 5,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-10 18:29:49',
                'updated_at' => '2019-09-10 18:29:49',
            ),
            5 => 
            array (
                'id' => 6,
                'inscripcion_id' => 6,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-10 20:57:45',
                'updated_at' => '2019-09-10 20:57:45',
            ),
            6 => 
            array (
                'id' => 7,
                'inscripcion_id' => 7,
                'ciclo_id' => 1,
                'cantidad' => 1,
                'moneda' => 'S/.',
                'precio_unitario' => 85,
                'tipo' => 'Inscripción individual',
                'created_at' => '2019-09-11 19:19:00',
                'updated_at' => '2019-09-11 19:19:00',
            ),
        ));
        
        
    }
}