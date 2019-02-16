<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //chen mot du lieu
        // DB::table('users')->insert([
        //     'name' => 'Na',
        //     'email' => 'na@gmail.com',
        //     'password' => '123',
        //     'address' => '38 yen bai',
        // ]);
        //chen nhieu du lieu bang vong lap for dungf faker
        // $faker = Faker\Factory::create ();
        // for ($i=1; $i < 10; $i++) { 
        //     DB::table('users')->insert(
        //     [
        //     'name' => 'Na',
        //     'email' => 'na '.  $i .' @gmail.com',
        //     'password' => $faker->password,
        //     'address' => '38 yen bai',
        //     ]);
        // chen nhieu du lieu bang vong lap for
            for ($i=1; $i < 10; $i++) { 
                DB::table('users')->insert(
                [
                'name' => 'Na',
                'email' => 'na '.  $i .' @gmail.com',
                'password' => 'password',
                'address' => '38 yen bai',
                ]);
        }}
}

