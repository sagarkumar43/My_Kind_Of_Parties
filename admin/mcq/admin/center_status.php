<?php
include('include/configure.php');
include('login_check.php');
if(isset($_GET['c_id']))
{
	$c_id=$_GET['c_id'];
	$select=mysqli_query($con,"select * from center where c_id='$c_id'");
	while($row=mysqli_fetch_object($select))
	{
		$status_var=$row->center_status;
		if($status_var=='0')
		{
			$status_state=1;
		}
		else
		{
			$status_state=0;
		}
		$update=mysqli_query($con,"update center set center_status='$status_state' where c_id='$c_id' ");
		if($update)
		{
			header("Location:center.php");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
?>