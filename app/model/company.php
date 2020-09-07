<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table ='company';
    protected $primaryKey = 'id';
    protected $fillable =['company_name','company_description'];
    public $timestamp = true;

}
