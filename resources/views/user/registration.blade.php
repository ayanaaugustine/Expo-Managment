@extends('layouts.index')


<div style="background-color: #ffcd00; padding-top:13%">
<!-- Adding oh-autoVal css style -->
<!--<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<!--<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>-->

<script>
        function user(){
          var x = document.getElementById("user");
          x.style.display = "none";
          var y = document.getElementById("Exhibitor");
          y.style.display = "none";
          var z= document.getElementById("company");
          z.style.display = "none";
          //var z= document.getElementById("shop");
	        //z.style.display = "none";
            var a=document.getElementById('type').value;
            if(a==1)
            {
              var x = document.getElementById("user");
		          x.style.display = "block";
            }
            if(a==2)
            {
              var y = document.getElementById("Exhibitor");
		          y.style.display = "block";
            }
            if(a==3)
            {
              var z = document.getElementById("company");
		          z.style.display = "block";
            }
            
        }
        </script>


<center>

<form method="post" action="/register"    >
            @csrf
               Name:<input type="text"  name="name" pattern="[a-zA-Z]+$" placeholder="name" oninput="this.reportValidity()"  title="Name should only contain letters." ><br><br>


               <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
              <br />


           
               Email Id: <input type="text" placeholder="Emailid" name="email"  pattern="[^ @]*@[^ @]*" oninput="this.reportValidity()"  title="Enter a valid email address"   ><br><br>
               mobno: <input type="text" placeholder="mobileno" name="mobno"  pattern= "[789][0-9]{9}" oninput="this.reportValidity()" required="" title="Phone number with 7-9 and remaing 9 digit with 0-9"   >
               <br><br>
                <select  name="type" id="type" onchange="user()" >
                    <option value="0">User Type</option>
                    <option value="2" >Exhibitor</option>
                    <option value="1" >user</option>
                    <option value="3" >company</option>
                    

                </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                                   <select name="country" required="" >
                                            <option disabled="disabled" selected="selected" >select country</option>
                                            <option value="india" >india</option>
                                            <option value="Africa" >Africa</option>
                                            <option value="America" >America</option>
                                        </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                
                                   <select name="state" required="" >
                                            <option disabled="disabled" selected="selected" >select state</option>
                                            <option value="kerala" >kerala</option>
                                            <option value="tamilnadu" >tamilnadu</option>
                                            <option value="washington" >washington</option>
                                             </select><br>
                                            
                                             
                                             
                                   <select name="district" required="" >
                                            <option disabled="disabled" selected="selected">select district</option>
                                            <option value="kannur" >kannur</option>
                                            <option value="losangelus" >losangelus</option>
                                            </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            <br>

                 <!--User Name<input type="text" placeholder="username" name="username">-->
                Password:<input type="password" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="" oninput="this.reportValidity()"  ><br><br>
                <!--<input type="hidden" placeholder="type" name="type" value="user"><br>-->


                <div class="input-group" id="user" name="user" style="display:none">
										
                   
                   age:<input type="number" name="age"  ><br><br>
                    
                   housename:<input type="text" name="housename"   ><br><br>
                  </div>

                  <div class="input-group" id="Exhibitor" name="Exhibitor" style="display:none">
                    experience:<input type="text" name="experience"  ><br><br>
                    upload image:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
              <input name="image" type="file"  /><br /><br>

                   address:<input type="text" name="address"  ><br><br>
                    
                  </div>


                  <div class="input-group" id="company" name="company" style="display:none">
                  comexperience:<input type="text" name="comexperience" ><br><br>
                comaddress:<input type="text" name="comaddress" ><br><br>
                landmark:<input type="text" name="landmark" ><br><br>
                   
                  </div>


                <input type="submit" value="Register"  ><br><br>
            
        </form>

</div>
      </center>
    


     <!-- <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
	

	
       +
    




		












            
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

  
  





