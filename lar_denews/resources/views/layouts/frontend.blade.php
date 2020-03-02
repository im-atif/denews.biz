<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<!-- Basic metas
    	======================================== -->
	<meta charset="utf-8">
	<meta name="author" content="Atif Ibrahim">
	<meta name="keywords" content="Blog, The News, DeNews, News">
	<meta name="description" content="">
	<!-- Mobile specific metas
    ======================================== -->
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Page Title
    ======================================== -->
	
    <title>{!! $title !!}</title>
	
    <!-- links for favicon
    ======================================== -->
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Icon fonts
	======================================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/iconfont.css">
	
	<!-- css links
	======================================== -->
	<link rel="stylesheet" type="text/css" href="/assets/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/vendor/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>

<body>
	<div class="main-content">
		<div class="side-nav">
			<div class="side-nav-inner nicescroll-container">
				
				<form action="{{ route('search') }}" class="side-nav-search-form">
					<div class="form-group search-field">
						<input type="text" class="search-field" name="s" placeholder="Search...">
						<button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
					</div>
				</form>
				
				<div class="side-nav-content">
					<div class="row ">
						
						<div class="col-lg-6">
							<ul class="main-navigation side-navigation list-inline flex-column">
								@foreach($first_4_cat as $key => $category)
									<li><a href="{{ route('category.single', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>

						<div class="col-lg-6">
							<div class="axil-contact-info-inner">
								<h5 class="h5 m-b-xs-10">Contact Information</h5>
								<div class="axil-contact-info">
									
									<address class="address">
										<p class="m-b-xs-30  mid grey-dark-three ">106 W 1st St, Los Angeles, <br/> CA 90012, USA</p>
										<div class="h5 m-b-xs-5">We're Available 24/ 7. Call Now.</div>
										<div><a class="tel" href="tel:+16463498726"><i class="fas fa-phone"></i>(646) 349-8726</a></div>
                                    	<div><a class="tel" href="mailto:info@denews.biz"><i class="fas fa-envelope"></i>info@denews.biz</a></div>
									</address>
									
									<div class="contact-social-share m-t-xs-30">
										<div class="axil-social-title h5">Follow Us</div>
										<ul class="social-share social-share__with-bg">
											<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#!"><i class="fab fa-behance"></i></a></li>
											<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
									
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			
			<div class="close-sidenav" id="close-sidenav">
				<div></div>
				<div></div>
			</div>
		</div>
		
        <header class="page-header">
			<div class="header-top bg-grey-dark-one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md">
							<ul class="header-top-nav list-inline justify-content-center justify-content-md-start">
								<li class="current-date"><?= date('d M, Y') ?></li>
								<li><a href="/about-us">About Us</a></li>
								<li><a href="/team">Team</a></li>
								<li><a href="/contact">Contact</a></li>
							</ul>
						</div>
						<div class="col-md-auto">
							<ul class="ml-auto social-share header-top__social-share">
								<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar bg-white">
				<div class="container">
					<div class="navbar-inner">
						
						<div class="brand-logo-container">
							<a href="/">
								<img src="/assets/images/header-logo.png" alt="Logo" class="brand-logo">
							</a>
						</div>
						
						<div class="main-nav-wrapper">
							<ul class="main-navigation list-inline" id="main-menu">

								@foreach($menu_categories as $category)

                                <li><a href="{{ route('category.single', ['slug' => $category->slug ]) }}">{{ $category->name }}</a></li>

                                @endforeach

							</ul>
						</div>
						
						<div class="navbar-extra-features ml-auto">
							<form action="{{ route('search') }}" class="navbar-search">
								<div class="search-field">
									<input type="text" name="s" class="navbar-search-field" placeholder="Search Here...">
									<button class="navbar-search-btn" type="button"><i class="fal fa-search"></i></button>
								</div>
								<a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
							</form>
							<a href="#" class="nav-search-field-toggler" data-toggle="nav-search-feild"><i
									class="far fa-search"></i></a>
							<a href="#" class="side-nav-toggler" id="side-nav-toggler">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>

						<div class="main-nav-toggler d-block d-lg-none" id="main-nav-toggler">
							<div class="toggler-inner">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>

					</div>
				</div>
			</nav>
		</header>
		
        @yield('page-content')
		
        <footer class="page-footer bg-grey-dark-key">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						
						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">World</h2>
								<ul class="footer-nav">
									<li><a href="#!">U.N.</a></li>
									<li><a href="#!">Conflicts</a></li>
									<li><a href="#!">Terrorism</a></li>
									<li><a href="#!">Disasters</a></li>
									<li><a href="#!">Global Economy</a></li>
									<li><a href="#!">Global Economy</a></li>
									<li><a href="#!">Environment</a></li>
									<li><a href="#!">Religion</a></li>
									<li><a href="#!">Scandals</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">Politics</h2>
								<ul class="footer-nav">
									<li><a href="#!">Executive</a></li>
									<li><a href="#!">Senate</a></li>
									<li><a href="#!">House</a></li>
									<li><a href="#!">Judiciary</a></li>
									<li><a href="#!">Foreign policy</a></li>
									<li><a href="#!">Polls</a></li>
									<li><a href="#!">Elections</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">Entertainment</h2>
								<ul class="footer-nav">
									<li><a href="#!">Celebrity News</a></li>
									<li><a href="#!">Movies</a></li>
									<li><a href="#!">TV News</a></li>
									<li><a href="#!">Music News</a></li>
									<li><a href="#!">Style News</a></li>
									<li><a href="#!">Entertainment Video</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">Business</h2>
								<ul class="footer-nav">
									<li><a href="#!">Markets</a></li>
									<li><a href="#!">Politics</a></li>
									<li><a href="#!">Technology</a></li>
									<li><a href="#!">Features</a></li>
									<li><a href="#!">Business Leaders</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">Health</h2>
								<ul class="footer-nav">
									<li><a href="#!">Healthy Living</a></li>
									<li><a href="#!">Medical Research</a></li>
									<li><a href="#!">Mental Health</a></li>
									<li><a href="#!">Cancer</a></li>
									<li><a href="#!">Heart Health</a></li>
									<li><a href="#!">Children's Health</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-lg-2 col-md-4 col-6">
							<div class="footer-widget">
								<h2 class="footer-widget-title">About</h2>
								<ul class="footer-nav">
									<li><a href="#!">Contact Us</a></li>
									<li><a href="#!">Careers</a></li>
									<li><a href="#!">Fox Around the World</a></li>
									<li><a href="#!">Advertise With Us</a></li>
									<li><a href="#!">Ad Choices</a></li>
									<li><a href="#!">Media Relations</a></li>
									<li><a href="#!">Compliance</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="footer-mid">
					<div class="row align-items-center">
						
						<div class="col-md">
							<div class="footer-logo-container">
								<a href="/">
									<img src="/assets/images/footer-logo.png" alt="footer logo" class="footer-logo">
								</a>
							</div>
						</div>
						
						<div class="col-md-auto">
							<div class="footer-social-share-wrapper">
								<div class="footer-social-share">
									<div class="axil-social-title">Find us here</div>
									<ul class="social-share social-share__with-bg">
										<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="footer-bottom">
					<p class="axil-copyright-txt">
						© <?= date('Y') ?>. All rights reserved. Created by&nbsp;<a href="http://dedezigners.com" target="_blank">DeDezigners</a>
					</p>
				</div>
			</div>
		</footer>
	</div>

	<!-- Javascripts
	======================================= -->
	<script src="/assets/js/vendor/jquery.min.js"></script>
	<script src="/assets/js/vendor/jquery-migrate.min.js"></script>
	<script src="/assets/js/vendor/easing-1.3.js"></script>
	<script src="/assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="/assets/js/vendor/owl.carousel.min.js"></script>
	<script src="/assets/js/vendor/slick.min.js"></script>
	<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/vendor/isotope.pkgd.min.js"></script>
	<script src="/assets/js/vendor/jquery.counterup.js"></script>
	<script src="/assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/vendor/jquery.nicescroll.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>
	<script src="/assets/js/plugins.js"></script>
	<script src="/assets/js/main.js"></script>
</body>
</html>