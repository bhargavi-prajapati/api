<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class serviceController extends Controller
{
    public function create(Request $request)
    {
    	$services =new service();
    	$services->service_1 = $request->input('service_1');
    	$services->service_2 = $request->input('service_2');

		$services->service_3 = $request->input('service_3');
		$services->save();
		return response()->json($services);



    }
}
