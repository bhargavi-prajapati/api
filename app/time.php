<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    public $timestamps = false;
    protected $table ='times';
    protected $fillable =['open_time','close_time','weekday'];
}
