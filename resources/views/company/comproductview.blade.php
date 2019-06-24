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
	<title>view products</title>
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
				<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>VIEW PRODUCTS</h1>
		</div>
		<!-- cart's-Product-Display -->
		
		<div class="wthreeproductdisplay">
			<div class="container">
				<div class="top-grid">
				@foreach ($users as $user)
					<div class="cart-grid" id="cart-1">
						<div class="img">
							<img src="/images/{{ $user->image }}" alt="img">
						</div>
						<ul class="info">
							<li>{{ $user->price }}</li>
							
						</ul>
						<div class="snipcart-details ">
							<form action="{{ route('destroy') }}" method="get">
							@csrf
								<input type="hidden" name="add_id" value="{{ $user->add_id}}">
								<!-- <input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #001" /> -->
								
                        <!-- @method('DELETE') -->
								<button type="submit" class="button w3l-cart" data-id="cart-1">REMOVE</button>
							</form>
						</div>
						<br>
						<br>
						<div class="snipcart-details ">
							<form action="" method="get">
							
								<button type="submit" class="button w3l-cart" data-id="cart-1">EDIT</button>
							</form>
						</div>
					</div>
					@endforeach
					<!--<div class="cart-grid" id="cart-2">
						<div class="img">
							<img src="viewproducts/images/d1.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$95.00</li>
							<li class="right-text">$195.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #002" />
								<button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-3">
						<div class="img">
							<img src="viewproducts/images/d8.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$40.00</li>
							<li class="right-text">$95.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #003" />
								<button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
							</form>
						</div>
					</div>
					<!--<div class="cart-grid" id="cart-4">
						<div class="img">
							<img src="viewproducts/images/d4.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$95.00</li>
							<li class="right-text">$195.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #004" />
								<button type="submit" class="button w3l-cart" data-id="cart-4">add to cart</button>
							</form>
						</div>
					</div>

					<div class="clear"></div>
				</div>-->
				<!--<div class="bot-grid">
					<div class="cart-grid" id="cart-5">
						<div class="img">
							<img src="viewproducts/images/d7.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$20.00</li>
							<li class="right-text">$45.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #005" />
								<button type="submit" class="button w3l-cart" data-id="cart-5">add to cart</button>
							</form>
						</div>
					</div>-->
					<!--<div class="cart-grid" id="cart-6">
						<div class="img">
							<img src="viewproducts/images/d3.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$50.00</li>
							<li class="right-text">$95.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #006" />
								<button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
							</form>
						</div>
					</div>-->
					<!--<div class="cart-grid" id="cart-7">
						<div class="img">
							<img src="viewproducts/images/d2.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$25.00</li>
							<li class="right-text">$65.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #007" />
								<button type="submit" class="button w3l-cart" data-id="cart-7">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-8">
						<div class="img">
							<img src="viewproducts/images/d6.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$36.00</li>
							<li class="right-text">$84.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #008" />
								<button type="submit" class="button w3l-cart" data-id="cart-8">add to cart</button>
							</form>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>		
	<!-- //cart's-Product-Display -->
		<!--<div class="wthreecartaits wthreecartaits2 cart cart box_1">
			<form action="#" method="post" class="last">
				<input type="hidden" name="cmd" value="_cart" />
				<input type="hidden" name="display" value="1" />
				<button class="w3view-cart" type="submit" name="submit" value="">view cart
					<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>
				</button>
			</form>
		</div>-->
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