	<?php 
 session_start();
 include("../scripts/session.php");
 include('../function.php');
 include("../connection/con.php");
 $id = $_SESSION['ID'];
 
 
 $user=getUser($conn,$id); 
 
 
 $total = $_GET['id'];
?>
	
	
	<link rel="stylesheet" href="pay.css">
   

    <link href=' https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
   

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel='stylesheet' type='text/css'>

<div class="container p-0">
	<a href="cart.php">Back</a>
	<form action = "" Method="Post">
    <div class="card px-4">
        <p class="h8 py-3">Payment Details</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Person Name</p>
                    <input class="form-control mb-3" type="text" placeholder="Name" value='<?php echo $user['fname']." ".$user['lname'];?>'>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Card Number</p>
                    <input class="form-control mb-3" type="text" required placeholder="1234 5678 435678">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Expiry</p>
                    <input class="form-control mb-3" type="text" required placeholder="MM/YYYY">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">CVV/CVC</p>
                    <input class="form-control mb-3 pt-2 " type="password" required  placeholder="***">
                </div>
            </div>
            <div class="col-12">
              <a href="slip.php"  <div class="btn btn-primary mb-3" type="submit" >
                    <span class="ps-3"><?php echo "R"." ". $total ?></span>
                    <span class="fas fa-arrow-right"></span>
                </div></a>
            </div>
        </div>
    </div>
	</form>
</div>