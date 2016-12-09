<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();


        DB::table('users')->insert([
            'first_name'    => 'John',
            'last_name'     => 'Doe',
            'email'         => 'j.doe@codingo.me',
            'company'       => 'ACME',
            'password'      => Hash::make('password'),
            'token'         => str_random(64),
            'activated'     => true
        ]);

        DB::table('users')->insert([
            'first_name'    => 'Jane',
            'last_name'     => 'Doe',
            'email'         => 'jane.doe@test.com',
            'company'       => 'ACME',
            'password'      => Hash::make('janesPassword'),
            'token'         => str_random(64),
            'activated'     => true
        ]);
    }
}
