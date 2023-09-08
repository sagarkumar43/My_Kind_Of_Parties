

<?php
session_start();
require_once('config.php');	

$listing_name=$_SESSION['listing_name'];
$list_id=$_SESSION['list_id'];
$price=$_SESSION['price'];
$from_date=$_SESSION['from_date'];
$guest=$_SESSION['guest'];
$to_date=$_SESSION['to_date'];

$get_listing="select * from vendor_listing where list_id='$list_id'";
$run_listing=mysqli_query($conn,$get_listing);
$read_listing=mysqli_fetch_array($run_listing);


?>
<!DOCTYPE HTML>
<html lang="en">
    
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
                   
                  
                     
    <div class="container" style="    margin-top: 85px;">    
	<br><br><br>
	<h1 style="font-size:30px">Confirm To Processed</h1>
	<br><br>
        <div id="add-review" class="add-review-box">
                                                <!-- Review Comment -->
                                                <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" style="margin-bottom: 50px;">
                                                    <fieldset>
                                                       
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Place Name</label>
                                                                <input type="text" placeholder="" value="<?php echo $listing_name?>" readonly />
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label>Address</label>
                                                                <input type="text" placeholder="Email Address*" value="<?php echo $read_listing['address']?>" readonly />
                                                            </div>
                                                        </div>
														  <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Price</label>
                                                                <input type="text" placeholder="" value="<?php echo $price?>" readonly/>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label>Guest</label>
                                                                <input type="text" placeholder="Email Address*" value="<?php echo $guest?>"/>
                                                            </div>
                                                        </div>
														  <div class="row">
                                                            <div class="col-md-6">
                                                                <label>From Date</label>
                                                                <input type="date" placeholder="" value="<?php echo $from_date?>"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label>To Date</label>
                                                                <input type="date" placeholder="Email Address*" value="<?php echo $to_date?>"/>
                                                            </div>
                                                        </div>
                                                      
                                                    </fieldset>
                                                    <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit <i class="fal fa-paper-plane"></i></button>
                                                </form>
                                            </div>
    </div>

                   
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
<script>

</script>		
    </body>

<!-- Mirrored from easybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 09:48:14 GMT -->
</html>