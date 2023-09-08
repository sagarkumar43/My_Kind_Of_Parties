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
<?php include 'conn.php'; ?>
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
                        <h4 class="page-title">MANAGE USERS</h4>
                    </div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
<div class="row">
<div class="col-sm-12">
<div class="white-box">
<h3 class="box-title m-b-0" style="text-align:center;,font-style:dark;">Manage Users Details</h3>
<form class="form" method="post">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Username:</label>
<input class="form-control" name="bname"  type="text"/></div>

<div class="form-group">
<label class="control-label" for="name">Email:</label>
<input class="form-control" name="bname"  type="text"/></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Password:</label>
<input class="form-control" name="bname"  type="text"/></div>

<div class="form-group">
<label class="control-label" for="name">Phone number:</label>
<input class="form-control" name="bname"  type="number"/></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Photo Upload:</label>
<input type="file" name="fileToUpload" id="fileToUpload" /></div></div>
	
<div class="col-lg-6">
<div class="form-group">
<label class="control-label" for="name">Permission:</label><br>
<input type="checkbox" id="branch" name="branch" value="branch">
<label for="branch">Manage Branch</label><br>
<input type="checkbox" id="course" name="course" value="course">
<label for="course">Manage Course</label><br>
<input type="checkbox" id="users" name="users" value="users">
<label for="users">Manage Users</label></div></div></div>
	
<div class="row">
<div class="col-lg-12">
<button type="submit" name="save1" class="btn btn-primary">Submit</button></div></div></form>

<?php
if(isset($_POST["save1"]))
{
$bname=$_POST["bname"];
echo $q="INSERT INTO branch (bname) 
 VALUES ('$bname')";
if ($con->query($q) === TRUE) {
    echo "<script>alert('New record insert successfully')</script>";
	//echo "<script>window.location.href='profile.php'</script>";
}
else
{
	echo "New record Not insert successfully";
}

}

?>			  
</div></div>
<!-- .right-sidebar -->
<?php include 'right-sidebar.php'; ?>
<!-- /.right-sidebar --></div>
<!-- /.container-fluid -->
<?php include 'footer.php'; ?></div>
<!-- /#page-wrapper --></div>
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
