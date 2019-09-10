<?php

use Illuminate\Database\Seeder;

class CiclosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ciclos')->delete();

        \DB::table('ciclos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'titulo' => 'CICLO VIRTUAL 2019-I',
                'detalle' => 'Primer ciclo realizado, contiene los cursos de Aritmética, Álgebra y R. Matemático',
                'duracion' => '14 semanas',
                'inicio' => '2019-09-10',
                'fin' => NULL,
                'precio' => '85',
                'mensaje' => NULL,
                'tipo' => 1,
                'estado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}