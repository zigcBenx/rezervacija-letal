<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    public function flights(){
    	return response()->json(Flight::get(),200);
    }

    public function flightById($id){
    	return response()->json(Flight::find($id),200);
    }
    public function flightSave(Request $request){
    	$flight = Flight::create($request->all());
    	return response()->json($flight,201);
    }
    public function flightUpdate(Request $request, Flight $flight){
    	$flight->update($request->all());
    	return response()->json($flight, 200);
    }
    public function flightDelete(Request $request, Flight $flight){
    	$flight->delete();
    	return response()->json(null, 204);	
    }
}
