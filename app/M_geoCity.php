<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_geoCity extends Model{
    static function getProvinces(){
    	$res=DB::table('provinces')->orderBy("name")->get();
    	return $res;
    }

    static function getCities($provId){
    	$res=DB::table('regencies')->select('id','name')->where('province_id',$provId)->orderBy("name")->get();
    	return $res;
    }
}
