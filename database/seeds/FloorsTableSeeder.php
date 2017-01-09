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
            'latitude' => 45.800700,
            'longitude' => 15.971215,
            'angle' => 87,
            'size_X' => 31,
            'size_Y' => 62,
            'zoom_level' => 19,
            'floor_plan' => 'floor_plans/floor_plan_1.png',
            'floor_capacity' => 250,
            'major_number' => 65504,
            'floor_timestamp' => '2001-1-1 00:00:00',
            'latitude1' => 45.800700,
            'longitude1' => 15.971215,
            'latitude2' => 45.800700,
            'longitude2' => 15.971215,
            'latitude3' => 45.800700,
            'longitude3' => 15.971215,
            'latitude4' => 45.800700,
            'longitude4' => 15.971215,
            'floor_number' => -1,
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
            'floor_plan' => 'floor_plans/floor_plan_2.png',
            'floor_capacity' => 250,
            'major_number' => 2,
            'floor_timestamp' => '2001-1-1 00:00:00',
            'latitude1' => 45.800700,
            'longitude1' => 15.971215,
            'latitude2' => 45.800700,
            'longitude2' => 15.971215,
            'latitude3' => 45.800700,
            'longitude3' => 15.971215,
            'latitude4' => 45.800700,
            'longitude4' => 15.971215,
            'floor_number' => -2,
        ]);
    }
}
