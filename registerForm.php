<!doctype html>

<?php
//connnection
 include("connection/con.php");
?>
<?php
//Register script
$found ="";
$founfarmer ="";
if(isset($_POST['register']))
				{
					$fnamec = $_POST['firstname'];
					$lnamec = $_POST['surname'];
					$typec = $_POST['utype'];
					$phonec = $_POST['cellphone'];
					$addressc=$_POST['useraddress'];
					$passwordc = $_POST['userpassword'];
					$emailc = $_POST['userEmail'];


					$sqlc = "SELECT * FROM tblusers WHERE email='$emailc'";
					$queryc = mysqli_query($conn,$sqlc) or die(mysql_error($conn));
					if (mysqli_num_rows($queryc) > 0) {
						
						?>
							 <script>
							 alert("User exist, Please check your email address");
							 //window.location="checkparcel.php";
							 </script>
							
							<?php

					}
					else
					 {
					
						
						$sqlQueryc = "INSERT INTO tblusers(fname,lname,userType,phone,address,password,email)
												Values('$fnamec','$lnamec','$typec','$phonec','$addressc'
												,'$passwordc','$emailc')";

                        if($queryc = mysqli_query($conn,$sqlQueryc) or die(mysqli_error($conn)))
						
						{
							?>
							<script>
							alert("Successfully registered");
							window.location="login.php";
							</script>
							
							<?php
						
						}


				
			        }


		}





		//Register as a farmer


		if(isset($_POST['register_farmer']))
				{
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$type = $_POST['userType'];
					$phone = $_POST['phone'];
					$address=$_POST['address'];
					$password = $_POST['password'];
					$email = $_POST['Email'];


					$sqlSelect = "SELECT * FROM tblusers WHERE email='$email'";
					$query = mysqli_query($conn,$sqlSelect) or die(mysql_error($conn));
					if (mysqli_num_rows($query) > 0) {
						?>
							 <script>
							 alert("Email found");
							 //window.location="checkparcel.php";
							 </script>
							
							<?php

					}
					else
					 {
					
						
						$sqlQuery = "INSERT INTO tblusers(fname,lname,userType,phone,address,password,email)
												Values('$fname','$lname','$type','$phone','$address'
												,'$password','$email')";

                        if($query = mysqli_query($conn,$sqlQuery) or die(mysqli_error($conn)))
						
						{
							?>
							<script>
							alert("Successfully registered");
							window.location="login.php";
							</script>
							
							<?php
						
						}


				
			        }


		}
	


			
?>


<html lang="en">
  <head>
  	<title>Ekuhle eFarm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">



	<style>
	.display-2
	{
		text-align:center;
		padding-bottom:100px;
		font-size:50px;
		font-family:verdana;
	}

	.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

.myDiv{
	display:none;
    padding:10px;
    margin-top:20px;
}  
#showOne{
    border:1px solid red;
}
#showTwo{
    border:1px solid green;
}
#showThree{
    border:1px solid blue;
}
</style> 


<style type="text/css" xml:space="preserve">
		BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B { font-family : Arial, Helvetica, sans-serif; font-size : 12px;   font-weight : bold;}
		.error_strings{ font-family:Verdana; font-size:14px; color:darkred; background-color:pink;}
		</style><script language="JavaScript" src="gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>
	



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      

<script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script> 

	</head>
	<body>
	<?php include("nav.php") ?>
	




<div class="container">
<br>  <p class="text-center">Welcome to <a href="#"> Ekuhle eFarm</a></p>
<hr>

<select id="myselection">
	<option>Register as </option>
	
	
	<option value="Three">Customer</option>
</select>
<div id="showOne" class="myDiv">
	Register as  <strong>"Farmer"</strong>.

	
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>

	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>

	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form class="user"method="POST" name="myform" id="myform" action="">
	<div id='myform_fname_errorloc' class="error_strings"> </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fname" class="form-control" placeholder="Full name" type="text">
		
    </div> <!-- form-group// -->
	
	<div id='myform_lname_errorloc' class="error_strings"></div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="lname" class="form-control" placeholder="Last name" type="text">
		
    </div> <!-- form-group// -->
	


    	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-info-circle"></i> </span>
		 </div>
        <input name="userType" class="form-control" value="Farmer" placeholder="" type="text">

    </div> <!-- form-group// -->

	<div id='myform_Email_errorloc' class="error_strings"></div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="Email" class="form-control" placeholder="Email address" type="email">
		
    </div> <!-- form-group// -->

	<div id='myform_address_errorloc' class="error_strings"> </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i>  Address </span>
	 </div>
        <textarea id="address" name="address" rows="4" cols="50"></textarea>
		
    </div> <!-- form-group// -->
	

	<div id='myform_phone_errorloc' class="error_strings"> </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px; height: 46px;">
		    <option selected="">+27</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->





	<div id='myform_password_errorloc' class="error_strings"> </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" name = "password" type="password">
    </div> <!-- form-group// -->
	
                                     
    <div class="form-group">
        <button type="submit" name="register_farmer" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>

	</form><script language="JavaScript" type="text/javascript"
              xml:space="preserve">//<![CDATA[
            //You should create the validator only after the definition of the HTML form
              var frmvalidator  = new Validator("myform");
              frmvalidator.EnableOnPageErrorDisplay();
              frmvalidator.EnableMsgsTogether();

              frmvalidator.addValidation("fname","req","Please enter your first name");

              frmvalidator.addValidation("lname","req","Please enter your last name");

			  frmvalidator.addValidation("Email","req","Please enter your email address");

			  frmvalidator.addValidation("address","req","Please enter your address");

			  frmvalidator.addValidation("phone","req","Please enter cellphone number");
			  frmvalidator.addValidation("phone","numeric","Cellphone must contains numbers only");
			  frmvalidator.addValidation("phone","maxlen=10",	"Max length for Cellphone is 10");
              frmvalidator.addValidation("phone","minlen=10",	"Min length for Cellphone is 10");

			  frmvalidator.addValidation("password","req","Please enter your password");
            //]]></script>
</article>
</div> <!-- card.// -->
</div>
<div id="showTwo" class="myDiv">
	You have selected option <strong>"Two"</strong>.
</div>





<!---Customer-->

<div id="showThree" class="myDiv">
	Register as <strong>"Customer"</strong>.



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>

	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>

	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form class="user"method="POST" name="myform" id="myform" action="">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
			
		 </div>
		 
        <input name="firstname" class="form-control" placeholder="Full name" type="text"><br>	
		
    </div> <!-- form-group// -->
	<div id='myform_firstname_errorloc' class="error_strings"></div>
	

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="surname" class="form-control" placeholder="Last name" type="text">
		
    </div> <!-- form-group// -->
	<div id='myform_surname_errorloc' class="error_strings"></div>


    	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-info-circle"></i> </span>
		 </div>
        <input name="utype" class="form-control" value="Customer" placeholder="" type="text">
		

    </div> <!-- form-group// -->
	<div id='myform_utype_errorloc' class="error_strings"></div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="userEmail" class="form-control" placeholder="Email address" type="Email">
	
    </div> <!-- form-group// -->
	<div id='myform_userEmail_errorloc' class="error_strings"></div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i>  Address </span>
	 </div>
        <textarea id="address" name="useraddress" rows="4" cols="50"></textarea>
		<div id='myform_useraddress_errorloc' class="error_strings"></div>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px; height: 46px;">
		    <option selected="">+27</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="cellphone" class="form-control" placeholder="Phone number" type="text">
		
    </div> <!-- form-group// -->
	<div id='myform_cellphone_errorloc' class="error_strings"></div>





    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" name = "userpassword" type="password">
    </div> <!-- form-group// -->
	<div id='myform_userpassword_errorloc' class="error_strings"></div>
                                      
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-block "> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>

	</form><script language="JavaScript" type="text/javascript"
              xml:space="preserve">//<![CDATA[
            //You should create the validator only after the definition of the HTML form
              var frmvalidator  = new Validator("myform");
              frmvalidator.EnableOnPageErrorDisplay();
              frmvalidator.EnableMsgsTogether();

              frmvalidator.addValidation("firstname","req","Please enter your first name");

              frmvalidator.addValidation("surname","req","Please enter your last name");

			  frmvalidator.addValidation("userEmail","req","Please enter your email address");

			  frmvalidator.addValidation("useraddress","req","Please enter your address");

			  frmvalidator.addValidation("cellphone","req","Please enter your cellphone number ");
			  frmvalidator.addValidation("cellphone","numeric","Cellphone must contains numbers only");
			  frmvalidator.addValidation("cellphone","maxlen=10",	"Max length for Cellphone is 10");
              frmvalidator.addValidation("cellphone","minlen=10",	"Min length for Cellphone is 10");

			  frmvalidator.addValidation("userpassword","req","Please enter your password");
            //]]></script>
</article>
</div> <!-- card.// -->

</div> 
</div> 
<!--container end.//-->


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

