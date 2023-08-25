<style>
.pull-right
{
	float:right;
}

</style>

<section class="ftco-section">
<div class="container">
   <!--<div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Ekuhle eFarm</h2>
        </div>
    </div>-->

</div>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
                <div class="col">
                    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">000 000 0000</a></p>
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

    <a href="#" class="d-flex align-items-center justify-content-right"><span class="fa fa-user"><?php echo $user['fname']." ".$user['lname'];?></i></span></a>

            </div>
         
                </div>
         
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
    <a class="navbar-brand" href="index.php"><img src="../cs/images/logo.jpeg" class="img-responsive" style="height: 50px;"/><span>Ekuhle Online Store</span></a>
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
        <li class="nav-item active"><a href="Main.php" class="nav-link">Home</a></li>
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
	  
  
      <li class="nav-item"><a href="../scripts/logout.php" class="nav-link">Log Out</a></li>
	   <li class="nav-item"><a href="cart.php" class="nav-link"><span class="fa fa-shopping-cart"><i class="sr-only"></i><?php
	   if(empty($_SESSION["shopping_cart"]))
	   {
		   
	   }else
	   {
		   echo count($_SESSION["shopping_cart"]);
		   
	   }

		   ?> </li></a>
    </ul>
  </div>
</div>
</nav>
<!-- END nav -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="Main.php">All Poducts</a></li>
    <li class="breadcrumb-item"><a href="cfruits.php">Fruits</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="cveg.php">Vegetables</li></a>
	
	
  </ol>
  
  
</nav>

<br>

</section>