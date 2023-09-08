<?php
session_start();
include('inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Vendor Panel</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form method="post">
                <img src="images/MyKOP_logo1.png" class="img-responsive" style="height: 100px;">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" name="v_name" class="validate">
                        <label for="first_name1">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" name="v_pass" class="validate">
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
						<button type="submit" class="waves-effect waves-light btn-large btn-log-in" name="login_user">Login</button>
                   
                    </div>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
<?php

	if(isset($_POST['login_user'])){
		$query=mysqli_query($conn,'SELECT * FROM vendor_user WHERE  v_email="'.$_POST['v_name'].'" ');
		if(mysqli_num_rows($query)>0){
			//login function 
			$row=mysqli_fetch_array($query);
			
			if($row['v_pass']==$_POST['v_pass'] ){
				
					$_SESSION['v_email']=$row['v_email'];
					$_SESSION['v_name']=$row['v_name'];
					$_SESSION['v_phone']=$row['v_phone'];
				$_SESSION['v_status']=$row['v_status'];
				$_SESSION['v_id']=$row['v_id'];
					echo '<div class="alert Success">Login Success, Redirecting...</div>';
					//echo '<meta http-equiv="refresh" content="0;URL=dashboard.php">';
				echo"<script>window.location.href='dashboard.php'</script>";
			}else {
				echo '<div class="alert info">Password Wrong! Try Again.</div>';
			}
			
		}else {
			echo '<div class="alert info" id="register_en">User Does Not Exists. <a href="http://mykindofparties.com/becomehost.php">Click Here To Register</a></div>';
		}
	}
	

?>
			
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>