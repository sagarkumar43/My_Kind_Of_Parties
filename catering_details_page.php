<?php
require_once('config.php');
$id=$_GET['openid'];
$get_listing="select * from catering_product where id='$id'";
$run_listing=mysqli_query($conn,$get_listing);
$read_listing=mysqli_fetch_array($run_listing);
$catering_image=$read_listing['feature_image'];
$product_id=$read_listing['id'];
$productname=$read_listing['prodcut_name'];

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>MYKOP Catering </title>
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



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--=============== Star Rating ===============-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        div.stars {
            width: 270px;
            display: inline-flex;
            float: left;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px;
            font-size: 25px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }

        #starsize {
            width: 20%;
        }

        @media only screen and (max-width: 600px) {
            .mobview {

                padding-left: 10px;
            }
        }
        .listnone{
            text-align: left;
        }
        .listnone ul li{
            list-style:square;
        }
    </style>

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
        <?php
		  require_once('header.php');
		  ?>

        <!--register form -->
        <div class="main-register-wrap modal">
            <div class="reg-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
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
                                        <input name="password" type="password" name="password" onClick="this.select()"
                                            value="">
                                        <button type="submit" class="log-submit-btn color-bg"><span>Log
                                                In</span></button>
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
        <!--  header end -->
        <!--  wrapper  -->
        <div id="wrapper">
            <!-- content-->
            <div class="content">
                <!--  carousel-->
                <div class="list-single-carousel-wrap fl-wrap" id="sec1">


                    <div class="fw-carousel fl-wrap full-height lightgallery">
                        <!-- slick-slide-item -->
                        <?php 
				 $multi_img=explode(",",$read_listing["slider_image"]);
				 foreach($multi_img as $gallery){
				  ?>
                        <div class="slick-slide-item">
                            <div class="box-item">
                                <img src="images/Catering images/upload/slider image/<?php echo $gallery?>"
                                    alt="">
                                <a href="admin/img/product_img/slider_img/slider image/<?php echo $gallery?>"
                                    class="gal-link popup-image"><i class="fa fa-search"></i></a>

                            </div>
                        </div>
                        
                        
                        <?php } ?>
                        <!-- slick-slide-item end -->
                    </div>
                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                </div>
                <!--  carousel  end-->
                <!--  section  -->
                <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
                    <!--  scroll-nav-wrapper  -->
                    <div class="scroll-nav-wrapper fl-wrap">
                        <div class="hidden-map-container fl-wrap">
                            <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text"
                                placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                            <div class="map-container">
                                <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781">
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="container">
                            <nav class="scroll-nav scroll-init">
                                <ul>
                                    <!-- <li><a class="act-scrlink" href="#sec1">Top</a></li> -->
                                    <li><a href="#sec2">Details</a></li>
                                    <li><a href="#sec3">Product Details</a></li>
                                    <li><a href="#sec5">Inclusion</a></li>
                                    <li><a href="#sec6">Video</a></li>
                                    <li><a href="#sec7">Service Speciality</a></li>
                                    <li><a href="#sec10">Cuisines offered</a></li>
                                    <li><a href="#sec8">Locations</a></li>
                                    <li><a href="#sec9">Cancellation Policy</a></li>
                                    <!-- <li><a href="#sec4">Reviews</a></li> -->
                                </ul>
                            </nav>
                            <!--    <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>-->
                        </div>
                    </div>
                    <!--  scroll-nav-wrapper end  -->
                    <!--   container  -->
                    <div class="container">
                        <!--   row  -->
                        <div class="row ">
                            <!--   datails -->
                            <div class="col-md-8">
                                <div class="list-single-main-container ">
                                    <!-- fixed-scroll-column  -->
                                    <!--   <div class="fixed-scroll-column">
                                            <div class="fixed-scroll-column-item fl-wrap">
                                                <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>
                                                <div class="share-holder fixed-scroll-column-share-container">
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a>
                                                <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>
                                                <a class="fc-button" href="booking-single.html"><i class="far fa-bookmark"></i> <span> Book Now </span></a>
                                            </div>
                                        </div>-->
                                    <!-- fixed-scroll-column end   -->
                                    <div class="breadcrumbs inline-breadcrumbs fl-wrap"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <a href="index.php">Home</a><a href="">
                                            <?php echo $read_listing['prodcut_name']; ?>
                                        </a>
                                    </div>
                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap list-single-hero-header " id="sec2"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>
                                                    <?php echo $read_listing['prodcut_name']; ?>
                                                    </h3>


                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-5">
                                                <div class="list-single-hero-price fl-wrap">Average Price<span>
                                                        ₹1700/-</span></div>
                                            </div> -->
                                        </div>
                                        <span class="fw-separator"></span>
                                        <!--reviews-score-wrap-->
                                        <div class="reviews-score-wrap fl-wrap">
                                            <div class="review-score-total">
                                                <span>
                                                    4.5
                                                    <strong>Very Good</strong>
                                                </span>
                                                <a href="#sec4" class="color2-bg">Add Review</a>
                                            </div>
                                            <div class="review-score-detail">
                                                <!-- review-score-detail-list-->
                                                <div class="review-score-detail-list">
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span><img
                                                                    src="images/5star.png" alt="5star"
                                                                    id="starsize"></span></div>
                                                        <div class="rate-item-bg" data-percent="100%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span><img
                                                                    src="images/4star.png" alt="4star"
                                                                    id="starsize"></span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span><img
                                                                    src="images/3star.png" alt="3star"
                                                                    id="starsize"></span></div>
                                                        <div class="rate-item-bg" data-percent="80%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">3</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span><img
                                                                    src="images/2star.png" alt="2star"
                                                                    id="starsize"></span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">2</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                </div>
                                                <!-- review-score-detail-list end-->
                                            </div>
                                        </div>
                                        <!-- reviews-score-wrap end -->
                                    </div>
                                    <!--   list-single-main-item end -->
                                    <!-- list-single-header end -->

                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec3"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>About Product Details </h3>
                                        </div>
                                        <p>
                                        <p> </p>

                                        <p>
                                            <?php echo $read_listing['product_desc']; ?>
                                        </p>

                                        <!-- <a href="images/videoslider/mykopofficial-20201126-0002.mp4" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
                                    </div>

                                    <div class="list-single-main-item fl-wrap listnone" id="sec5"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Inclusion </h3>
                                        </div>
                                            <p>
                                                <?php echo $read_listing['product_include']; ?>
                                           </p>
                                        

                                    </div>

                                    <div class="list-single-main-item fl-wrap" id="sec6"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Video </h3>
                                        </div>
                                       

                                        <div style="" class="react-player">

                                            <!-- <input type="button" value="Launch Video" name="" class="btn btn-primary video-btn" style="background-image: linear-gradient(to right, #ffc800,#969746 , #1b1e1d);font-size: 16px;padding-left: 80px;"> -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-image: linear-gradient(to right, #ffc800,#969746 , #1b1e1d);font-size: 16px;padding-right: 75px;    border: none; padding-left: 75px;">Launch Video </button>

                                            <div class="react-player__preview" tabindex="0"
                                                style="width: 100%; height: 100%; background-size: cover; background-position: center center; cursor: pointer; display: flex; align-items: center; justify-content: center;">

                                            </div>
                                        </div>

                                        <!-- <a href="images/videoslider/mykopofficial-20201126-0002.mp4" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
                                    </div>

                                    <div class="list-single-main-item fl-wrap listnone" id="sec7"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Service Speciality </h3>
                                        </div>
                                        
                                                <p>
                                                    <?php echo $read_listing['service_speciality']; ?>
                                                </p>

                                        <!-- <a href="images/videoslider/mykopofficial-20201126-0002.mp4" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
                                    </div>

                                    <div class="list-single-main-item fl-wrap listnone" id="sec10"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Cuisines offered </h3>
                                        </div>
                                        
                                                <p>
                                                    <?php echo $read_listing['cuisines_offered']; ?>
                                                </p>

                                        <!-- <a href="images/videoslider/mykopofficial-20201126-0002.mp4" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
                                    </div>

                                    <div class="list-single-main-item fl-wrap" id="sec8"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Locations </h3>
                                        </div>
                                        <p>
                                        <p> </p>

                                        <p style="font-size:17px;">Your home / selected delivery location </p>

                                        <!-- <a href="images/videoslider/mykopofficial-20201126-0002.mp4" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
                                    </div>

                                    <div class="list-single-main-item fl-wrap listnone" id="sec9"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%)">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Cancellation Policy </h3>
                                        </div>
                                        
                                        
                                                <p>
                                                    <?php echo $read_listing['cancellation_policy']; ?>
                                                </p>
                                           
                                       


                                    </div>

                                    <!-- list-single-main-item end -->
                                    <!--   list-single-main-item -->

                                    <!--   list-single-main-item end -->
                                    <!-- accordion-->

                                    <!-- accordion end -->
                                    <!--   list-single-main-item -->

                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->

                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->




                                    <div class="list-single-main-item fl-wrap" id="sec4"
                                        style="box-shadow:0 1px 8px rgb(0 0 0 / 18%);">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Add Review</h3>
                                        </div>
                                        <!-- Add Review Box -->
                                        <div id="add-review" class="add-review-box">
                                            <!-- Review Comment -->
                                            <form id="add-comment" method="POST" class="add-comment  custom-form"
                                                name="rangeCalc">
                                                <fieldset>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-user"></i></label>
                                                            <input type="text" name="c_name" placeholder="Your Name *"
                                                                value="" style="    padding-left: 35px;">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-envelope"></i> </label>
                                                            <input type="text" name="c_email"
                                                                placeholder="Email Address*" value=""
                                                                style="    padding-left: 35px;">
                                                        </div>
                                                    </div>
                                                    <textarea cols="40" rows="3" name="c_message"
                                                        placeholder="Your Review:"></textarea>
                                                    <div class="stars">

                                                        <input class="star star-5" id="star-5" type="radio" name="star"
                                                            value="5" />
                                                        <label class="star star-5" for="star-5">5</label>
                                                        <input class="star star-4" id="star-4" type="radio" name="star"
                                                            value="4" />
                                                        <label class="star star-4" for="star-4">4</label>
                                                        <input class="star star-3" id="star-3" type="radio" name="star"
                                                            value="3" />
                                                        <label class="star star-3" for="star-3">3</label>
                                                        <input class="star star-2" id="star-2" type="radio" name="star"
                                                            value="2" />
                                                        <label class="star star-2" for="star-2">2</label>
                                                        <input class="star star-1" id="star-1" type="radio" name="star"
                                                            value="1" />
                                                        <label class="star star-1" for="star-1">1</label>


                                                    </div>
                                                </fieldset>
                                                <button class="btn  big-btn flat-btn float-btn color2-bg"
                                                    style="margin-top:30px; width:40%" name="submitreview">Submit Review <i
                                                        class="fal fa-paper-plane"></i></button>
                                            </form>
                                            <?php
                                                if(isset($_POST['submitreview']))
                                                {
                                                    $name=$_POST['c_name'];
                                                    $email=$_POST['c_email'];
                                                    $reviewmsg=$_POST['c_message'];
                                                    $star=$_POST['star'];

                                                    $insert="insert into catering_review set customer_name='$name',customer_email='$email',customer_msg='$reviewmsg',star_rating='$star',product_image='$catering_image',product_name='$productname',product_id='$product_id',Status='Pending'";

                                                    if(mysqli_query($conn,$insert))
                                                        {
                                                        echo "<script>alert('Thanks for your reivew is submitted')</script>";
                                                        
                                                        // echo"<script>window.location.href = 'index.php'</script>";
                                                        }
                                                        else
                                                        {
                                                        echo "<script>alert('Your reivew is not submitted')</script>";
                                                        }

                                                }
                                                ?>
                                        </div>
                                        <!-- Add Review Box / End -->
                                    </div>
                                    <!-- list-single-main-item end -->
                                </div>
                            </div>
                            <!--   datails end  -->

                            <!--   sidebar  -->
                            <div class="col-md-4">
                                <div class="box-widget-item fl-wrap" style="box-shadow:0 1px 8px rgb(0 0 0 / 18%);">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3> Price </h3>
                                            </div>
                                            <div class="claim-price-wdget fl-wrap">
                                                <div class="claim-price-wdget-content fl-wrap">
                                                    <div class="pricerange fl-wrap"><span>Price : </span> &#8377;
                                                    <?php echo $read_listing['product_price']; ?> /-
                                                    </div>
                                                    <!--  <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-wrap -->
                                <div class="box-widget-wrap">
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap" style="box-shadow:0 1px 8px rgb(0 0 0 / 18%);">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3> Book This Product</h3>
                                                </div>
                                                <form id="add-comment" action="decoration_bookingpage.php" method="post"
                                                    class="add-comment  custom-form" name="rangeCalc">
                                                    <fieldset>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Product Name</label>
                                                                <input type="text" name="product_name" placeholder="Your Product Name" value="<?php echo $read_listing['prodcut_name']; ?>" readonly required>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Product Price</label>
                                                                <input type="text" placeholder="Price*"
                                                                    name="product_price"
                                                                    value="	&#8377; <?php echo $read_listing['product_price']; ?> /- "
                                                                    readonly required>
                                                            </div>
                                                        </div>
                                                  

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Date</label>
                                                                <input type="date" name="date" required style="padding-left: 4px;padding-right: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Time</label>
                                                                <input type="time"  name="time" required
                                                                    style="width: 100%;height: 50px;border-radius: 9px;border: none;background-color: #f7f9fb;padding-left: 10px;">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="fa fa-map-marker"> Enter Pin Code</label>
                                                                <br>
                                                                <input type="number" placeholder="Enter Your Pin Code"
                                                                    name="pincode" required>
                                                            </div>

                                                        </div>

                                                    </fieldset>
                                                    <center><button class="btn  big-btn flat-btn float-btn color2-bg"
                                                            style="margin-top:30px; width: 100%;">Continue <i class="fal fa-paper-plane"></i></button></center>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <!--     <div class="box-widget-item fl-wrap">
                                            <div class="box-widget counter-widget" data-countDate="09/12/2021">
                                                <div class="banner-wdget fl-wrap">
                                                    <div class="overlay"></div>
                                                    <div class="bg"  data-bg="images/bg/10.jpg"></div>
                                                    <div class="banner-wdget-content fl-wrap">
                                                        <h4>Get a discount <span>20%</span> when ordering a room from three days.</h4>
                                                        <div class="countdown fl-wrap">
                                                            <div class="countdown-item">
                                                                <span class="days rot">00</span>
                                                                <p>days</p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="hours rot">00</span>
                                                                <p>hours </p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="minutes rot">00</span>
                                                                <p>minutes </p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="seconds rot">00</span>
                                                                <p>seconds</p>
                                                            </div>
                                                        </div>
                                                        <a href="#">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->

                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->

                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <!--   <div class="box-widget-item fl-wrap">
											<div id="weather-widget" class="gradient-bg ideaboxWeather" data-city="New York"></div>
                                        </div>-->
                                    <!--box-widget-item end -->
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->

                                    <!--box-widget-item end -->

                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap" style="box-shadow:0 1px 8px rgb(0 0 0 / 18%);">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3>Similar Listings</h3>
                                                </div>
                                                <!-- <div class="widget-posts fl-wrap">
                                                    <ul>
                                                        <?php
														$get_listingcities="select * from catering_product where category_name='$url_cat'";
														$run_listingcities=mysqli_query($conn,$get_listingcities);
														while($read_listingcities=mysqli_fetch_array($run_listingcities)){
														?>

                                                        <li class="clearfix">
                                                            <a href="decoration-details-page.php?openid=<?php echo $read_listingcities['id'] ?>&cat_name=<?php echo $url_cat ?>"
                                                                class="widget-posts-img"><img
                                                                    src="admin/img/product_img/<?php echo $read_listingcities['feature_image'] ?>"
                                                                    class="respimg" alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="decoration-details-page.php?openid=<?php echo $read_listingcities['id'] ?>&cat_name=<?php echo $url_cat ?>" title=""><?php echo $read_listingcities['product_name'] ?></a>
                                                                <div class="listing-rating card-popup-rainingvis"
                                                                    data-starrating2="5"></div>
                                                                <span class="rooms-price"
                                                                    style="margin-top: 25px;">Rs.<?php echo $read_listingcities['product_price'] ?></span>
                                                            </div>
                                                        </li>

                                                        <?php }?>
                                                    </ul>

                                                    <a class="widget-posts-link" href="#">See All Listing <i
                                                            class="fal fa-long-arrow-right"></i> </a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                </div>
                                <!--box-widget-wrap end -->
                            </div>
                            <!--   sidebar end  -->
                        </div>
                        <!--   row end  -->
                    </div>
                    <!--   container  end  -->
                </section>
                <!--  section  end-->
            </div>
            <!-- content end-->
            <div class="limit-box fl-wrap"></div>
        </div>
        <!--wrapper end -->
        <!--footer -->
        <?php
		require_once('footer.php');
		?>
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
        <!--register form -->
        <a class="to-top" style="background-color: black;"><i class="fas fa-caret-up"></i></a>
        <!--ajax-modal-container-->
        <div class="ajax-modal-overlay"></div>
        <div class="ajax-modal-container">
            <!--ajax-modal -->
            <div class='ajax-loader'>
                <div class='ajax-loader-cirle'></div>
            </div>
            <div id="ajax-modal" class="fl-wrap">
            </div>
            <!--ajax-modal-container end -->
        </div>
        <!--ajax-modal-container end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <script type="text/javascript" src="js/map-single.js"></script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sharma Catering</h4>
        </div>
        <div class="modal-body" style="padding: 180px!important;">
        <video id="" width="100%" controls >
          <source src="admin/img/product_img/product_video/mov_bbb.mp4" type="video/mp4">
        </video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body>

<!-- Mirrored from easybook.kwst.net/listing-single3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:49:27 GMT -->

</html>