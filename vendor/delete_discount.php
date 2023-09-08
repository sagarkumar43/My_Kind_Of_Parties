<?php
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

$id=$_SESSION['v_id'];

$post_id=$_GET['post_id'];
$del_discount="delete from discount where id='$post_id'";
$run_del=mysqli_query($conn,$del_discount);
if($run_del===true)
{
echo "<script>alert('Discount Delete Successfully')</script>";
			echo '<meta http-equiv="refresh" content="1;URL=discounts.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=listing.php">';
		}		


?>