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
            'name' => 'HMSoft1',
            'latitude' => 45.800700,
            'longitude' => 15.971215,
            'minor_number' => 5,
            'bluetooth_address' => '20:C3:8F:F2:C0:66',
        ]);
        
        DB::table('beacons')->insert([
            'floor_id' => 1,
            'name' => 'HMSoft2',
            'latitude' => 45.800710,
            'longitude' => 15.971215,
            'minor_number' => 6,
            'bluetooth_address' => 'B4:99:4C:52:7F:31',
        ]);
        
        DB::table('beacons')->insert([
            'floor_id' => 2,
            'name' => 'beacon3',
            'latitude' => 45.4,
            'longitude' => 15.4,
            'minor_number' => 3,
            'bluetooth_address' => '89:FA:77:3A:55:22:91',
        ]);
        
        DB::table('beacons')->insert([
            'floor_id' => 2,
            'name' => 'beacon4',
            'latitude' => 45.6,
            'longitude' => 15.6,
            'minor_number' => 4,
            'bluetooth_address' => '89:FA:77:3A:55:22:95',
        ]);
    }
}
