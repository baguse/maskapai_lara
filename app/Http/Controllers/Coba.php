<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\C_akun;
class Coba extends Controller{
    function get(Request $request){
    	//select where
    	$res=DB::table('admin')->where('password','12345')->get();
    	//select where and
    	$res=DB::table('admin')->where('password','12345')->where('username','baguse')->get();
    	//select value only(single row)
    	$res=DB::table('admin')->where('password','12345')->value('username');
    	//select first row
    	$res=DB::table('admin')->where('password','12345')->first();
    	//select by Primary Key(id)
    	//$res=DB::table('admin')->find(2);
    	//select orderby
    	$res=DB::table('admin')->orderBy('username')->get();
    	//select collection of column
    	$res=DB::table('admin')->pluck('username');
    	//select collection of column(single row)
    	$res=DB::table('admin')->pluck('username','password');
    	//count
    	$res=DB::table('admin')->where('password','12345')->where('username','baguse')->count();
    	//check existency
    	$res=DB::table('admin')->where('password','12345')->where('username','baguse')->exists();
    	$res=DB::table('admin')->where('password','12345')->where('username','baguse')->doesntExist();
    	//custom column selecting
    	$res=DB::table('admin')->select('username')->where('password','12345')->get();
    	//distinct
    	$res=DB::table('admin')->select('password')->distinct()->where('password','12345')->get();
    	//add new selecting column to instance
    	$ins=DB::table('admin')->select('password');
    	$res=$ins->addSelect('username')->get();
    	//raw query
    	$res=DB::table('admin')->select(DB::raw('password as pass'))->get();
    	//select with like
    	$res=DB::table('admin')->where('username','like','a%')->select('username')->get();
    	//select or where
    	$res=DB::table('admin')->where('password','<>','12345')->orWhere('username','baguse')->get();
    	//whereraw
    	$res=DB::table('admin')->whereRaw('password <> "12345" OR username="baguse"')->get();
    	echo json_encode($res);
    }

    function insert(){
    	//insert
		//DB::table('admin')->insert(['username'=>'lukman','password'=>'3456890']);

		//insert array
		// $data=array(['username'=>'andini','password'=>'asfgag'],['username'=>'bagas','password'=>'adgag']);
		// $id=DB::table('admin')->insertGetId($data);
		//insert get autoincrement ID
		//$id=DB::table('admin')->insertGetId(['username'=>'zulkarnaen','password'=>'3456890']);
		//echo json_encode($id);

		echo json_encode(C_akun::test());
    }
}
