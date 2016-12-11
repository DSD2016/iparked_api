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
        //     'latitude' => 45.800700,
       //     'longitude' => 15.971215,
            'latitude' => 71.7111949,
            'longitude' => -42.6001872
            'num_floors' => 2,
            'garage_capacity' => 500,
            'type' => 'indoor',
            'UUID' => '74278bda-b644-4520-8f0c-720eaf059935',
            'city' => 'Zagreb',
            'garage_timestamp' => '2001-1-1 00:00:00',
        ]);
    }
}
