
<?php
session_start();
require_once('config.php');
require_once('controls/clsAlert.php');
$email=$_POST['email'];
$pass=$_POST['password'];

$login='SELECT * FROM users WHERE  u_email="'.$email.'" ';
		$query=mysqli_query($conn,$login);
		if(mysqli_num_rows($query)>0){
			//login function 
			$row=mysqli_fetch_array($query);
			
			if($row['u_pass']==$_POST['password'] ){
				
					$_SESSION['email']=$row['u_email'];
					$_SESSION['name']=$row['u_name'];
					$_SESSION['phone']=$row['u_phone'];
					$_SESSION['address']=$row['u_address'];
					$_SESSION['u_id']=$row['u_id'];
				
					echo '<div class="alert Success">Login Success, Redirecting...</div>';
					echo '<meta http-equiv="refresh" content="0;URL=index.php">';
				//echo"<script>window.location.href='dashboard.php'</script>";
			}else {
				echo '<div class="alert info">Password Wrong! Try Again.</div>';
			}
			
		}else {
			echo '<div class="alert info" id="register_en">User Does Not Exists.</div>';
		}
	

?>