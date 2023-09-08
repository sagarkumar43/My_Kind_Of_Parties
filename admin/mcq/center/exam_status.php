<?php 
include('include/configure.php');
include('login_check.php');
if(isset($_GET['p_e_id']))
{
	$p_e_id=$_GET['p_e_id'];
	$query=mysqli_query($con,"select * from practice_exam where p_e_id='$p_e_id'");
	while($result=mysqli_fetch_object($query))
	{
		$status=$result->exam_status;
		if($status=='0')
		{
         $exam_status=1;
        }
		else
		{
			$exam_status=0;
		}
		$update=mysqli_query($con,"update practice_exam set exam_status='$exam_status' where p_e_id='$p_e_id'");
		if($update)
		{
			header("Location:exam.php");
		}
	   else
		{
			echo mysql_error($con);
		}
   }
}
?>