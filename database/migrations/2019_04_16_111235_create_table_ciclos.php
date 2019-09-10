<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCiclos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->string('detalle')->nullable();
            $table->string('duracion')->nullable();
            $table->date('inicio')->nullable(); //fecha inicio
            $table->date('fin')->nullable(); //fecha fin
            $table->string('precio')->nullable();
            $table->text('mensaje')->nullable();
            $table->integer('tipo')->default(1); //tipo de ciclo, por ahora todos son iguales
            $table->integer('estado')->default(1); //1 activo, 2 eliminado
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
        Schema::dropIfExists('ciclos');
    }
}
