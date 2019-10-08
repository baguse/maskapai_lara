@extends('layouts.base_home_view')

@section('judul','Pendaftaran')

@section('body_style','background: linear-gradient(to right, #3931af 50%, #00c6ff 50%);')

@section('content')
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
			<h3>ATTENTION</h3>
			<p>Dengan Klik Daftar Akun,<br>Saya Mengkonfirmasi Telah Menyetujui<br>
				<a style="color:#00ffff;">Syarat dan Ketentuan, serta Kebijakan Privasi</a></p>
				<button type="button" class="btn btn-light btcustom" data-toggle="modal" data-target="#myModalterms">
				Baca</button>
			</div>
			<div class="col-md-9 register-right">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" 
					aria-labelledby="home-tab">
					<h3 class="register-heading">Register Account</h3>
					<form action="<?=url('/kios/register/proses')?>" method="POST" enctype="multipart/form-data" id="frmRegister">
						<div class="row register-form">
							<div class="col-md-12">
								<div id="notif" style="display: <?=(isset($input_empty)||isset($pesan)?'block':'none');?>" class="alert alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close">
										<span aria-hidden="true">&times;</span>
									</button>
									<ul id="list_err">
										<?php
											if(isset($input_empty)){
												foreach ($input_empty as $key => $value) {
													echo "<li>{$value} masih kosong!</li>";
												}
											}
											if(isset($pesan)){
												foreach ($pesan as $key => $value) {
													echo "<li>{$value}</li>";
												}
											}
										?>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="txtUsername" nama="Username" name="txtUsername" class="form-control" placeholder="Username" value="<?=(isset($input['txtUsername'])?$input['txtUsername']:'');?>">
								</div>
								<div class="form-group">
									<input type="email" name="txtEmail" nama="E-mail" id="txtEmail" class="form-control" placeholder="Email" value="<?=(isset($input['txtEmail'])?$input['txtEmail']:'');?>">
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control pwd" nama="password" id="pswd1" name="pswd1" placeholder="Password" value="">
										<span class="input-group-btn">
											<button class="btn btn-default reveal brdr" type="button"><i class="fa fa-eye"></i></button>
										</span>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control pwd" nama="password" id="pswd2" name="pswd2" placeholder="Confirm Password"
										value="">
										<span class="input-group-btn">
											<button class="btn btn-default reveal brdr" type="button"><i class="fa fa-eye"></i></button>
										</span>
									</div>
								</div>
								<!-- <div class="form-group">
			                      <div class="maxl">
			                        <label class="radio inline"> 
			                          <input type="radio" name="gender" value="male" checked>
			                          <span> Male </span> 
			                        </label>
			                        <label class="radio inline"> 
			                          <input type="radio" name="gender" value="female">
			                          <span>Female </span> 
			                        </label>
			                      </div>
			                  </div> -->
			                  <div class="form-group">
			                  	<input type="text" class="form-control" nama="Nama Perusahaan" id="txtCompany_name" name="txtCompany_name" placeholder="Nama Perusahaan" 
			                  	value="<?=(isset($input['txtCompany_name'])?$input['txtCompany_name']:'');?>">
			                  </div>
			                  <div class="form-group">
			                  	<input type="text" class="form-control" nama="Alamat Perusahaan" id="txtCompany_addr" name="txtCompany_addr" placeholder="Alamat Perusahaan" 
			                  	value="<?=(isset($input['txtCompany_addr'])?$input['txtCompany_addr']:'');?>">
			                  </div>
			              </div>
			              <div class="col-md-6">
			              	<div class="form-group">
			              		<select name="sProvincy" id="sProvincy" class="form-control" placeholder="Provinsi">
			              			<option value="-1">
			              				--- Pilih Provinsi ---
			              			</option>
			              		</select>
			              	</div>
			              	<div class="form-group">
			              		<select name="sCity" id="sCity" class="form-control">
			              			<option value='-1'>
			              				--- Pilih Kabupaten/Kota ---
			              			</option>
			              		</select>
			              	</div>
			              	<div class="form-group">
			              		<input type="text" minlength="10" nama="Telepon Perusahaan" id="txtEmpPhone" maxlength="13" name="txtEmpPhone" class="form-control" placeholder="Telepon Perusahaan" value="<?=(isset($input['txtEmpPhone'])?$input['txtEmpPhone']:'');?>">
			              	</div>
			              	<div class="form-group">
			              		<input type="text" class="form-control" nama="Nama Penanggung Jawab" id="txtName" name="txtName" placeholder="Nama Penanggung Jawab" 
			              		value="<?=(isset($input['txtName'])?$input['txtName']:'');?>">
			              	</div>
			              	<div class="bdcustom">Foto KTP Penanggung Jawab
			              		<input type="file" accept=".jpg, .png, .jpeg" class="form-control" id="imgKTP" name="imgKTP">
			              	</div>
			              	<div class="form-group">
			              		<div id="map" style="width: 100%;height: 480px;"></div>
			              	</div>
			              	<input type="submit" class="btnRegister"  id="btnRegister" name="btnRegister" value="Register"/>
			              </div>
			          </div>
			      </form>
			  </div>
			</div>
		</div>
	</div>

	<!-- Modal Terms -->
	<div class="modal" id="myModalterms">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h1 class="modal-title">Terms and Conditions</h1>

				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<h3>Some text to enable scrolling..</h3>
					<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>

</div>
@endsection

@section('custom_script')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqCcaXJDGJoMNZDXRkSsFfLqj348pmNK4"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<script type="text/javascript">
	//map picker
	var locationPicker = new locationPicker('map', {
	    setCurrentPosition: true, // You can omit this, defaults to true
	}, {
	    zoom: 15 // You can set any google map options here, zoom defaults to 15
	});
	google.maps.event.addListener(locationPicker.map, 'idle', function (event) {
	    // Get current location and show it in HTML
	    var location = locationPicker.getMarkerPosition();
	    console.log('The chosen location is ' + location.lat + ',' + location.lng);
	});
	$(document).ready(function(){
		//validate form
		$('#frmRegister input[type=text],#frmRegister input[type=password],#frmRegister input[type=email],#frmRegister input[type=file]').on("change",function(){
			if($(this).attr("nama")=="password"){
				$('#frmRegister input[nama=password]').css("border","");
			}else{
				$(this).css("border","");
			}
		});
		$("#btn-daftar").addClass("active");
		$("#btn-login").on("click",function(){
			$("#btn-login").addClass("active");
			$("#btn-daftar").removeClass("active");
		});
		$("#btn-close").on("click",function(){
			$("#btn-login").removeClass("active");
			$("#btn-daftar").addClass("active");
		});

		$("#btnRegister").on("click",function(e){
			$("#list_err").html("");
			$('#frmRegister input[type=text],#frmRegister input[type=password],#frmRegister input[type=email],#frmRegister input[type=file]').each(function(){
				//console.log($(this).attr('id'));
				if($(this).attr("type")=="text"){
					if($(this).val().trim()==""){
						$("#notif").css("display","block");
						$(this).effect("shake");
						$(this).css("border","solid 2px red");
						$("#list_err").append("<li>"+$(this).attr("nama")+" masih kosong!</li>");
						e.preventDefault();
					}else{
						if($(this).attr("name")=="txtEmpPhone"){
							if($(this).val().trim().length<10){
								$("#notif").css("display","block");
								$(this).effect("shake");
								$(this).css("border","solid 2px red");
								$("#list_err").append("<li>"+$(this).attr("nama")+" harus memiliki panjang minimal 10!</li>");
								e.preventDefault();
							}
						}else if($(this).attr("id")=="pswd1" || $(this).attr("id")=="pswd2"){
							if($("#pswd1").val()!=$("#pswd2").val()){
								$("#notif").css("display","block");
								$('#frmRegister input[type=password]').effect("shake");
								$('#frmRegister input[type=password]').css("border","solid 2px red");
								$("#list_err").append("<li>Password tidak cocok!</li>");
								e.preventDefault();

							}
						}

					}
				}else if($(this).attr("type")=="email"){

				}else if($(this).attr("type")=="password"){
					if($(this).val().trim()==""){
						$("#notif").css("display","block");
						$(this).effect("shake");
						$(this).css("border","solid 2px red");
						$("#list_err").append("<li>Password masih kosong!</li>");
						e.preventDefault();
						
					}else {
						if($(this).attr("id")=="pswd1"){
							$("#notif").css("display","block");
							$('#frmRegister input[type=password]').effect("shake");
							$('#frmRegister input[type=password]').css("border","solid 2px red");
							$("#list_err").append("<li>Password tidak cocok!</li>");
							e.preventDefault();
						}	
					}
				}
			});
		});
		$(".close").on("click",function(){
			$("#notif").css("display","none");
		});
		// Show Password
		$(".reveal").on('click',function() {
			var $pwd = $(".pwd");
			if ($pwd.attr('type') === 'password') {
				$pwd.attr('type', 'text');
			} else {
				$pwd.attr('type', 'password');
			}
		});

		$.get("<?=url('geo/getProvinces')?>",{
		},function(data, status){
			if(status="success"){
				var prov=JSON.parse(data);
				for(var i=0;i<prov.length;i++){
					$("#sProvincy").append("<option value="+prov[i].id+">"+prov[i].name+"</option>");
				}
			}
		});

		$("#sProvincy").on("change",function(){
			var provId=$(this).children("option:selected").val();
			$.get("<?=url('geo/getCities')?>/"+provId,{
			},function(data, status){
				if(status="success"){
					var sCity=$("#sCity");
					sCity.html("");
					sCity.append("<option value='-1'>--- Pilih Kabupaten/Kota ---</option>");
					var cities=JSON.parse(data);
					for(var i=0;i<cities.length;i++){
						sCity.append("<option value="+cities[i].id+">"+cities[i].name+"</option>");
					}
				}
			});
		});		
	});
</script>
@endsection