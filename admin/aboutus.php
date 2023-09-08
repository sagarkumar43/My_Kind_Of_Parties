<?php
require_once('inc/config.php');
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
    <title>Institute-Mgmt Admin - Institute Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
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
    <?php include 'inc/header.php'; ?>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        
        <!-- Left navbar-header -->
        <?php include 'inc/left-sidebar.php'; ?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->

        <?php 

$data="select * from about_us";
$exe=mysqli_query($conn,$data);
$read=mysqli_fetch_array($exe);
?>

<div id="page-wrapper">
<div class="container-fluid">
<div class="row bg-title">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h4 class="page-title">About Us</h4> </div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
<!-- /.col-lg-12 --></div>
<div class="row">
<div class="col-sm-12">
<div class="white-box">
<form class="form-material form-horizontal" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="col-md-6" for="example-text">About Us Description:</label>
<div class="col-md-6">
<textarea name="description" id="" cols="90" rows="5"><?php echo $read['about_us_desc']; ?></textarea></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Mail:</label>
<div class="col-md-6">
<input id="text" type="text" value="<?php echo $read['mail']; ?>" name="mail" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Address:</label>
<div class="col-md-6">
<input id="myfile" type="text" value="<?php echo $read['address']; ?>" name="address" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Phone:</label>
<div class="col-md-6">
<input id="myfile" type="number" value="<?php echo $read['phone']; ?>" name="phone" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Facebook:</label>
<div class="col-md-6">
<input id="myfile" type="text" value="<?php echo $read['facebook']; ?>" name="fb" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Instagram:</label>
<div class="col-md-6">
<input id="myfile" type="text" value="<?php echo $read['insta']; ?>" name="insta" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Linkedin:</label>
<div class="col-md-6">
<input id="myfile" type="text" value="<?php echo $read['linkedin']; ?>" name="link" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Twitter:</label>
<div class="col-md-6">
<input id="myfile" type="text" value="<?php echo $read['twitter']; ?>" name="tweet" class="form-control"></div></div>


<button type="submit"  name="save" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($_POST['save']))
{

    $aboutus=$_POST['description'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $facebook=$_POST['fb'];
    $insta=$_POST['insta'];
    $tweet=$_POST['tweet'];
    $linkedin=$_POST['link'];

$about_us="update about_us set about_us_desc='$aboutus',mail='$mail',address='$address',phone='$phone',facebook='$facebook',insta='$insta',twitter='$tweet',linkedin='$linkedin'";

if(mysqli_query($conn, $about_us)==true)
{
	echo "<script>alert('About us data Update')</script>";
	echo "<script>window.location.href='aboutus.php'</script>";
}
else
{
	echo "<script>alert('About us data not Update')</script>";
	echo "<script>window.location.href='aboutus.php'</script>";
}
}
?>


</div></div></div>
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
    <!-- Date Picker Plugin JavaScript -->
    <script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!--<script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>-->
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
