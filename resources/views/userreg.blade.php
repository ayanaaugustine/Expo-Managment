
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    /*background-color: black;*/
	background-image: url('images/1.jpg');
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    /*background-color: deepskyblue;*/
	background-image: url('images/1.jpg');
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 150px;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: green;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: black;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>



</script>
	</head>
<div> <ul>
                               <center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a href="login.html">LOGIN</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                 <!--<a href="#">ABOUT</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								   <a href="#">CONTACT</a></center>
                               
                                
                                <li><a href="#"><i class="fas fa-search"></i></a></li>
                            </ul><!-- flex --></div>
<center><form method="post" action="useraction.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    
<label for="name"><b>Full name</b></label><br>
    <input type="text" pattern="[a-zA-Z]+$" placeholder="Enter name" name="fname" oninput="this.reportValidity()" required="" title="Name should only contain letters."><br>

    <label for="age"><b>age</b></label><br>
    <input type="number" placeholder="Enter age" name="age" size="6"  min="18" max="99" required="" oninput="this.reportValidity()" ><br>
    
      
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" checked required>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female" required></b>
     

<br><br><label for="housename"><b>housename</b></label><br>
    <input type="text" pattern="[a-zA-Z]+$" placeholder="Enter housename" name="housename" oninput="this.reportValidity()" required="" title="Name should only contain letters.">
    <br>
     <label for="name"><b>mobileno</b></label><br>
    <input type="text" pattern= "[789][0-9]{9}" placeholder="Enter number" name="mobileno" oninput="this.reportValidity()" required="" title="Phone number with 7-9 and remaing 9 digit with 0-9">
     <br>
     <select name="state" oninput="this.reportValidity()" required>
    <option value="0">Select state:</option>
    <option value="1">KERALA</option>
    <option value="2">WASHINGTON</option>
    <option value="3">AAS</option>
    <option value="4">SSG</option>
     </select>
     <br><br>
     <select name="city" oninput="this.reportValidity()" required>
    <option value="0">Select city:</option>
    <option value="1">KANNUR</option>
    <option value="2">AA</option>
    <option value="3">BB</option>
    <option value="4">CC</option>
     </select><br><br>
     <label for="username"><b>Username</b></label><br>
     <input type="text" pattern="[a-zA-Z]+$" placeholder="Username" name="username" oninput="this.reportValidity()" required="" itle="username should be a charactor."><br>
     <label for="password"><b>password</b></label><br>
  <input type="password" placeholder=" " name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="" oninput="this.reportValidity()" ><br>
     
    
    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.html">Sign in</a>.</p>
  </div>
	</form></center>

</html>