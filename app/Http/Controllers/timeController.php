<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\time;

class timeController extends Controller
{
    public function create(Request $request)
    {
    	$times =new time();
    	$times->open_time = $request->input('open_time');
    	$times->close_time = $request->input('close_time');

		$times->weekday = $request->input('weekday');
		$times->save();
		return response()->json($times);


}
}
