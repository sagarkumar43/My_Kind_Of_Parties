
<?php
require_once('config.php');

$city_name=$_GET['city'];

?>
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from easybook.kwst.net/listing5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->
<head>
        <!--=============== basic  ===============-->
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
		   include_once('header.php');
		   ?>
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/9.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="section-title-separator"><span></span></div>
                              <h2>My Kind Of Parties</h2>
                                    <span class="section-separator"></span>                                    
                                    <h3>Let's start exploring the world together with MKOP</h3>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="index.php">Home</a><a href="#">Listing </a></div>
                        </div>
                    </div>
                    <!--section -->
                    <section class="grey-blue-bg small-padding" id="sec1">
                        <div class="container">
                            <div class="row">
                                <!--listing -->
                                <div class="col-md-12">
                                    <div class="mobile-list-controls fl-wrap mar-bot-cont">
                                        <div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter</div>
                                    </div>
                                    <!--list-wrap-search   -->
                                    <div class="list-wrap-search lisfw fl-wrap lws_mobile">
                                        <div class="container">
                                            <div class="row">
                                                <!-- col-list-search-input-item -->
                                                <div class="col-md-4">
                                                    <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                        <label>Places</label>
                                                        <div class="listsearch-input-item">
                                                            <select data-placeholder="City" class="chosen-select" >
                                                                 <option>All Places</option>
                                                        <option>Delhi</option>
                                                        <option>Gurugram</option>
                                                        <option>Ghaziabad</option>
                                                        <option>Noida</option>
                                                        <option>Faridabad</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- col-list-search-input-item end -->
                                                <!-- col-list-search-input-item -->
                                             <div class="col-md-4">

                                                        <div class="range-slider-title">Price range</div>
                                                        <div class="range-slider-wrap fl-wrap">
                                                            <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
                                                        </div>
                                                   
												</div>	
                                                <!-- col-list-search-input-item end -->
												  <div class="col-md-4">
												
                                                        <div class="col-list-search-input-item fl-wrap">
                                                            <button class="header-search-button" onclick="#">Search <i class="far fa-search"></i></button>
                                                        </div>
                                                   
													</div>
                                            </div>
                                            <div class="search-opt-wrap fl-wrap">
                                                <div class="search-opt-wrap-container">
                                                   
                                                </div>
                                               <!-- <div class="show-more-filters act-hiddenpanel color3-bg"><i class="fal fa-plus"></i><span>More options</span></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--list-wrap-search end -->              
                                    <!--col-list-wrap -->
                                    <div class="col-list-wrap fw-col-list-wrap">
                                        <!-- list-main-wrap-->
                                        <div class="list-main-wrap fl-wrap card-listing">
                                            <!-- list-main-wrap-opt-->
                                            <div class="list-main-wrap-opt fl-wrap">
                                                <div class="list-main-wrap-title fl-wrap col-title">
                                                    <h2>Results For : <span><?php echo $city_name?> </span></h2>
                                                </div>
                                                <!-- price-opt-->
                                               
                                                <!-- price-opt end-->
                                                <!-- price-opt-->
                                                <div class="grid-opt">
                                                    <ul>
                                                        <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                                                        <li><span class="one-col-grid"><i class="fas fa-bars"></i></span></li>
                                                    </ul>
                                                </div>
                                                <!-- price-opt end-->                               
                                            </div>
                                            <!-- list-main-wrap-opt end-->
                                            <!-- listing-item-container -->
                                            <div class="listing-item-container init-grid-items fl-wrap three-columns-grid">
                                                <!-- listing-item  -->
												
												<?php
												$get_list="select * from vendor_listing where city='$city_name'";
												$run_list=mysqli_query($conn,$get_list);
												while($read_listing=mysqli_fetch_array($run_list)){
												?>
												
												<div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
<a href="listingdetailpage.php?id=<?php echo $read_listing['list_id']?>"><img src="vendor/images/listing/<?php echo $read_listing['feature_image']?>" style="height:230px;" alt=""></a>
                                                <!--<div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                                </div>
                                                <div class="sale-window">Sale 20%</div>-->
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <div class="rate-class-name">
                                                        <div class="score"><strong>Very Good</strong>27 Reviews </div>
                                                        <span>5.0</span>                                             
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listingdetailpage.php?id=<?php echo $read_listing['list_id']?>"><?php echo $read_listing['listing_name']?></a></h3>
                                                        <div class="geodir-category-location fl-wrap">
<a href="listingdetailpage.php?id=<?php echo $read_listing['list_id']?>" class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo $read_listing['address']?></a></div>
                                                    </div>
                                                </div>
                                             
                                               <!-- <ul class="facilities-list fl-wrap">
                                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                </ul>-->
                                                <div class="geodir-category-footer fl-wrap">
<div class="geodir-category-price">₹ <?php echo $read_listing['price'];?></div>
                                                  
                                                </div>
                                            </div>
                                        </article>
                                    </div>
												
												
												<?php }?>
												
												
                                                <!-- listing-item end -->                        
                                            </div>
                                            <!-- listing-item-container end-->
                                            <!-- pagination-->
                                            <div class="pagination">
                                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                                <a href="#" >1</a>
                                                <a href="#" class="current-page">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- pagination end-->
                                        </div>
                                        <!-- list-main-wrap end-->
                                    </div>
                                    <!--col-list-wrap end -->
                                </div>
                                <!--listing  end-->
                            </div>
                            <!--row end-->
                        </div>
                    </section>
                    <!--section end -->
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
                        <h3><i class="fal fa-location-arrow"></i><a href="#">  Title</a></h3>
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
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
        <script type="text/javascript" src="js/map-single.js"></script>         
    </body>

<!-- Mirrored from easybook.kwst.net/listing5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->
</html>