<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');




									if(isset($_POST['submit_details']))
									{
									$listing_name=$_POST['listing_name'];
										$aminity=implode(",",$_POST['aminity']);
										$list_category=implode(",",$_POST['list_category']);
										$facebook=$_POST['facebook'];
										$googleplus=$_POST['googleplus'];
										$twitter=$_POST['twitter'];
										$whatsapp_no=$_POST['whatsapp_no'];
										$vendor_name=$_POST['vendor_name'];
										$vendor_phone=$_POST['vendor_phone'];
										$vendor_email=$_POST['vendor_email'];
										$details=$_POST['details'];
										$city=$_POST['city'];
										$address=$_POST['address'];
										$price=$_POST['price'];
										$guest=$_POST['guest'];
										$rooms=$_POST['rooms'];
										$filename=$_FILES["feature_image"]["name"]; 
$filetmp=$_FILES["feature_image"]["tmp_name"];
move_uploaded_file($filetmp, "../vendor/images/listing/".$filename);
										
										//$vendor_id=$_POST['vendor_id'];
			   $date=date("d-m-Y");;
               $gallery=$_FILES['photos']['name'];
			   $filetmp_gall=$_FILES["photos"]["tmp_name"];
               $all_images=implode(",",$gallery);
move_uploaded_file($filetmp_gall, "../vendor/images/listing/".$all_images);
// 		$total = count($_FILES['photos']['name']);

// // Loop through each file
// for( $i=0 ; $i < $total ; $i++ ) {

//   //Get the temp file path
//   $tmpFilePath = $_FILES['photos']['tmp_name'][$i];

//   //Make sure we have a file path
//   if ($tmpFilePath != ""){
//     //Setup our new file path
//     $newFilePath = "../vendor/images/listing/" . $_FILES['photos']['name'][$i];

//     //Upload the file into the temp dir
//     if(move_uploaded_file($tmpFilePath, $newFilePath)) {

//       $imagesname[]=$_FILES['photos']['name'][$i];
// 	  $img=implode(",",$imagesname);

//     }
//   }
// }
 
$error=array();
$items = array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["photos"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["photos"]["name"][$key];
    $file_tmp=$_FILES["photos"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("../vendor/images/listing/".$txtGalleryName."/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["photos"]["tmp_name"][$key],"../vendor/images/listing/".$txtGalleryName."/".$file_name);
            $items[] =$file_name;
            
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["photos"]["tmp_name"][$key],"../vendor/images/listing/".$txtGalleryName."/".$newFileName);
            $items[] =$newFileName;
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
}
			   

$multi_images=implode(",",$items); 

 $add_listing="insert into vendor_listing set listing_name='$listing_name',aminity='$aminity',details='$details',list_category='$list_category',facebook='$facebook',
googleplus='$googleplus',twitter='$twitter',whatsapp_no='$whatsapp_no',vendor_name='$vendor_name',vendor_phone='$vendor_phone',vendor_email='$vendor_email',date='$date',gallery='$multi_images',v_id='Admin',status='1',city='$city',
feature_image='$filename',price='$price',address='$address',rooms='$rooms',guest='$guest'";
			   $run_query=mysqli_query($conn,$add_listing);
			   if($run_query===True)
			   {
					echo "<script>alert('Listing Save Successfully')</script>";
			        echo '<meta http-equiv="refresh" content="1;URL=managelisting.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=managelisting.php">';
		}						}
	
	
	
	
	


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
                        <h4 class="page-title">Add Listing</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Listing Details</h3>
                           
							
							
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New Listing</h2>
                 
                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Listing Details</span></a>
                        </li>
              
                       <!-- <li><a data-toggle="tab" href="#menu4"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
                        </li>-->
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Listing Information</h4>
                                  
                                </div>
                                <div class="bor">
                                    <form method="post" action="" class="form-material form-horizontal" enctype="multipart/form-data">
										
											
											<div class="form-group">
                                    <label class="col-sm-12">Listing City</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="city">
                                            <option value="" selected>Choose City</option>
                                                   <?php
													$get_city="select * from city_managment order by id desc";
													$run_city=mysqli_query($conn,$get_city);
													while($read_city=mysqli_fetch_array($run_city)){
														?>
						<option value="<?= $read_city['city_name'];?>"><?= $read_city['city_name'];?></option>
													<?php
													}

													
													?> 
                                        </select>
                                    </div>
                                </div>
											
									
                                      
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Listing Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="listing_name" class="form-control">
                                    </div>
                                </div>
											
                                
									
									
											<div class="form-group">
                                    <label class="col-sm-12">Amenities</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="aminity[]" multiple>
                                            <option value="" disabled selected>Choose Aminities</option>
                                                     <?php
													$get_aminity_name="select * from aminity order by id desc";
													$run_aminity_name=mysqli_query($conn,$get_aminity_name);
													while($read_aminity_name=mysqli_fetch_array($run_aminity_name))
													{
														echo '<option value='.$read_aminity_name['aminity_name'].'>'.$read_aminity_name['aminity_name'].'</option>';
														
													}
													
													?>
                                        </select>
                                    </div>
                                </div>
									
									
									
									
									
									
									
											<div class="form-group">
                                    <label class="col-sm-12">Select Category</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="list_category[]">
                                            <option value=""  selected>Choose Category</option>
                                                    <?php
													$get_listcat="select * from listing_category order by id desc";
													$run_listcat=mysqli_query($conn,$get_listcat);
													while($read_listcat=mysqli_fetch_array($run_listcat))
													{
														echo '<option value='.$read_listcat['cat_name'].'>'.$read_listcat['cat_name'].'</option>';
														
													}
													
													?>
                                        </select>
                                    </div>
                                </div>
									
									
					
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Address</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="address" class="form-control">
                                    </div>
                                </div>
											
								
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Price Per Day</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="price" class="form-control">
                                    </div>
                                </div>
											
									
									<div class="form-group">
                                    <label class="col-md-12" for="example-text">Rooms</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="rooms" class="form-control">
                                    </div>
                                </div>
											
								
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Guest</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="guest" class="form-control">
                                    </div>
                                </div>
											 
											 <div class="form-group">
												 
												 <label class="col-sm-12">Upload Files</label>
                                    <div class="col-sm-12">
										 <input type="file" name="photos[]" multiple class="form-control">
												 
												 </div>
												
                                          
                                        </div>
                                     
						
									 <div class="form-group">
												 
												 <label class="col-sm-12">Feature Image</label>
                                    <div class="col-sm-12">
										 <input type="file" name="feature_image" class="form-control">
												 
												 </div>
												
                                          
                                        </div>
									
									
									
									
									
									
									
										
										 <div class="inn-title">
                                <h4>Social Media</h4>
                          
                            </div>
										 
											  
											  
											  <div class="form-group">
                                    <label class="col-md-12" for="example-text">Facebook Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="facebook" class="form-control">
                                    </div>
                                </div>
											  
											  
								
								 
											  <div class="form-group">
                                    <label class="col-md-12" for="example-text">Google Plus Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="googleplus" class="form-control">
                                    </div>
                                </div>
								
													   
																	   
																	   
																	   
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Twitter Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="twitter" class="form-control">
                                    </div>
                                </div>
																	   
																	   
					
						
							   
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">WhatsApp Number</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="whatsapp_no" class="form-control">
                                    </div>
                                </div>
						
						
						
                               
									<div class="inn-title">
                                <h4>Contact Info</h4>
                               
                            </div>
					
					
					
					
					
					
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Contact Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="vendor_name" class="form-control">
                                    </div>
                                </div>
						
					
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Mobile</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="" name="vendor_phone" class="form-control">
                                    </div>
                                </div>
						
					
										
						
								     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Email</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="email" value="" name="vendor_email" class="form-control">
                                    </div>
                                </div>
						
						
						
						
						
					
					
								     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Listing Descriptions:</span>
                                    </label>
                                    <div class="col-md-12">
                                     	<textarea class="form-control" name="details" id="details"></textarea>
                                    </div>
                                </div>
					
					
                                       
                                        <div class="row">
                                            <div class="form-group">
                                               <button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                            </div>
                                        </div>
                                    </form>
									
									
                                </div>
                            </div>
                        </div>
                      
                      
                    </div>
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
