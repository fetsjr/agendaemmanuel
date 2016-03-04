<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /**
         * Creamos la tabla contacts
         */
        Schema::create('contacts', function(Blueprint $table) {
            /* ID de los contactos */
            $table->increments('id')->comment('ID de la tabla contacts');
            /* Enumerado con los grupos */
            $table->enum('groups', ['Familiar', 'Amigo', 'Conocido', 'Trabajo', 'Compañero de estudios']);
            /* Nombre del contacto */
            $table->string('firstName')->comment('Nombre del contacto');
            /* Apellidos del contacto */
            $table->string('lastName')->comment('Apellidos del contacto');
            /* Email del contacto */
            $table->string('email')->comment('Email del contacto');
            /* Telf del contacto */
            $table->string('phone')->comment('Teléfono del contacto');
            /*  Dirección del usuario */
            $table->string('address')->comment('Dirección del contacto');
            /* Cuando fue creado y cuando fue actualizado */
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->unique(['user_id', 'email']);
            /* Declaración de la FK, on delete cascade */
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('contacts');
    }
}
