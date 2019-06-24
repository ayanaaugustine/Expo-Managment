@extends('layouts.indexx')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>add expo </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="admin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin/css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100" style="background-image: url('admin/images/bg-01.jpg');">
			<div class="wrap-login100" style="margin-top:20px;">
            
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						add expo
						
					</span>

					
                    <html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
	<div class="wthreeproductdisplay">
			<div class="container">
				<div class="top-grid">
				@foreach ($users as $user)
					<div class="cart-grid" id="cart-1">
						<div class="img">
							<img src="/images/{{ $user->image }}" alt="img">
						</div>
						<ul class="info">
							<li>{{ $user->expotitle}}</li>
							
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #001" />
								<button type="submit" class="button w3l-cart" data-id="cart-1">add to cart</button>
							</form>
						</div>
					</div>
					@endforeach
      <!--<table border = 2>
         <tr>
            <td><label style="color:white">expotitle</label></td>
            <td><label style="color:white">expotype</label></td>
            <td><label style="color:white">catogory</label></td>
            <td><label style="color:white">subcatogory</label></td>
            <td><label style="color:white">send Request</label></td>
            
         </tr>
         @isset($users)
         @foreach ($users as $user)
         <tr>
            <td><label style="color:white">{{ $user->expotitle }}</label></td>
            <td><label style="color:white">{{ $user->expotype }}</label></td>
            <td><label style="color:white">{{ $user->catogoryname }}</label></td>
            <td><label style="color:white">{{ $user->subcatogoryname }}</label></td>
            <td><label style="color:white"><a href="viewnoti">Request</a></label></td>
         </tr>
         
         @endforeach
         @endisset
      </table>
   </body>
</html>
					
			
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/bootstrap/js/popper.js"></script>
	<script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="admin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="admin/js/main.js"></script>

</body>
</html>