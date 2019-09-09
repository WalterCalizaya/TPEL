<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->integer('tipo');//1->admin | 2->usuario full | 3->usuario gratuito
            $table->string('foto')->nullable();
            $table->integer('distrito_id')->unsigned();
            $table->boolean('confirmado')->default(0); //1 confirmado, 0 sin confirmar
            $table->string('confirmacion_code')->nullable();
            $table->boolean('activo')->default(1); //solo es para administradores
            $table->boolean('banneado')->default(0); //es para todos los usuarios

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
