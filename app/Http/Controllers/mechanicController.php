<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mechanic;
use App\images;
use App\time;

class mechanicController extends Controller
{
     public function create(Request $request)
    {
    	$mechanics = new mechanic();
    	$mechanics->image_id = $request->input('image_id');
    	$mechanics->shop_name = $request->input('shop_name');
    	$mechanics->phone_number = $request->input('phone_number');
    	$mechanics->address = $request->input('address');
    	$mechanics->pin_code = $request->input('pin_code');
    	$mechanics->city = $request->input('city');
    	$mechanics->state = $request->input('state');
    	$mechanics->service_id = $request->input('service_id ');
    	$mechanics->time_id = $request->input('time_id  ');
        $mechanics->longitude = $request->input('longitude  ');
        $mechanics->latitude = $request->input('latitude  ');


    	$mechanics->save();
    	return response()->json($mechanics);
    }
     public function fetchdata(Request $request)
 {
 	//$mech = mechanic::all();
	 	$mech = mechanic::leftjoin('images as image','image.id','=','mechanics.image_id')

	 	->leftjoin('services as service','service.id','=','mechanics.service_id')
	 	->leftjoin('times as time','time.id','=','mechanics.time_id')
	 	->where('mechanics.id','=',1)->get();
	      //
        //dd($mech);
		  return json_encode($mech);
	}

	
}
