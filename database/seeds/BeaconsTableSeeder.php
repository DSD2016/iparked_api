<?php

use Illuminate\Database\Seeder;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beacons')->insert([
            'floor_id' => 1,
            'name' => 'beacon1',
            'latitude' => 45.4,
            'longitude' => 15.4,
            'minor_number' => 20,
            'bluetooth_adress' => '89:FA:77:3A:55:11:98',
            'beacon_timestamp' => '2001-1-1 00:00:00',
        ]);
        
        DB::table('beacons')->insert([
            'floor_id' => 1,
            'name' => 'beacon2',
            'latitude' => 45.6,
            'longitude' => 15.6,
            'minor_number' => 30,
            'bluetooth_adress' => '89:FA:77:3A:55:22:75',
            'beacon_timestamp' => '2001-1-1 00:00:00',
        ]);
    }
}
