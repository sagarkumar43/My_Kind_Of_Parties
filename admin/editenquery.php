<?php
include('conn.php');
$id=$_GET['id'];
$get_enquery="select * from enquery where id='$id'";
$run_enquery=mysqli_query($con,$get_enquery);
$read_data=mysqli_fetch_array($run_enquery);
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
    <title>Institute-Managment Admin</title>
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
                        <h4 class="page-title">MANAGE ENQUIRY</h4>
                    </div>
                   <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
<ol class="breadcrumb">
<li><a href="index.php">Dashboard</a></li>
<li><a href="#">Ui Elements</a></li>
<li class="active">Notifications</li>
</ol></div>-->
<!-- /.col-lg-12 --></div>
<!-- .row -->
              
<div class="col-sm-12">
<div class="white-box">
<div class="col-sm-12">
<h1 class="box-title m-b-0" style="text-align:center;color: #2121ca;font-size:24px;"><strong>Manage Enquiry</strong></h1>
<p class="text-muted m-b-30 font-13"></p>
<h4>STUDENT DETAILS:</h4>
<p class="text-muted m-b-30 font-13"></p>

<form class="form" method="post">		
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Name:</label>
<div class="input-group">
<input class="form-control" id="id" name="name"  value="<?php echo $read_data['name'];?>" type="text"/>
</div></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Email:</label>
<div class="input-group">
<input class="form-control" id="email" name="email" value="<?php echo $read_data['Email'];?>" type="text"/>
</div></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Source:</label>
<select  class="form-control" name="sources">
<option value="<?php echo $read_data['sources'];?>"><?php echo $read_data['sources'];?></option>
<option>Justdial</option>
<option>Amezone</option>
<option>Facebook</option>
<option>Flipkart</option>
</select></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Course:</label>
<select  class="form-control" name="course">
<option value="<?php echo $read_data['Course'];?>"><?php echo $read_data['Course'];?></option>
<option>Php</option>
<option>Html</option>
<option>Css</option>
<option>.Net</option>
<option>Javascript</option>
</select></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Phone No:</label>
<div class="input-group">
<input class="form-control" id="number" name="number" value="<?php echo $read_data['phone_no'];?>" type="number"/>
</div></div></div>

<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Assign:</label>
<select  class="form-control" name="assign">
<option value="<?php echo $read_data['Assign'];?>"><?php echo $read_data['Assign'];?></option>
<option>Team 1</option>
<option>Team 2</option>
<option>Team 3</option>
<option>Team 4</option>
<option>Team 5</option></select></div></div></div>
<button type="submit" class="btn btn-primary" name="save">Submit</button></form>
	<?php
	if(isset($_POST['save']))
	{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$sources=$_POST["sources"];
	$course=$_POST["course"];
	$number=$_POST["number"];
	$assign=$_POST["assign"];
	echo $enquery = "update enquery set name='$name',Email='$email',sources='$sources',Course='$course',
	Assign='assign',phone_no='$number' where id='$id'";
	
	if (mysqli_query($con, $enquery))
{
  echo "<script>alert('Data Update Successfully')</script>";
  echo"<script>window.location.href='manageenquirydetails.php'</script>";
} 
  else
{
  echo "<script>alert('Data Not Save')</script>";
  echo "<script>window.location.href='manageenquirydetails.php'</script>";
}

}
	
	?>
	
	
	
	
	</div>
</div></div>									
									
<?php include 'right-sidebar.php'; ?>
<!-- /.right-sidebar --></div>
<!-- /.container-fluid -->
<?php include 'footer.php'; ?></div>
<!-- /#page-wrapper -->
<!--</div>-->
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
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	
</body>

</html>
