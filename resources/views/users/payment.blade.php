@extends('layouts.user')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="book/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="book/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Expo Management is totally built at administrative end and thus only the administrator is guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Tickets, Company, Customers, Bookings. 
With the increasing growth in the number of industries and the competitive run. </p>
							</div>
						</div>
						<form action="/payy" method="get">
						@foreach ($users as $user)
					<div class="row">
					<div class="form-group col-md-12">
										<span class="form-label">expo title</span>
										<input class="form-control" type="text" value="{{ $user->expotitle }}" required name="expotitle">
									</div>
								<div class="">
									<div class="form-group">
										<span class="form-label">starting date</span>
										<input class="form-control" type="integer" value="{{ $user->sdate }}"required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">ending date
										</span>
										<input class="form-control" type="integer" value="{{ $user->edate }}"required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<input class="form-control" type="integer" required name="count">
									</div>
								</div>
								
							<div class="form-btn">
								<button class="submit-btn">BOOK</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>