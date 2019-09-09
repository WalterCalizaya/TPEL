<?php

use Illuminate\Database\Seeder;

class AlquileresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alquileres')->delete();
        
        \DB::table('alquileres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => '<p>Descripción aquí</p>',
                'caracteristicas' => '<ul>
<li>Capacidad: 18 asistentes</li>
<li>Conexión a internet</li>
<li>Proyector multimedia</li>
<li>Conexión Wi-Fi</li>
</ul>',
                'precio' => '<ul>
<li>Por hora: S/. 50.00</li>
</ul>',
                'promocion' => '<ul>
<li>Por hora: S/. 25.00</li>
</ul>',
                'created_at' => NULL,
                'updated_at' => '2019-08-03 12:47:57',
            ),
        ));
        
        
    }
}