	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Expo</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/availability-calendar.css" rel="stylesheet">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center" style="margin-left:-500px;width:800px;">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="/request">view expos</a>
									<a href="/addpro">Add products</a>
									<a href="/comproductview">view products</a>
									<!--<a href="#home">View Reservedbooths</a>-->
									<a href="#upcoming">About</a>
									<div  style="margin-left:600px;margin-top:-23px;">
									<a class="main-menubar d-flex align-items-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
					<div>
							welcome {{ Auth::user()->email }}
							</div>
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
							<div class="banner-content col-lg-6 col-md-12">
								<h1>
									COMPANY
								</h1>
				        		<div class="row clock_sec d-flex flex-row justify-content-between" id="clockdiv">
				                    <div class="clockinner">
				                        <span class="days"></span>
				                        <div class="smalltext">Days</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="hours"></span>
				                        <div class="smalltext">Hours</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="minutes"></span>
				                        <div class="smalltext">Minutes</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="seconds"></span>
				                        <div class="smalltext">Seconds</div>
				                    </div>

				                </div>
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start facilities Area -->
			<!--<section class="facilities-area section-gap" id="functionalities">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Core Functionalities</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="sigle-facilities col-lg-4 col-md-6 pb-40">
							<span class="lnr lnr-chart-bars"></span>
							<h4>Management</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6 pb-40">
							<span class="lnr lnr-bullhorn"></span>
							<h4>Marketing</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6 pb-40">
							<span class="lnr lnr-poop"></span>
							<h4>Uniqueness</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-smile"></span>
							<h4>Design</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-sun"></span>
							<h4>Creativity</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-magic-wand"></span>
							<h4>Strategy</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
							</p>
						</div>


					</div>
				</div>
			</section>
			<!-- End facilities Area -->

			<!-- Start speaker Area -->
			<!--<section class="speaker-area section-gap" id="speaker">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Our Speakers</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 speaker-wrap">
							<div class="single-speaker">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/s1.jpg" alt="">
								      	<div class="content-details fadeIn-bottom"></div>
								    </a>
								 </div>
							</div>
						  	<h2>Andy Florence</h2>
						  	<p>inappropriate behavior</p>
						</div>
						<div class="col-lg-4 col-md-4 speaker-wrap">
							<div class="single-speaker">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/s2.jpg" alt="">
								      	<div class="content-details fadeIn-bottom"></div>
								    </a>
								 </div>
							</div>
						  	<h2>Andy Florence</h2>
						  	<p>inappropriate behavior</p>
						</div>
						<div class="col-lg-4 col-md-4 speaker-wrap">
							<div class="single-speaker">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/s3.jpg" alt="">
								      	<div class="content-details fadeIn-bottom"></div>
								    </a>
								 </div>
							</div>
						  	<h2>Andy Florence</h2>
						  	<p>inappropriate behavior</p>
						</div>

					</div>
				</div>
			</section>
			<!-- End speaker Area -->


			<!-- Start calender Area -->
			<!--<section class="calender-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Event Calendar</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 calender-wrap" id="calendar"></div>
						<div class="col-lg-12 event-dates">
							<div class="single-event d-flex flex-row">
								<p class="col">
									Dec 01
								</p>
								<p class="col-8">
									World AIDS Day
								</p>
								<p class="col text-right">
									<span class="lnr lnr-highlight"></span>
									<span class="lnr lnr-trash"></span>
								</p>
							</div>
							<div class="single-event d-flex flex-row">
								<p class="col">
									Dec 16
								</p>
								<p class="col-8">
									Victory Day of people republic of Bangladesh
								</p>
								<p class="col text-right">
									<span class="lnr lnr-highlight"></span>
									<span class="lnr lnr-trash"></span>
								</p>
							</div>
							<div class="single-event d-flex flex-row">
								<p class="col">
									Dec 25
								</p>
								<p class="col-8">
									Chrismas Day Arrangement
								</p>
								<p class="col text-right">
									<span class="lnr lnr-highlight"></span>
									<span class="lnr lnr-trash"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End calender Area -->


			<!-- Start events Area -->
			<section class="events-area section-gap" id="upcoming">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>About</h1>
							<p>
							Expo Management is totally built at administrative end and thus only the administrator is guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Tickets, Company, Customers, Bookings. 
With the increasing growth in the number of industries and the competitive run for the trophy of perfection and profit, these industries round the globe are in the lookout for a roof to exhibit their products in the most convenient, profitable and successful means. Chambers of Commerce and Industrial Associates around the world conduct expos or large trade fairs and exhibitions with the aim of promoting their products and companies. The organizers face a huge amount of effort in conduction such large scale expos. Nevertheless, organizing such exhibitions not only give companies good exposure but also servers to agree upon big deals and agreements with other corporate or potential clients. <br> labore  et dolore magna aliqua.
							</p>
							</p>
						</div>
					</div>
					<!--<div class="row no-padding">
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e1.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e2.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e3.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e4.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e5.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e6.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End events Area -->


			<!-- start footer Area -->
			<!--<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
					<div class="modal-body">
				<div class="login px-4 mx-auto mw-100">
					<h5 class="text-center mb-4">Login Now</h5>
					<form action="#" method="post">
						<div class="form-group">
							<label class="mb-2">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label class="mb-2">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
						</div>
						<div class="form-check mb-2">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary submit mt-2">Sign In</button>
						<p class="text-center pb-4">
							<a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
						</p>
					
				</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Ayana</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/availability-calendar.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/countdown.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
