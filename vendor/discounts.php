<?php
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

$id=$_SESSION['v_id'];

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <script>
		function con() {
			var c = confirm("Are You Sure To Delete This Data?");
			if (c == true) {
				return true;
			}
			else {
				return false;
			}
		}
	</script>
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
                        <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="discounts.php">All Discpunts</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>All Discounts</h4>
                               
                                    

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
													<th>S.No</th>
                                                    <th>Discount Name</th>
                                                    <th>Discount Price</th>
                                                    <th>Discount On</th>
                                                    <th>Action</th>
                                                    <!-- <th>Delete</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php
												$get_discounts="select * from discount where v_id='$id'";																	$run_discount=mysqli_query($conn,$get_discounts);
												$i=1;
												while($read_discount=mysqli_fetch_array($run_discount))
												{
												
												
												?>
                                                <tr>
													<td><?= $i;?></td>
													<td><?= $read_discount['discount_name'];?></td>
                                                    <td><?= $read_discount['discount_price'];?></td>
                                                    <td><?= $read_discount['dicount_on'];?></td>
													<td>
														<?php
													
													// $get_listid=$read_discount['dicount_on'];
													 $get_listid=explode(",", $read_discount["dicount_on"]);
				                                        foreach($get_listid as $get_list){
				
													$get_list="select * from vendor_listing where list_id='$get_list'";
													$run=mysqli_query($conn,$get_list);
												while($read_list=mysqli_fetch_array($run)) { ?>
														<?= $read_list['listing_name']; ?>
                                                    <?php } }?>
                                                    
													</td>
                                                    <td>
                                                        <a href="edit_discount.php?post_id=<?=$read_discount['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="delete_discount.php?post_id=<?=$read_discount['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true" onclick="return con()"></i></a>
                                                    </td>
                                                    <!-- <td>
                                                        <a href="delete_discount.php?post_id=<?=$read_discount['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
												<?php $i++; }?>
                                            </tbody>
                                        </table>
                                    </div>
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
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/discount.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:16:03 GMT -->
</html>