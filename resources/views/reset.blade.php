@extends('layouts.base_home_view')

@section('judul','Reset Password')

@section('body_style','background: linear-gradient(to right, #3931af 50%, #00c6ff 50%);')

@section('content')
<div class="container register">
  <div class="row">
    <div class="col-md-9 register-right">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" 
        aria-labelledby="home-tab">
        <h3 class="register-heading">Reset Password</h3>
        <div class="row register-form"> <!-- Isi Form -->
          <div class="panel panel-default" style="margin-left:200px;">
            <div class="panel-body">
              <div class="text-center">
                <h3><i class="fa fa-lock fa-4x"></i></h3>
                <h2 class="text-left">Forgot Password?</h2>
                <p class="text-left">You can reset your password here.</p>
                <div class="panel-body">

                  <form class="form">
                    <fieldset>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                          <input id="emailInput" placeholder="Alamat Email" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <input class="btn btn-lg btn-primary btn-block" value="Reset My Password" type="submit">
                      </div>
                    </fieldset>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
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
  });
</script>
@endsection