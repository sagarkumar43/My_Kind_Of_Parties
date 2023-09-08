<?php
$cate=$_GET['categories'];
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from easybook.kwst.net/listing4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>MYKOP <?php echo $cate ?> </title>
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
            padding: 150px 0;
            overflow: hidden;
        }

        .img {
            margin-left: 45px;
            padding-bottom: 10px;
        }

        @media only screen and (max-width: 500px) {
            .img {
                margin-left: 28px;
            }
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
                <!--  section  -->
                <section class="parallax-section single-par" data-scrollax-parent="true">
                    <div class="bg par-elem " data-bg="" data-scrollax="properties: { translateY: '30%' }">
                        <div class="hero-parallax">
                            <div class="slideshow-container" data-scrollax="properties: { translateY: '200px' }">
                                <!-- slideshow-item -->
                                <?php
    $q="select * from  banner_image where selected_menu='Decorations'";
    $ex=mysqli_query($conn,$q);
    while($read=mysqli_fetch_array($ex))
  {
  ?>
                                <div class="slideshow-item">
                                    <div class="bg" data-bg="vendor/images/Banner/<?php echo $read['banner_pic']; ?>">
                                    </div>
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
                    </div>



                    <div class="overlay">
                    </div>
                    <div class="container">
                        <div class="section-title center-align big-title">
                            <div class="section-title-separator"><span></span></div>
                            <!-- <h3></h3> -->
                            <h2><span>
                                    <?php echo $cate ?>
                                </span></h2>
                            <h2><span style="font-size: 25px;">Caterinig's</span></h2>
                            <span class="section-separator"></span>
                            <h4>Explore Places With MYKOP</h4>
                        </div>
                    </div>
                    <div class="header-sec-link">
                        <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i
                                    class="fal fa-angle-double-down"></i></a></div>
                    </div>
                </section>
                <!--  section  end-->
                <div class="breadcrumbs-fs fl-wrap">
                    <div class="container">
                        <div class="manual">
                            <?php
                                    $q="select * from  categories_catering";
                                    $ex=mysqli_query($conn,$q);
                                    while($read=mysqli_fetch_array($ex))
                                { ?>
                            <div>
                                <a href="catering_category_page.php?categories=<?php echo $read['category_name'] ?>">
                                    <img src="images/Catering images/<?php echo $read['category_image']; ?>" alt=""
                                        class="img">
                                    <label for="" style="">
                                        <?php echo $read['category_name']; ?>
                                    </label>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--  section-->

                <div class="list-main-wrap fl-wrap card-listing">
                    <!-- list-main-wrap-opt-->
                    <div class="list-main-wrap-opt fl-wrap">
                        <!-- price-opt-->

                        <!-- price-opt end-->
                        <!-- price-opt-->
                        <div class="grid-opt">
                            <ul>
                                <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                                <li><span class="one-col-grid"><i class="fas fa-bars"></i></span>
                                </li>
                            </ul>
                        </div>
                        <!-- price-opt end-->
                    </div>
                    <!-- list-main-wrap-opt end-->
                    <!-- listing-item-container -->
                    <div class="listing-item-container init-grid-items fl-wrap">
                        <!-- listing-item  -->
                        <?php
                                            $q="select * from catering_product where catering_category='$cate'";
                                            $ex=mysqli_query($conn,$q);
                                            while($read=mysqli_fetch_array($ex))
                                        { ?>

                        <div class="listing-item" style="margin-left: 12.5px;">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <a href="catering_details_page.php?openid=<?php echo $read['id']; ?>&cat_name=<?php echo $read['catering_category']; ?>"><img
                                            src="images/Catering images/upload/<?php echo $read['feature_image']; ?>" style="height: 367px"></a>
                                    <div class="sale-window">FLAT 50% % OFF</div>

                                    <div class="geodir-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <div class="rate-class-name">
                                            <div class="score"><strong>Very Good</strong>27 Reviews
                                            </div>
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="catering_details_page.php?openid=<?php echo $read['id']; ?>&cat_name=<?php echo $read['catering_category']; ?>"><?php echo $read['prodcut_name']; ?></a></h3>
                                            <div class="geodir-opt-list">



                                            </div>
                                            <div class="geodir-category-location fl-wrap"><a
                                                    href="catering_details_page.php?openid=<?php echo $read['id']; ?>&cat_name=<?php echo $read['catering_category']; ?>">
                                                    <div class="geodir-category-price"><span> Rs
                                                    <?php echo $read['product_price']; ?> /-
                                                        </span></div>
                                                </a></div>

                                        </div>
                                    </div>

                                    <p>
                                        <br>
                                        <a href="catering_details_page.php?openid=<?php echo $read['id']; ?>&cat_name=<?php echo $read['catering_category']; ?>" class="btn btn-primary"
                                            style="background:linear-gradient(to right, #ffc800, #1b1e1d, #354078);border: none;">
                                            View More Details</a>
                                    </p>


                                </div>
                            </article>
                        </div>
                        <?php } ?>

                        <!-- listing-item end -->

                    </div>

                    <!-- listing-item-container end-->
                    <!-- <a class="load-more-button" href="#">Load more <i class="fal fa-spinner"></i>
                                        </a> -->
                </div>
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
</body>

<!-- Mirrored from easybook.kwst.net/listing4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->

</html>