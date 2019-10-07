<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_akun extends Model{
    public static function login($t,$u,$p){
    	$res=DB::table($t)->where('username',$u)->where('password',md5($p));
    	$data['success']=false;
    	if($res->count()>0){
    		$data['success']=true;
    		$data['akun']=$res->get();
    	}
    	return $data;
    }
}
