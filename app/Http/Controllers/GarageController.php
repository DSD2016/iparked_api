<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GarageController extends Controller
{
    public function show($id)
    {
        $garage = DB::table('garages')
            ->where('id', $id)
            ->get();
        if($garage->count() == 0)
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
        $garage = json_decode($garage, true);
        $garage[0]['floors'] = $floors;
        return response()->json($garage);
    }
}
