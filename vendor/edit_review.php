<?php
session_start();
require_once('inc/config.php');

$vendor_id=$_SESSION['v_id'];


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
                        <li class="active-bre"><a href="#"> Add Review</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Edit Review</h2>
                 
                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Review Details</span></a>
                        </li>
              
                       <!-- <li><a data-toggle="tab" href="#menu4"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
                        </li>-->
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Review Information</h4>
                                  
                                </div>
    <?php
    $postid=$_GET['post_id'];
$get_user="select * from customer_review  where id='$postid'";
$run_user=mysqli_query($conn,$get_user);
$read_user=mysqli_fetch_array($run_user);


if(isset($_POST['submit_details']))
	{
        
        $status=$_POST['status'];
        
		
		$sql="update customer_review set Status='$status' where id='$postid'";
        $run=mysqli_query($conn,$sql);
		if($run==TRUE)
		{
		
				echo '<div class="alert active">Sucessfully Updated</div>';
			 echo '<meta http-equiv="refresh" content="1;URL=vender_review.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			 echo '<meta http-equiv="refresh" content="1;URL=vender_review.php">';
		}
		
		
    }
    
	?>

<div class="bor">
<form method="POST" id="myform" enctype="multipart/form-data">

<div class="form-group">
<label class="col-md-12" for="example-text">Property Image</span></label>
<div class="col-md-12">
<img src="images/listing/<?php echo $read_user['Property_img'];?>" alt="" class="img-circle" style="height: 120px;width: 120px;" name="Property_img"></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Property Name</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['Property_name'];?>" name="address" class="form-control" readonly></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Vender ID</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['Vender_id'];?>" name="price" class="form-control" readonly></div></div>
											
<div class="form-group">
<label class="col-md-12" for="example-text">Vender Name</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['Vender_name'];?>" name="rooms" class="form-control" readonly></div></div>
                    
<div class="form-group">
<label class="col-md-12" for="example-text">Customer Star Rating</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['customer_rating'];?>" name="guest" class="form-control" readonly></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Customer Name</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['customer_name'];?>" name="guest" class="form-control" readonly></div></div>

<div class="form-group">
<label class="col-md-12" for="example-text">Customer Email</span></label>
<div class="col-md-12">
<input id="website" type="text" value="<?php echo $read_user['customer_email'];?>" name="guest" class="form-control" readonly></div></div>
                                        
<div class="row" style="margin-top: 38px;">
<label for="textarea1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Customer Message:</label>
<div class="input-field col s12" >

<textarea id="detail" class="materialize-textarea" name="details" style="display: block!important; padding: 0px!important;" readonly><?php echo $read_user['customer_message'];?></textarea> 
</div></div>
                                            
<div class="input-field col s12">          
        <select name="status">
                <option value="<?php echo $read_user['Status'];?>"><?php echo $read_user['Status'];?></option>
                <option value="Active">Active</option>
                <option value="Pending">Inactive</option>
        </select>
</div>

<div class="row">
<div class="input-field col s12">
<!-- <input type="submit" id="submit" class="waves-effect waves-light btn-large" name="submit" value="Submit"> -->
<button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>

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