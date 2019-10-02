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
					<div class="row register-form">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" value="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" value="">
							</div>
							<div class="form-group">
								<div class="input-group">
									<input type="password" class="form-control pwd" name="pswd1" placeholder="Password" value="">
									<span class="input-group-btn">
										<button class="btn btn-default reveal brdr" type="button"><i class="fa fa-eye"></i></button>
									</span>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input type="password" class="form-control pwd" name="pswd2" placeholder="Confirm Password"
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
              </div>
              <div class="col-md-6">
              	<div class="form-group">
              		<input type="text" class="form-control" placeholder="Nama Perusahaan" 
              		value="">
              	</div>
              	<div class="form-group">
              		<input type="text" class="form-control" placeholder="Alamat Perusahaan" 
              		value="">
              	</div>
              	<div class="form-group">
              		<input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Telepon Perusahaan" value="">
              	</div>
              	<div class="form-group">
              		<input type="text" class="form-control" placeholder="Nama Penanggung Jawab" 
              		value="">
              	</div>
              	<div class="bdcustom">Foto KTP Penanggung Jawab
              		<input type="file" class="form-control" value="">
              	</div>
              	<input type="submit" class="btnRegister"  value="Register"/>
              </div>
          </div>
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-login").on("click",function(){
			$("#btn-login").addClass("active");
			$("#btn-daftar").removeClass("active");
		});
		$("#btn-close").on("click",function(){
			$("#btn-login").removeClass("active");
			$("#btn-daftar").addClass("active");
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
	});

</script>
@endsection