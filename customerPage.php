<!doctype html>

	<?php 
 session_start();
include("../scripts/session.php");
include('../function.php');
include("../connection/con.php");
$id = $_SESSION['ID'];


$user=getUser($conn,$id); 
?>
<html lang="en">
  <head>
  	<title>Ekuhle eFarm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
	
	<link rel="stylesheet" href="../css/style.css">
	<style>
	.display-2
	{
		text-align:center;
		padding-bottom:100px;
		font-size:50px;
		font-family:verdana;
	}
	</style>

	</head>
	<body>
	<?php include("customerNav.php") ?>
	
	
<div class="cartBody">
	<div class="overflow-auto cartBody">
	  <div class="container">
   <div class="row">

   	<h2>Under construction</h2> <?php echo $id;
	
	?>
</hr>

    
    </div>
 </div>
</div>
</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

