<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');

	if(isset($_POST['submit_details']))
	{
		$name=$_POST['v_name'];
		$email=$_POST['v_email'];
			$pass=$_POST['v_pass'];
			$address=$_POST['v_address'];
			$website=$_POST['v_website'];
			$phone=$_POST['v_phone'];
		$status=$_POST['status'];
		
		
		$sql="INSERT INTO vendor_user set v_name='$name',v_pass='$pass',v_email='$email',
	v_phone='$phone',v_address='$address',v_website='$website',v_status='$status',v_date='".date('Y-m-d')."'" ;
	 $run=mysqli_query($conn,$sql);
		if($run==TRUE)
		{
		
				echo '<div class="alert active">Vendor Added Sucessfully</div>';
			echo '<meta http-equiv="refresh" content="1;URL=managevendor.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=managevendor.php">';
		}
		
		
	}
	
	
	
	
	


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
    <title>MyKOP ADMIN</title>
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Vendor</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="magagevendor.php">Vendor</a></li>
                            <li class="active">Edit Vendor</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Vendor Details</h3>
                            <form class="form-material form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Vendor Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="v_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="sdate">Vendor Email</label>
                                    <div class="col-md-12">
                                       <input id="phone" type="email" value="" name="v_email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="duration">Vendor Phone</label>
                                    <div class="col-md-12">
                                       <input id="phone" type="text" value="" name="v_phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="price"> Vendor Website</label>
                                    <div class="col-md-12">
                                      <input id="website" type="text" value="" name="v_website" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Vendor Address</label>
                                    <div class="col-md-12">
                                     <input id="password" type="text" value="" name="v_address" class="form-control">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-sm-12">Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="status">
                                            <option>Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Pending">Inactive</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="year">Password</span>
                                    </label>
                                    <div class="col-md-12">
                                   <input id="text" type="text" value="" name="v_pass" class="form-control">
                                    </div>
                                </div>
                              
                                <button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                             
                            </form>
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
