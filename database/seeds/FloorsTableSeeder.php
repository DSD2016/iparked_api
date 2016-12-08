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
            'latitude' => 45.5,
            'longitude' => 15.5,
            'angle' => 90,
            'size_X' => 50,
            'size_Y' => 30,
            'zoom_level' => 20,
            'floor_plan' => 'getfloorplan.php?garage=5464654&level=879',
            'floor_capacity' => 250,
            'major_number' => 1000,
            'floor_timestamp' => '2001-1-1 00:00:00',
        ]);
    }
}
