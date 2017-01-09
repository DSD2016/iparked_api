<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FloorPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $provided_token = $request->input( 'api_token' );
        $stored_token = DB::table('users')
            ->where('api_token', $provided_token)
            ->get();
        
        if($stored_token->count() == 0) {
            return response()->json(array('message'=>'No luck!', 'provided_token'=> $provided_token), 500)
                            ->header('Access-Control-Allow-Origin', 'http://iparked.sytes.net') //iparked.sytes.net iparked_web.dev
                            ->header('Access-Control-Allow-Methods', 'POST'); 
        }
    
        $id = $request->input('id');

        $this->validate($request, ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',]);
           
        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix().'floor_plans'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = 'floor_plan_'.$id.'.'.$extension; // renameing image
        
        if( file_exists( $storagePath .'/'.$fileName) ) {
            Storage::delete('floor_plans/'.$fileName);;
        }
                
        $request->image->move($storagePath, $fileName);
        
        DB::table('floors')
            ->where('id', $id)
            ->update([
            'floor_plan' => 'floor_plans/'.$fileName
        ]);
        
        return response()->json(array('result' => 'Success', 'image name' => $fileName))
                         ->header('Access-Control-Allow-Origin', 'http://iparked.sytes.net') //iparked.sytes.net iparked_web.dev
                         ->header('Access-Control-Allow-Methods', 'POST'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $floor = DB::table('floors')
            ->where('id', $id)
            ->first();
        return response()->file($storagePath.$floor->floor_plan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function deletePlan(Request $request)
    {

        $provided_token = $request->input( 'api_token' );
        $stored_token = DB::table('users')
            ->where('api_token', $provided_token)
            ->get();
        
        if($stored_token->count() == 0) {
            return response()->json(array('message'=>'No luck!','provided_token'=> $provided_token), 500)
                            ->header('Access-Control-Allow-Origin', 'http://iparked.sytes.net') //iparked.sytes.net iparked_web.dev
                            ->header('Access-Control-Allow-Methods', 'POST'); 
        }
    
        $id = $request->input('id');

        $floor = DB::table('floors')
            ->where('id', $id)
            ->first();
        
        Storage::delete($floor->floor_plan);

        return response()->json(array('result' => 'Success', 'image name' => $floor->floor_plan), 200)
                         ->header('Access-Control-Allow-Origin', 'http://iparked.sytes.net') //iparked.sytes.net iparked_web.dev
                         ->header('Access-Control-Allow-Methods', 'POST'); 
    }
}
