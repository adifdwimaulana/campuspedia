<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">
		<!-- IcoFont Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/icofont.min.css')}}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/meanmenu.css')}}">
		<!-- Magnific Popup Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.min.css')}}">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
		<!-- NiceSelect Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">

		<link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">
		
		<title>Campuspedia-Student Platform</title>

		<link rel="icon" type="image/png" href="{{asset('assets/front/img/favicon.png')}}">
		
	</head>
	
	<body>
		<!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="lds-hourglass"></div>
        </div>
        <!-- End Preloader Area -->

		<!-- Start Navbar Area -->
		<header id="header">
			<div class="crake-mobile-nav">
				<div class="logo">
					<img src="{{asset('assets/front/img/logo.png')}}" alt="">
				</div>
			</div>
			
			<div class="crake-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index-7.html"><img src="{{asset('assets/front/img/logo.png')}}" alt="logo"></a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav nav ml-auto">
								<li class="nav-item"><a href="{{URL::to('/college')}}" class="nav-link">Kampus</a>
								</li>

								<li class="nav-item"><a href="#" class="nav-link">Karir</a>
								</li>
								<!-- <li class="nav-item"><a href="#" class="nav-link">Event</a>
								</li> -->
								<li class="nav-item"><a href="#" class="nav-link">Register</a>
								</li>
								<li class="nav-item"><a href="#" class="nav-Login">Login </a>
								</li>
								<li class="nav-item"><a href="#" class="nav-link">Untuk perusahaan</a>
								</li>
							</ul>
						</div>
						
					</nav>
				</div> 
			</div>
		</header>
		<!-- End Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>

							<h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="{{asset('assets/front/img/logo.png')}}" alt="logo"></a></h2>
						</div>

						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>

								<ul>
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</div>
							
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>

								<ul class="contact-info">
									<li>
										<i class="icofont-google-map"></i>
										Address
										<span>1660 Travis Street Miramar, FL 33025, California</span>
									</li>
									<li>
										<i class="icofont-email"></i>
										Email
										<span>admin@campuspedia.id</span>
									</li>
									<li>
										<i class="icofont-phone"></i>
										Phone
										<span>+628 456 1200</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>

								<ul class="social-list">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Search Box -->
		<div id="header-search" class="header-search">
			<button type="button" class="close">×</button>
			<form class="header-search-form">
				<input type="search" value="" placeholder="Type here........" />
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</div>
		<!-- End Search Box -->

		<!-- Start Startup Main Banner -->
@yield('content')

		<!-- Start Footer Area -->
		<footer class="footer-area ptb-100 pb-0 bg-image">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<a href="#" class="logo"><img src="{{asset('assets/front/img/logo2.png')}}" alt="logo2"></a>
							<p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>

							<ul class="social-list">
								<li><a href="#"><i class="icofont-facebook"></i></a></li>
								<li><a href="#"><i class="icofont-twitter"></i></a></li>
								<li><a href="#"><i class="icofont-instagram"></i></a></li>
								<li><a href="#"><i class="icofont-linkedin"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget pl-5">
							<h3>Company</h3>

							<ul class="list">
								<li><a href="#">About</a></li>
								<li><a href="#">Carrers</a></li>
								<li><a href="#">Awards</a></li>
								<li><a href="#">User Program</a></li>
								<li><a href="#">Locations</a></li>
								<li><a href="#">Login</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Products</h3>

							<ul class="list">
								<li><a href="#">Integrations</a></li>
								<li><a href="#">API</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Release Notes</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Support</h3>

							<ul class="list">
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Press</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright-area">
				<div class="container">
					<div class="row h-100 justify-content-center align-items-center">
						<div class="col-lg-6 col-md-6">
							<p>Copyright @ 2019 Crake. All rights reserved</p>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<ul>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Back Top top -->
        <div class="back-to-top">Top</div>
        <!-- End Back Top top -->

		<!-- Jquery Min JS -->
		<script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
		<!-- Popper Min JS -->
		<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
		<!-- Bootstrap Min JS -->
		<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
		<!-- Canvas Min JS -->
		<script src="{{asset('assets/front/js/canvas.min.js')}}"></script>
		<!-- Meanmenu Min JS -->
		<script src="{{asset('assets/front/js/jquery.meanmenu.min.js')}}"></script>
		<!-- WOW Min JS -->
		<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
		<!-- Tilt Min JS -->
		<script src="{{asset('assets/front/js/tilt.jquery.min.js')}}"></script>
		<!-- Magnific Popup Min JS -->
		<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Owl Carousel Min JS -->
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
		<!-- Waypoints Min Js -->
        <script src="{{asset('assets/front/js/waypoints.min.js')}}"></script>
        <!-- Jquery CounterUp Min JS -->
        <script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
		<!-- NiceSelect Min Js -->
        <script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}"></script>
		<!-- ajaxChimp Min JS -->
        <script src="{{asset('assets/front/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset('assets/front/js/form-validator.min.js')}}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{asset('assets/front/js/contact-form-script.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assets/front/js/main.js')}}"></script>
	</body>

</html>