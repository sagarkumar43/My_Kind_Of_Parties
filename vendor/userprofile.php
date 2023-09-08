<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

$id=$_SESSION['v_id'];

 $get_user="select * from vendor_user where v_email='".$_SESSION['v_email']."'";
$run_user=mysqli_query($conn,$get_user);
$read_user=mysqli_fetch_array($run_user);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyKOP Admin Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />
	<style>
		.Active
		{
		background:white;
		}
	</style>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
   <?php
   include('inc/header.php');
   ?>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
          
 <?php
 include('inc/left_side.php');
 ?>       
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Setting</h4>
                                 
                                </div>
                                <div class="tab-inn">
                                    <form method="post">
										
										 <div class="row">
                                            <div class="input-field col s6">
       <input id="website" type="text" value="<?php echo $read_user['v_name'];?>" name="v_name" class="validate">
                                                <label for="website">Name</label>
                                            </div>
                                        <div class="input-field col s6">
      <input id="phone" type="email" value="<?php echo $read_user['v_email'];?>" name="v_email" class="validate">
                                                <label for="phone">Email</label>
                                            </div>
                                        </div>
										
                                        <div class="row">
                                            <div class="input-field col s6">
      <input id="website" type="text" value="<?php echo $read_user['v_website'];?>" name="v_website" class="validate">
                                                <label for="website">Website</label>
                                            </div>
                                        <div class="input-field col s6">
           <input id="phone" type="text" value="<?php echo $read_user['v_phone'];?>" name="v_phone" class="validate">
                                                <label for="phone">Mobile</label>
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="input-field col s6">
            <input id="password" type="password" value="<?php echo $read_user['v_pass'];?>" name="v_pass" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
											 <div class="input-field col s12">
            <input id="password" type="text" value="<?php echo $read_user['v_address'];?>" name="v_address" class="validate">
                                                <label for="password">Address</label>
                                            </div>
										</div>
                                        <div class="row">
                                            <div class="input-field col s12">
                     <input type="submit" name="submit_details" class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
	<!--update start-->
	<?php
	if(isset($_POST['submit_details']))
	{
		$name=$_POST['v_name'];
		$email=$_POST['v_email'];
			$pass=$_POST['v_pass'];
			$address=$_POST['v_address'];
			$website=$_POST['v_website'];
			$phone=$_POST['v_phone'];
		
		
		$sql="update vendor_user set v_name='$name',v_pass='$pass',v_email='$email',
	v_phone='$phone',v_address='$address',v_website='$website' where v_id='$id'" ;
	 $run=mysqli_query($conn,$sql);
		if($run==TRUE)
		{
		
				echo "<script>alert('Profile Updated')</script>";
			echo '<meta http-equiv="refresh" content="1;URL=userprofile.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=userprofile.php">';
		}
		
		
	}
	
	?>
	
	
	<!--update end-->
	
	
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:15:58 GMT -->
</html>