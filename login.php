<!doctype html>
<?php session_start();?>
<?php 

 include("connection/con.php");
 include('function.php');
$displ='';

if(isset($_POST['login']))
{
	$email = $_POST["Email"];
	$password = $_POST['password'];
	

       $sql = "SELECT email,ID,userType FROM tblusers WHERE email = '$email' and password ='$password'";
				$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				while($rows=mysqli_fetch_array($query))
				{
					if($rows['userType']=="Customer")
					{
						$_SESSION['ID']=$rows["ID"];
						?><script>window.location="customer/Main.php";</script><?php
					}
					else if($rows['userType']=="Farmer")
					{
						 $_SESSION['ID']=$rows["ID"];
             
						?><script>window.location="farmer/farmerPage.php";</script><?php
					}
					
					

					
				}
				
				$displ='<div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Sorry!!</strong> Wrong Password or Username.
                  </div>' ;
				
				
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

	<style type="text/css" xml:space="preserve">
		BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B { font-family : Arial, Helvetica, sans-serif; font-size : 12px;   font-weight : bold;}
		.error_strings{ font-family:Verdana; font-size:14px; color:darkred; background-color:pink;}
		</style><script language="JavaScript" src="gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>

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
	}
	</style>

	</head>
	<body>



<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Ekuhle eFarm</h2>
				</div>
			</div>
		</div>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">013 256 2222</a></p>
						</div>
						<div class="col d-flex justify-content-end">
<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
  ><i class="fa fa-facebook"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
  ><i class="fa fa-twitter"></i
></a>



<!-- Linkedin -->
<a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
  ><i class="fa fa-linkedin"></i
></a>


						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php"><img src="cs/images/logo.jpeg" class="img-responsive" style="height: 50px;"/><span>Ekuhle Online Store</span></a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
         
        </form>


	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log in</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Page 1</a>
                <a class="dropdown-item" href="#">Page 2</a>
                <a class="dropdown-item" href="#">Page 3</a>
                <a class="dropdown-item" href="#">Page 4</a>
              </div>
            </li> -->
	        	<!--<li class="nav-item"><a href="#" class="nav-link">Catalog</a></li>-->
	        	<!--<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>-->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
	          <li class="nav-item"><a href="registerForm.php" class="nav-link">Sign Up</a></li>
	             <li class="nav-item"><a href="registerForm.php" class="nav-link"><span class="fa fa-shopping-cart"><i class="sr-only"></i>0 </li></a>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
	</section>


	
	
<div class="container">
<br>  <p class="text-center">Welcome to <a href="#"> Ekuhle eFarm</a></p>
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Log In</h4>
	<p class="text-center"><?php echo $displ; ?></p>
	<p>
		
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>

	<form class="user"method="POST" name="myform" id="myform" action="">
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="Email" class="form-control" placeholder="Email address" type="email">
		<div id='myform_Email_errorloc' class="error_strings"></div>
    </div> <!-- form-group// -->
	
    
    
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Password" name="password" type="password">
		<div id='myform_password_errorloc' class="error_strings"></div>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="login" class="btn btn-info btn-block " > Log In  </button>
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" name="" class="btn btn-secondary btn-block " > Cancel  </button>
    </div> <!-- form-group// -->  
    <p class="text-center">Craete  an account? <a href="registerForm.php">Sign Up</a> </p>                                                                 
    </form><script language="JavaScript" type="text/javascript"
							xml:space="preserve">//<![CDATA[
						//You should create the validator only after the definition of the HTML form
						  var frmvalidator  = new Validator("myform");
							frmvalidator.EnableOnPageErrorDisplay();
							frmvalidator.EnableMsgsTogether();
							
							frmvalidator.addValidation("Email","maxlen=50");
							frmvalidator.addValidation("Email","req");
							frmvalidator.addValidation("Email","email");
							
							 frmvalidator.addValidation("password","req","Please enter your password");
						//]]></script>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

