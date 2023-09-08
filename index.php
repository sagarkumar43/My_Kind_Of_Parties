<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from easybook.kwst.net/listing4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Welcome To My Kind Of Parties</title>
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
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />


    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <style>
        @media only screen and (max-width: 1560px) {
            #mediaqueri1 {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {
            #mediaqueri1 {
                display: block;
            }
        }

        @media only screen and (max-width: 600px) {
            #mediaqueri {
                display: none;
            }
        }

        .list-carousel {
            padding: 0 0px !important;
        }

        section.single-par {
            /* padding: 150px 0; */
            overflow: hidden;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            color: black;
            outline: none;
            background: black;
        }

        .banner {
            height: 410px;
            width: 98%;
        }

        @media only screen and (max-width: 560px) {
            .banner {
                height: 100px;
            }
        }
        .loader{
            width:7%;
        }
        @media only screen and (max-width: 560px) {
            .loader {
                width: 20%;
            }
        }
        
    </style>
</head>

<body>
     <!--loader-->
     <div class="loader-wrap">
        <div class="pin loader">
                <img src="images/black giraffe.png" alt="" style="width:100%">
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
                <!--  section  -->
                <section class="parallax-section single-par" data-scrollax-parent="true">
               

                    <div class="breadcrumbs-fs fl-wrap" id="scrollcate">
                        <div class="container">
                            <div class="manual">
                                <?php
                                                $q="select * from categories_mgmt";
                                                $ex=mysqli_query($conn,$q);
                                                $count=1;
                                                while($read=mysqli_fetch_array($ex))
                                            { ?>
                                <div>
                                    <a
                                        href="decoration-category-page.php?categories=<?php echo $read['category_name'] ?>">
                                        <center><img src="images/categories/<?php echo $read['category_image']; ?>"
                                                alt="" style="width:60px;"></center>
                                        <label for="" style="width:80px;">
                                            <?php echo $read['category_name']; ?>
                                        </label>
                                    </a>
                                </div>
                                <?php $count++; } ?>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="" style="">
                            <a href=""><img class="mySlides" src="images/homeslidering/1613546511_large.jpg"
                                    style="width:100%"></a>
                            <a href=""><img class="mySlides" src="images/homeslidering/1613546465_large.jpg"
                                    style="width:100%"></a>
                            <a href=""><img class="mySlides" src="images/homeslidering/1613546943_large.jpg"
                                    style="width:100%"></a>
                            <a href=""><img class="mySlides" src="images/homeslidering/1613555351_large.jpg"
                                    style="width:100%"></a>
                        </div>
                    </div>


                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="row">

                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/vanue.png" style="height:40px;"></div>
                                    <h4><a href="listings.php"> Venue</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/decor.png" style="height:40px;"></div>
                                    <h4> <a href="decoration_listing.php">Decoration</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item nodecpre">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/cerering.png" style="height:40px;">
                                    </div>
                                    <h4><a href="catering_listing.php"> Catering</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/cake.png" style="height:40px;"></div>
                                    <h4><a href="#"> Cake</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/entertainment1.png"
                                            style="height:40px;">
                                    </div>
                                    <h4> <a href="#">Entertainment</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item nodecpre">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><img src="images/events.png" style="height:40px;">
                                    </div>
                                    <h4><a href="#"> Events</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                        </div>
                    </div>





                    <!-- <div class="overlay">
                    </div> -->
                    <!-- <div class="container">
                        <div class="section-title center-align big-title">
                            <div class="section-title-separator"><span></span></div>
                            <h2><span>Decoration's</span></h2>
                            <span class="section-separator"></span>
                            <h4>Explore Places With MYKOP</h4>
                        </div>
                    </div> -->
                    <!-- <div class="header-sec-link">
                        <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i
                                    class="fal fa-angle-double-down"></i></a></div>
                    </div> -->
                </section>
                <!--  section  end-->
                <!-- Category Slider Start -->
                <!-- <div class="breadcrumbs-fs fl-wrap">
                    <div class="container">
                        <div class="manual">
                                <?php
                                    $q="select * from categories_mgmt";
                                    $ex=mysqli_query($conn,$q);
                                    $count=1;
                                    while($read=mysqli_fetch_array($ex))
                                { ?>
                            <div>
                                <a href="decoration-category-page.php?categories=<?php echo $read['category_name'] ?>">
                                <img src="images/categories/<?php echo $read['category_image']; ?>" alt="" style="">
                                <label for="" style=""><?php echo $read['category_name']; ?></label>
                                </a>
                            </div>
                            <?php $count++; } ?>
                        </div>
                    </div>
                </div> -->
                <!-- Category Slider End -->
                <!--  section-->
                <!-- New Venue Slider Start -->

                <section class="grey-blue-bg">
                    <!-- container-->

                    <div class="container">
                        <div class="section-title">
                            <!-- <div class="section-title-separator"><span></span></div> -->

                            <a href="listings.php"><h2 style="margin-top: 45px;">Venue</h2></a>
                            <span class="section-separator"></span>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                                    Nulla finibus lobortis pulvinar.</p> -->
                        </div>
                    </div>
                    <!-- container end-->
                    <!-- carousel -->
                    <div class="list-carousel fl-wrap card-listing ">
                        <!--listing-carousel-->
                        <div class="listing-carousel  fl-wrap ">
                            <!--slick-slide-item-->
                            <?php
                                    $q="select * from vendor_listing where status='1' order by list_id desc";
                                    $ex=mysqli_query($conn,$q);
                                    while($read=mysqli_fetch_array($ex))
                                {     
                            ?>
                            <div class="slick-slide-item">
                                <!-- listing-item  -->

                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>"><img
                                                    src="vendor/images/listing/<?php echo $read["feature_image"];?>"
                                                alt=""></a>
                                            <?php
                                                    if(empty($read['discount_price']))
                                                    {
                                                
                                                    }
                                                    else {
                                                      
                                                    ?>
                                            <div class="sale-window">FLAT
                                                <?php echo $read['discount_price']; ?> % Off
                                            </div>
                                            <?php } ?>
                                            <div class="geodir-category-opt">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                </div>
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very
                                                            Good</strong>27 Reviews </div>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                            <div class="geodir-category-content-title fl-wrap">
                                                <div class="geodir-category-content-title-item">
                                                    <center>

                                                        <h3 class="title-sin_map">
                                                            <a
                                                                href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>">
                                                                <?php echo $read["listing_name"]; ?>

                                                            </a>
                                                        </h3>
                                                        <div class="geodir-category-location fl-wrap">
                                                            <a href="#" class="map-item"><b style="font-size: 13px;">per
                                                                    night: &#8377;
                                                                    <?php echo $read["price"]; ?>/-
                                                                </b></a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- listing-item end -->
                            </div>
                            <?php } ?>
                            <!--slick-slide-item end-->

                        </div>
                        <!--listing-carousel end-->
                        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                    </div>
                    <!--  carousel end-->
                </section>
                <!-- New Venue Slider End -->


                <div class="breadcrumbs-fs fl-wrap">
                    <div class="row">
                    <?php
                                $cmanagment="select * from promotional_banner where banner_category='Venue'";
                                $run=mysqli_query($conn,$cmanagment);
                                $c=1;
                                while($read=mysqli_fetch_array($run)){
                    ?>
                        <div class="col-md-6 col-xs-6" style="padding: 0;">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item" style="padding: 0; margin: 0;">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><a href="<?php echo $read['banner_links'] ; ?>"><img src="images/promoted_banner_image/<?php echo $read['banner_image'];  ?>"
                                        class="img-responsive banner"></a></div>

                            </div>
                            <!-- process-item end -->
                        </div>
                    <?php } ?>
                    </div>
                </div>

                <!-- New Decorations Slider Start -->

                <section class="grey-blue-bg">
                    <!-- container-->

                    <div class="container">
                        <div class="section-title">
                            <!-- <div class="section-title-separator"><span></span></div> -->

                            <a href="decoration_listing.php"><h2 style="margin-top: 45px;">Decoration's</h2></a>
                            <span class="section-separator"></span>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                                    Nulla finibus lobortis pulvinar.</p> -->
                        </div>
                    </div>
                    <!-- container end-->
                    <!-- carousel -->
                    <div class="list-carousel fl-wrap card-listing ">
                        <!--listing-carousel-->
                        <div class="listing-carousel  fl-wrap ">
                            <!--slick-slide-item-->
                            <?php
                                $sql_query="select * from product_mgmt order by id='decs'";
                                $execute=mysqli_query($conn,$sql_query);
                                while($read_decoration=mysqli_fetch_array($execute))
                            { 
                            ?>
                            <div class="slick-slide-item">
                                <!-- listing-item  -->

                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="decoration-details-page.php?openid=<?php echo $read_decoration['id']; 
                                                    ?>&cat_name=<?php echo $read_decoration['category_name']; ?>"><img
                                                    src="admin/img/product_img/<?php echo $read_decoration['feature_image']; ?>"
                                                    alt=""></a>
                                            <div class="sale-window">FLAT 2 % Off</div>

                                            <div class="geodir-category-opt">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                </div>
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very
                                                            Good</strong>27 Reviews </div>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                            <div class="geodir-category-content-title fl-wrap">
                                                <div class="geodir-category-content-title-item">
                                                    <center>

                                                        <h3 class="title-sin_map">
                                                            <a
                                                                href="decoration-details-page.php?openid=<?php echo $read_decoration['id']; ?>&cat_name=<?php echo $read_decoration['category_name']; ?>">
                                                                <?php echo $read_decoration['product_name']; ?>

                                                            </a>
                                                        </h3>
                                                        <div class="geodir-category-location fl-wrap">
                                                            <a href="decoration-details-page.php?openid=<?php echo $read_decoration['id']; ?>&cat_name=<?php echo $read_decoration['category_name']; ?>"
                                                                class="map-item"><b style="font-size: 13px;">per night:
                                                                    &#8377;
                                                                    <?php echo $read_decoration['product_price']; ?>/-
                                                                </b></a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- listing-item end -->
                            </div>
                            <?php } ?>
                            <!--slick-slide-item end-->

                        </div>
                        <!--listing-carousel end-->
                        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                    </div>
                    <!--  carousel end-->
                </section>
                <!-- New Decorations Slider End -->


                <div class="breadcrumbs-fs fl-wrap">
                    <div class="row">
                    <?php
                                $cmanagment="select * from promotional_banner where banner_category='Decorations'";
                                $run=mysqli_query($conn,$cmanagment);
                                $c=1;
                                while($read=mysqli_fetch_array($run)){
                    ?>
                        <div class="col-md-6 col-xs-6" style="padding: 0;">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item" style="padding: 0; margin: 0;">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><a href="<?php echo $read['banner_links'] ; ?>"><img src="images/promoted_banner_image/<?php echo $read['banner_image'];  ?>"
                                        class="img-responsive banner"></a></div>

                            </div>
                            <!-- process-item end -->
                        </div>
                    <?php } ?>
                    </div>
                </div>

                <section class="grey-blue-bg">
                    <!-- container-->

                    <div class="container">
                        <div class="section-title">
                            <!-- <div class="section-title-separator"><span></span></div> -->

                            <a href="catering_listing.php"><h2 style="margin-top: 45px;">Catering</h2></a>
                            <span class="section-separator"></span>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                                    Nulla finibus lobortis pulvinar.</p> -->
                        </div>
                    </div>
                    <!-- container end-->
                    <!-- carousel -->
                    <div class="list-carousel fl-wrap card-listing ">
                        <!--listing-carousel-->
                        <div class="listing-carousel  fl-wrap ">
                            <!--slick-slide-item-->
                            <?php
                                $sql_query="select * from catering_product order by id='decs'";
                                $execute=mysqli_query($conn,$sql_query);
                                while($read_decoration=mysqli_fetch_array($execute))
                            { 
                            ?>
                            <div class="slick-slide-item">
                                <!-- listing-item  -->

                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap" >
                                        <div class="geodir-category-img" style="height: 245px;">
                                            <a href="catering_details_page.php?openid=<?php echo $read_decoration['id']; ?>"><img
                                                    src="images/Catering images/upload/<?php echo $read_decoration['feature_image'];?>" alt=""></a>
                                            <div class="sale-window">FLAT 20% Off</div>
                                            <div class="geodir-category-opt">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                </div>
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very
                                                            Good</strong>27 Reviews </div>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                            <div class="geodir-category-content-title fl-wrap">
                                                <div class="geodir-category-content-title-item">
                                                    <center>
                                                        <h3 class="title-sin_map"><a
                                                                href="catering_details_page.php"><?php echo $read_decoration['prodcut_name'];?> </a>
                                                        </h3>
                                                        <div class="geodir-category-location fl-wrap">
                                                            <a href="#" class="map-item"><b
                                                                    style="font-size: 13px;">price: &#8377;
                                                                    <?php echo $read_decoration['product_price'];?>/-</b></a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <!-- listing-item end -->
                            </div>
                            <?php } ?>
                            <!--slick-slide-item end-->

                        </div>
                        <!--listing-carousel end-->
                        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                    </div>
                    <!--  carousel end-->
                </section>
                <section>
                    <div class="container">
                        <div class="section-title">
                            <div class="section-title-separator"><span></span></div>
                            <h2>Why Choose Us</h2>
                            <span class="section-separator"></span>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>-->
                        </div>
                        <!-- -->


                        <div class="row">
                            <div class="col-md-4">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><i class="fal fa-headset"></i></div>
                                    <h4><a href="#"> Best service guarantee</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-4">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><i class="fal fa-gift"></i></div>
                                    <h4> <a href="#">Exclusive gifts</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                            <div class="col-md-4">
                                <!-- process-item-->
                                <div class="process-item big-pad-pr-item nodecpre">
                                    <span class="process-count"> </span>
                                    <div class="time-line-icon"><i class="fal fa-credit-card"></i></div>
                                    <h4><a href="#"> Become A Host</a></h4>
                                    <p></p>
                                </div>
                                <!-- process-item end -->
                            </div>
                        </div>
                        <!--process-wrap   end-->
                        <div class=" single-facts fl-wrap mar-top">
                            <!-- inline-facts -->
                            <?php
							$get_choose="select * from why_choose_us";
							$run_choose=mysqli_query($conn,$get_choose);
							$read_choose=mysqli_fetch_array($run_choose);
							?>
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fal fa-users"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0"
                                                data-num="<?php echo $read_choose['new_visiters']?>">
                                                <?php echo $read_choose['new_visiters']?>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>New Visiters Every Week</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fal fa-thumbs-up"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0"
                                                data-num="<?php echo $read_choose['happy_customers']?>">
                                                <?php echo $read_choose['happy_customers']?>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Happy customers every year</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fal fa-award"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0"
                                                data-num="<?php echo $read_choose['won_award']?>">
                                                <?php echo $read_choose['won_award']?>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Won Awards</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fal fa-list-ul"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0"
                                                data-num="<?php echo $read_choose['new_listing']?>">
                                                <?php echo $read_choose['new_listing']?>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>New Listing Every Week</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </div>
                </section>

                <section style="margin-bottom: 40px;">
                    <div class="container">
                        <div class="section-title">
                            <div class="section-title-separator"><span></span></div>
                            <h2>Testimonials</h2>
                            <span class="section-separator"></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--slider-carousel-wrap -->
                    <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        <div class="text-carousel single-carousel fl-wrap">
                        <?php
                                $sql_query="select * from testimonial order by id='decs'";
                                $execute=mysqli_query($conn,$sql_query);
                                while($read_decoration=mysqli_fetch_array($execute))
                            { 
                            ?>
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="admin/img/<?php echo $read_decoration['file_input']; ?>" alt=""></div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                    <div class="review-owner fl-wrap"><?php echo $read_decoration['name']; ?> - <span>Happy Client</span></div>
                                    <p> <?php echo $read_decoration['description']; ?> </p>
                                    <a href="https://facebook.com/" target="_blank" class="testim-link">Via Facebook</a>
                                </div>
                            </div>
                            <!--slick-item end -->
                            <?php } ?>
                        </div>
                    </div>
                    <!-- slider-carousel-wrap end -->
                </section>

            </div>
            <!-- content end-->
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
                    <div class="map-modal fl-wrap">
                        <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                    </div>
                    <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
                    <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text"
                        placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                    <div class="map-modal-close"><i class="fal fa-times"></i></div>
                </div>
            </div>
        </div>
        <!--map-modal end -->

        <a class="to-top" style="background-color: black;"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <script type="text/javascript" src="js/map-single.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script>

        if (window.matchMedia("(max-width: 500px)").matches) {
            $('.manual').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrow: true,
            });

        }
        else {
            $('.manual').slick({
                slidesToShow: 8,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrow: true,
            });

        }

    </script>
    <script>
        if (window.matchMedia("(max-width: 500px)").matches) {
            $('.menu_cate').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });

        }
        else {
            $('.menu_cate').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });

        }
    </script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>