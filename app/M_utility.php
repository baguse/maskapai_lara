<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_utility extends Model{
	static function genRandomString($n=10){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $n; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;

	}

	static function validateInput($request,$arr_data){
		$input_empty=[];
		foreach ($arr_data as $key => $value) {
			if($request->has($key)==false){
				$input_empty[$key]=$value;
			}else{
				if(trim($request->input($key))==""){
					$input_empty[$key]=$value;
				}
			}
		}
		return $input_empty;
	}
}
