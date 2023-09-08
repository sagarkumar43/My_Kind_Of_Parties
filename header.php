<?php
session_start();
require_once('config.php');
if(empty($_SESSION['email']))
{
    //echo'<div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>';  
}
else{
$email=$_SESSION['email'];
$name=$_SESSION['name'];
}

?>
<head>
    <style>
        body {
   background: #212129;
}

::selection {
   background: #212129;
}

.search-wrapper {
    position: absolute;
    transform: translate(-50%, -50%);
    top:13%;
    left:75%;
}
.search-wrapper.active {}

.search-wrapper .input-holder {    
    height: 70px;
    width:70px;
    overflow: hidden;
    background: rgba(255,255,255,0);
    border-radius:6px;
    position: relative;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder {
    width:450px;
    border-radius: 50px;
    background: rgba(0,0,0,0.5);
    transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
}
.search-wrapper .input-holder .search-input {
    width:100%;
    height: 70px;
    padding:0px 70px 0 20px;
    opacity: 0;
    position: absolute;
    top:0px;
    left:0px;
    background: transparent;
    box-sizing: border-box;
    border:none;
    outline:none;
    font-family:"Open Sans", Arial, Verdana;
    font-size: 16px;
    font-weight: 400;
    line-height: 20px;
    color:#FFF;
    transform: translate(0, 60px);
    transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition-delay: 0.3s;
}
.search-wrapper.active .input-holder .search-input {
    opacity: 1;
    transform: translate(0, 10px);
}
.search-wrapper .input-holder .search-icon {
    width: 50px;
    height: 90px;
    border: none;
    border-radius: 6px;
    background: black;
    padding:0px;
    outline:none;
    position: relative;
    z-index: 2;
    float:right;
    cursor: pointer;
    margin-top: 6px;
    transition: all 0.3s ease-in-out;
}
.search-wrapper.active .input-holder .search-icon {
    width: 40px;
    height: 55px;
    /* margin: 10px; */
    float: none;
    margin-top: 25px;
    border-radius: 75px;
}
.search-wrapper .input-holder .search-icon span {
    width:22px;
    height:22px;
    display: inline-block;
    vertical-align: middle;
    position:relative;
    transform: rotate(45deg);
    transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
}
.search-wrapper.active .input-holder .search-icon span {
    transform: rotate(-45deg);
}
.search-wrapper .input-holder .search-icon span::before, .search-wrapper .input-holder .search-icon span::after {
    position: absolute; 
    content:'';
}
.search-wrapper .input-holder .search-icon span::before {
    width: 4px;
    height: 11px;
    left: 9px;
    top: 18px;
    border-radius: 2px;
    background: #ffffff;
}
.search-wrapper .input-holder .search-icon span::after {
    width: 14px;
    height: 14px;
    left: 0px;
    top: 0px;
    border-radius: 16px;
    border: 4px solid #ffffff;
}
.search-wrapper .close {
    position: absolute;
    z-index: 1;
    top:24px;
    right:20px;
    width:25px;
    height:25px;
    cursor: pointer;
    transform: rotate(-180deg);
    transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
    transition-delay: 0.2s;
}
.search-wrapper.active .close {
    right:140px;
    transform: rotate(45deg);
    transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    transition-delay: 0.5s;
    margin-top: 17px;
}
.search-wrapper .close::before, .search-wrapper .close::after {
    position:absolute;
    content:'';
    background: #ffffff ;
    border-radius: 2px;
}
.search-wrapper .close::before {
    width: 5px;
    height: 25px;
    left: 10px;
    top: 0px;
}
.search-wrapper .close::after {
    width: 25px;
    height: 5px;
    left: 0px;
    top: 10px;
}

    </style>
</head>
<header class="main-header">
    <div class="row">
        <div class="col-md-1">
            <div class="logo-holder">
                <a href="index.php"><img src="images/logo.png" class="img-responsive" id="media" style="height: 100px; ;margin-left: 27px;"></a>
            </div>
        </div>
        <div class="col-md-11">

            <!-- header-top-->
            <div class="header-top fl-wrap">
                <div class="container" style="">


                    <a href="becomehost.php" class="add-hotel">Become A Host <span><i
                                class="far fa-plus"></i></span></a>
                                <?php
                                    if(empty($_SESSION['email']))
                                    {
                                        echo'<div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>';
                                    }
                                    else
                                    {
                                ?>
                    <!-- <div class="add-hotel">Welcome <span>
                            <?php // echo $name; ?>
                        </span></div> -->
                    <?php } ?>



                </div>
            </div>

            <!-- header-top end-->
            <!-- header-inner-->
            <div class="header-inner fl-wrap">
                <div class="container">
                    <!-- <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div> -->

                   
                    <div class="header-user-menu">
                        <?php
						if(empty($_SESSION['email']))
                                {
                                ?>



                        <?php } else{
                                                        ?>

                        <div class="header-user-name">
                            <span><img src="images/avatar/avatar-bg.png" alt=""></span>
                            <?php echo $name; ?>
                        </div>
                        <ul>
                            <li><a href="userprofile.php"> Edit profile</a></li>

                            <li><a href="userbooking.php"> Bookings </a></li>

                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                        <?php }?>
                    </div>
                   


                    <div class="home-btn act-link"><a href="index.php"><i class="fas fa-home act-link"
                                style="margin-top:15px;"></i></a></div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg" style="margin-top:-30px;">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li class="mobile"><a href="index.php">Home</a></li>
                                <li><a href="listings.php" class="">Venue </a></li>
                                <li><a href="decoration_listing.php">Decoration</a></li>
                                <li><a href="catering_listing.php">Catering</a></li>
                                <li><a href="#">Cake</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search" />
                            <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                        </div>
                            <span class="close" onclick="searchToggle(this, event);"></span>
                    </div>
                    <!-- navigation  end -->
                </div>
            </div>
            <!-- header-inner end-->
            <!-- header-search -->

            <!-- header-search  end -->
        </div>
    </div>
</header>

<!--register form -->
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg color-bg" style="background:#090909b8;"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
            </ul>
            <!--tabs -->
            <div id="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content">
                        <h3>Sign In <span>My<strong>KOP</strong></span></h3>
                        <div class="custom-form">
                            <form method="post" name="registerform" action="loginpage.php">
                                <label>Username or Email Address <span>*</span> </label>
                                <input name="email" type="text" name="email" onClick="this.select()" value="">
                                <label>Password <span>*</span> </label>
                                <input name="password" type="password" name="password" onClick="this.select()" value="">
                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <h3>Sign Up <span>MY<strong>KOP</strong></span></h3>
                            <div class="custom-form">
                                <form method="post" name="registerform" action="registeruser.php"
                                    class="main-register-form" id="main-register-form2">
                                    <label>Full Name <span>*</span> </label>
                                    <input name="name" type="text" value="">
                                    <label>Email Address <span>*</span></label>
                                    <input name="email" type="text" value="">
                                    <label>Password <span>*</span></label>
                                    <input name="password" type="password" value="">
                                    <label>Phone No <span>*</span></label>
                                    <input name="phone" type="text" value="">
                                    <label>Address <span>*</span></label>
                                    <input name="address" type="text" value="">
                                    <button type="submit" name="submit_details"
                                        class="log-submit-btn color-bg"><span>Register</span></button>
                                </form>


                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->

            </div>
        </div>
    </div>
</div>
<!--register form end -->
<script>
    function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
</script>