<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_kios extends Model{
    static function register($arr_data){
    	//DB::table('admin')->insert(['username'=>'lukman','password'=>'3456890'])
    	$data=[];
    	$data['success']=false;
    	try{
    		if(DB::table('kios')->insert($arr_data)){
    			$data['success']=true;
    		}
    	}catch(Exception $e){
    		$data['error_msg']=$e->getMessage();
    	}
    	return $data;
    }

    static function confirm($username,$token){
    	$data=[];
    	$data['success']=false;
    	if($token!="-" && $token!="1"){
            $res=DB::table('kios')->where('token',$token)->where('username',$username);
            if($res->count()>0){
                $res->update(["token"=>"1"]);
                $data['success']=true;
            }else{
                $data['error_msg']="Kode yang dimasukkan salah";    
            }
    	}else{
            $data['error_msg']="Kode yang dimasukkan salah";
        }
        return $data;
    }
}
