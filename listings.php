<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from easybook.kwst.net/listing4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>MYKOP Venue</title>
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
    <style>
        @media only screen and (max-width: 1560px) {
        #mediaqueri1{
            display:none;
        }
    }
    @media only screen and (max-width: 600px) {
        #mediaqueri1{
            display:block;
        }
    }
    @media only screen and (max-width: 600px) {
        #mediaqueri{
            display:none;
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
                <?php
    $q="select * from  banner_image where selected_menu='Venue'";
    $ex=mysqli_query($conn,$q);
    while($read=mysqli_fetch_array($ex))
  {
  ?>
                    <div class="bg par-elem " data-bg="vendor/images/Banner/<?php echo $read['banner_pic']; ?>"
                        data-scrollax="properties: { translateY: '30%' }">
                    </div>
<?php } ?>
                    <div class="overlay">
                    </div>
                    <div class="container">
                        <div class="section-title center-align big-title">
                            <div class="section-title-separator"><span></span></div>
                            <h2><span>Venue's</span></h2>
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
                        <div class="breadcrumbs fl-wrap"><a href="index.php">Home</a><a href="">Listing </a></div>
                    </div>
                </div>
                <!--  section-->
                <section class="grey-blue-bg small-padding" id="sec1">
                    <div class="container">
                        <div class="row">
                            <!--filter sidebar -->
                            <form method="get">
                            <div class="fl-wrap filter-sidebar_item" id="mediaqueri" style="background-color:white;     border-radius: 13px;padding: 10px 0px;">
                                <div class="col-md-4">
                                    <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                        <label>Places</label>
                                        <div class="listsearch-input-item">
                                        <select data-placeholder="City" class="chosen-select" id="getcity" name="getcity">
                                                        <option value="All Places">All Places</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Gurugram">Gurugram</option>
                                                        <option value="Ghaziabad">Ghaziabad</option>
                                                        <option value="Noida">Noida</option>
                                                        <option value="Faridabad">Faridabad</option>
                                                    </select>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-list-search-input-item fl-wrap">
                                        <div class="range-slider-title">Price range</div>
                                        <div class="range-slider-wrap fl-wrap">
                                        <input class="range-slider" data-from="300" data-to="1200"
                                                        data-step="50" data-min="50" data-max="2000" id="pricerange" name="pricerange"
                                                        data-prefix=" &#8377; ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-list-search-input-item fl-wrap">
                                        <button class="header-search-button" name="filter">Search
                                            <i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </div>

</form>
                            <div class="col-md-12" id="mediaqueri1">
                                <div class="mobile-list-controls fl-wrap">
                                    <div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter
                                    </div>
                                </div>
                                <div class="fl-wrap filter-sidebar_item fixed-bar">
                                    <form  method="get">
                                        <div class="filter-sidebar fl-wrap lws_mobile">
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                <label>Places</label>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City" class="chosen-select" id="getcity" name="getcity">
                                                        <option value="All Places">All Places</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Gurugram">Gurugram</option>
                                                        <option value="Ghaziabad">Ghaziabad</option>
                                                        <option value="Noida">Noida</option>
                                                        <option value="Faridabad">Faridabad</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->

                                            <!--col-list-search-input-item end-->

                                            <!--col-list-search-input-item end-->

                                            <!--col-list-search-input-item end-->
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item fl-wrap">
                                                <div class="range-slider-title">Price range1</div>
                                                <div class="range-slider-wrap fl-wrap">
                                                    <input class="range-slider" data-from="300" data-to="1200"
                                                        data-step="50" data-min="50" data-max="2000" id="pricerange" name="pricerange"
                                                        data-prefix=" &#8377; ">
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->


                                            <!--col-list-search-input-item  -->
                                            <div class="col-list-search-input-item fl-wrap">
                                                <input type="submit" class="header-search-button" name="searchbtn" value="filter" />
                                            </div>
                                            <!--col-list-search-input-item end-->
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                            <!--filter sidebar end-->
                            <!--listing -->
                            <div class="col-md-12">
                                <!--col-list-wrap -->
                                <div class="col-list-wrap fw-col-list-wrap post-container">
                                    <!-- list-main-wrap-->
                                    <div class="list-main-wrap fl-wrap card-listing">
                                        <!-- list-main-wrap-opt-->
                                        <div class="list-main-wrap-opt fl-wrap">
                                            <div class="list-main-wrap-title fl-wrap col-title">
                                                <h2>Results For : <span>Venue </span></h2>
                                            </div>
                                            <!-- price-opt-->

                                            <!-- price-opt end-->
                                            <!-- price-opt-->
                                            <div class="grid-opt">
                                                <ul>
                                                    <li><span class="two-col-grid act-grid-opt"><i
                                                                class="fas fa-th-large"></i></span></li>
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
                                            if(isset($_GET["filter"]))
                                            {

                                                $getcity=$_GET["getcity"];
                                                $price=$_GET["pricerange"];
                                                if($getcity=="All Places")
                                                {
                                                    $q="select * from vendor_listing where status='1' order by list_id desc";
                                                }
                                                else{
                                                    $q="select * from vendor_listing where city='$getcity'and status='1' order by list_id desc";
                                                }
                                        
                        
                                            }
                                          
                                            else{
    $q="select * from vendor_listing where status='1' order by list_id desc";
                                            }
    $ex=mysqli_query($conn,$q);
    while($read=mysqli_fetch_array($ex))
  {
  ?>
                                            <div class="listing-item" style="margin-left: 12.5px;">
                                                <article class="geodir-category-listing fl-wrap">
                                                    <div class="geodir-category-img">
                                                        <a
                                                            href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>"><img
                                                                src="vendor/images/listing/<?php echo $read["feature_image"];?>"
                                                            alt=""></a>
                                                        <!-- <div class="listing-avatar"><a href=""><img
                                                                    src="images/avatar/1.jpg" alt=""></a>
                                                            <span class="avatar-tooltip">Added By <strong>
                                                                    <?php echo $read["vendor_name"]; ?>
                                                                </strong></span>
                                                        </div> -->
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
                                                                <h3 class="title-sin_map"><a
                                                                        href="listingdetailpage.php?openid=<?php echo $read['list_id'] ?>">
                                                                        <?php echo $read["listing_name"]; ?>
                                                                    </a></h3>
                                                                <div class="geodir-category-location fl-wrap"><a href=""
                                                                        class="map-item"><i
                                                                            class="fas fa-map-marker-alt"></i>
                                                                        <?php echo $read["address"]; ?>
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <?php echo $read["details"]; ?>
                                                        </p>
                                                        <ul class="facilities-list fl-wrap">
                                                            <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                            <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                            <li><i class="fal fa-smoking-ban"></i><span>Non-smoking
                                                                    Rooms</span></li>
                                                            <li><i class="fal fa-utensils"></i><span> Restaurant</span>
                                                            </li>
                                                        </ul>
                                                        <div class="geodir-category-footer fl-wrap">
                                                            <div class="geodir-category-price">Awg/Night <span> &#8377;
                                                                    <?php echo $read["price"] ?>
                                                                </span></div>
                                                            <div class="geodir-opt-list">
                                                                <a href="#" class="single-map-item"
                                                                    data-newlatitude="40.72956781"
                                                                    data-newlongitude="-73.99726866"><i
                                                                        class="fal fa-map-marker-alt"></i><span
                                                                        class="geodir-opt-tooltip">On the map</span></a>
                                                                <a href="#" class="geodir-js-favorite"><i
                                                                        class="fal fa-heart"></i><span
                                                                        class="geodir-opt-tooltip">Save</span></a>
                                                                <a href="#" class="geodir-js-booking"><i
                                                                        class="fal fa-exchange"></i><span
                                                                        class="geodir-opt-tooltip">Find
                                                                        Directions</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- listing-item end -->
                                            <?php } ?>
                                        </div>
                                        <!-- listing-item-container end-->
                                        <!-- <a class="load-more-button" href="#">Load more <i class="fal fa-spinner"></i>
                                        </a> -->
                                    </div>
                                    <!-- list-main-wrap end-->
                                </div>
                                <!--col-list-wrap end -->
                            </div>
                            <!--listing  end-->
                        </div>
                        <!--row end-->
                    </div>
                    <div class="limit-box fl-wrap"></div>
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
    <script>
    function filter()
{ 
    place=document.getElementById("getcity").value;
    price=document.getElementById("pricerange").value;

    $.ajax({
        url : 'display.php',
        data:{"place":place,"price":price},
        type: 'GET',

        success: function(data){
            $('#filterresult').html(data);
        }
    });
}
</script>
</body>

<!-- Mirrored from easybook.kwst.net/listing4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:31 GMT -->

</html>