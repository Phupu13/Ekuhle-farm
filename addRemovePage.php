<!doctype html>

<?php 
session_start();
include("../connection/con.php");
include("../scripts/session.php");
include('../function.php');

$id = $_SESSION['ID'];


$user=getUser($conn,$id); 
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

    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">.............</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>quantity</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>quantity(All Packages)</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php $query = "SELECT * FROM tbl_product ORDER BY id ASC";
											$result = mysqli_query($conn, $query);
											if(mysqli_num_rows($result) > 0)
												{
													while($row = mysqli_fetch_array($result))
												{
												?>
                                        <tr>
                                            <td><img src="../images/<?php echo $row["image"]; ?>" class="img-responsive" style="height: 100px;Width	:70px;"/><br /></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["price"]; ?></td>
                                            <td><?php echo $row["quantity"]; ?></td>
                                            <td><?php echo $row["price"]; ?></td>
                                            <td><?php echo $row["price"]; ?></td>
                                            <td><a class="btn btn-success"  href=" updateProduct.php?id=<?=$row['id']?>">
                                               <i class="fas fa-edit fa-sm"></i></a><br><br>
                                               <a class="btn btn-danger"  href=" updateProduct.php?id=<?=$row['id']?>">
                                               <i class="fas fa-trash fa-sm"></i></a>
                                            </td>
                                        </tr>
                                        <?php }
										}?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
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

