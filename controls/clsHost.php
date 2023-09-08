<?php
require_once('config.php');

class Register
{
	
	public function addRegHost($v_name,$v_email,$v_pass,$v_phone)
	{
		try {
			$sql="Insert into vendor_user (v_name, v_email, v_pass, v_phone,v_date) values ('$v_name','$v_email','$v_pass','$v_phone','".date('Y-m-d')."')";
			$result=mysqli_query($conn,$sql);	
		
			

		}
		catch (Exception $e) {
			die ('Error : ' . $e->getMessage());
		}
		return $result;
	}
	




?>



