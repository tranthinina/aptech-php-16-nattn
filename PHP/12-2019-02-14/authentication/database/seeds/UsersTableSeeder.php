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
