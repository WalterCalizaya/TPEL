<?php

use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('regiones')->delete();

        \DB::table('regiones')->insert(array (
            0 =>
            array (
                'id' => 10000,
                'nombre' => 'Amazonas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 20000,
                'nombre' => 'Áncash',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 30000,
                'nombre' => 'Apurímac',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 40000,
                'nombre' => 'Arequipa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 50000,
                'nombre' => 'Ayacucho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 60000,
                'nombre' => 'Cajamarca',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 70000,
                'nombre' => 'Callao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 80000,
                'nombre' => 'Cusco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 90000,
                'nombre' => 'Huancavelica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 100000,
                'nombre' => 'Huánuco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 110000,
                'nombre' => 'Ica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 120000,
                'nombre' => 'Junín',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 130000,
                'nombre' => 'La Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 140000,
                'nombre' => 'Lambayeque',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 150000,
                'nombre' => 'Lima',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 160000,
                'nombre' => 'Loreto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 170000,
                'nombre' => 'Madre de Dios',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 180000,
                'nombre' => 'Moquegua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 190000,
                'nombre' => 'Pasco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 200000,
                'nombre' => 'Piura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 210000,
                'nombre' => 'Puno',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 220000,
                'nombre' => 'San Martín',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 230000,
                'nombre' => 'Tacna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 240000,
                'nombre' => 'Tumbes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 250000,
                'nombre' => 'Ucayali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 260000,
                'nombre' => 'Online',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
