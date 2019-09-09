<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipoCertificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_certificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('slug')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('tipo_certificacion');
    }
}
