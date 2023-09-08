<?php
include('include/configure.php');
include('login_check.php');
if(isset($_GET['p_e_id']))
{
	$p_e_id=$_GET['p_e_id'];
	$query=mysqli_query($con,"delete from practice_exam where p_e_id='$p_e_id'");
	if($query)
	{
		header("location:exam.php");
    }
	else
	{
		mysql_error($con);
	}
}
?>