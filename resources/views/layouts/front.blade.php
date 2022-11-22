<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Movie App - @yield('title')</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ asset('template_front/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('template_front/style.css') }}">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="site-content">
            {{-- Header --}}
			<header class="site-header">
				<div class="container">
					<a href="{{ route('front') }}" id="branding">
						<img src="{{ asset('template_front/images/logo.png') }}" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title"><b><i>Fan Movie</i></b></h1>
							<small class="site-description"><i>Hallo Gaes, Selamat Datang di Fan Website</i></small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item {{ request()->is('/') ? 'current-menu-item' : '' }}"><a href="{{ url('/') }}"><b><i>Home</i></b></a></li>
							<li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}"><a href="{{ url('/about') }}"><b><i>About Us</i></b></a></li>
							{{-- <li class="menu-item"><a href="review.html">Movie reviews</a></li>
							<li class="menu-item"><a href="joinus.html">Join us</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li> --}}
                            @guest
                                <li class="menu-item"><a href="{{ route('login') }}"><b><i>Login</i></b></a></li>
                                <li class="menu-item"><a href="{{ route('register') }}"><b><i>Register</i></b></a></li>
                            @else
                                <li class="menu-item {{ request()->is('profile') ? 'current-menu-item' : '' }}"><a href="{{ url('/profile') }}">Your Profile</a></li>
                                <li class="menu-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
            {{-- End Header --}}

            {{-- Main Content --}}
			<main class="main-content">
                <div class="container">
                    @yield('content')
				</div> <!-- .container -->
			</main>
            {{-- End Main Content --}}

            {{-- Footer --}}
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
            {{-- End Footer --}}
		</div>
		<!-- Default snippet for navigation -->

		<script src="{{ asset('template_front/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('template_front/js/plugins.js') }}"></script>
		<script src="{{ asset('template_front/js/app.js') }}"></script>

	</body>

</html>
