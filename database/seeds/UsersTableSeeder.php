<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nombres' => 'Usuario',
                'apellidos' => 'de Soporte',
                'email' => 'super@super.com',
                'password' => '$2y$10$BgIzS3l0ilV4/5wpqurSGexSfoFedNXTgdgcIZwFaEYcmLXyIScTa',
                'telefono' => NULL,
                'tipo' => 1,
                'foto' => NULL,
                'distrito_id' => 230101,
                'confirmado' => 1,
                'confirmacion_code' => NULL,
                'activo' => 1,
                'banneado' => 0,
                'remember_token' => 'Fnr3nrpzx93Qr4aY6nbUz3RIOQJcbK2ExPCxEuZk5kzFO0Ihcjx9m5Bbe7dW',
                'created_at' => '2019-06-26 01:00:00',
                'updated_at' => '2019-06-26 01:00:00',
            ),
            1 =>
            array (
                'id' => 2,
                'nombres' => 'Jesus',
                'apellidos' => 'Cordova Condori',
                'email' => 'admin@tuprofeenlinea.com',
                'password' => '$2y$10$BgIzS3l0ilV4/5wpqurSGexSfoFedNXTgdgcIZwFaEYcmLXyIScTa',
                'telefono' => '',
                'tipo' => 1,
                'foto' => NULL,
                'distrito_id' => 230101,
                'confirmado' => 1,
                'confirmacion_code' => NULL,
                'activo' => 1,
                'banneado' => 0,
                'remember_token' => '3p5yR122p2oS1bQqGzAh8PZHuiQchJmsFDTvYf7d52gRyHkwb3gWvO8R3aSp',
                'created_at' => '2019-06-26 01:00:00',
                'updated_at' => '2019-06-26 01:00:00',
            ),
            2 =>
            array (
                'id' => 3,
                'nombres' => 'Walter',
                'apellidos' => 'Calizaya Limache',
                'email' => 'waltercalizaya@hotmail.com',
                'password' => '$2y$10$BgIzS3l0ilV4/5wpqurSGexSfoFedNXTgdgcIZwFaEYcmLXyIScTa',
                'telefono' => '921892150',
                'tipo' => 1,
                'foto' => NULL,
                'distrito_id' => 230101,
                'confirmado' => 1,
                'confirmacion_code' => NULL,
                'activo' => 1,
                'banneado' => 0,
                'remember_token' => 'gwEccSQpW2y9UHKI0DxK98eNG6OdCt5bp3wTMZdbndPK6k7ORyE1AZDD93hv',
                'created_at' => '2019-06-26 01:00:00',
                'updated_at' => '2019-06-26 01:00:00',
            ),
        ));


    }
}