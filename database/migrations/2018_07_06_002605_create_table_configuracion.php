<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfiguracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nulleable();
            $table->text('descripcion_larga')->nulleable();
            $table->string('email')->nulleable();
            $table->string('telefono')->nulleable();
            $table->string('direccion')->nulleable();
            $table->string('ruc')->nulleable();
            $table->string('razon_social')->nulleable();
            $table->string('favicon');
            $table->string('logo');
            $table->text('mision')->nulleable();
            $table->text('vision')->nulleable();
            $table->string('facebook')->nulleable();
            $table->string('grupofb')->nulleable();
            $table->string('twitter')->nulleable();
            $table->string('instagram')->nulleable();
            $table->string('youtube')->nulleable();
            $table->string('whatsapp')->nulleable();
            $table->string('linkedin')->nulleable();
            $table->string('ganalytics')->nulleable();
            $table->string('gwmt')->nulleable();
            $table->string('gmaps')->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
    }
}
