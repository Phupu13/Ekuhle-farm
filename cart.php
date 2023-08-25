<!doctype html>

	<?php 
 session_start();
 include("../scripts/session.php");
 include('../function.php');
 include("../connection/con.php");
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
				echo '<script>window.location="cart.php"</script>';
				
			}
		}
	}
}

?>

<style>

table {
  width: 10%;
}

th {
  height: 70px;
}
td {
  height: 10px;
}
</style>


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
                    <p class="mb-0 phone"><span class="fa fa-bucket"></span> <a href="Main.php">Continue Shopping</a></p>
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

<!-- END nav -->

<br>

</section>
	
	
	
	<?php 

if(empty($_SESSION["shopping_cart"])){

echo '<div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>ooOOPs!!</strong> Your shopping cart is empty.
                  </div>' ;

}
else{
	
	
?>



<div class="row carts">

<div class="container">
<table class="table" "width:50%">
Shopping cart<br/>
  <thead class="thead-primary">
    <tr>
  
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
	    <th scope="col"></th>
     
    </tr>
  </thead>


  <tbody>
    <tr>
  
    <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						$totalSelected = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
					
						<td><?php echo $values["name"]; ?></td>
						<td><?php echo $values["quantity"]; ?></td>
						<td>R <?php echo $values["price"]; ?></td>
						<td>R <?php echo number_format($values["quantity"] * $values["price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["quantity"] * $values["price"]);
							$totalSelected = $totalSelected + ($values["quantity"]);
						}
					?>
					<tr>
						<th width="40%"></th>
						<th width="10%">Quantity : <?php echo  $totalSelected  ?></th>
						<th width="20%"></th>
						<th width="15%">Total : <?php echo "R". $total ?></th>
						<th width="5%"><a href="payment.php ?id=<?=$total?>">Proceed</a></th>
					</tr>
					<?php
					}
					
					?>
    </tr>
 
  </tbody>
</table>

</div>
</div>

<?php }?>
	
<?php include('../footer.php') ?>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

