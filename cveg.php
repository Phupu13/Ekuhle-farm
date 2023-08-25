<!doctype html>

	<?php 

include("../connection/con.php");


 session_start();
 include("../scripts/session.php");
 include('../function.php');

 $id = $_SESSION['ID'];

 
 $user=getUser($conn,$id); 
?>

<?php
$countArr = 0;
if(isset($_POST["add_to_cart"]))
{
	$countArr++;
	if(isset($_SESSION["shopping_cart"]))
	{
		
		
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'id'			=>	$_GET["id"],
				'name'			=>	$_POST["hidden_name"],
				'price'		=>	$_POST["hidden_price"],
				'quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'id'			=>	$_GET["id"],
			'name'			=>	$_POST["hidden_name"],
			'price'		=>	$_POST["hidden_price"],
			'quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$countArr--;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				//echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="main.php"</script>';
				
			}
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
	
	<link rel="stylesheet" href="../css/style.css">
	  <link href="../boxicons/css/boxicons.min.css" rel="stylesheet">
	  
	      <!-- Bootstrap Courosel -->
	
	
	 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../cs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../cs/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../cs/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../cs/css/style.css">
	
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

	</head>
	<body>
<?php include("customerNav.php") ?>

    

    
   
 


	
	
		
		
<div class="cartBody">

	<div class="overflow-auto cartBody">
	
	  <div class="container">
	  
	   <center><h3>Vegetables</h3></center>
	 <hr>
	 <br/>
	  
   <div class="row">

   	<?php $query = "SELECT * FROM tbl_product WHERE type = 'veg' ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
  
  		<div class="col-md-4">
				<form method="post" action="cveg.php?action=add&id=<?php echo $row["id"]; ?>">
					 <div class="thumbnail">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:26px;" align="center">
						<img src="../images/<?php echo $row["image"]; ?>" class="img-responsive" style="height: 100px;"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">R <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit"  name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</div>
				</form>
				<br>
			</div>

			<?php
					}
				}
			?>

    
</div>
</div>
</div>
</div>

		
		
		
		
		
		

<!-- Footer -->

<?php include('../footer.php') ?>

	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  
  
  
    <script src="../cs/js/jquery-3.3.1.min.js"></script>
    <script src="../cs/js/popper.min.js"></script>
    <script src="../cs/js/bootstrap.min.js"></script>
    <script src="../cs/js/owl.carousel.min.js"></script>
    <script src="../cs/js/main.js"></script>

	</body>
</html>

