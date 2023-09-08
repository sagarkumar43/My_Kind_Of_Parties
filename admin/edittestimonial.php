<?php
require_once('inc/config.php');
$id=$_GET['id'];
$get_test="select * from testimonial where id='$id'";
$run_test=mysqli_query($conn,$get_test);
$read_data=mysqli_fetch_array($run_test);
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
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
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
<div id="page-wrapper">
<div class="container-fluid">
<div class="row bg-title">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h4 class="page-title">Testimonial</h4> </div>
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
<!-- /.col-lg-12 --></div>
<div class="row">
<div class="col-sm-12">
<div class="white-box">
<form class="form-material form-horizontal" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="col-md-6" for="example-text">Name:</label>
<div class="col-md-6">
<input id="text" type="text" value="<?php echo $read_data['name'];?>" name="name" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Description:</label>
<div class="col-md-6">
<textarea id="editor5" name="des"><?php echo $read_data['description'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor5');
                                    </script></div></div>

<div class="form-group">
<label class="col-md-6" for="example-text">Choose Image:</label>
<div class="col-md-6">
<img src="img/<?php echo $read_data['file_input'];?>" style="height:60px; width:60px;">
<input id="myfile" type="file" name="fi" class="form-control"></div></div>
<button type="submit"  name="save" class="btn btn-primary">Submit</button></form>
<?php
if(isset($_POST['save']))
{
$name=$_POST["name"];
$des=$_POST["des"];
$filename=$_FILES["fi"]["name"]; 
$filetmp=$_FILES["fi"]["tmp_name"];
move_uploaded_file($filetmp,"img/".$filename);
	if($filename=="")
						{
					$im=$read_data["file_input"];
					}
					else 
					{
				$im=$filename;
				}
	
$testimonial="update testimonial set name='$name',file_input='$im',description='$des' where id='$id'";

if(mysqli_query($conn, $testimonial)==true)
{
	echo "<script>alert('testimonial data saved')</script>";
	echo "<script>window.location.href='testimonial.php'</script>";
}
else
{
	echo "<script>alert('testimonial data not saved')</script>";
	echo "<script>window.location.href='testimonial.php'</script>";
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
