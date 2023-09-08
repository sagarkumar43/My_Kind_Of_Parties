<?php
require_once('inc/config.php');
$id=$_GET['id'];
$del_cmanagment="delete from city_managment where id='$id'";
$run_cmanagment=mysqli_query($conn,$del_cmanagment);

if($run_cmanagment==TRUE)
{
	echo"<script>alert('City managment data deleted')</script>";
	echo"<script>window.location.href='citymanagmendetailst.php'</script>";
}
    else
{
	echo"<script>alert('City managment data not deleted')</script>";
	//	echo"<script>window.location.href='citymanagmendetailst.php'</script>";
}
?>