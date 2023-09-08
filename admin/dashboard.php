<?php 
session_start();
require_once('inc/config.php');
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>MyKOP Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- Preloader -->
    
<?php include 'inc/header.php';?>

            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        
        <!-- Left navbar-header -->
<?php include 'inc/left-sidebar.php';?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">My Kind of Parties Dashboard</h4> </div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <!--<ol class="breadcrumb">
                            <li><a href="index.php">Institute-Mgmt</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title" style="color:green;">Total Vendors</h3>
                            <div class="text-right"> <span class="text-muted" style="color:red;">Total vendors</span>
                             <!--   <h1><sup><i class="ti-arrow-up text-success"></i></sup> &#x20B9;1200</h1>-->
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title" style="color:green;">Total Amenty</h3>
                            <div class="text-right"> <span class="text-muted">Total Amenty</span>
                               <!-- <h1><sup><i class="ti-arrow-down text-danger"></i></sup>40</h1>-->
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title" style="color:green;">Total Cities</h3>
                            <div class="text-right"> <span class="text-muted">Total Cities</span>
                               <!-- <h1><sup><i class="ti-arrow-up text-info"></i></sup> 40</h1>-->
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title" style="color:green;">Totel Enquries</h3>
                            <div class="text-right"> <span class="text-muted">Today Collected Fees</span>
                                <!--<h1><sup><i class="ti-arrow-up text-inverse"></i></sup> &#x20B9;12000</h1>-->
                            </div>
                           
                        </div>
                    </div>
                </div>
              <center>  <h1>My Kind of Parties</h1></center>
              <center><img src="../vendor/images/MyKOP_logo1.png""></center>
                <!-- /.row -->
                <!-- .row -->
                <!--<div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">University Earnings</h3>
                            <span class="text-muted">All Earnings are in million $</span>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #021d3a;"></i>Arts</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00a5e5;"></i>Commerce</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00c292;"></i>Science</h5> </li>
                            </ul>
                            <div id="morris-bar-chart" style="height:372px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-15">
                                    <h3 class="box-title">Earning From Medical college</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-info">$64057</h1>
                                            <p class="text-muted">APRIL 2017</p> <b>(150 Sales)</b>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sparkline2dash" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="white-box bg-info m-b-15">
                                    <h3 class="text-white box-title">Earning From Engineering college</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-white">$30447</h1>
                                            <p class="light_op_text">APRIL 2017</p> <b class="text-white">(110 Sales)</b>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sales1" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->
              <!--  <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <img class="img-responsive" alt="user" src="plugins/images/big/c2.jpg">
                        <div class="white-box">
                            <h4>PHP Development Course</h4>
                            <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <img class="img-responsive" alt="user" src="plugins/images/big/c1.jpg">
                        <div class="white-box">
                            <h4>ios Development Course</h4>
                            <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <img class="img-responsive" alt="user" src="plugins/images/big/c4.jpg">
                        <div class="white-box">
                            <h4>Android Development Course</h4>
                            <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-6">
                        <img class="img-responsive" alt="user" src="plugins/images/big/c3.jpg">
                        <div class="white-box">
                            <h4>Web Development Course</h4>
                            <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                        </div>
                    </div>
                </div>-->
                <!-- .right-sidebar -->
            <?php include 'inc/right-sidebar.php'; ?>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
           <?php include 'inc/footer.php'; ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
