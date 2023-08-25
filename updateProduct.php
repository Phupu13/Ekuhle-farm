<!doctype html>

<?php 
session_start();
include("../connection/con.php");
include("../scripts/session.php");
include('../function.php');
$id = $_GET['id'];


$prod = updateProduct($conn,$id);

$id = $_SESSION['ID'];
$user=getUser($conn,$id); 
$success = "";


if(isset($_POST['update']))
{
   $id = $_GET['id'];
    $pname = $_POST['pname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

   $sql = "UPDATE tbl_product SET name='$pname',quantity='$quantity',price = '$price'  WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  ?><script>window.location="addRemovePage.php"; alert("Product Successfully Updated")</script><?php
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
?>







   



<html lang="en">
  <head>
  	<title>Ekuhle eFarm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	   <!-- Custom fonts for this template -->
	   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


	
	<link rel="stylesheet" href="../css/style.css">

    <style type="text/css" xml:space="preserve">
		BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B { font-family : Arial, Helvetica, sans-serif; font-size : 12px;   font-weight : bold;}
		.error_strings{ font-family:Verdana; font-size:14px; color:red; background-color:;}
		</style><script language="JavaScript" src="gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>
		
<style>
	<style>
	.display-2
	{
		text-align:center;
		padding-bottom:100px;
		font-size:50px;
		font-family:verdana;
	}
	.move
	{
		
		padding:10px;
	
	}
	.btn
	{
		
		width:155px;
	
	}
	</style>

	</head>
	<body>
	<?php include("navFarmer.php") ?>
	
	


   





<?php include("farmheader.php")?>



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">



        
   

	<p class="divider-text">
        <span class="bg-light">Update Product <?php echo $success;?> </span>
    </p>
    <form action="" class="user" name="myform" id="myform"  method="POST">
    <div id='myform_pname_errorloc' class="error_strings"> </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="pname" class="form-control"  value = '<?php echo $prod['name'];?> 'placeholder="Product name" type="text">
		
    </div> <!-- form-group// -->
 
    <div id='myform_quantity_errorloc' class="error_strings"></div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
            
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="quantity" class="form-control" value='<?php  echo $prod['quantity'] ?>'placeholder="Package Quantity" type="text">
	
    </div> <!-- form-group// -->


       <div id='myform_price_errorloc' class="error_strings"></div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
            
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="price" class="form-control" value='<?php  echo $prod['price'] ?>'placeholder="Package Quantity" type="text">
	
    </div> <!-- form-group// -->
  




                                   
    <div class="form-group">
        <button type="submit" name="update" class="btn btn-primary btn-block" > Submit  </button>
    </div> <!-- form-group// -->      
    

    </form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("pname","req","Please enter  Product name");
  
	
	frmvalidator.addValidation("quantity","req","Please enter quantity");
    frmvalidator.addValidation("quantity","numeric",	"quantity Must contains numbers only");


	


	
  
  
//]]></script>


</article>
</div> <!-- card.// -->
                   
<?php include('../footer.php') ?>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


      <!-- Bootstrap core JavaScript-->
	  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>



	</body>
</html>

