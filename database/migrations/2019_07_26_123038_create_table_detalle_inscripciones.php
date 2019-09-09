<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleInscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_inscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscripcion_id')->unsigned();
            $table->integer('evento_id')->unsigned();
            $table->integer('cantidad')->unsigned()->default(1);
            $table->string('moneda')->default('S/.');
            $table->integer('precio_unitario')->unsigned()->nullable();
            $table->string('tipo')->default('Inscripción individual');
            $table->timestamps();
        });

        Schema::table('detalle_inscripciones', function($table) {
            $table->foreign('inscripcion_id')->references('id')->on('inscripciones');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_inscripciones');
    }
}
