<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMailable;
//model
use App\M_akun;
use App\M_utility;
use App\M_kios;

class C_akun extends Controller{
    //
	public function mailer(){
		$name = 'Krunal';
		Mail::to('andreanto.baguse@gmail.com')->send(new SendMailable($name));
		return 'Email was sent';
	}
	public function login(Request $request,$type){
    	//echo jsoc_encode($request);
    	//echo $request->usr."|".$request->pswd;
    	//echo json_encode($request);
		if($request->has('usr') && $request->has('pswd')){
			$username=$request->usr;
			$password=$request->pswd;
			$hasil=M_akun::login($type,$username,$password);
			if($hasil['success']){
				echo json_encode($hasil['akun']);
			}else{
				echo $hasil['error_msg'];
			}
		}else{
			echo "password & atau username ksoong";
		}
	}

	public function register(Request $request,$type){
		if($type=="kios"){
			//echo json_encode($request->all());
			$pesan=[];
			$arr=array("txtUsername"=>"Username","txtEmail"=>"Email","txtCompany_name"=>"Nama Perusahaan","txtCompany_addr"=>"Alamat Perusahaan","sProvincy"=>"Provinsi","sCity"=>"Kabputane/Kota","txtEmpPhone"=>"Nomor Telepon","txtName"=>"Nama Penanggung Jawab");
			$input_empty=M_utility::validateInput($request,$arr);
			if($request->has('pswd1') && trim($request->input('pswd1'))!="" && $request->has('pswd2') && trim($request->input('pswd2'))!=""){
				if($request->input('pswd1')!=$request->input('pswd2')){
					$pesan['pswd1']="Password tidak cocok!";
				}
			}else{
				$input_empty['pswd1']="Password";
			}
			$data=[];
			if($input_empty){
				$data['input_empty']=$input_empty;
				if($pesan){
					return view('register',["input_empty"=>$input_empty,"input"=>$request->all(),"pesan"=>$pesan]);
				}
				return view('register',["input_empty"=>$input_empty,"input"=>$request->all()]);
			}else{
				if($pesan){
					return view('register',["pesan"=>$pesan]);
				}else{
					$token=M_utility::genRandomString(20);
					$data=array(["id_kios"=>M_utility::genRandomString(20),"nama_kios"=>$request->input('txtCompany_name'),"nama_pemilik"=>$request->input('txtName'),"alamat_kios"=>$request->input('txtCompany_addr'),"kota_kios"=>$request->input('sCity'),"provinsi_kios"=>$request->input('sProvincy'),"telp_kios"=>$request->input('txtEmpPhone'),"email_kios"=>$request->input('txtEmail'),"username"=>$request->input('txtUsername'),"password"=>md5($request->input('pswd1')),"foto_ktp_pemilik"=>"testduulu","token"=>$token]);
					echo json_encode(M_kios::register($data));
					Mail::to($request->input('txtEmail'))->send(new SendMailable("Konfirmasi Pendaftaran","mail_layouts.konfirmasi",$request->input('txtUsername'),$token));
					return 'Email was sent';
				}
			}
			//{"txtUsername":"baguse","txtEmail":"andreanto.bagus@gmail.com","pswd1":"12345","pswd2":"12345","txtCompany_name":"Baguse Corp","txtCompany_addr":"jalan yang lurus","sProvincy":"14","sCity":"1473","txtEmpPhone":"(0322)1153632","txtName":"Baguse","btnRegister":"Register"}
			//if($request->has('txtUsername') && $request->has('txtEmail') && $request->has('pswd1') && $request->has('pswd2') && $request->has('txtCompany_name') && $request->has('txtCompany_addr') && $request->has('sProvincy') && $request->)
			// $file=$request->file('imgKTP');
			// $file_data=[];
			// $file_data['name']=$file->getClientOriginalName();
			// $file_data['extension']=$file->getClientOriginalExtension();
			// $file_data['realpath']=$file->getRealPath();
			// $file_data['size']=$file->getSize();
			// $file_data['mimetype']=$file->getMimeType();
    	//echo json_encode($file->move('upload',$file_data['name']));
			// echo json_encode($file_data);
		}else if($type=="admin"){

		}
	}
	public function konfirmasi_kios($username,$token){
		$row=M_kios::confirm($username,$token);
		if($row['success']){
			echo "Akun berhasil divalidasi";
		}else{
			echo $row['error_msg'];
		}
	}
	function test(){
		phpinfo();
	}
}
