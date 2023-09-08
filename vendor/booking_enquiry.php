<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/hotel-booking-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:16:03 GMT -->
<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

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
           <?php
		   include('inc/left_side.php');
		   ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Booking Enquiry</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Booking Enquiry</h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Place</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Home Appliances Repair & Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Packers and Movers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Security System Dealers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Home Appliances Repair & Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Packers and Movers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Security System Dealers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+91 32111 65412</td>
                                                    <td>enquiry@mail.com</td>
                                                    <td>Australia</td>
                                                    <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/hotel-booking-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:16:03 GMT -->
</html>