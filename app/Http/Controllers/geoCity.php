<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_geoCity;
class geoCity extends Controller{
    function Provinces(){
    	//header('Content-Type: application/json');
    	echo json_encode(M_geoCity::getProvinces());
    }

    function Cities($provId){
    	header('Content-Type: application/json');
    	echo json_encode(M_geoCity::getCities($provId));
    }
}
