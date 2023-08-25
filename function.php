<?php 
    //Select a user
		function getUser($conn,$ID)
        {
            $sql ="SELECT * FROM tblusers WHERE ID= '$ID'";
            $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            while($rows=mysqli_fetch_array($query))
            {
                return $rows;
            }
            
        }

        function updateProduct($conn,$id)
        {
         if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						$sql = "SELECT * FROM tbl_product WHERE id = ".$id;
						$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
						
						
						while($prodList=mysqli_fetch_array($query))
						{
							return $prodList;
                        }
                    }



        }
        function total($total)
        {
            $total = number_format($total, 2);
        }



?>