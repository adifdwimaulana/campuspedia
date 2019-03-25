<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/education-world/multiple-pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Aug 2017 16:54:10 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Excent</title>
<!-- Bootstrap CSS -->
<link href="{{asset('assets/front/plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="{{asset('assets/front/plugin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/front/css/datatables.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
<!-- Animate CSS -->
<link href="{{asset('assets/front/plugin/animate/animate.css')}}" rel="stylesheet">
<!-- Owl Carousel -->
<link href="{{asset('assets/front/plugin/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('assets/front/plugin/owl-carousel/css/owl.theme.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/images/fav.png')}}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header>
  <div class="top-wrapper">
    <div class="container">
      <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">
        <ul class="header-social-icons">
          <li class="instagram"><a href="https://www.instagram.com/excentprivate" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li class="twitter"><a href="https://twitter.com/excentprivate" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <!--<li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li> -->
        </ul>
      </div>
      <div class="col-md-8 col-sm-6">
        <ul class="top-right pull-right ">
          <!-- Login -->
          <li class="login"><a href="{{URL::to('/login_page')}}"><i class="fa fa-lock"></i>Login</a>
          </li>
          <!-- Register -->
          <li class="register"><a href="{{URL::to('/register_page')}}"><i class="fa fa-user"></i>Sign Up</a>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
  <div class="logo-bar hidden-xs">
    <div class="container">
      <!-- Logo -->
      <div class="row">
        <div class="col-sm-4"><a href="{{URL::to('/')}}"> <img style=" height: 60px;" src="{{asset('assets/front/images/logo2.png')}}" alt="Excent Private"></a> </div>
        <div class="col-sm-8">
          <ul class="contact-info pull-right">
            <li><i class="fa fa-phone"></i>
              <p> <span>Call us</span><br>
              +62 831 1771 4787</p>
            </li>
            <li><i class="fa fa-envelope"></i>
              <p><span>Email Us</span><br>
                <a href="mailto:excentprivate@gmail.com">excentprivate@gmail.com</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img style=" height: 40px;" src="{{asset('assets/front/images/logo2.png')}}" alt="Excent Private"/></a> </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
              <li><a href="{{URL::to('/gallery')}}">Gallery</a></li>
              <!-- <li><a href="{{URL::to('/news')}}">News</a></li> -->
              <li><a href="#">About Us</a></li>
              <li><a href="{{URL::to('/price_list')}}">Price List</a></li>
              <li><a href="{{URL::to('/panduan')}}">Panduan</a></li>
              <li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- Header End -->
@yield('content')
<!-- Footer Links Start-->
<footer>
  <div class="container">
    <div class="col-sm-3"><img style="height: 10em; width: auto;" src="{{asset('assets/front/images/logo_icon.png')}}" alt="Nath Institute"> </div>
    <div class="col-sm-5">
      <div class="contactus">
        <h2>Contact Us</h2>
        <ul class="list-ul">
          <li><i class="fa fa-map-marker"></i>Jl.Tunjungan</li>
          <li><i class="fa fa-phone"></i>+62 831 1771 4787</li>
          <li><i class="fa fa-envelope"></i><a href="mailto:excentprivate@gmail.com">excentprivate@gmail.com</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4 subscirbe pull-right">
      <h2>Newsletter</h2>
      <p class="sub"><span>Subscribe</span> to Our Newsletter to get Important Blog Posts &amp; Inside Scoops:</p>
      <div class="form">
        <input type="text" placeholder="Enter your Email" id="exampleInputName" class="form-control first">
        <input type="text" class="bttn" value="Subscribe">
      </div>
    </div>
  </div>
</footer>
<!-- Footer Links End -->
<!-- Copy Rights Start -->
<div class="footer-wrapper">
  <div class="container">
    <p>&copy; Copyright 
	<script type="text/javascript">
	var d=new Date();
	document.write(d.getFullYear());
	</script> 
      Excent | Powered By Campuspedia | All Rights Reserved.</p>
  </div>
  <a id="scrool-top" href="javascript:void(0)"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 
</div>
<!-- Copy Rights End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{asset('assets/front/plugin/jquery/jquery-3.1.1.min.js')}}"></script> 
<script src="{{asset('assets/front/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/front/plugin/jquery/jquery.animateNumber.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('assets/front/plugin/easing/jquery.easing.min.js')}}"></script> 
<script src="{{asset('assets/front/plugin/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/front/plugin/wow/wow.min.js')}}"></script> 
<script src="{{asset('assets/front/plugin/owl-carousel/js/owl.carousel.js')}}"></script>

<script src="{{asset('assets/front/js/custom.js')}}"></script>
<!--script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-83282272-2', 'auto');
  ga('send', 'pageview');
</script-->
</body>
</html>