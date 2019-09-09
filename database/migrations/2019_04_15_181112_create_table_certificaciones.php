<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCertificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_certificacion_id')->unsigned();
            $table->string('certificacion')->nullable(); //siglas
            $table->string('nombre_certificacion')->nullable(); //nombre largo
            $table->string('slug')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        Schema::table('certificaciones', function($table) {
            $table->foreign('tipo_certificacion_id')->references('id')->on('tipo_certificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificaciones');
    }
}
