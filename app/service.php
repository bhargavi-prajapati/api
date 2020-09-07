<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public $timestamps = false;
    protected $table ='services';
    protected $fillable =['service_1','service_2','service_3'];
}
