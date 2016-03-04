<?php

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
        /**
         * Creamos la tabla users (Usuarios)
         */
        Schema::create('users', function (Blueprint $table) {
            /* ID de la tabla users */
            $table->increments('id')->comment('ID del usuario');
            /* Nombre del usuario de la aplicación */
            $table->string('firstName')->comment('Nombre del usuario');
            /* Apellidos del usuario de la aplicación */
            $table->string('lastName')->comment('Apellidos del usuario');
            /* Email del usuario tiene que ser único */
            $table->string('email')->unique()->comment('Email del usuario (UNIQUE)');
            /* Contrasela del usuario (MAX: 255 caracteres [Demasiado]) */
            $table->string('password', 255)->comment('Contraseña del usuario');
            /* Hora de la creación del usuario */
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
        /* Borramos la tabla users */
        Schema::drop('users');
    }
}
