<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    
	public $timestamps = false;
    protected $table ='images';
    protected $fillable =['img_1','img_2','img_3'];

}
