

<?php
session_start();
require_once('config.php');

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$get_email="select * from users where u_email='$emailregister'";
$run=mysqli_query($conn,$get_email);
$read_emil=mysqli_fetch_array($run);
$total=mysqli_num_rows($run);
if($total>0){
	
	echo"<script>alert('This Email ID is already Registered..Please Try Again With Another One...')</script>";
}
else{
 $add_user="insert into users(u_name,u_pass,u_email,u_phone,u_address,u_status) values ('$name','$password','$email','$phone','$address','Active')";
$run_user=mysqli_query($conn,$add_user);
if($run_user)
{
	echo"<script>alert('Account Registered.. Login First To Continue..')</script>";
	echo"<script>window.location.href='index.php'</script>";
}
else
{
	echo"<script>alert('Error')</script>";
	//echo"<script>window.location.href='index.php'</script>";
}
}
?>