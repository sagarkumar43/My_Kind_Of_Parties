
<?php
require_once('config.php');

?>
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from easybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:47:17 GMT -->
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
                        <div class="slideshow-container" data-scrollax="properties: { translateY: '200px' }" >
                            <!-- slideshow-item -->	
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/bg/9.jpg"></div>
                            </div>
                            <!--  slideshow-item end  -->	
                            <!-- slideshow-item -->	
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/bg/13.jpg"></div>
                            </div>
                            <!--  slideshow-item end  -->	
                            <!-- slideshow-item -->	
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/bg/6.jpg"></div>
                            </div>
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
                                        <div class="main-search-input-item location" id="autocomplete-container">
                                            <span class="inpt_dec"><i class="fal fa-map-marker"></i></span>
                                            <input type="text" placeholder="Hotel , City..." class="autocomplete-input" id="autocompleteid2"  value=""/>
                                            <a href="#"><i class="fal fa-dot-circle"></i></a>
                                        </div>
                                        <div class="main-search-input-item main-date-parent main-search-input-item_small">
                                            <span class="inpt_dec"><i class="fal fa-calendar-check"></i></span> <input type="text" placeholder="When" name="main-input-search"   value=""/>
                                        </div>
                                        <div class="main-search-input-item">
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
                                        </div>
                                        <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="fal fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec2" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section id="sec2">
                        <div class="container-fluid">
                                <div class="section-title">
                                    <div class="section-title-separator"><span></span></div>
                                    <h2>Popular Places</h2>
                                    <span class="section-separator"></span>
                                    <p>Explore some of the best tips from around the city from our partners and friends.</p>
                                </div>
                            </div>
                            <!-- portfolio start -->
                            <div class="gallery-items fl-wrap mr-bot spad home-grid">
                                <!-- gallery-item-->
								<?php
								$get_cities="select * from city_managment order by id desc";
								$run_cities=mysqli_query($conn,$get_cities);
								while($read_cities=mysqli_fetch_array($run_cities)){
									
									
									
								?>
								
								
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                           <!-- <div class="listing-counter"><span>79 </span> Hotels</div>-->
                                            <img  src="admin/img/<?php echo $read_cities['file_input'];?>"   alt="" style="height: 270px;">
                                            <div class="listing-item-cat">
                                                <h3><a href="listingpage.php?city=<?php echo $read_cities['city_name']?>"><?php echo $read_cities['city_name'];?></a></h3>
                                                <div class="weather-grid"   data-grcity="Rome"></div>
                                                <div class="clearfix"></div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<?php }?>
                               
                               
                                
                                <!-- gallery-item end-->
                            </div>
                            <!-- portfolio end -->
                          
                    </section>
                    <!-- section end -->
                 
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
                        <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
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

<!-- Mirrored from easybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:14 GMT -->
</html>