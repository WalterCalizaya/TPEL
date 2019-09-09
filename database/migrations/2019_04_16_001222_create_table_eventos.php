<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_evento'); //1 certificacion, 2 taller, 3 seminario, 4 webinar
           	$table->integer('certificacion_id')->unsigned(); //Si es certificacion el valor que corresponde, sino 1 (ninguno)
            $table->string('titulo')->nullable();
            $table->string('slug');
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('instructor_id')->unsigned();
            $table->date('inicio')->nullable(); //fecha inicio
            $table->date('fin')->nullable(); //fecha fin
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();
           	$table->integer('distrito_id')->unsigned(); // si es online: 260101

            //curso de certificacion
            $table->string('direccion')->nullable();
            $table->string('moneda')->nullable();
            $table->string('precio')->nullable();
            $table->integer('oferta')->default(0); //0 sin oferta, 1 con oferta
            $table->string('precio_oferta')->nullable();
            $table->date('fin_oferta')->nullable();
            $table->text('objetivos')->nullable();
            $table->text('dirigido')->nullable();
            $table->text('conocimientos')->nullable();
            $table->text('requisitos')->nullable();
            $table->text('incluye')->nullable();

            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();

            //webinar
           	$table->string('youtube_code')->nullable();
           	$table->string('material')->nullable(); //enlace PDF

            $table->text('mensaje')->nullable();
            $table->integer('temario_id')->unsigned(); //1 no tiene temario
            $table->integer('vigencia')->default(1); //0 pasado, 1 vigente, 2 proximos 30d
            $table->integer('estado')->default(1); //0 borrador, 1 publicado, 2 eliminado

            $table->timestamps();
        });

        Schema::table('eventos', function($table) {
            $table->foreign('certificacion_id')->references('id')->on('certificaciones');
            $table->foreign('distrito_id')->references('id')->on('distritos');
            $table->foreign('instructor_id')->references('id')->on('instructores');
            $table->foreign('temario_id')->references('id')->on('temarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
