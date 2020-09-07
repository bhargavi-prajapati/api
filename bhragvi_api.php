<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
         $table->Increments('id');
        $table->unsignedBigInteger('image_id'); 
         $table->unsignedBigInteger('service_id'); 
        $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}






<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\images;

class shopController extends Controller
{
     public function create(Request $request)
    {
        $shops = new shop();
        $shops->image_id = $request->input('image_id');
        $shops->save();
        return response()->json($shops);
    }

    public function fetchdata(Request $request)
    {
        $shop = shop::leftjoin('images as image','image.id','=','shops.image_id')->select('shops.*','image.img_1')->where('shops.id','=',1)->get();
        return json_encode($shop);
    }
}
