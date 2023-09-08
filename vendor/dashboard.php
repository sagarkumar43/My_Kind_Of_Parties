<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

if($_SESSION['v_status']=='Pending')
{
header('location:dashboard2.php');
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Vendor Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
   <?php
   include('inc/header.php');
   ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
             
                <!--== LEFT MENU ==-->
<?php
include('inc/left_side.php');
?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="dashboard.php"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="dashboard.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
					<div class="ad-v2-hom-info-inn">
						<ul>
							<li>
								<div class="ad-hom-box ad-hom-box-1">
									<span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i>Places</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-2">
									<span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Earnings</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-3">
									<span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i>Booking</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-4">
									<span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Enquiry</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
						</ul>
					</div>
                </div>
              
                <!--== User Details ==-->
                
                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Listing Enquiry ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Listing Enquiry</h4>
                                    <p>My Kind of Parties</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-listings"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-listings" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Listing</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>Enquiry</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-1" checked="checked" />
                                                        <label for="filled-in-box-1"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Taaj Club House</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>12 may</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">15</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-2" checked="checked" />
                                                        <label for="filled-in-box-2"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Hotel</span><span class="list-enq-city">Rio,Brazil</span>
                                                    </td>
                                                    <td>07 aug</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-3" checked="checked" />
                                                        <label for="filled-in-box-3"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Pales</span><span class="list-enq-city">Chennai,India</span>
                                                    </td>
                                                    <td>18 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">35</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-4" />
                                                        <label for="filled-in-box-4"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lake Palace Hotel</span><span class="list-enq-city">Beijing,China</span>
                                                    </td>
                                                    <td>09 apr</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-5" />
                                                        <label for="filled-in-box-5"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">First Class Hotel</span><span class="list-enq-city">Berlin,Germany</span>
                                                    </td>
                                                    <td>21 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">18</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--== Hotel Bookings ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4> Bookings</h4>
                                    <p>My Kind of Parties</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-hotel"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-hotel" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Listing</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>Enquiry</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-1" />
                                                        <label for="ch2-1"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Taaj Club House</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>12 may</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">15</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-2" />
                                                        <label for="ch2-2"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Hotel</span><span class="list-enq-city">Rio,Brazil</span>
                                                    </td>
                                                    <td>07 aug</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-3" />
                                                        <label for="ch2-3"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Pales</span><span class="list-enq-city">Chennai,India</span>
                                                    </td>
                                                    <td>18 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">35</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-4" />
                                                        <label for="ch2-4"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lake Palace Hotel</span><span class="list-enq-city">Beijing,China</span>
                                                    </td>
                                                    <td>09 apr</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-5" />
                                                        <label for="ch2-5"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">First Class Hotel</span><span class="list-enq-city">Berlin,Germany</span>
                                                    </td>
                                                    <td>21 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">18</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Latest Activity ==-->
             
                <!--== User Details ==-->
            
            </div>

        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
   

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:15:01 GMT -->
</html>