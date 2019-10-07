@extends('layouts.base_home_view')

@section('judul','Landing Page')

@section('header')
<header class="bgcustom py-5 mb-5">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-12">
        <h1 class="display-4 text-white mt-5 mb-2">Business Name or Tagline</h1>
        <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
      </div>
    </div>
  </div>
</header>
@endsection

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-8 mb-5">
      <h2>What We Do</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
      <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
    </div>
    <div class="col-md-4 mb-5">
      <h2>Contact Us</h2>
      <hr>
      <address>
        <strong>Start Bootstrap</strong>
        <br>3481 Melrose Place
        <br>Beverly Hills, CA 90210
        <br>
      </address>
      <address>
        <abbr title="Phone">P:</abbr>
        (123) 456-7890
        <br>
        <abbr title="Email">E:</abbr>
        <a href="mailto:#">name@example.com</a>
      </address>
    </div>
  </div>

  <!-- Maps -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15827.001772991132!2d112.7705742!3d-7.3818402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x638d12f3a99a976c!2sTunas%20Persada%20Mandiri%20(%20TUNEX%20).%20PT!5e0!3m2!1sid!2sid!4v1568966246916!5m2!1sid!2sid" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>&nbsp;</div>
  </div>
  @endsection

  @section('custom_script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#btn-home").addClass("active");
      $("#btn-login").on("click",function(){
        $("#btn-login").addClass("active");
        $("#btn-home").removeClass("active");
      });
      $("#btn-close").on("click",function(){
        $("#btn-login").removeClass("active");
        $("#btn-home").addClass("active");
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