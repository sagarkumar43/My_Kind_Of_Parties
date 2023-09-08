
<?php
require_once('inc/config.php');
$id=$_GET["delete"];
$del_test="delete from product_mgmt where id='$id'";
$run_test=mysqli_query($conn,$del_test);

if($run_test==TRUE)
{
	echo"<script>alert('Product Deleted Successfully')</script>";
	echo"<script>window.location.href='manageproduct.php'</script>";
}
    else
{
	echo"<script>alert('Product Not Deleted')</script>";
	echo"<script>window.location.href='manageproduct.php'</script>";
}
?>