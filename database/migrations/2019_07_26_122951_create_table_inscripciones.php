<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anio');
            $table->integer('numero')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->date('fecha');
            $table->string('moneda')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('descuento')->nullable();
            $table->text('notas_cotizacion')->nullable();

            $table->string('voucher')->nullable();
            $table->integer('banco')->unsigned();
            $table->text('observaciones_voucher')->nullable();

            $table->boolean('tipo')->default('0'); //0 boleta, 1 factura
            $table->integer('igv')->default('18');
            $table->string('razon_social')->nullable();
            $table->string('ruc')->nullable();
            $table->string('domicilio')->nullable();

            $table->string('estado')->default(1); //0 cancelado, 1 generado (en espera de voucher), 2 voucher enviado, 3 pago aprobado, 4 pago rechazado, 5 sorteo
            $table->integer('evaluacion')->default(0); //numero de estrellas que le pone el admin
            $table->integer('evaluado_por')->unsigned();
            $table->text('comentario_admin')->nullable();

            $table->timestamps();
        });

        Schema::table('inscripciones', function($table) {
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('banco')->references('id')->on('medios_de_pago');
            $table->foreign('evaluado_por')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
