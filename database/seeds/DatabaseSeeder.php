<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // Bloquea para la inserción
        Model::unguard();

        //$this->call(UserAdminSeeder::class);
        $this->call(UsersSeeder::class);

        //Desbloquea para uso
        Model::unguard();
    }
}
