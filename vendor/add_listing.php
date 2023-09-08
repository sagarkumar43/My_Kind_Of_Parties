<?php
session_start();
require_once('inc/config.php');

$vendor_id=$_SESSION['v_id'];

if(isset($_POST['submit']))
{
	$listing_name=$_POST['listing_name'];	
	$aminity=implode(",",$_POST['aminity']);
	$list_category=implode(",",$_POST['list_category']);
	$city=$_POST['city'];
	$address=$_POST['address'];
	$price=$_POST['price'];
	$rooms=$_POST['rooms'];
	$guest=$_POST['guest'];
	$filename=$_FILES['feature_image']['name'];
	$filetmp=$_FILES['feature_image']['tmp_name'];
	move_uploaded_file($filetmp, "images/listing/".$filename);	
	$facebook=$_POST['facebook'];
	$googleplus=$_POST['googleplus'];
	$twitter=$_POST['twitter'];
	$whatsapp_no=$_POST['whatsapp_no'];
	$vendor_name=$_POST['vendor_name'];
	$vendor_phone=$_POST['vendor_phone'];
	$vendor_email=$_POST['vendor_email'];
	$details=$_POST['details'];
    $vendor_id=$_POST['vendor_id'];
    $discount=$_POST['discount'];
	$date=date("m/d/y G.i:s<br>", time());
	$total= count($_FILES['photos']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['photos']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "images/listing/" . $_FILES['photos']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      $imagesname[]=$_FILES['photos']['name'][$i];
	  $img=implode(",",$imagesname);
}
}
}


$add_listing="insert into vendor_listing set listing_name='$listing_name',city='$city',address='$address',price='$price',
rooms='$rooms',guest='$guest',feature_image='$filename',aminity='$aminity',details='$details',list_category='$list_category',
facebook='$facebook',googleplus='$googleplus',twitter='$twitter',whatsapp_no='$whatsapp_no',vendor_name='$vendor_name',
vendor_phone='$vendor_phone',vendor_email='$vendor_email',date='$date',status='0',gallery='$img',v_id='$vendor_id',discount_price='$discount'";


			   $run_query=mysqli_query($conn,$add_listing);
			   if($run_query===True)
			   {
					echo "<script>alert('Listing Save Successfully')</script>";
			echo '<meta http-equiv="refresh" content="1;URL=listing.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=listing.php">';
		}						}
									?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyKOP Vendor Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
   <?php
   include('inc/header.php');
   ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
           <?php
		   include('inc/left_side.php');
		   ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Listing</a>
                        </li>
                    </ul>
                </div>
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
<form method="post" action="" id="myform" enctype="multipart/form-data">
<div class="row">
<div class="input-field col s6">
<input id="list-title" type="text" name="listing_name" class="validate">
<label for="list-title">Listing Name</label></div>

<div class="input-field col s6"> 
                             
<select name="city">
<option>Choose City</option>
<?php
													$data="select * from city_managment";
													$exe=mysqli_query($conn,$data);
                                                    while($read=mysqli_fetch_array($exe)){
												?>      

<option value="<?php echo $read["city_name"]; ?>"><?php echo $read["city_name"]; ?></option>
<?php } ?>
</select></div></div>

<div class="row">
<div class="input-field col s6">
<select multiple name="list_category[]">
<option value="" disabled selected>Choose Category</option>
<?php
													$data="select * from  listing_category";
													$exe=mysqli_query($conn,$data);
                                                    while($read=mysqli_fetch_array($exe)){
												?>      

<option value="<?php echo $read["cat_name"]; ?>"><?php echo $read["cat_name"]; ?></option>
<?php } ?>
</select>
<label>Select Category</label></div>
											
<div class="input-field col s6">                                           
<select multiple name="aminity[]">
<option value="" disabled selected>Choose Aminities</option>
<?php
													$data="select * from  aminity";
													$exe=mysqli_query($conn,$data);
                                                    while($read=mysqli_fetch_array($exe)){
												?>
<option value="<?php echo $read["aminity_name"]; ?>"><?php echo $read["aminity_name"]; ?></option>													
<?php } ?>
</select>
<label for="list-name">Amenities</label></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Address</span></label>
<div class="col-md-12">
<input id="website" type="text" value="" name="address" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Price Per Day</span></label>
<div class="col-md-12">
<input id="website" type="text" value="" name="price" class="form-control"></div></div>
											
<div class="form-group">
<label class="col-md-12" for="example-text">Rooms</span></label>
<div class="col-md-12">
<input id="website" type="text" value="" name="rooms" class="form-control"></div></div>
											
<div class="form-group">
<label class="col-md-12" for="example-text">Guest</span></label>
<div class="col-md-12">
<input id="website" type="text" value="" name="guest" class="form-control"></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Discount in Percentage ( % )</span></label>
<div class="col-md-12">
<input id="website" type="number" name="discount" class="form-control"></div></div>

<div class="row">
<div class="input-field col s6">
<div class="file-field input-field">
<div class="btn">
<span>File</span>
<input type="file" name="photos[]" multiple></div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Upload one or more files">
</div></div></div>

<div class="form-group">
<label class="col-sm-6">Feature Image</label>
<div class="col-sm-6">
<input type="file" name="feature_image" class="form-control"></div></div></div>
                                           
<div class="inn-title">
<center><h3>Social Media</h3></center></div>

<div class="row">
<div class="input-field col s6">
<input id="t4-soc1" type="text" name="facebook" class="validate">
<label for="t4-soc1">Facebook Url</label></div>

<div class="input-field col s6">
<input id="t4-soc2" type="text" value="" name="googleplus" class="validate">
<label for="t4-soc2">Google Plus Url</label></div></div>
                                    
<div class="row">
<div class="input-field col s6">
<input id="t4-soc3" type="text" value="" name="twitter" class="validate">
<label for="t4-soc3">Twitter Url</label></div>
                                        
<div class="input-field col s6">
<input id="t4-soc5" type="text" name="whatsapp_no" class="validate">
<label for="t4-soc5">WhatsApp Number</label></div></div>
                                        
<div class="inn-title">
<center><h3>Contact Info</h3></center></div>
                               
<div class="row">
<div class="input-field col s6">
<input id="t5-n1" type="text" class="validate" name="vendor_name">
<label for="t5-n1">Contact Name</label></div>
                                        
<div class="input-field col s6">
<input id="t5-n4" type="number" name="vendor_phone" class="validate">
<label for="t5-n4">Mobile</label></div></div>
                                        
<div class="row">
<div class="input-field col s12">
<input id="t5-n5" type="email" name="vendor_email" class="validate">
<input id="t5-n5" type="hidden" name="vendor_id" value="<?php echo $vendor_id?>" class="validate">
<label for="t5-n5">Email</label></div></div>
                                        
<div class="row" style="margin-top: 38px;">
<label for="textarea1">Listing Descriptions:</label>
<div class="input-field col s12" >

<textarea id="detail" class="materialize-textarea" name="details" style="display: block!important; padding: 0px!important;"></textarea> 
</div></div>
                                            
<div class="row">
<div class="input-field col s12">
<input type="submit" id="submit" class="waves-effect waves-light btn-large" name="submit" value="Submit">
</div></div></form>
									

									
                                </div>
                            </div>
                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

	
	
	
	
    <!--== BOTTOM FLOAT ICON ==-->
  
    <!--======== SCRIPT FILES =========-->
	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
	
	<script>
		/*$(document).ready(function(){
			var form = $('#myform');
			$('#submit').click(function(){
				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $("#myform input").serialize(),
					
					success: function(data){
						console.log(data);
					}
				
				});
			});
			
		
		});
			*/			  
		
	</script>
	<script>
                        CKEDITOR.replace( 'detail' );
                </script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/listing-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:16:00 GMT -->
</html>