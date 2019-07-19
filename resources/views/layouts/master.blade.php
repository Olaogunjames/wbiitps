<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.hassandesigns.top/html/jobfinder/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2019 20:43:39 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Web Based Intelligent industrial Training Placement System (WBIITPS)</title>
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fav Icon -->
<link rel="shortcut icon" href="images/logo.jpg">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">

</head>
<body>         
    <div id="app">
<!--header start-->
<div class="header-wrap">
  <div class="container">       
    <!--row start-->
    <div class="row"> 
      <!--col-md-3 start-->
      <div class="col-md-3 col-sm-3">
        <div class="logo"><a href="/"><img src="images/logo.jpg" style="width: 50px;" alt=""></a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!--col-md-3 end--> 
      <!--col-md-7 end-->
      <div class="col-md-5 col-sm-9"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              <li class="dropdown"> <a href="/"> Home</a>   
                </li>
                <li class="dropdown"> <a href="#">Company Categories <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li> <a href="IT"> IT Engineer </a></li>
                    <li> <a href="Management"> Management </a></li>
                    <li> <a href="Accounting"> Accounting </a></li>
                    <li> <a href="Design"> Design & Art </a></li>                    
                  </ul>
                </li>           
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-md-3 end--> 
      <!--col-md-2 start-->
      <div class="col-md-4 col-sm-12">
        <div class="header-right">
          <div class="user-wrap">
              @guest
            <div class="login-btn"><a href="/login">Company Login</a></div>
            <div class="register-btn"><a href="/register">Register Company</a></div>
            <div class="clearfix"></div>
            @else
            <div class="">
                <a id="navbarDropdown" class="nav-link dropdown-toggle single-facility" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item single-facility" href="/dashboard">
                    Dashboard
                  </a>
                    <a class="dropdown-item single-facility" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest           
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--col-md-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
<!--header start end--> 

    <router-view></router-view>

<!--copyright start-->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="copyright">Copyright © 2019 SIWES PLACEMENT - All Rights Reserved.</div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="social">
          <div class="followWrp"> <span>Follow Us</span>
            <ul class="social-wrap">
              <li><a href="#."><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>

<!--copyright end--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- SLIDER REVOLUTION SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

<!-- Mirrored from www.hassandesigns.top/html/jobfinder/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2019 20:43:59 GMT -->
</html>