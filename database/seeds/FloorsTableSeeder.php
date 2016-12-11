<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floors')->insert([
            'garage_id' => 1,
            'name' => 'floor1',
       //     'latitude' => 45.800700,
       //     'longitude' => 15.971215,
            'latitude' => 71.7111949,
            'longitude' => -42.6001872
            'angle' => 87,
            'size_X' => 31,
            'size_Y' => 62,
            'zoom_level' => 19,
            'floor_plan' => '/api/floorplan/1',
            'floor_capacity' => 250,
            'major_number' => 65504,
            'floor_timestamp' => '2001-1-1 00:00:00',
        ]);
        
        DB::table('floors')->insert([
            'garage_id' => 1,
            'name' => 'floor2',
            'latitude' => 45.800700,
            'longitude' => 15.971215,
            'angle' => 87,
            'size_X' => 31,
            'size_Y' => 62,
            'zoom_level' => 19,
            'floor_plan' => '/api/floorplan/2',
            'floor_capacity' => 250,
            'major_number' => 2,
            'floor_timestamp' => '2001-1-1 00:00:00',
        ]);
    }
}
