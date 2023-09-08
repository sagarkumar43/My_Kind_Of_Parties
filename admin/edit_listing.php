<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');

$id=$_GET['id'];

$post_id=$_GET['id'];

$get_listing="select * from vendor_listing where list_id='$post_id'";
$run_listing=mysqli_query($conn,$get_listing);
$row=mysqli_fetch_array($run_listing);


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
										$vendor_id=$_POST['vendor_id'];
										$city=$_POST['city'];
										$status=$_POST['status'];
										$address=$_POST['address'];
										$price=$_POST['price'];
										$guest=$_POST['guest'];
										$rooms=$_POST['rooms'];
										$filename=$_FILES["feature_image"]["name"]; 
                                        $filetmp=$_FILES["feature_image"]["tmp_name"];
                                        move_uploaded_file($filetmp, "../vendor/images/listing/".$filename);
										
										if($filename=="")
						{
					$im=$row["feature_image"];
					}
					else 
					{
				$im=$filename;
				}
										
										
			   $date=date("d-m-Y");

$error=array();
$items = array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["photos"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["photos"]["name"][$key];
    $file_tmp=$_FILES["photos"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("../vendor/images/listing/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["photos"]["tmp_name"][$key],"../vendor/images/listing/".$file_name);
            $items[] =$file_name;
            
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["photos"]["tmp_name"][$key],"../vendor/images/listing/".$newFileName);
            $items[] =$newFileName;
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
}
			   

$multi_images=implode(",",$items); 
$no_of_img=count($items);	
if($no_of_img==0)  
{
$final_multiple_images=$row["gallery"];
}
else
{
    $final_multiple_images=$multi_images;
}

  $add_listing="update vendor_listing set listing_name='$listing_name',aminity='$aminity',details='$details',list_category='$list_category',facebook='$facebook',googleplus='$googleplus',twitter='$twitter',whatsapp_no='$whatsapp_no',vendor_name='$vendor_name',vendor_phone='$vendor_phone',vendor_email='$vendor_email',date='$date',gallery='$final_multiple_images',city='$city',status='$status',feature_image='$im',price='$price',address='$address',rooms='$rooms',guest='$guest' where list_id='$post_id'";
			   $run_query=mysqli_query($conn,$add_listing);
			   if($run_query===True)
			   {
                     echo "<script>alert('Listing Update Successfully')</script>";
                     echo"<script>window.location.href = 'approvedlisting.php'</script>";
			         echo '<meta http-equiv="refresh" content="1; URL=listing.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1; URL=listing.php">';
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
                        <h4 class="page-title">Edit Listing</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Listing Details</h3>
                           
							
							
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Edit Listing</h2>
                 
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
                                    <form method="post" class="form-material form-horizontal" enctype="multipart/form-data">
										
											
											<div class="form-group">
                                    <label class="col-sm-12">Listing City</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="city">
                                            <option value="<?php echo $row['city']; ?>" selected><?php echo $row['city']; ?></option>
                                                   <?php
													$get_city="select * from city_managment order by id desc";
													$run_city=mysqli_query($conn,$get_city);
													while($read_city=mysqli_fetch_array($run_city)){
														?>
						<option value="<?php echo $read_city['city_name'];?>"><?php echo $read_city['city_name'];?></option>
													<?php } ?> 
                                        </select>
                                    </div>
                                </div>
											
									
                                      
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Listing Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?php echo $row['listing_name']; ?>" name="listing_name" class="form-control">
                                    </div>
                                </div>
											
										
									
									
											<div class="form-group">
                                    <label class="col-sm-12">Amenities</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="aminity[]" multiple>
											
											  <?php 
				 $aminity=explode(",",$row["aminity"]);
				 foreach($aminity as $aminities){
				  ?>
   <option value="<?php echo $aminities;?>" selected><?php echo $aminities;?></option>
													 <?php }?>
											
                                        </select>
                                    </div>
                                </div>
									
									
									
									
									
									
									
											<div class="form-group">
                                    <label class="col-sm-12">Select Category</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="list_category[]">
                                          
											 <?php 
				 $list_category=explode(",",$row["list_category"]);
				 foreach($list_category as $list_cat){
				  ?>
   <option value="<?php echo $list_cat;?>" selected><?php echo $list_cat;?></option>
													 <?php }?>
											
											
                                                    <option value="Hotel">Hotels</option>
													
													<option value="Villa">Villa</option>
													<option value="house">House</option>
													<option value="apartment">Apartment</option>
                                        </select>
                                    </div>
                                </div>
									
									
									
									
									
											 
											 <div class="form-group">
												 
												 <label class="col-sm-12">Upload Gallery</label>
                                    <div class="col-sm-12">
										
																		  
				  <?php 
				 $multi_img=explode(",",$row["gallery"]);
				 foreach($multi_img as $gallery){
				  ?>
			<img src="../vendor/images/listing/<?php echo $gallery ?>" width="50" height="50">
				  <span><span>
				 <?php } ?>
										
										
										
										
										 <input type="file" name="photos[]" multiple class="form-control">
												 
												 </div>
												
                                          
                                        </div>
                                     
										<div class="form-group">
                                    <label class="col-md-12" for="example-text">Address</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" name="address" value="<?php echo $row['address']; ?>"  class="form-control">
                                    </div>
                                </div>
												 
												 <div class="form-group">
                                    <label class="col-md-12" for="example-text">Price</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" name="price" value="<?php echo $row['price']; ?>"  class="form-control">
                                    </div>
                                </div>
										
									<div class="form-group">
                                    <label class="col-md-12" for="example-text">Rooms</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" name="rooms" value="<?php echo $row['rooms']; ?>"  class="form-control">
                                    </div>
                                </div>
											
								
											<div class="form-group">
                                    <label class="col-md-12" for="example-text">Guest</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?php echo $row['guest']; ?>" name="guest" class="form-control">
                                    </div>
                                </div>
									
								

											 
								 <div class="input-field col s6">
												 <div class="file-field input-field">
													 	<img src="../vendor/images/listing/<?php echo $row["feature_image"] ?>" width="50" height="50">
                                        <div class="btn">
                                            <span>File</span>
											
											
                                            <input type="file" name="feature_image">
										
                                        </div>
                                        <div class="file-path-wrapper">
                                            <!-- <input class="file-path validate" type="text" placeholder="Upload one or more files"> -->
                                        </div>
                                    </div>
											 </div>
							
							
							
							
							
							
										
										 <div class="inn-title">
                                <h4>Social Media</h4>
                          
                            </div>
										 
											  
											  
											  <div class="form-group">
                                    <label class="col-md-12" for="example-text">Facebook Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['facebook']; ?>" name="facebook" class="form-control">
                                    </div>
                                </div>
											  
											  
								
								 
											  <div class="form-group">
                                    <label class="col-md-12" for="example-text">Google Plus Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['googleplus']; ?>" name="googleplus" class="form-control">
                                    </div>
                                </div>
								
													   
																	   
																	   
																	   
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Twitter Url</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['twitter']; ?>" name="twitter" class="form-control">
                                    </div>
                                </div>
																	   
																	   
					
						
							   
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">WhatsApp Number</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['whatsapp_no']; ?>" name="whatsapp_no" class="form-control">
                                    </div>
                                </div>
						
						
						
                               
									<div class="inn-title">
                                <h4>Contact Info</h4>
                               
                            </div>
					
					
					
					
					
					
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Contact Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['vendor_name']; ?>" name="vendor_name" class="form-control">
                                    </div>
                                </div>
						
					
																	     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Mobile</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?=$row['vendor_phone']; ?>" name="vendor_phone" class="form-control">
                                    </div>
                                </div>
						
					
										
						
								     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Email</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="email" value="<?=$row['vendor_email']; ?>" name="vendor_email" class="form-control">
                                    </div>
                                </div>
						
						
						
						
						
					
					
								     <div class="form-group">
                                    <label class="col-md-12" for="example-text">Listing Descriptions:</span>
                                    </label>
                                    <div class="col-md-12">
                                     	<textarea class="form-control" name="details" id="details"><?=$row['details']; ?></textarea>
                                    </div>
                                </div>
						
						<div class="form-group">
                                    <label class="col-sm-12">Select Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="status">
                                          
											<?php if($row['status']==0){ ?>
											<option value="0" selected><?= 'UnApproved'?></option>	
											<?php } else {?>
											<option value="1" selected><?= 'Approved'?></option>	
											<?php }?>
											
											
                                                    <option value="0">UnApproved</option>
													
													<option value="1">Approved</option>
												
                                        </select>
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
