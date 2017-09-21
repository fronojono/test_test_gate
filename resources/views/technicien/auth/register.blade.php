<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Page | Login</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">



	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
  <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/fonts/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/fonts/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="{{url('frontend/vendor/owl-carousel/owl.carousel.css')}}" media="screen">
	<link rel="stylesheet" href="{{url('frontend/vendor/owl-carousel/owl.theme.css')}}" media="screen">
	<link rel="stylesheet" href="{{url('frontend/vendor/magnific-popup/magnific-popup.css')}}" media="screen">
	<link rel="stylesheet" href="{{url('frontend/vendor/flexslider/flexslider.css')}}" media="screen">
	<link rel="stylesheet" href="{{url('frontend/vendor/job-manager/frontend.css')}}" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="{{url('frontend/css/theme.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/theme-elements.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">


	<!-- Favicons
	================================================== -->
  <link rel="shortcut icon" href="{{url('frontend/images/favicons/favicon.ico')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/images/favicons/favicon-120.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/images/favicons/favicon-152.png')}}">


</head>
<body>

	<div class="site-wrapper">

		<!-- Header -->
		<header class="header header-menu-fullw">

			<!-- Header Top Bar -->
			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<button class="btn btn-sm btn-default menu-link menu-link__secondary">
							<i class="fa fa-bars"></i>
						</button>
						<div class="menu-container">
							<ul class="header-top-nav header-top-nav__secondary">
								<li><a href="#"><i class="fa fa-twitter"></i> <span class="nav-label">Twitter</span></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i> <span class="nav-label">Facebook</span></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i> <span class="nav-label">Google+</span></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i> <span class="nav-label">Pinterest</span></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i> <span class="nav-label">Instagram</span></a></li>
								<li><a href="#"><i class="fa fa-rss"></i> <span class="nav-label">RSS Feed</span></a></li>
							</ul>
						</div>
					</div>
					<div class="header-top-right">
						<button class="btn btn-sm btn-default menu-link menu-link__tertiary">
							<i class="fa fa-user"></i>
						</button>
						<div class="menu-container">
							<ul class="header-top-nav header-top-nav__tertiary">
                @if (Auth::guest())
										<li><a href="{{ url('/technicien/login') }}">Login</a></li>
										<li><a href="{{ url('/technicien/register') }}">Register</a></li>
								@else
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
														{{ Auth::user()->name }} <span class="caret"></span>
												</a>

												<ul class="dropdown-menu" role="menu">
														<li>
																<a href="{{ url('/technicien/logout') }}"
																		onclick="event.preventDefault();
																						 document.getElementById('logout-form').submit();">
																		Logout
																</a>

																<form id="logout-form" action="{{ url('/technicien/logout') }}" method="POST" style="display: none;">
																		{{ csrf_field() }}
																</form>
														</li>
												</ul>
										</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Top Bar / End -->
			<div class="header-main">
				<div class="container">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html"><img src="{{url('frontend/images/logo.png')}}" alt="Handyman"></a>
						<!-- <h1><a href="index.html"><span>Handy</span>Man</a></h1> -->
					</div>
					<!-- Logo / End -->

					<button type="button" class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Navigation -->
					<nav class="nav-main">
						<div class="nav-main-inner">
							<ul data-breakpoint="992" class="flexnav">
								<li><a href="index.html">Home</a></li>
								<li class="active"><a href="#">Pages</a>
									<ul>
										<li><a href="page-about.html">About Us</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-team.html">Team</a></li>
										<li><a href="page-team-member.html">Team Member</a></li>
										<li><a href="page-faqs.html">FAQs</a></li>
										<li><a href="page-fullwidth.html">Full Width</a></li>
										<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
										<li class="active"><a href="page-login.html">Login &amp; Register</a></li>
										<li><a href="page-404.html">404</a></li>
									</ul>
								</li>
								<li><a href="#">Features</a>
									<ul>
										<li><a href="features-shortcodes.html">Shortcodes</a></li>
										<li><a href="features-pricing-tables.html">Pricing Tables</a></li>
										<li><a href="features-typography.html">Typography</a></li>
										<li><a href="features-columns.html">Columns</a></li>
										<li><a href="features-icons.html">Icons</a></li>
									</ul>
								</li>
								<li><a href="#">Jobs</a>
									<ul>
										<li><a href="job-post-profile.html">Post a Profile</a></li>
										<li><a href="job-post-job.html">Post a Job</a></li>
										<li><a href="job-professionals.html">Professionals</a></li>
										<li><a href="job-dashboard.html">Dashboard</a></li>
										<li><a href="job-profile.html">Profile</a></li>
									</ul>
								</li>
								<li><a href="blog-right-sidebar.html">Blog</a>
									<ul>
										<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
										<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
										<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
										<li><a href="blog-post.html">Single Post</a></li>
									</ul>
								</li>
								<li><a href="page-contacts.html">Contacts</a></li>
							</ul>
						</div>
					</nav>
					<!-- Navigation / End -->

				</div>
			</div>

		</header>
		<!-- Header / End -->

		@if(Session::has('message'))
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<div class="alert alert-warning">
						<h5 class="text-warning">{{ Session::get('message')}}</h5>
					</div>
				</div>
			</div>
		</div>
		@endif
		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Login</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->


			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="col-md-6">
							<div class="box">
								<h3>Login</h3>
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/technicien/login') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<label for="email" class="col-md-4 control-label">E-Mail Address</label>

												<div class="col-md-6">
														<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

														@if ($errors->has('email'))
																<span class="help-block">
																		<strong>{{ $errors->first('email') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
												<label for="password" class="col-md-4 control-label">Password</label>

												<div class="col-md-6">
														<input id="password" type="password" class="form-control" name="password">

														@if ($errors->has('password'))
																<span class="help-block">
																		<strong>{{ $errors->first('password') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
														<div class="checkbox">
																<label>
																		<input type="checkbox" name="remember"> Remember Me
																</label>
														</div>
												</div>
										</div>

										<div class="form-group">
												<div class="col-md-8 col-md-offset-4">
														<button type="submit" class="btn btn-primary">
																Login
														</button>

														<a class="btn btn-link" href="{{ url('/technicien/password/reset') }}">
																Forgot Your Password?
														</a>
												</div>
										</div>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							<div class="spacer-lg visible-sm visible-xs"></div>
							<div class="box">
								<h3>Register</h3>
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/technicien/register') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
												<label for="name" class="col-md-4 control-label">Name</label>

												<div class="col-md-6">
														<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

														@if ($errors->has('name'))
																<span class="help-block">
																		<strong>{{ $errors->first('name') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<label for="email" class="col-md-4 control-label">E-Mail Address</label>

												<div class="col-md-6">
														<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

														@if ($errors->has('email'))
																<span class="help-block">
																		<strong>{{ $errors->first('email') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
												<label for="password" class="col-md-4 control-label">Password</label>

												<div class="col-md-6">
														<input id="password" type="password" class="form-control" name="password">

														@if ($errors->has('password'))
																<span class="help-block">
																		<strong>{{ $errors->first('password') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
												<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

												<div class="col-md-6">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

														@if ($errors->has('password_confirmation'))
																<span class="help-block">
																		<strong>{{ $errors->first('password_confirmation') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group">
												<div class="col-md-6 col-md-offset-4">
														<button type="submit" class="btn btn-primary">
																Register
														</button>
												</div>
										</div>

								</form>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contact Us</h3>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<div class="info-item">
													HandyMan Co., Old Town Avenue, New York, USA 23000
												</div>
											</li>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													+1700 124-5678<br>
													+1700 124-5678
												</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:info@dan-fisher.com">support@dan-fisher.com</a>
												</span>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													Monday - Friday 9:00 - 21:00
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Latest Posts -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Recent Posts</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img1-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Three Simple Household Repairs That'll Save You Hundreds</a></h5>
												<span class="date">April, 18 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img2-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Tools That Make Yard Work Easy: The Big Backpack Blower</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img3-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">11 Tips for Dealing With Water Damage, Mold and Mildew</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Latest Posts -->
							</div>

							<div class="clearfix visible-sm"></div>

							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Newsletter -->
								<div class="widget_newsletter widget widget__footer">
									<h3 class="widget-title">Get Our Newsletter</h3>
									<div class="widget-content">
										<p>Get timely DIY projects for your home and yard delivered right to your inbox every week!</p>

										<form action="php/newsletter-form.php" method="POST" id="newsletter-form">

											<div class="alert alert-success hidden" id="newsletter-alert-success">
												<strong>Success!</strong> Thank you for subscribing.
											</div>
											<div class="alert alert-danger hidden" id="newsletter-alert-error">
												<strong>Error!</strong> Something went wrong.
											</div>

											<div class="form-group">
												<input type="email"
													value=""
													data-msg-required="Please enter email address."
													data-msg-email="Please enter a valid email address."
													class="form-control"
													placeholder="Enter your email here..."
													name="subscribe-email"
													id="subscribe-email">
											</div>
											<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Subscribe</button>
										</form>
									</div>
								</div>
								<!-- /Widget :: Newsletter -->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								Copyright &copy; 2015  <a href="index.html">HandyMan</a> &nbsp;| &nbsp;All Rights Reserved
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer / End -->

		</div>
		<!-- Main / End -->
	</div>





	<!-- Javascript Files
	================================================== -->
  <!-- Base + Vendors CSS -->



	<!-- Head Libs -->
  <script src="{{url('frontend/vendor/jquery-1.11.0.min.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
  <script src="{{url('frontend/vendor/bootstrap.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.flexnav.min.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.hoverIntent.minified.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.flickrfeed.js')}}"></script>
  <script src="{{url('frontend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
  <script src="{{url('frontend/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.fitvids.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.appear.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.stellar.min.js')}}"></script>
  <script src="{{url('frontend/vendor/flexslider/jquery.flexslider-min.js')}}"></script>
  <script src="{{url('frontend/vendor/jquery.countTo.js')}}"></script>

  <!-- Newsletter Form -->
  <script src="{{url('frontend/vendor/jquery.validate.js')}}"></script>
  <script src="{{url('frontend/js/newsletter.js')}}"></script>

  <script src="{{url('frontend/js/custom.js')}}"></script>



</body>
</html>
