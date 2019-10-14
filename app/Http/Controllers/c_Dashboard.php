<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\M_kios;
class c_Dashboard extends Controller{
    public function index(Request $request){
    	$username = $request->session()->get('username', '-1');
    	$id_user = $request->session()->get('id_user', '-1');
    	$type = $request->session()->get('type', '-1');
    	if($username=="-1"){
    		return redirect("/")->with('msg','Login terlebih dahulu!')->with('title_msg','Kesalahan')->with('type','error');
    	}else{
    		//echo "Login sebagai".$username;
    		if($type=='kios'){
    			$data=M_kios::getData($id_user);
    			return view('layouts.base_dashboard_kios_view',['data'=>$data]);
    		}
    	}
    }
}
