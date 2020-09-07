<?php

namespace App\Http\Controllers\project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\company;

class companycontroller extends Controller
{
    public function insert()
    {
    	$company = new company();
    	$company->company_name = "unique";
    	$company->company_description = "xyz";
    	if($company->save())
    	{
    		echo "inserted succesfully";
    	}
    	else
    	{
    		"not inserted";
    	}


    }
}
