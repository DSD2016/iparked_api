<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('id/{id}', 'GarageController@showId');
Route::get('uuid/{uuid}', 'GarageController@showUUID');
Route::resource('floorplan', 'FloorPlanController');
Route::post('removefloorplan', 'FloorPlanController@deletePlan');
