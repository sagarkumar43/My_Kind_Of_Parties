<?php
ini_set ( 'memory_limit', '64M' );
include('include/configure.php');
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel_reader2.php';

$filename=$_GET['import'];
$directory="import/".$filename;
$data = new Spreadsheet_Excel_Reader($directory);

 $category = $data->rowcount(0);

for ($i=2; $i<=$category; $i++)
{	
	$c_id = $data->val($i, 1, 0);	
	$category_name = $data->val($i, 2, 0);
	$category_status = $data->val($i, 3, 0);

	if($c_id=="")
	{
	   
	$query = "INSERT INTO category (category_name,category_status) VALUES ('$category_name', '$category_status')";
		mysqli_query($con,$query);
	}
	else
	{
	      
			$query = "update category set category_name='$category_name',category_status='$category_status' where c_id='$c_id'";
		mysqli_query($con,$query);
	}
}



$subcategory = $data->rowcount(1);

for ($i=2; $i<=$subcategory; $i++)
{
	
	$s_c_id = $data->val($i, 1, 1);	
	$category_id = $data->val($i, 2, 1);
	$subcategory_name = $data->val($i, 3, 1);	
	$subcategory_status = $data->val($i, 4, 1);


	if($s_c_id=="")
	{
		$query = "INSERT INTO subcategory (category_id,subcategory_name,subcategory_status) VALUES ('$category_id', '$subcategory_name', '$subcategory_status')";
		mysqli_query($con,$query);
	}
	else
	{
		$query = "update subcategory set category_id='$category_id',subcategory_name='$subcategory_name',subcategory_status='$subcategory_status' where s_c_id='$s_c_id'";
		mysqli_query($con,$query);
	}
}


$subject = $data->rowcount(2);
for ($i=2; $i<=$subject; $i++)
{
	
	$s_id = $data->val($i, 1, 2);
	$category_id = $data->val($i, 2, 2);
	$subcategory_id = $data->val($i, 3, 2);
	$subject_name = $data->val($i, 4, 2);
	$subject_status = $data->val($i, 5, 2);

	if($s_id=="")
	{
		$query = "INSERT INTO subject (category_id,subcategory_id,subject_name,subject_status) VALUES ('$category_id', '$subcategory_id', '$subject_name','$subject_status')";
		mysqli_query($con,$query);
	}
	else
	{
		$query = "update subject set category_id='$category_id',subcategory_id='$subcategory_id',subject_name='$subject_name',subject_status='$subject_status' where s_id='$s_id'";
		mysqli_query($con,$query);
	}
}


############ QUESTION ############
  (int)$question = $data->rowcount(3);

for ($i=2; $i<=2000; $i++)
{
	
	$q_id = $data->val($i, 1, 3);
	$s_id = $data->val($i, 2, 3);
	$c_id = $data->val($i, 3, 3);
	$s_c_id = $data->val($i, 4, 3);
	$question = $data->val($i, 5, 3);
	$typeofquestion = $data->val($i, 6, 3);
	$option_a = $data->val($i, 7, 3);
	$option_b = $data->val($i, 8, 3);
	$option_c = $data->val($i, 9, 3);
	$option_d = $data->val($i, 10, 3);
	$correct_ans = $data->val($i, 11, 3);
	$question_status = $data->val($i, 12, 3);
	$marks = $data->val($i, 13, 3);

	if($q_id=="")
	{
	    
		$query = "INSERT INTO question (s_id,c_id,s_c_id,question,typeofquestion,option_a,option_b,option_c,option_d,correct_ans,question_status,marks) 
		
		VALUES ('$s_id', '$c_id', '$s_c_id','$question','$typeofquestion', '$option_a', '$option_b','$option_c','$option_d', '$correct_ans', '$question_status','$marks')";
		mysqli_query($con,$query);
	}
	else
	{
	   
		$query = "update question set s_id='$s_id',c_id='$c_id',s_c_id='$s_c_id',question='$question',typeofquestion='$typeofquestion',option_a='$option_a',option_b='$option_b',option_c='$option_c',option_d='$option_d',correct_ans='$correct_ans',question_status='$question_status',marks='$marks' where q_id='$q_id'";
		mysqli_query($con,$query);
	}
}

header("Location:import_table.php");

?>