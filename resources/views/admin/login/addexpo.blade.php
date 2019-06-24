@extends('layouts.exhibi')
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/>
<script type="text/javascript">
$(function () {
    $("#txtFrom").datepicker({
        numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtTo").datepicker({
        numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
});
</script>
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

					<table boreder="2" colspace="2" fontsize="5">
                    <form method="post" action="/store" enctype="multipart/form-data" >
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div class="input-group"><label style="color:white">expo title     </label></td>
								
								<td>
                                  <input class="input--style-4 form-control" type="text" name="expotitle" pattern="[a-zA-Z]+$" oninput="this.reportValidity()" required="" title="Name should only contain letters.">
                                </td>
								</tr>
								</div>
                            </div>
                            
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>-->
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div class="input-group"><label style="color:white">expo type</label>
							</td>
							<td>
                                  <input class="input--style-4 form-control" type="text" name="expotype" pattern="[a-zA-Z]+$" oninput="this.reportValidity()" required="" title="Name should only contain letters.">
							</td>
							</tr>
							<tr><td><P></P></td></tr>
								</div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
                            <tr>
							<td>
                                <div class="input-group"><label style="color:white">number of booth</label>
							</td>
							<td>
                                  <input class="input--style-4 form-control" type="number" min=10 max=100 name="noofbooth">
							</td>
							</tr>	  
                            </div>
                            </div>
                        
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="input-group">
						<tr>
						<td>
           
                            <label style="color:white" class="label">catogory</label>
						</td>
						<td>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="catogoryname" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>dress</option>
                                    <option>pictures</option>
                                    <option>vehicle</option>
                                    <option>steels</option>
                                </select>
                                <div class="select-dropdown"></div>
						</td>
						</tr>
                            </div>
                        </div>
                        
                        <div class="input-group">
						<tr>
						<td>
                            <label style="color:white" class="label">Subcatogory</label>
						</td>
						<td>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subcatogoryname" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>churidhar</option>
                                    <option>saree</option>
                                    <option>car</option>
                                    <option>noric</option>
                                </select>
                                <div class="select-dropdown"></div>
						</td>
						</tr>
                            </div>
                        </div>
                        <div class="input-group">
						<tr>
						<td>
                            <label style="color:white"  class="label">state</label>
						</td>
						<td>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="state" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>kerala</option>
                                    <option>karnataka</option>
                                    <option>tamilnadu</option>
                                </select>
                                <div class="select-dropdown"></div>
						</td>
						</tr>
                            </div>
                        </div>
                        <div class="input-group">
						<tr>
						<td>
                            <label style="color:white" class="label">city</label>
						</td>
						<td>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="city" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>kannur</option>
                                    <option>trivandrum</option>
                                    <option>calicut</option>
                                </select>
                                <div class="select-dropdown"></div>
						</td>
						</tr>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div class="input-group"><label style="color:white">starting date</label>
							</td>
							<td>
                                  <div class="input-group-icon">
                                        <input  type="text" class="form-control" name="sdate" required="" id="txtFrom">
                                        <i></i>
                                    </div>
							</td>
							</tr>
							<tr><td><P></P></td></tr>
                                </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div class="input-group"><label style="color:white">ending date</label>
							</td>
							<td>
                                  <div class="input-group-icon">
                                        <input  type="text" class="form-control" name="edate" required="" id="txtTo" >
                                        <i></i>
                                    </div>
							</td>
							</tr>
							<tr><td><P></P></td></tr>
                                </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div class="input-group"><label style="color:white">plan</label>
							</td>
							<td>
                                  <input class="input--style-4 form-control" type="text" name="plan" oninput="this.reportValidity()" required="" >
                                </div>
							</td>
							</tr>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
                            <tr>
							<td>
                                <div class="input-group"><label style="color:white">choose file</label>
							</td>
							<td>
                                  <input class="input--style-4 form-control" type="file"  name="image">
							</td>
							</tr>	  
                            </div>
                            </div>
                        <div class="p-t-15">
						<tr>
						<td></td>
						<td>
						<br>
                            <center><button style="background:black;padding:3% 20%;border-radius:20px"  type="submit" ><label style="color:white">ADD</label></button></center>
                        </div>
						</td>
						</tr>
                        @if(Session::has('message'))
                    <script>
					alert("{{Session::get('message')}}");
					</script>
					@endif;
					</form>
								
					</div>

					
			
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