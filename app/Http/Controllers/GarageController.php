<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function show($uuid)
    {
        return response()->json([
            "garage" => [
                "id" => $uuid,
                "name" => "shopping center",
                "latitude" => "45.236",
                "longitude" => "15.258",
                "numberOfFloors" => "6",
                "garageCapacity" => "589",
                "type" => "indoor",
                "UUID" => "87:68:76:54:65:41",
                "garageTimestamp" => "64654654654654126",
                "levels" => [
                    "id" => "879",
                    "name" => "level-5",
                    "levelTimestamp" => "984",
                    "major" => "65652",
                    "angle" => "23.4",
                    "sizeX" => "31",
                    "sizeY" => "62",
                    "zoomLevel" => "19", 
                    "levelPlan" => "getfloorplan.php?garage=5464654&level=879",
                    "levelCapacity" => "55",
                    "beacons" => [
                        [
                            "id" => "645654",
                            "name" => "beacon12",
                            "longitude" => "45.238",
                            "latitude" => "15.262",
                            "minor" => "46546",
                            "blutoothAddress" => "89:FA:77:3A:55:11:98",
                            "range" => "13"
                        ],
                        [
                            "id" => "945654",
                            "name" => "beacon13",
                            "longitude" => "45.237",
                            "latitude" => "15.266",
                            "minor" => "46548",
                            "blutoothAddress" => "89:FA:77:3A:55:22:75",
                            "range" => "10"
                        ]
                    ]
                ]
            ]
        ]);
    }
}
