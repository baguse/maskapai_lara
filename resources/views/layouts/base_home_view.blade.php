<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield("judul")</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=url('css/business-frontpage.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="@yield('body_style')">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?=url('/')?>">PT TUNAS PERSADA MANDIRI ( TUNEX )</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" id="btn-home">
            <a class="nav-link" href="<?=url('/')?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="btn-login" class="btn btn-info btn-lg" data-toggle="modal" 
            data-target="#myModal">Login</a>
          </li>
          <li class="nav-item" id="btn-daftar">
            <a class="nav-link" href="<?=url('/akun/register')?>">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Login Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bgcustom">
          <h4 class="modal-title">Log In</h4>
        </div>
        <form action="<?=url('/kios/login/proses')?>" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" name="usr" placeholder="Username">
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control pwd" name="pswd" placeholder="Password">
                <span class="input-group-btn">
                  <button class="btn btn-default reveal brdr" type="button"><i class="fa fa-eye"></i></button>
                </span>
              </div>
              <span class="psw" style="float: right;"><a href="<?=url('/akun/reset');?>">Lupa Password?</a></span>          
            </div>
            <button type="submit" class="btn btn-default bgctmrgt">Login</button>
            <button type="button" id="btn-close" class="btn btn-default bgctmrgt" 
            data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>

  @yield('header')
  @yield('content')

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?=url('vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=url('vendor/jquery-ui/jquery-ui.min.js');?>"></script>
  <script src="<?=url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  @yield('custom_script')
</body>

</html>