
<?php
session_start();
require_once('config.php');

$email=$_SESSION['email'];
$name=$_SESSION['name'];
$id=$_SESSION['u_id'];
$address=$_SESSION['address'];
$phone=$_SESSION['phone'];
 $get_user="select * from users where u_email='$email'";
$run_user=mysqli_query($conn,$get_user);
$read_user=mysqli_fetch_array($run_user);

	?>
	
	

<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from easybook.kwst.net/dashboard-myprofile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:47:16 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Easybook - Hotel Booking Directory Listing Template</title>
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
    </head>
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
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="dasboard-wrap fl-wrap">
                                <div class="dasboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Profile page</span></div>
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                                    <div class="dasboard-sidebar-content fl-wrap">
                                        <div class="dasboard-avatar">
                                            <img src="images/avatar/4.jpg" alt="">
                                        </div>
                                        <div class="dasboard-sidebar-item fl-wrap">
                                            <h3>
                                                <span>Welcome </span>
                                                <?php echo $name?>
                                            </h3>
                                        </div>
                                    <!--    <a href="dashboard-add-listing.html" class="ed-btn">Add Hotel</a>        -->                                
                                        <div class="user-stats fl-wrap">
                                            <ul>
                                                <li>
                                                    Listings	
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    Bookings
                                                    <span>32</span>	
                                                </li>
                                                <li>
                                                    Reviews	
                                                    <span>9</span>	
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="logout.php" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                                    </div>
                                </div>
                                <!--dasboard-sidebar end--> 
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap">
                                        <li>
                                            <a href="userdashboard.php" class="user-profile-act"><i class="far fa-user"></i>Profile</a>
                                            <ul>
                                                <li><a href="userprofile.php">Edit profile</a></li>
                                                <li><a href="dashboard-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <!--<li><a href="dashboard-messages.html"><i class="far fa-envelope"></i> Messages <span>3</span></a></li>
                                        <li>
                                            <a href="dashboard-listing-table.html"><i class="far fa-th-list"></i> My listigs  </a>
                                            <ul>
                                                <li><a href="#">Active</a><span>5</span></li>
                                                <li><a href="#">Pending</a><span>2</span></li>
                                                <li><a href="#">Expire</a><span>3</span></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="userbooking.php"> <i class="far fa-calendar-check"></i> Bookings <span>2</span></a></li>
                                     <!--   <li><a href="dashboard-review.html"><i class="far fa-comments"></i> Reviews </a></li>-->
                                    </ul>
                                </div>
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
                            <div class="dasboard-wrap fl-wrap">
                                <!-- dashboard-content--> 
                                <div class="dashboard-content fl-wrap">
                                    <div class="box-widget-item-header">
                                        <h3> Your Profile</h3>
                                    </div>
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
										<form>
                                            <label>Your Name </label>
                                            <input type="text" placeholder="" value="<?php echo $name?>"/>
                                            <label>Email Address  </label>
                                            <input type="text" placeholder="" value="<?php echo $email?>"/>
                                            <label>Phone</label>
                                            <input type="text" placeholder="" value="<?php echo $phone?>"/>
                                            <label> Adress   </label>
                                            <input type="text" placeholder="" value="<?php echo $address?>"/>
                                           </form>
                                           <!-- <div class="row">
                                                <div class="col-sm-9">
                                                    <label> Notes</label>                                              
                                                    <textarea cols="40" rows="3" placeholder="About Me"></textarea>                                                    
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Change Avatar</label> 
                                                    <div class="add-list-media-wrap">
                                                        <form class="fuzone">
                                                            <div class="fu-text">
                                                                <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                                                            </div>
                                                            <input type="file" class="upload">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end--> 
                                  <!--  <div class="box-widget-item-header mat-top">
                                        <h3>Your  Tariff Plan</h3>
                                    </div>
                                    <!-- profile-edit-container--> 
                               <!--     <div class="profile-edit-container add-list-container">
                                        <div class="custom-form">
                                            <div class="row">
                                                <!--col --> 
                                             <!--   <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender">
                                                        <span>Basic 99$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end--> 
                                                <!--col --> 
                                               <!-- <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender"  checked>
                                                        <span>Extended 99$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end--> 
                                                <!--col --> 
                                               <!-- <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender">
                                                        <span>Professional 149$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end-->                                                   
                                         <!--   </div>
                                        </div>
                                    </div>-->
                                    <!-- profile-edit-container end-->  
                                  <!--  <div class="box-widget-item-header mat-top">
                                        <h3>Your  Socials</h3>
                                    </div>-->
                                    <!-- profile-edit-container--> 
                                   <!-- <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Facebook <i class="fab fa-facebook"></i></label>
                                            <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                            <label>Twitter<i class="fab fa-twitter"></i>  </label>
                                            <input type="text" placeholder="https://twitter.com/" value=""/>
                                            <label>Vkontakte<i class="fab fa-vk"></i>  </label>
                                            <input type="text" placeholder="https://vk.com" value=""/>
                                            <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                            <input type="text" placeholder="https://www.instagram.com/" value=""/>
                                            <button class="btn    color2-bg  float-btn">Save Changes<i class="fal fa-save"></i></button>
                                        </div>
                                    </div>-->
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
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <h3>Hotel Title</h3>
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <a href="#" class="btn color2-bg">View Details <i class="fal fa-angle-right"></i></a>
                        <div class="map-modal-close"><i class="far fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->            
           
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>         
    </body>

<!-- Mirrored from easybook.kwst.net/dashboard-myprofile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:47:16 GMT -->
</html>