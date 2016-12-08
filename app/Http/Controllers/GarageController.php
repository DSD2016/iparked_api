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
        $garage = json_decode($garage);
        $floors = DB::table('floors')
            ->where('garage_id', $id)
            ->get();
        $floors = json_decode($floors);
        $beacons = '';
        foreach($floors as $floor){
            $beacons . DB::table('beacons')
                ->where('floor_id', $floor->id)
                ->get();
        }
        $floors['beacons'] = $beacons;
        $floors = json_encode($floors);
        $garage = json_encode($garage);
        return response()->json($garage);
    }
}
