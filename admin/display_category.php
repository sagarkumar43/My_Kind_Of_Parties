<?php 
session_start();
require_once('inc/config.php');
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');

if(isset($_POST['submit_details']))
{
$category=implode(",",$_POST['slctcategory']);

$display_categories="update display_categories set frontend_categories='$category'";

if(mysqli_query($conn, $display_categories)==true)
{
   echo "<script>alert('Categories Update')</script>";
    echo "<script>window.location.href = 'display_category.php'</script>";
}
else
{
    echo "<script>alert('Categories not Update')</script>";
    echo "<script>window.location.href = 'display_category.php'</script>";
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
    <!-- <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet"> -->
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
        type="text/css" />
    <!-- animation CSS -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/mob.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/materialize.css" /> -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">



    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
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
                    <h4 class="page-title">Manage FrontEnd Category</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="magagevendor.php">Products</a></li>
                        <li class="active">Manage FrontEnd Category</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                         <h3 class="box-title">Manage FrontEnd Category</h3>
                         
                        <form class="form-material form-horizontal" method="post" enctype=multipart/form-data>
                            <div class="form-group">
                                <label class="col-md-12" for="example-text">Category</span>
                                </label>
                            </div>

                            <select class="selectpicker form-control" name="slctcategory[]" multiple
                                data-live-search="true">
                                <?php
													$data="select * from  categories_mgmt";
													$exe=mysqli_query($conn,$data);
                                                    while($read=mysqli_fetch_array($exe)) {
								?>

                                <option value="<?php echo $read["category_name"]; ?>"><?php echo $read["category_name"]; ?></option>

                                <?php } ?>

                            </select> <br><br>

                            <p style="color: red;font-size: 12px;margin-top: -17px;"><b>Note:</b> Please Select Any 4 Categories</p>

                            <button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>

                        </form>
                        <br><br>
                        <div class="table-responsive">
                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><b>S.N</b></th>
                                    <th><b>Category Name</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $display="select * from  display_categories";
                                    $run=mysqli_query($conn,$display);
                                    $c=1;
                                    while($read=mysqli_fetch_array($run))
                                    {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $c;?>
                                    </td>
                                    <td>
                                        <?php echo $read['frontend_categories'];?>
                                    </td>
                                </tr>
                                <?php $c++;}?>
                            </tbody>
                        </table>
                    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="bootstrap/dist/js/tether.min.js"></script> -->
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->


    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <!-- <script src="js/waves.js"></script> -->
    <!-- Date Picker Plugin JavaScript -->
    <script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- <script src="js/jasny-bootstrap.js"></script>
    <script src="js/mask.js"></script> -->
    <!--Style Switcher -->
    <!-- <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> -->

    <script>
        $('select').selectpicker();
    </script>


</body>

</html>