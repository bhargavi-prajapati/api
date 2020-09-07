<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;

class imageController extends Controller
{
	public function create(Request $request)
    {
    	$img =new images();
    	$img->img_1 = $request->input('img_1');
    	$img->img_2 = $request->input('img_2');

		$img->img_3 = $request->input('img_3');
		$img->save();
		return response()->json($img);



    }
}
