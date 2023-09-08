<?php
require_once('config.php');
$list_id=$_GET['openid'];
$get_listing="select * from vendor_listing where list_id='$list_id'";
$run_listing=mysqli_query($conn,$get_listing);
$read_listing=mysqli_fetch_array($run_listing);
$city_name=$read_listing['city'];
$featureimage=$read_listing['feature_image'];
$properyname=$read_listing['listing_name'];
$venderid=$read_listing['v_id'];
$vendername=$read_listing['vendor_name'];
$lsitname=$read_listing['listing_name'];
?>

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from easybook.kwst.net/listing-single3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:49:27 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>MYKOP
        <?php echo $lsitname ?>
    </title>
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
				 $multi_img=explode(",",$read_listing["gallery"]);
				 foreach($multi_img as $gallery){
				  ?>
                        <div class="slick-slide-item">
                            <div class="box-item">


                                <img src="vendor/images/listing/<?php echo $gallery?>" alt="">
                                <a href="vendor/images/listing/<?php echo $gallery?>" class="gal-link popup-image"><i
                                        class="fa fa-search"></i></a>

                            </div>
                        </div>
                        <?php }?>
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
                                    <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                    <li><a href="#sec2">Details</a></li>
                                    <li><a href="#sec3">Amenities</a></li>
                                    <!--  <li><a href="#sec4">Rooms</a></li>-->
                                    <li><a href="#sec5">Reviews</a></li>
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
                                    <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                                        <a href="index.php">Home</a><a href="#">
                                            <?php echo $read_listing['listing_name']?>
                                        </a>
                                    </div>
                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap list-single-hero-header " id="sec2">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>
                                                        <?php echo $read_listing['listing_name']?>
                                                    </h3>
                                                    <div class="listing-rating card-popup-rainingvis"
                                                        data-starrating2="5"></div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i>
                                                            <?php echo $read_listing['address']?>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="list-single-hero-price fl-wrap">Average Price<span>
                                                        ₹
                                                        <?php echo $read_listing['price']?>/-
                                                    </span></div>
                                            </div>
                                        </div>
                                        <span class="fw-separator"></span>
                                        <!--reviews-score-wrap-->
                                        <div class="reviews-score-wrap fl-wrap">
                                            <div class="review-score-total">
                                                <span>
                                                    4.5
                                                    <strong>Very Good</strong>
                                                </span>
                                                <a href="#sec6" class="color2-bg">Add Review</a>
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
                                    <div class="list-single-facts fl-wrap">
                                        <!-- inline-facts -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <i class="fal fa-bed"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <?php echo $read_listing['rooms']?> -
                                                    </div>
                                                </div>
                                                <h6>Hotel Rooms</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                        <!-- inline-facts  -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <i class="fal fa-users"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <?php echo $read_listing['guest']?> -
                                                    </div>
                                                </div>
                                                <h6>Guests</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                        <!-- inline-facts -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <i class="fal fa-taxi"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <?php echo $read_listing['city']?> -
                                                    </div>
                                                </div>
                                                <h6>City</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                        <!-- inline-facts -->
                                        <div class="inline-facts-wrap">
                                            <div class="inline-facts">
                                                <i class="fal fa-cocktail"></i>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <?php echo $read_listing['list_category']?> -
                                                    </div>
                                                </div>
                                                <h6>Catgory</h6>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>About Venue </h3>
                                        </div>
                                        <p>
                                            <?php echo $read_listing['details']?>
                                        </p>

                                        <!-- <a href="" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a>-->
                                    </div>
                                    <!--   list-single-main-item end -->
                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec3">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Amenities</h3>
                                        </div>
                                        <div class="listing-features fl-wrap">
                                            <ul>
                                                <?php 
                                                    $multi_amt=explode(",",$read_listing["aminity"]);
                                                    foreach($multi_amt as $aminities){
                                                    ?>
                                                <li><i class="fas fa-dot-circle"></i>
                                                    <?php echo $aminities ;?>
                                                </li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <span class="fw-separator"></span>
                                    </div>
                                    <!--   list-single-main-item end -->
                                    <!-- accordion-->

                                    <!-- accordion end -->
                                    <!--   list-single-main-item -->

                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->

                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec5">
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
                                                    style="margin-top:30px" name="submitreview">Submit Review <i
                                                        class="fal fa-paper-plane"></i></button>
                                            </form>
                                            <?php
                                                if(isset($_POST['submitreview']))
                                                {
                                                    $name=$_POST['c_name'];
                                                    $email=$_POST['c_email'];
                                                    $reviewmsg=$_POST['c_message'];
                                                    $star=$_POST['star'];

                                                    $insert="insert into customer_review set customer_name='$name',customer_email='$email',customer_message='$reviewmsg',customer_rating='$star',Property_img='$featureimage',Property_name='$properyname',Vender_id='$venderid',Vender_name='$vendername',Status='Pending'";

                                                    if(mysqli_query($conn,$insert))
                                                        {
                                                        echo "<script>alert('Data saved successfully')</script>";
                                                        
                                                        // echo"<script>window.location.href = 'index.php'</script>";
                                                        }
                                                        else
                                                        {
                                                        echo "<script>alert('Data not saved successfully')</script>";
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
                                <!--box-widget-wrap -->
                                <div class="box-widget-wrap">
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3> Book This Venue</h3>
                                                </div>
                                                <form id="add-comment" action="bookingpage.php" method="post"
                                                    class="add-comment  custom-form" name="rangeCalc">
                                                    <fieldset>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Venue Name</label>
                                                                <input type="text" name="listing_name"
                                                                    placeholder="Your Name *"
                                                                    value="<?php echo $read_listing['listing_name']?>"
                                                                    readonly required>

                                                                <input type="hidden" placeholder="Your Name *"
                                                                    name="list_id"
                                                                    value="<?php echo $read_listing['list_id']?>"
                                                                    readonly required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Venue Price</label>
                                                                <input type="text" placeholder="Email Address*"
                                                                    name="price"
                                                                    value="	&#8377; <?php echo $read_listing['price']?> "
                                                                    readonly required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>From</label>
                                                                <input type="date" placeholder="From Date"
                                                                    name="from_date" required
                                                                    style="padding-left: 4px;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>To</label>
                                                                <input type="date" placeholder="To Date" name="to_date"
                                                                    required style="padding-left: 4px;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>No. of Guest</label>
                                                                <input type="number" placeholder="No of Guest"
                                                                    name="guest" min="1"
                                                                    max="<?php echo $read_listing['guest']?>" required>
                                                            </div>

                                                        </div>

                                                    </fieldset>
                                                    <center><button class="btn  big-btn flat-btn float-btn color2-bg"
                                                            style="margin-top:30px"
                                                            style="float: center !important;">Continue <i
                                                                class="fal fa-paper-plane"></i></button></center>





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
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3> Contact Information</h3>
                                                </div>
                                                <div class="box-widget-list">
                                                    <ul>
                                                        <li><span><i class="fal fa-user"></i> Name :</span> <a href="#">
                                                                <?php echo $read_listing['vendor_name']?>
                                                            </a></li>
                                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a
                                                                href="#">
                                                                <?php echo $read_listing['vendor_phone']?>
                                                            </a></li>
                                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a
                                                                href="#">
                                                                <?php echo $read_listing['vendor_email']?>
                                                            </a></li>
                                                        <li><span><i class="fal fa-browser"></i> Facebook :</span> <a
                                                                href="#">
                                                                <?php echo $read_listing['facebook']?>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-widget-social">
                                                    <ul>
                                                        <li><a href="<?php echo $read_listing['facebook']?>"
                                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li><a href="<?php echo $read_listing['twitter']?>"
                                                                target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="<?php echo $read_listing['googleplus']?>"
                                                                target="_blank"><i class="fab fa-google-plus"></i></a>
                                                        </li>
                                                        <!--  <li><a href="<?php //echo $read_listing['facebook']?>" target="_blank" ><i class="fab fa-instagram"></i></a></li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3> Price Range </h3>
                                                </div>
                                                <div class="claim-price-wdget fl-wrap">
                                                    <div class="claim-price-wdget-content fl-wrap">
                                                        <div class="pricerange fl-wrap"><span>Price : </span> &#8377;
                                                            <?php echo $read_listing['price']?>
                                                        </div>
                                                        <!--  <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget">
                                            <div class="box-widget-content">
                                                <div class="box-widget-item-header">
                                                    <h3>Similar Listings</h3>
                                                </div>
                                                <div class="widget-posts fl-wrap">
                                                    <ul>

                                                        <?php
														$get_listingcities="select * from vendor_listing where city='$city_name'";
														$run_listingcities=mysqli_query($conn,$get_listingcities);
														while($read_listingcities=mysqli_fetch_array($run_listingcities)){
														?>
                                                        <li class="clearfix">
                                                            <a href="listingdetailpage.php?id=<?php echo $read_listingcities['list_id']?>"
                                                                class="widget-posts-img"><img
                                                                    src="vendor/images/listing/<?php echo $read_listingcities['feature_image']?>"
                                                                    class="respimg" alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="listingdetailpage.php?id=<?php echo $read_listingcities['list_id']?>"
                                                                    title="">
                                                                    <?php echo $read_listingcities['listing_name']?>
                                                                </a>
                                                                <div class="listing-rating card-popup-rainingvis"
                                                                    data-starrating2="5"></div>
                                                                <div class="geodir-category-location fl-wrap"><a
                                                                        href="listingdetailpage.php?id=<?php echo $read_listingcities['list_id']?>"><i
                                                                            class="fas fa-map-marker-alt"></i>
                                                                        <?php echo $read_listingcities['address']?>
                                                                    </a></div>
                                                                <span class="rooms-price" style="margin-top: 25px;">Rs.
                                                                    <?php echo $read_listingcities['price']?><strong> /
                                                                        Per Day</strong>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <?php }?>

                                                    </ul>
                                                    <a class="widget-posts-link" href="#">See All Listing <i
                                                            class="fal fa-long-arrow-right"></i> </a>
                                                </div>
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
</body>

<!-- Mirrored from easybook.kwst.net/listing-single3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:49:27 GMT -->

</html>