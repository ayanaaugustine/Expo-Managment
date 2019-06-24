
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
<script>
var message = '{{Session::get('alert')}}';
var exist = '{{Session::has('alert')}}';
if(exist)
{
	alert(message);
}
</script>
	<title>view expos</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Shopping Cart a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="viewproducts/css/style.css" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->
	<!--fonts -->
	<link href="viewproducts//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
	<link href="viewproducts
	
	-//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //fonts -->

	<!-- Font-Awesome-File-Links -->
	<!-- CSS -->
	<link rel="stylesheet" href="viewproducts/css/font-awesome.css" type="text/css" media="all">
	<!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->

<body>
	<div class="banner">
		<div class="banner-layer">
			<h1 class="title-w3layouts">
				<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>VIEW EXPOS</h1>
		</div>
		<!-- cart's-Product-Display -->
		
		<div class="wthreeproductdisplay ">
			<div class="container ">
				<div class="top-grid col-xs-12 row">
				
					@foreach ($users as $user)
					<div class="cart-grid col-xs-3" id="cart-1" style="height:450px">
						<div class="img">
							<img src="/images/{{ $user->image }}" alt="img">
						</div>
						<center><ul class="info">
							Name of Expo:&nbsp&nbsp<li>{{ $user->expotitle }}</li><br>

							Type of Expo:&nbsp&nbsp<li>{{ $user->expotype }}</li><br>

							Starting date:&nbsp&nbsp<li>{{ $user->sdate }}</li><br>

							Ending  date:&nbsp&nbsp<li>{{ $user->edate }}</li><br>
						

							Number of Booths:&nbsp<li>{{ $user->noofbooth }}</li>
							
						</ul></center>
						
						<div class="snipcart-details ">
							<form action="/fetch" method="get">
							
								<input type="hidden" name="expotitle" value="{{ $user->expotitle}}">
								
								<button type="submit" class="button w3l-cart" data-id="cart-1">VIEW TICKET DETAILS</button>
								
							</form>
						</div>
						<br>
						<!-- <div class="snipcart-details ">
							
						</div> -->
					</div>
					@endforeach
				</div>
			</div>
		</div>		
	<!-- cart's-Product-Display  -->
		<!--<div class="wthreecartaits wthreecartaits2 cart cart box_1">
			<form action="#" method="post" class="last">
				<input type="hidden" name="cmd" value="_cart" />
				<input type="hidden" name="display" value="1" />
				<button class="w3view-cart" type="submit" name="submit" value="">view cart
					<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>
				</button>
			</form>
		</div>
		<div class="copyright text-center">
			<p>© 2017 Shopping Cart. All rights reserved | Design by
				<a href="http://w3layouts.com">W3layouts</a>
			</p>
		</div>

	</div>

	<!-- Default-JavaScript -->
	<script src="viewproducts/js/jquery-2.2.3.js"></script>
	<!-- Custom-JavaScript-File-Links -->

	<!-- cart-js -->
	<script src="viewproducts/js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal1.minicart1.render({ //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal1.minicart1.reset();
		}
	</script>
	<!-- //cart-js -->

</body>
<!-- //Body -->

</html>