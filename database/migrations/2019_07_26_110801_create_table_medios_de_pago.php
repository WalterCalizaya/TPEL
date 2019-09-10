<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMediosDePago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medios_de_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banco');
            $table->integer('tipo_cuenta')->unsigned();//1 soles, 2 dolares
            $table->string('nro_cuenta');
            $table->string('nro_cci')->nullable();
            $table->string('titular');
            $table->string('logo');
            $table->string('ancho_img');
            $table->integer('estado')->default(1);//1 valido, 2 descontinuado
            $table->string('comision')->nullable();
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
        Schema::dropIfExists('medios_de_pago');
    }
}
