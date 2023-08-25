<!doctype html>

	<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "efarmdb");



if(isset($_POST['add_to_cart']))
{
	?>
	<script>
	alert("Please Log in first");
	
	</script>
   
   <?php


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
	  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
	  
	      <!-- Bootstrap Courosel -->
	
	
	 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="cs/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cs/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="cs/css/style.css">
	
	<style>
	.display-2
	{
		text-align:center;
		padding-bottom:100px;
		font-size:50px;
		font-family:verdana;
	}
	
	img {
  border-radius:%;
}
.conts
{
	padding-left:250px;
	padding:20 20 px;
}


.img-fluid {
    max-width: 100%;
    height: 500px;
}

.owl-carousel
{
	padding-bottom:100px;
}
body{background-color:;}

.bg-dark{
		background-color:white!Important;
	}
	.fas
	{
		color:blue;
	}
	
	
    .social-media p twitter {
      width: 34px;
      height: 34px;
      background: red;
      margin-right: 1px; }

      .social-media p ig {
        width: 34px;
        height: 34px;
        background: red;
        margin-right: 1px; }
	</style>

	</head>
	<body>
	<!--
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Ekuhle eFarm</h2>
					-->
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
	
	      <div class="owl-carousel owl-1">

        <div class="media-29121 overlay" style="background-image: url('cs/images/im.jpg'); height:500px">
          <div class="container">
            <div class="row justify-content-center align-items-center text-center">
              <div class="col-md-7">
                <h2>Ekuhle eFarm</h2>
				<p>Welcome to our Online Store</p>
              </div>
            </div>
          </div>
        </div> <!-- .item -->
        <div class="media-29121 overlay" style="background-image: url('cs/images/i2.jpg');height:500px">
          <div class="container">
            <div class="row justify-content-center align-items-center text-center">
              <div class="col-md-7">
                <h2>Fruits and vegetables for a better life</h2>
              </div>
            </div>
          </div>
        </div> <!-- .item -->
        <div class="media-29121 overlay" style="background-image: url('cs/images/work-1.jfif');height:500px">
          <div class="container">
            <div class="row justify-content-center align-items-center text-center">
              <div class="col-md-7">
                <h2>Fruits and vegetables for a better life</h2>
              </div>
            </div>
          </div>
        </div> <!-- .item -->

      </div>
			<center>
			<h3>Ekuhle eFarm Market - Your everyday fresh shopping destination</h3>	
			<h2>Best in fresh fruit and vegetables for the best value - all under one roof</h2>	
			<p>We’re more than a Farm. We’re a market for healthy lovers</p>
			
			</center>		
	</section>

    

    
   
 



		
	<section id="services" class="services section-bg">
	
      <div class="container">
		
   
        			<center><div class="row justify-content-center">
          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
              
					  
		<div class="card" style="width;">
		  <img class="card-img-top" src="images/carrots.jpg" alt="Girl in a jacket"  alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Vegetables</h5>
			<p class="card-text">Vegetables are good sources of minerals, especially calcium and iron, and vitamins, principally A and C.</p>
			<a href="veg.php" class="btn btn-warning">Click Here</a>
		  </div>
		</div>
			  
			  
          </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
              
					  
		<div class="card" style="Height:390px;">
		  <img class="card-img-top" src="images/stru.jpg" style="height:180px;" alt="Girl in a jacket"  alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Fruits</h5>
			<p class="card-text"> Fruits are important sources of vitamins and carbohydrates like fiber and sugar</p>
			<a href="fruits.php" class="btn btn-warning">Click Here</a>
		  </div>
		</div>
			  
			  
          </div>

         <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
              
					  
		<div class="card" style="height:390px; background-color:whitesmoke">
		  <img class="card-img-top" src="images/sales.png" alt="Girl in a jacket"  alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Weekly Sales</h5>
			<p class="card-text">Please check what we have in store for you this week.Food that will make you live longer.</p>
			<a href="#" class="btn btn-warning">Click Here</a>
		  </div>
		</div>
			  
			  
          </div>
	
          </div>
		  
		    
	

       

          

        </div>	</center>

      </div>
    </section>
		
		
		
	
		
		
		
		<br/>
		<br/>
		<br/>
		<br/>
		
		
		
		
		<section id="services" class="services section-bg">
      <div class="container">
		
   
        <div class="row">
          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-car"></i></div>
              <h4 class="title"><a href="parcel_received.php">Free Delivery if you spend more than R500 </a></h4>
              <p class="description"><span class="badge badge-warning"></span></a></p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-3 " data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-store"></i></div>
              <h4 class="title"><a href="allreceivedparcels.php">You can Pick up from our stores, We have store nation wide</a></h4>
              <p class="description"><span class="badge badge-warning"></span></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-add-to-queue"></i></div>
              <h5 class="title"><a href="checkparcel.php">We only Provide fresh groceries</a></h5>
              <p class="description"><span class="badge badge-warning"><i class="bx bx-"></i></span></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 " data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">We have a 24hrs Service line</a></h4>
             
              <p class="description"><span class="badge badge-light">013 256 2222</span></p>
            </div>
          </div>

          

        </div>

      </div>
    </section>
		
		

<!-- Footer -->

<?php include('footer.php') ?>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  
  
  
    <script src="cs/js/jquery-3.3.1.min.js"></script>
    <script src="cs/js/popper.min.js"></script>
    <script src="cs/js/bootstrap.min.js"></script>
    <script src="cs/js/owl.carousel.min.js"></script>
    <script src="cs/js/main.js"></script>

	</body>
</html>

