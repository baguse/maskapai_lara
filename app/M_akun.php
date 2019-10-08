<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_akun extends Model{
    public static function login($t,$u,$p){
        $data=[];
        $data['success']=false;
    	if($t=="kios"){
            $res=DB::table($t)->where('username',$u)->where('password',md5($p));
    		//$res_validated=DB::table($t)->where('username',$u)->where('token','1')->where('password',md5($p));
            if($res->count()>0){
                $row=$res->get();
                if($row[0]->token=="1"){
                    $data['success']=true;
                    $data['akun']=$row;
                }else{
                    $data['error_msg']="Akun belum dikonfirmasi, Silahkan cek email!";
                }
            }else{
                $data['error_msg']="Username atau password salah!";
            }
    	}else{
    		$res=DB::table($t)->where('username',$u)->where('password',md5($p));
            if($res->count()>0){
                $data['success']=true;
                $data['akun']=$res->get();
            }else{
                $data['error_msg']="Username atau password salah!";
            }
    	}
    	return $data;
    }
}
