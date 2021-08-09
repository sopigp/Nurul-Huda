<?php

use Illuminate\Database\Seeder;
 
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
 
        $faker = Faker::create('id_ID');
 
        for($i = 1; $i <= 5; $i++){
 
              // insert data ke table pegawai menggunakan Faker
            DB::table('users')->insert([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => bcrypt('nurulhuda123'),
                'phone_number' => "081316009990",
                'roles_id'  => '1',
                'date_of_birth' => $faker->dateTimeBetween('1990-01-01', '2021-12-31')->format('y/m/d'),
                'address'    => $faker->text(rand(250,300))

            ]);
 
        }
 
    }
}
