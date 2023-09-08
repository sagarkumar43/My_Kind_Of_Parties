<?php

include('inc/config.php');

$id=$_GET['id'];
$del_my_latest_enquery="delete from vendor_user where v_id='$id'";
$run_my_latest_enquery=mysqli_query($conn,$del_my_latest_enquery);

if($run_my_latest_enquery==TRUE)
{
	echo"<script>alert('Delete Successfully')</script>";
	echo"<script>window.location.href='managevendor.php'</script>";
}
else
{
	echo"<script>alert('Error')</script>";
	//	echo"<script>window.location.href='latestenquery.php'</script>";

}
?>