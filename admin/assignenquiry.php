<?php
include('conn.php');
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
    <title>Institute Managment Admin</title>
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
<h4 class="page-title">ASSIGN ENQUIRY</h4></div>
<!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
<ol class="breadcrumb">
<li><a href="index.php">Dashboard</a></li>
<li><a href="#">Ui Elements</a></li>
<li class="active">Notifications</li></ol></div>--></div>
	
<div class="col-sm-12">
<div class="white-box">
<div class="col-sm-12">
<h1 class="box-title m-b-0" style="text-align:center;color: #2121ca;font-size:24px;"><strong>Assign Enquiry</strong></h1>
<p class="text-muted m-b-30 font-13"></p><h4>STUDENT DETAILS:</h4><p class="text-muted m-b-30 font-13"></p>
<form class="form" method="post">		
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Name:</label><!--working-->
<div class="input-group">
<input class="form-control" id="id" name="name" type="text"/></div></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Email:</label><!--working-->
<div class="input-group">
<input class="form-control" id="email" name="email" type="text"/></div></div></div>
								 
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Course:</label><!--working-->
<select  class="form-control" name="course">
<option>Please Select</option>
<option>Javascript</option>
<option>Html</option>
<option>Php</option>
<option>Css</option>
<option>.Net</option>
</select></div></div>
								 
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Demo Date:</label><br>
<input style="width:490px; height:35px;" type="date" name="date" id="myDate" value="2010-01-01"></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Phone No:</label>
<div class="input-group">
<input class="form-control" id="number" name="number" type="number"/></div></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Sources:</label>
<select  class="form-control" name="sources">
<option>Please Select</option>
<option>Justdial</option>
<option>Amezone</option>
<option>Facebook</option>
<option>Flipkart</option>
</select></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Location:</label><!--working-->
<div class="input-group">
<input class="form-control" id="text" name="location" type="text"/>
</div></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Zone:</label><!--working-->
<select  class="form-control" name="zone">
<option>Please Select</option>
<option>Zone 1</option>
<option>Zone 2</option>
<option>Zone 3</option>
<option>Zone 4</option>
<option>Zone 5</option>
</select></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Prefrence Branch:</label>
<select  class="form-control" name="branch">
<option>Please Select</option>
<option>Avantika Market</option>
<option>Magol Puri</option>
<option>Peeragrahi</option>
<option>Aazadpur</option>
<option>Rohini</option>
</select></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Status:</label><!--working-->
<select  class="form-control" name="status">
<option>Please Select</option>
<option>Fresh Enquiry</option>
<option>Admission</option>
<option>Demo</option>
</select></div></div></div>
<button type="submit" class="btn btn-primary" name="save">Submit</button></form>

<?php
	if(isset($_POST['save']))
	{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$course=$_POST["course"];
	$date=$_POST["date"];
	$number=$_POST["number"];
	$sources=$_POST["sources"];
	$location=$_POST["location"];
	$zone=$_POST["zone"];
	$branch=$_POST["branch"];
	$status=$_POST["status"];
	echo $assign_enquiry="INSERT INTO assign_enquiry set name='$name',email='$email',course='$course',demo_date='$date',
	phone_no='$number',sources='$sources',location='$location',zone='$zone',prefrence_branch='$branch',
	status='$status'";
	if (mysqli_query($con, $assign_enquiry)==true)
{
  echo "<script>alert('Data Save')</script>";
  echo "<script>window.location.href='assignenquirydetails.php'</script>";
} 
  else
{
  echo "<script>alert('Data Not Save')</script>";
	  echo "<script>window.location.href='assignenquirydetails.php'</script>";
}
}	
?>

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
