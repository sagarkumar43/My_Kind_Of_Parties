<?php
require_once('inc/config.php');
$id=$_GET['id'];
$del_test="delete from testimonial where id='$id'";
$run_test=mysqli_query($conn,$del_test);

if($run_test==TRUE)
{
	echo"<script>alert('Testimonial Data Deleted Successfully')</script>";
	echo"<script>window.location.href='testimonialdetails.php'</script>";
}
    else
{
	echo"<script>alert('Testimonial Data Not Deleted')</script>";
	//	echo"<script>window.location.href='testimonialdetails.php'</script>";
}
?>