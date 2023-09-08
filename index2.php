<?php
require_once('config.php');

?>
<!DOCTYPE HTML>
<html lang="en">

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
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="pin" style="width:7%">
                <img src="images/black giraffe.png" alt="" style="width:100%">
        </div>
    </div>
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <?php
		   include('header.php');
		   ?>
        <!--  header end -->
        <!--  wrapper  -->
        <div id="wrapper">
            <!-- content-->
            <div class="content">
                <!--section -->
                <section class="hero-section" data-scrollax-parent="true" id="sec1">
                    <div class="hero-parallax">
                        <div class="slideshow-container" data-scrollax="properties: { translateY: '200px' }">
                            <!-- slideshow-item -->
                            <?php
    $q="select * from  banner_image where selected_menu='Home Page'";
    $ex=mysqli_query($conn,$q);
    while($read=mysqli_fetch_array($ex))
  {
  ?>
                                <div class="slideshow-item">
                                    <div class="bg" data-bg="vendor/images/Banner/<?php echo $read['banner_pic']; ?>"></div>
                                </div>
                                <?php  } ?>
                            <!--  slideshow-item end  -->
                            <!-- slideshow-item -->
                            <!-- <div class="slideshow-item">
                                <div class="bg" data-bg="images/bg/13.jpg"></div>
                            </div> -->
                            <!--  slideshow-item end  -->
                            <!-- slideshow-item -->
                            <!-- <div class="slideshow-item">
                                <div class="bg" data-bg="images/bg/6.jpg"></div>
                            </div> -->
                            <!--  slideshow-item end  -->
                        </div>
                        <div class="overlay op7"></div>
                    </div>
                    <div class="hero-section-wrap fl-wrap">
                        <div class="container">
                            <div class="home-intro">
                                <div class="section-title-separator"><span></span></div>
                                <h2>My Kind Of Parties</h2>
                                <span class="section-separator"></span>
                                <h3>Let's start exploring the world together with MKOP</h3>
                            </div>
                            <div class="main-search-input-wrap">
                                <div class="main-search-input fl-wrap">
                                    <div class="main-search-input-item location" id="autocomplete-container"
                                        style="width: 100%;">

                                        <input type="text" placeholder="Search... Cake, Decoration, Venue, Entertainment, Events" />

                                    </div>
                                    <!-- <div class="main-search-input-item main-date-parent main-search-input-item_small">
                                            <span class="inpt_dec"><i class="fal fa-calendar-check"></i></span> <input type="text" placeholder="When" name="main-input-search"   value=""/>
                                        </div> -->
                                    <!-- <div class="main-search-input-item">
                                            <div class="qty-dropdown fl-wrap">
                                                <div class="qty-dropdown-header fl-wrap"><i class="fal fa-users"></i> Persons</div>
                                                <div class="qty-dropdown-content fl-wrap">
                                                    <div class="quantity-item">
                                                        <label><i class="fas fa-male"></i> Adults</label>
                                                        <div class="quantity">
                                                            <input type="number" min="1" max="3" step="1" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="quantity-item">
                                                        <label><i class="fas fa-child"></i> Children</label>
                                                        <div class="quantity">
                                                            <input type="number" min="0" max="3" step="1" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <button class="main-search-button color2-bg"
                                        onclick="window.location.href='listingpage.php'">Search <i
                                            class="fal fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-sec-link">
                        <div class="`conta`iner"><a href="#sec2" class="custom-scroll-link color-bg"><i
                                    class="fal fa-angle-double-down"></i></a></div>
                    </div>
                </section>
                <!-- section end -->
                <!--section -->


                <div class="container">
                    <div class="section-title">
                        <div class="section-title-separator"><span></span></div>
                        <h2>Services We Provide</h2>
                        <span class="section-separator"></span>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/vanue.png" style="height:111px;"></div>
                                <h4><a href="listings.php"> Venue</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/decor.png" style="height:111px;"></div>
                                <h4> <a href="decoration_listing.php">Decoration</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item nodecpre">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/cerering.png" style="height:111px;"></div>
                                <h4><a href="#"> Catering</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/cake.png" style="height:111px;"></div>
                                <h4><a href="#"> Cake</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/entertainment1.png" style="height:111px;">
                                </div>
                                <h4> <a href="#">Entertainment</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                        <div class="col-md-4">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item nodecpre">
                                <span class="process-count"> </span>
                                <div class="time-line-icon"><img src="images/events.png" style="height:111px;"></div>
                                <h4><a href="#"> Events</a></h4>
                                <p></p>
                            </div>
                            <!-- process-item end -->
                        </div>
                    </div>
                </div>


                <!-- Venue Section -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <?php
    $q="select * from vendor_listing where status='1' order by list_id desc";
    $ex=mysqli_query($conn,$q);
    while($read=mysqli_fetch_array($ex))
  {     
  ?>
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>"><img src="vendor/images/listing/<?php echo $read["feature_image"];?>" alt=""></a>
                                                           
                                                    <div class="listing-counter">Per Night <strong> &#8377;
                                                    <?php echo $read["price"]; ?> /-</strong></div>
                                                    <?php
                                                    if(empty($read['discount_price']))
                                                    {
                                                
                                                    }
                                                    else {
                                                      
                                                    ?>
                                                    <div class="sale-window">FLAT <?php echo $read['discount_price']; ?> % OFF</div>
                                                 <?php } ?>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>"><?php echo $read["listing_name"]; ?></a></h4>

                                                        <div class="geodir-category-location"><a href="#"
                                                                class="single-map-item" data-newlatitude="40.90261483"
                                                                data-newlongitude="-74.15737152"><i
                                                                    class="fas fa-map-marker-alt"></i><?php echo $read["city"]; ?>, India</a></div>
                                                              
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                       
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Venue</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="listings.php" class="btn  color2-bg float-btn">View All Places<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end -->

                <!-- Decorations Section -->
                <!--section -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Decorations</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="decoration_listing.php" class="btn  color2-bg float-btn">View All
                                            Decorations<i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <?php
    $sql_query="select * from product_mgmt order by id='decs'";
    $execute=mysqli_query($conn,$sql_query);
    while($read_decoration=mysqli_fetch_array($execute))
  { 
  ?>
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="decoration-details-page.php?openid=<?php echo $read_decoration['id']; 
                                                    ?>&cat_name=<?php echo $read_decoration['category_name']; ?>"><img
                                                            src="admin/img/product_img/<?php echo $read_decoration['feature_image']; ?>" alt=""></a>
                                                    <div class="listing-counter">Price <strong> &#8377;
                                                    <?php echo $read_decoration['product_price']; ?>/-</strong></div>
                                                    <div class="sale-window">Sale 20%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="decoration-details-page.php?openid=<?php echo $read_decoration['id']; ?>&cat_name=<?php echo $read_decoration['category_name']; ?>"><?php echo $read_decoration['product_name']; ?></a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Catering Section -->
                <!-- section end -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="listing-single.html"><img src="images/cat/g1.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Per Night <strong> &#8377; 85
                                                            /-</strong></div>
                                                    <div class="sale-window">Sale 20%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="listing-single.html">Moonlight Hotel</a></h4>

                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img src="images/cat/g40.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Per Night <strong> &#8377; 80
                                                            /-</strong></div>
                                                    <div class="sale-window big-sale">Sale 50%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Holiday
                                                                Home</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>2 Reviews </div>
                                                            <span>4.7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img src="images/cat/g50.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Per Night <strong> &#8377; 120
                                                            /-</strong></div>
                                                    <div class="sale-window">Sale 10%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Grand
                                                                Hero Palace</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>31 Reviews </div>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Catering</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="exploringcities.php" class="btn  color2-bg float-btn">View All
                                            Catering<i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Cakes Section -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Cakes</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="exploringcities.php" class="btn  color2-bg float-btn">View All Cakes<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="listing-single.html"><img
                                                            src="images/cake/butterscotch-cake-A.jpg" alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 85/-</strong>
                                                    </div>
                                                    <div class="sale-window">Sale 20%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="listing-single.html">Butterscotch Delight</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img
                                                            src="images/cake/Fresh-Fruit-Cake.jpg" alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 80/-</strong>
                                                    </div>
                                                    <div class="sale-window big-sale">Sale 50%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Fruit
                                                                Frenzy</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>2 Reviews </div>
                                                            <span>4.7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img
                                                            src="images/cake/red-velvet-cake-cake1631redv-A.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 120/-</strong>
                                                    </div>
                                                    <div class="sale-window">Sale 10%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Creamy
                                                                Red Velvet Cake</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>31 Reviews </div>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Entertainment Section -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="listing-single.html"><img
                                                            src="images/enter/best-campfire-guitar-songs.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 85/-</strong>
                                                    </div>
                                                    <div class="sale-window">Sale 20%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="listing-single.html">Moonlight Hotel</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img
                                                            src="images/enter/GettyImages-73203070.0.jpg" alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 80/-</strong>
                                                    </div>
                                                    <div class="sale-window big-sale">Sale 50%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Holiday
                                                                Home</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>2 Reviews </div>
                                                            <span>4.7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img
                                                            src="images/enter/strat_thrillride_7dd27cb6-56ab-4543-bd6a-6ca126dda15f.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Price <strong>&#8377; 120/-</strong>
                                                    </div>
                                                    <div class="sale-window">Sale 10%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Grand
                                                                Hero Palace</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>31 Reviews </div>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Entertainment</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="exploringcities.php" class="btn  color2-bg float-btn">View All
                                            Entertainment<i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Events Section -->
                <section class="parallax-section" data-scrollax-parent="true">
                    <!-- <div class="bg"  data-bg="images/liprofile-656x369.png" data-scrollax="properties: { translateY: '100px' }"></div> -->
                    <div class="overlay op7" style="background-color:white;"></div>
                    <!--container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="colomn-text fl-wrap pad-top-column-text_small">
                                    <div class="colomn-text-title">
                                        <h3 style="color:black;">Popular Events</h3>
                                        <p style="color:black;">Start Exploring with MYKOP</p>
                                        <a href="exploringcities.php" class="btn  color2-bg float-btn">View All Events<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!--light-carousel-wrap-->
                                <div class="light-carousel-wrap fl-wrap">
                                    <!--light-carousel-->
                                    <div class="light-carousel">
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img card-post">
                                                    <a href="listing-single.html"><img
                                                            src="images/event/wedding-events-management.jpg" alt=""></a>
                                                    <div class="listing-counter">Package Price <strong>&#8377;
                                                            85/-</strong></div>
                                                    <div class="sale-window">Sale 20%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Wedding
                                                                Event Management</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>8 Reviews </div>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img
                                                            src="images/event/sports-events.jpg" alt=""></a>
                                                    <div class="listing-counter">Package Price <strong>&#8377;
                                                            80/-</strong></div>
                                                    <div class="sale-window big-sale">Sale 50%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a href="listing-single.html">Sports
                                                                Events</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>2 Reviews </div>
                                                            <span>4.7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                        <!--slick-slide-item-->
                                        <div class="slick-slide-item">
                                            <div class="hotel-card fl-wrap title-sin_item">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html"><img src="images/event/exhibition.jpg"
                                                            alt=""></a>
                                                    <div class="listing-counter">Package Price <strong>&#8377;
                                                            120/-</strong></div>
                                                    <div class="sale-window">Sale 10%</div>
                                                    <div class="geodir-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"></div>
                                                        <h4 class="title-sin_map"><a
                                                                href="listing-single.html">Exhibition Events</a></h4>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong> Good</strong>31 Reviews </div>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--slick-slide-item end-->
                                    </div>
                                    <!--light-carousel end-->
                                    <div class="fc-cont  lc-prev" style="color: black;"><i
                                            class="fal fa-angle-left"></i></div>
                                    <div class="fc-cont  lc-next" style="color: black;"><i
                                            class="fal fa-angle-right"></i></div>
                                </div>
                                <!--light-carousel-wrap end-->
                            </div>
                        </div>
                    </div>
                </section>
                <!--section -->
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
                <!-- section end -->
                <!--section -->
                <!-- <section class="color-bg hidden-section">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- -->
                <!--    <div class="colomn-text  pad-top-column-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>Our App   Available Now</h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i> Download for iPhone</a>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i> Download for Android</a>
                                        </div>
                                    </div>
                                    <!--process-wrap   end-->
                <!--   </div>
                                <div class="col-md-6">
                                    <div class="collage-image">
                                        <img src="images/api.png" class="main-collage-image" alt="">
                                        <div class="images-collage-title color3-bg">Easy<span>Book</span></div>
                                        <div class="collage-image-min cim_1"><img src="images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-min cim_2"><img src="images/api/2.jpg" alt=""></div>
                                        <div class="collage-image-min cim_3"><img src="images/api/3.jpg" alt=""></div>
                                        <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                                        <div class="collage-image-btn color2-bg">Booking now</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>--->
                <!-- section end -->
                <!--section -->




                <section>
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
                            <!-- slick-item -->
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                    <div class="review-owner fl-wrap">Milka Antony - <span>Happy Client</span></div>
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                        cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit
                                        amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut
                                        laoreet dolore magna aliquam erat."</p>
                                    <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                            </div>
                            <!--slick-item end -->
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                    <div class="review-owner fl-wrap">Milka Antony - <span>Happy Client</span></div>
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                        cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit
                                        amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut
                                        laoreet dolore magna aliquam erat."</p>
                                    <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                            </div>
                            <!--slick-item end -->
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                    <div class="review-owner fl-wrap">Milka Antony - <span>Happy Client</span></div>
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                        cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit
                                        amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut
                                        laoreet dolore magna aliquam erat."</p>
                                    <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                            </div>
                            <!--slick-item end -->
                            <!--slick-item -->
                            <div class="slick-item">
                                <div class="text-carousel-item">
                                    <div class="popup-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                    <div class="review-owner fl-wrap">Milka Antony - <span>Happy Client</span></div>
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                        cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit
                                        amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut
                                        laoreet dolore magna aliquam erat."</p>
                                    <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                            </div>
                            <!--slick-item end -->
                            <!-- slick-item end -->
                            <!-- slick-item -->
                        </div>
                    </div>
                    <!-- slider-carousel-wrap end -->
                </section>
                <!-- section end-->
                <!--<section class="parallax-section" data-scrollax-parent="true">
<div class="bg"  data-bg="images/bg/14.jpg" data-scrollax="properties: { translateY: '100px' }"></div>
<div class="overlay"></div>
<!--container-->
                <!--<div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- column text-->
                <!-- <div class="colomn-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>The owner of the   or business ?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                            <a href="dashboard-add-listingpage.php" class="btn  color-bg float-btn">Add your  <i class="fal fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <!--column text   end-->
                <!-- </div>
                            </div>
                        </div>
                    </section>-->
                <!-- section end -->
                <!--section -->

            </div>
            <!-- content end-->
        </div>
        <!--wrapper end -->
        <!--footer -->
        <?php
		   include('footer.php');
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
                    <h3><i class="fal fa-location-arrow"></i><a href="#"> Title</a></h3>
                    <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text"
                        placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                    <div class="map-modal-close"><i class="fal fa-times"></i></div>
                </div>
            </div>
        </div>
        <!--map-modal end -->

        <a class="to-top" style="display: inline;background: black;"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <script type="text/javascript" src="js/map-single.js"></script>
    <script>

    </script>
</body>

<!-- Mirrored from easybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:14 GMT -->

</html>