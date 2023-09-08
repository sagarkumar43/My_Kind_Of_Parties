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
                        <h4 class="page-title">Add Student</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="index.html">University</a></li>
                            <li class="active">Add Student</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Information</h3>
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Name</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="bdate">Date of Birth</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter your birth date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Gender</label>
                                    <div class="col-sm-12">
                                        <select class="form-control">
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Image</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Department</label>
                                    <div class="col-sm-12">
                                        <select class="form-control">
                                            <option>Select Department</option>
                                            <option>Computer</option>
                                            <option>Mechanical</option>
                                            <option>Electrical</option>
                                            <option>Medical</option>
                                            <option>BCA/MCA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="year">Year</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="year" name="year" class="form-control" placeholder="e.g. First Year">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Account Information</h3>
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-email">Email</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-phone">Phone</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="pwd">Password</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="cpwd">Confirm Password</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Social Information</h3>
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="furl">Facebook URL</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="furl" name="furl" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="turl">Twitter URL</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="turl" name="turl" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="gurl">Google Plus URL</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="gurl" name="gurl" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="inurl">LinkedIN URL</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="inurl" name="inurl" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
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
