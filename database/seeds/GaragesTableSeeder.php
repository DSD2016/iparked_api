<?php

use Illuminate\Database\Seeder;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('garages')->insert([
            'user_id' => 1,
            'name' => 'garage1',
            'latitude' => 45.5,
            'longitude' => 15.5,
            'num_floors' => 2,
            'garage_capacity' => 500,
            'type' => 'indoor',
            'UUID' => '1234-57-434',
            'city' => 'Zagreb',
            'garage_timestamp' => '2001-1-1 00:00:00',
        ]);
    }
}
