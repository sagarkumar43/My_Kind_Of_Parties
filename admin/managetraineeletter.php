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

 
      
    <div id="content" style="margin-left: 255px;">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Training Letter</h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Training Letter Records:
						   <div style="float: right;"><a href="addtraineeletter.php" class="btn btn-warning">Add New Training</a></div>
						   
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<tr>
<th>S.N</th>
<th>Certificate No.</th>
<th>Name</th>
<th>Course</th>
<th>Trainee Duration</th>
<th>Issue Date</th>
<th>Session Start</th>
<th>Session End</th>
<th>Action</th></tr></thead>

<tbody>
<tr>
<td>1.</td>
<td>222</td>
<td>bridge technosoft</td>
<td>php</td>
<td>3 months</td>
<td>oct-22</td>
<td>team 1</td>
<td>team 3</td>
<td>
<a href="#"><button type="button" class="btn btn-primary">Edit</button></a>
	<a href="trainee-letter.php"><button type="button" class="btn btn-primary">View</button></a>&nbsp;&nbsp;&nbsp;</td>
</tr>
                                        
										
											<?php
												$query="select * from cms_traineeletter where tl_id>1";
												$qu=mysql_query($query);
												$count=1;
												while($read=mysql_fetch_array($qu))
												{
											?>
<tr class="odd gradeX">
                                            <td><?php echo $count ?></td>
					<td><?php echo $read["certificate_no"];?></td>
                                            <td><?php echo $read["tl_title"] . $read["tl_name"];?></td>
                                            <td><?php echo $read["tl_course"];?></td>
                                            <td class="center"><?php echo $read["tl_training_duration"];?></td>
                                            <td class="center"><?php echo $read["issue_date"];?></td>
					<td class="center"><?php echo $read["tl_session_start"];?></td>
                                        <td class="center"><?php echo $read["tl_session_end"];?></td>
																					    <td class="center"><a href="edit-traineeletter.php?id=<?php echo $read["tl_id"];?>" class="btn btn-primary btn-xs btn-circle btn-grad" title="Edit"><i class="icon-pencil"></i></a> &nbsp;<a href="letter_pdf/trainee-letter.php?id=<?php echo $read["tl_id"];?>" target="_blank"class="btn btn-primary btn-xs btn-circle btn-grad" title="View letter"><i class="glyphicon glyphicon-eye-open"></i></a>  </td>
                                        </tr>
                                        <?php
											$count++;

											}
										?>
                                       
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        


            </div>


					</div>
				
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
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	
</body>

</html>
