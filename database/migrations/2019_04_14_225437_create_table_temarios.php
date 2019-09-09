<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTemarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('tipo_temario'); //1 certificacion, 2 taller, 3 seminario, 4 webinar, 0 ninguno
            $table->string('slug')->nullable();
            $table->text('temario')->nullable(); // para las vistas con html y estilos
            $table->text('contenido')->nullable(); // en html simple para convertir a PDF
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
        Schema::dropIfExists('temarios');
    }
}
