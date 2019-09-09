<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInstructores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('titulo')->nullable();
        	$table->string('nombre')->nullable();
        	$table->string('subtitulo')->nullable();
        	$table->string('nacionalidad')->nullable();
        	$table->string('foto')->nullable();
        	$table->text('contenido')->nullable();
            $table->string('slug')->nullable();
            $table->integer('estado')->unsigned()->default(1);//0 borrador, 1 publicado, 2 eliminado
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
        Schema::dropIfExists('instructores');
    }
}
