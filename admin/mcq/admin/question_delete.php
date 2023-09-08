<?php
include('include/configure.php');
include('login_check.php');
if(isset($_GET['q_id']))
{
	$q_id=$_GET['q_id'];
	$update=mysqli_query($con,"DELETE FROM question where q_id='$q_id'");
	if($update)
	{
		header("Location:viewquestion.php?&s_id=".$_GET['s_id']);
	}
	else
	{
		echo mysql_error($con);
	}
}
?>