<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Institute-Managment Admin - Institute Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
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
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body class="fix-sidebar">
<!-- Preloader -->
<?php include 'header.php'; ?>
<!-- /.navbar-header -->
<!-- /.navbar-top-links -->
<!-- /.navbar-static-side -->
<!-- End Top Navigation -->
<!-- Left navbar-header -->
<?php include 'left-sidebar.php'; ?>
<!-- Left navbar-header end -->
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
<div class="row bg-title">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h4 class="page-title">New Joining Letter</h4></div>
<!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
<ol class="breadcrumb">
<li><a href="index.php">Dashboard</a></li>
<li><a href="#">Ui Elements</a></li>
<li class="active">Notifications</li></ol></div>--></div>
	
<div class="col-sm-12">
<div class="white-box">
<div class="col-sm-12">
<h1 class="box-title m-b-0" style="text-align:center;color: #2121ca;font-size:24px;"><strong>New Joining Letter</strong></h1>
<p class="text-muted m-b-30 font-13"></p><h4>Please Fill Information:</h4><p class="text-muted m-b-30 font-13"></p>
<form class="form">		
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Title For Employee:</label>
<select  class="form-control" >
<option>Please Select</option>
<option>Mr.</option>
<option>Ms.</option>
<option>Mrs.</option>
</select></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Profile:</label>
<select  class="form-control" >
<option>Please Select</option>
<option>Core Java</option>
<option>Php</option>
<option>.Net</option>
<option>Android</option>
<option>RIA</option>
<option>Web Designing</option>
<option>Photoshop</option>
<option>Excel</option>
<option>Databse Sql</option>
<option>Databse MySql</option>
<option>Basic Computer</option>
<option>PHP++</option>
<option>C++</option>
<option>C and C++</option>
<option>Java Trainer</option>
<option>Seo</option>
<option>Wordpress</option>
<option>Opencart</option>
<option>Magneto</option>
<option>Other CMS</option>
<option>Python</option>
<option>Internship</option>
<option>Web Development Service</option>
<option>Mennual Tester</option>
</select></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Name:</label>
<div class="input-group">
<input class="form-control" id="id" name="name" type="text"/></div></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="number">Salary in Number:</label>
<div class="input-group">
<input class="form-control" id="number" name="number" type="number"/></div></div></div>
								 
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Salary in Words:</label>
<div class="input-group">
<input class="form-control" id="id" name="name" type="text"/></div></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Issue Date:</label><br>
<input style="width:490px; height:35px;" type="date" id="myDate" value="2010-01-01"></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Joining Date:</label><br>
<input style="width:490px; height:35px;" type="date" id="myDate" value="2010-01-01"></div></div>
</div><button type="button" class="btn btn-primary">Submit</button>
<a href="joiningletter.php" class="btn btn-primary">Back</a></form>
</div></div></div>
								
<?php include 'right-sidebar.php'; ?></div>
<?php include 'footer.php'; ?></div></div>
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
<script src="js/jasny-bootstrap.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
