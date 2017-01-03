<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GarageController extends Controller
{
    public function showId($id)
    {
        $garages = DB::table('garages')
            ->where('id', $id)
            ->get();
        if($garages->count() == 0)
        {
            return "No luck!";
        }
        $floors = DB::table('floors')
            ->where('garage_id', $id)
            ->get();
        $floors = json_decode($floors, true);
        $i = 0;
        foreach($floors as $floor)
        {
            $beacons = DB::table('beacons')
                ->where('floor_id', $floor['id'])
                ->get();
            $floors[$i]['beacons'] = $beacons;
            $i++;
        }
        $garages = json_decode($garages, true);
        $garages[0]['floors'] = $floors;
        return response()->json($garages[0]);
    }
    
    public function showUUID($uuid)
    {
        $garages = DB::table('garages')
            ->where('UUID', $uuid)
            ->get();
        if($garages->count() == 0)
        {
            return "No luck!";
        }
        $garage = json_decode($garages, true);
        $floors = DB::table('floors')
            ->where('garage_id', $garage[0]['id'])
            ->get();
        $floors = json_decode($floors, true);
        $i = 0;
        foreach($floors as $floor)
        {
            $beacons = DB::table('beacons')
                ->where('floor_id', $floor['id'])
                ->get();
            $floors[$i]['beacons'] = $beacons;
            $i++;
        }
        $garages = json_decode($garages, true);
        $garages[0]['floors'] = $floors;
        return response()->json($garages[0]);
    }
}
