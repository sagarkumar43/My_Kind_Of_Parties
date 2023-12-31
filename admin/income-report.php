<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Institute-Mgmt Admin - Institute Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
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
</head>

<body>
    <!-- Preloader -->
    <?php include 'header.php'; ?>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        
        <!-- Left navbar-header -->
        <?php include 'left-sidebar.php'; ?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Income Report</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">University</a></li>
                            <li class="active">Income Report</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Income</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Income</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Patients</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Normal Rate</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> Income Analysis</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% High then last month</small>Income Analysis</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Income Analysis</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <h3 class="box-title">Bar Chart</h3>
                                    <div id="sparkline12" class="text-center"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <h3 class="box-title">Pie Chart</h3>
                                    <div id="sparkline11" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Portlet -->
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title">Composite Bar Chart</h3>
                                    <div id="sparkline13" class="text-center"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="white-box bg-purple">
                                    <h3 class="text-white box-title">Line Chart</h3>
                                    <div id="sparkline14"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 ">
                        <div class="white-box">
                            <h3 class="box-title">bar with different color Chart</h3>
                            <div id="sparkline15" class="text-center"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                        <div class="white-box">
                            <h3 class="box-title">Line Chart</h3>
                            <div id="sparkline16" class="text-center"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                 <?php include 'right-sidebar.php'; ?>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <?php include 'footer.php'; ?>
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
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
