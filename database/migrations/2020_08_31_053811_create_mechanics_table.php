<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table) {
            //$tSchema::create('mechanics', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('image_id');
             $table->string('shop_name');
             $table->string('phone_number');
             $table->string('address');
             $table->string('pin_code');
            $table->string('city');
            $table->string('state');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('time_id');
             $table->string('longitude');
              $table->string('latitude');

            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
          $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
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
        Schema::dropIfExists('mechanics');
    }
}
