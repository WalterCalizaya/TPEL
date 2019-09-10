<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConfiguracionTableSeeder::class);
        $this->call(InstructoresTableSeeder::class);
        $this->call(TipoCertificacionTableSeeder::class);
        $this->call(CertificacionesTableSeeder::class);
        $this->call(RegionesTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
        $this->call(TemariosTableSeeder::class);
        $this->call(EventosTableSeeder::class);
        $this->call(MediosDePagoTableSeeder::class);
        $this->call(AlquileresTableSeeder::class);
        // $this->call(InscripcionesTableSeeder::class);
        // $this->call(DetalleInscripcionesTableSeeder::class);
        $this->call(CiclosTableSeeder::class);
    }
}
