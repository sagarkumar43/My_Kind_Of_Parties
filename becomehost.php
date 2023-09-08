<?php 
require_once("config.php");
require_once("controls/clsAlert.php");

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Welcome To MyKOP</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--<script type="text/javascript" src="ajax/ajax_host.js"></script>-->
</head>
<style>
    .dasboard-wrap {
        padding-left: 290px !important;
    }

    .blog-login-in button {
        color: #fff;
        background-color: #fff;
        border-color: #428433;
        background: #4e923f;
        font-weight: 700;
    }

    .waves-effect {
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        vertical-align: middle;
        z-index: 1;
        transition: .3s ease-out;
    }

    .btn-large {
        height: 54px;
        line-height: 54px;
    }

    .change{
        
    border-radius: 25px;
    outline: none;
    border: none;
    background-image: linear-gradient(to right, #ffc800, #1b1e1d, #354078);
    background-size: 200%;
    font-size: 1.2rem;
    color: white;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    margin: 1rem 0;
    cursor: pointer;
    transition: .5s;
    text-align: center;
    padding: 0 80px 0 75px;
    height: 36px;
    }

    @media only screen and  (max-width: 420px) {
#hidevideo {
display: none;
}
    }

    #mobileview{
        margin-left: 220px;
        width: 90%;
    }
    @media only screen and  (max-width: 420px){
        #mobileview{
            padding-left: 0px!important;
            margin-left: 10px;
            width: 100%;
        }
    }

</style>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="pin">
            <div class="pulse"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <header class="main-header">
            <!-- header-top-->
            <?php
include('header.php');
?>
            <!-- header-search  end -->
        </header>
        <!--  header end -->
        <!--  wrapper  -->
        <div id="wrapper">
            <!-- content-->
            <div class="content">
                <!-- section-->
                <section class="flat-header color-bg adm-header" id="hidevideo">
                    <div class="wave-bg wave-bg2"></div>
                    <div class="container">
                        <div class="dasboard-wrap fl-wrap" style="width: 450px;">

                            <!--dasboard-sidebar-->
                            <div class="dasboard-sidebar" style="width: 450px;">
                                <div class="dasboard-sidebar-content fl-wrap" style="width: 450px;">
                                    <div class="dasboard-avatar" style="height: 400px;">

                                        <video width="320" height="240" controls autoplay="" loop="" muted=""
                                            class="bgvid" controlsList="nodownload">
                                            <source src="images/videoslider/mykopofficial-20201126-0002.mp4" type="video/mp4">

                                        </video>
                                    </div>

                                </div>
                            </div>
                            <!--dasboard-sidebar end-->
                            <!-- dasboard-menu-->

                            <!--dasboard-menu end-->
                            <!--Tariff Plan menu-->

                        </div>
                    </div>
                </section>
                <!-- section end-->
                <!-- section-->
                <section class="middle-padding">
                    <div class="container">
                        <!--dasboard-wrap-->
                        <div class="dasboard-wrap fl-wrap" id="mobileview">
                            <!-- dashboard-content-->
                            <div class="dashboard-content fl-wrap" style="width: 90%;">
                                <div class="box-widget-item-header">
                                    <h3> Your Profile</h3>
                                </div>
                                <!-- profile-edit-container-->
                                <div class="profile-edit-container">
                                    <form action="" method="post" name="host" id="reghost">
                                        <div class="custom-form">
                                            <label>Your Name <i class="far fa-user"></i></label>
                                            <input type="text" name="v_name"  placeholder="Enter Name"
                                             required style="padding-left: 35px;" />
                                            <label>Email Address<i class="far fa-envelope"></i> </label>
                                            <input type="email" placeholder="Enter Email"  name="v_email"
                                             required style="padding-left: 35px;" />
                                            <label>Phone<i class="far fa-phone"></i> </label>
                                            <input type="text" placeholder="Enter Phone"  name="v_phone"
                                             required style="padding-left: 35px;" />
                                            <label>Password<i class="far fa-lock"></i> </label>
                                            <input type="password" name="v_pass" placeholder="Enter Password"
                                                 required style="padding-left: 35px;" />
                                            <!-- <label> Address <i class="fas fa-map-marker"></i>  </label>-->
                                            <!-- <input type="text" placeholder="Enter Address"/> -->

                                            <!-- <input type="submit" class="log-out-btn color-bg" name="register"
                                                value="Submit" style="color: yellow;background: black;font-size: 15px;"/> -->
                                                <input type="submit" value="Submit" class="btn btn-primary" name="register"
                                                value="Submit" style="color: yellow;background: black;font-size: 15px; padding: 0 80px 0 71px;"/>
                                        </div>
                                        <br>
                                        <br>

                                    </form>
                                    <h3>Already Registered ?</h3>
                                    <a href="vendor/index.php"><input type="submit" class="change" value="Login Here" name="btn-login"></a>
                                    <?php
                                        if(isset($_POST['register']))
                                        {
                                        $name=$_POST['v_name'];
                                            $pass=$_POST['v_pass'];
                                            $phone=$_POST['v_phone'];
                                            $email=$_POST['v_email'];

                                            $check_email="select v_email from vendor_user where v_email='$email'";
                                            $run_checkemail=mysqli_query($conn,$check_email);
                                            $read_data=mysqli_fetch_array($run_checkemail);
                                            
                                                if(mysqli_num_rows($run_checkemail)>0){
                                            
                                                echo '<div class="alert info">This Email Id is Already Registered.. Please Try Again With Another Email..!</div>';
                                            }
                                            else{
                                            
                                            
                                            
                                            $add_host="insert into vendor_user(v_name,v_pass,v_phone,v_email,v_date,v_status) values ('$name','$pass','$phone','$email','".date('Y-m-d')."','".Pending."')";
                                            $result=mysqli_query($conn,$add_host);
                                            
                                            if($result=="TRUE")
                                            {
                                                echo"<script>alert('Registration Successfull, Login For Further...')</script>";
                                            echo '<div class="alert Success">Registration Successfull, Login For Further...</div>';
                                                        //	echo '<meta http-equiv="refresh" content="0;URL=http://mykindofparties.com/vendor/">';
                                                        echo"<script>window.location.href = 'vendor/index.php'</script>";
                                            }
                                            else
                                            {
                                                        echo '<div class="alert info">Error in submission. Please try again later!</div>';
                                                    }
                                            
                                            }
                                        }

										?>
                                </div>
                                <!-- profile-edit-container end-->
                            </div>
                            <!-- dashboard-list-box end-->
                        </div>
                        <!-- dasboard-wrap end-->
                    </div>
                </section>
                <div class="limit-box fl-wrap"></div>
            </div>
            <!-- content end-->
        </div>
        <!--wrapper end -->
        <!--footer -->
        <footer class="main-footer">
            <!--subscribe-wrap-->
            <?php
				include('footer.php');
				?>
        </footer>
        <!--footer end -->


        <a class="to-top"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

</html>