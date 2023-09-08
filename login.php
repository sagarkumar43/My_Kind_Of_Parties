
<?php
session_start();
require_once('config.php');


if(empty($_SESSION['email'])&& empty($_SESSION['name']))
{
	 $url = $_SERVER['REQUEST_URI'];	
	if(isset($_POST['login'])){
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
					//echo '<meta http-equiv="refresh" content="0;URL=index.php">';
				echo"<script>window.location.href='$url'</script>";
			}else {
				echo '<div class="alert info">Password Wrong! Try Again.</div>';
			}
			
		}else {
			echo '<div class="alert info" id="register_en">User Does Not Exists.</div>';
		}
	}
	

if(isset($_POST['register'])){

$name=$_POST['name'];
$emailregister=$_POST['email'];
$passwordregister=$_POST['password'];
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

 $add_user="insert into users(u_name,u_pass,u_email,u_phone,u_address,u_status) values ('$name','$passwordregister','$emailregister','$phone','$address','Active')";
$run_user=mysqli_query($conn,$add_user);
if($run_user)
{
	echo"<script>alert('Account Registered.. Login First To Continue..')</script>";
	echo"<script>window.location.href='$url'</script>";
}
else
{
	echo"<script>alert('Error')</script>";
	//echo"<script>window.location.href='index.php'</script>";

}
}
}
	
	
	
	


?>





<html>
<head>
<meta charset="UTF-8">
        <title>Welcome To My Kind Of Parties</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
body{
    background: linear-gradient(to right, #ffc800, #1b1e1d, #354078);
}
</style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->
        <!--loader-->
      <!--  <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>-->
        <!--loader end-->
        <!-- Main  -->
      
           <?php
		   require_once('header.php');
		   ?>
    <div class="container" style="margin-top: 84px;border-radius: 25px;background-image: linear-gradient(to right, #ffc800, #1b1e1d, #354078);">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                      <!--  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" method="post" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required> 
                                    </div>
                                    

                                
                           <!-- <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>-->


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a>-->
									  <button type="submit" name="login" id="btn-login" class="btn btn-success">Login</button>
                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" method="post" class="form-horizontal" role="form">
                                
                             <!--   <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                 -->   
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder=" FUll Name" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label"> Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address"  placeholder="Address" required>
                                    </div>
                                </div>
					
                                    
                               <!-- <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>-->

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info" name="register"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                       
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                   <!-- <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div> -->                                          
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>




</body>
  <?php
		require_once('footer.php');
		?>
</html>

<?php
} 
else if($_SESSION['bookingtype']=="venue")
{
    echo"<script>window.location.href='detailform.php'</script>";
}

else if($_SESSION['bookingtype']=="decoration")
{
    echo"<script>window.location.href='decoration_detail_form.php'</script>";
}
else
{
    
}
?>