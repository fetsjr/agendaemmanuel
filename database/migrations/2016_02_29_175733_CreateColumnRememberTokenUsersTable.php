<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnRememberTokenUsersTable extends Migration
{
    /**
     * Generamos el campo que necesita Laravel
     * para la prevención del session hijicking
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creamos la columna remember_token
         */
        Schema::table('users', function (Blueprint $table) {
            $table->rememberToken();
        });

    }

    /**
     * Borramos el campo que necesita Laravel
     * para la prevención del session hijicking
     *
     * @return void
     */
    public function down()
    {
        /**
         * Borramos la columna remember_token
         */
         Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }
}
