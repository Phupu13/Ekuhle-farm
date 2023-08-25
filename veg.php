<!doctype html>

	<?php 

include("connection/con.php");



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
	</style>
<!--
	</head>
	<body>
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
<br/>
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
	    	<a class="navbar-brand" href="index.php">Ekuhle Online <span>Store</span></a>
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


	
	
	
		<section id="services" class="services section-bg">
      <div class="container">
		
   
        <div class="row">
		<?php 
			$query = "SELECT * FROM tbl_product WHERE type ='veg' ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				while($rows = mysqli_fetch_array($result))
					{
				?>
          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box"  style = "background-color:white" >
              <img class="card-img-top" src="images/<?php echo $rows["image"]; ?>" alt="Girl in a jacket"  alt="Card image cap"style="height:150px;">
              <h4 class="title"><a href=""><?php echo $rows['name']?> </a></h4>
              <p class="description"><span class="badge badge-warning"></span></a></p>
              
            </div>
          </div>
		  <?php }?>

    

          

        </div>

      </div>
    </section>
		
		<br/>
		<br/>
		<br/>
		<br/>

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

