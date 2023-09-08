<?php
include('include/configure.php');
if(isset($_GET['s_id']))
{
	$id=$_GET['s_id'];
	$query=mysqli_query($con,"delete from student where student_id='$id'");
	if($query)
	{
		header("location:student.php");
    }
	else
	{
	mysql_error($con);
	}

}
?>