<?php
include('include/configure.php');
if(isset($_GET['student_id']))
{
$id=$_GET['student_id'];
$query=mysqli_query($con,"delete from icai where id='$id'");
 if($query)
	{
  header("location:new_student_reg.php");
    }
	else
	{
	mysqli_error($con);
	}

}
?>