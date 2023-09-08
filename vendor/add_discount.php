<?php
session_start();
require_once('inc/config.php');

$vendor_id=$_SESSION['v_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyKOP Admin Panel</title>
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
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Discount</a>
                        </li>
                        <li class="page-back"><a href="dashboard.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add Discount</h4>
                           
                        </div>
                        <div class="bor">
                            <form method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" name="discount_name" value="" class="validate">
                                        <label for="list-title">Discount Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="text" value=""  name="discount_price" class="validate">
                                        <label for="post-auth">Discount Price</label>
                                    </div>
                                   
                                </div>
                              
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select multiple name="discount_on[]">
											<option disabled selected>Choose Listing Name</option>
                                            <?php
                        $am=mysqli_query($conn,"select * from vendor_listing where v_id='$vendor_id'");
                        while($am_f=mysqli_fetch_array($am)){
                           echo' <option value="'.$am_f["listing_name"].'">'.$am_f["listing_name"].'</option>';
                        }
                    
                        ?>
                                        </select>
                                        <label>Discount On Listing Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <input type="submit" class="waves-effect waves-light btn-large" name="submit" value="Submit"> -->
                                        <button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    </div>
                                </div>
                            </form>
<?php
							if(isset($_POST['submit_details']))
							{
							$discount_price=$_POST['discount_price'];
								$discount_name=$_POST['discount_name'];
								$discount_on=implode(",",$_POST['discount_on']);
								
					echo			$add_discount="insert into discount(discount_price,discount_name,dicount_on,v_id) values ('$discount_price','$discount_name','$discount_on','$vendor_id')";
								$run_discount=mysqli_query($conn,$add_discount);
								if($run_discount===true)
								  {
					echo "<script>alert('Discount Added Successfully')</script>";
			echo '<meta http-equiv="refresh" content="1;URL=discounts.php">';
		}
		else
		{
		echo '<div class="alert info">Error.. Please Try Again</div>';
			echo '<meta http-equiv="refresh" content="1;URL=discounts.php">';
		}	
							
							}
							?>						
							
							
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
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/discount-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:16:03 GMT -->
</html>