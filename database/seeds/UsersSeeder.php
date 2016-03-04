<?php

use Illuminate\Database\Seeder;
/*  */
use App\User;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i = 1; $i < 101; $i++) {
        	$id = \DB::table('users')->insertGetId([
        	'firstName' => $faker->firstName,
        	'lastName' 	=> $faker->lastName,
        	'password'	=> \Hash::make('Password1'),
        	'created_at'=> date('YmdHms'),
        	'email'		=> $faker->unique()->email
        	]);
        	for ($j=1; $j < 51; $j++) {
        		\DB::table('contacts')->insertGetId([
				'user_id' 		=> $id,
	        	'firstName' => $faker->firstName,
	        	'lastName' 	=> $faker->lastName,
	        	'email'		=> $faker->unique(['email'], $id)->email,
	        	'phone'		=> $faker->numberBetween(600000000,999999999),
	        	'address'	=> $faker->address(),
	        	'created_at'=> date('YmdHms'),
	        	'groups' 		=> $faker->randomElement(['Familiar', 'Amigo', 'Conocido', 'Trabajo', 'Compañero de estudios']),
	        	]);
        	}
        }
    }
}
