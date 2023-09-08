<?php
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

$id=$_SESSION['v_id'];

$post_id=$_GET['post_id'];
$del_listing="delete from vendor_listing where list_id='$post_id'";
$run_del=mysqli_query($conn,$del_listing);
if($run_del===true)
{
echo "<script>alert('Listing Delete Successfully')</script>";
			echo '<meta http-equiv="refresh" content="1;URL=listing.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=listing.php">';
		}		


?>