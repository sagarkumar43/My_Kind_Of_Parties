
<?php
require_once('inc/config.php');
$id=$_GET["delete"];
$del_test="delete from catering_product where id='$id'";
$run_test=mysqli_query($conn,$del_test);

if($run_test==TRUE)
{
	echo"<script>alert('Catering Product Deleted Successfully')</script>";
	echo"<script>window.location.href='manage_catering_product.php'</script>";
}
    else
{
	echo"<script>alert('Catering Product Not Deleted')</script>";
	echo"<script>window.location.href='manage_catering_product.php'</script>";
}
?>