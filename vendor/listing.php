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
    <script>
		function con() {
			var c = confirm("Are You Sure You Want To Delete This Record?");
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
                        <li class="active-bre"><a href="listing.php"> All Listing</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Listing All</h4>
                                  
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="add_listing.php">Add New</a>
                                        </li>
                                     
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="material-icons">delete</i>Delete All</a>
                                        </li>
                                     
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
													<th>S.No</th>
                                                    <th>Contact Name</th>
                                                    <th>Listing Name</th>
													<th>Feature Image</th>
													<th>Listing Category</th>
													<th>Listing Date</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
											
											
                                            <tbody>
												<?php
                                                $get_listing="select * from vendor_listing where v_id='$id'"; 
                                       
                                                echo "Your Vender ID is:  $id ";
											$run_listing=mysqli_query($conn,$get_listing);
                                            $c=1;
											while($read_listing=mysqli_fetch_array($run_listing))
											{
												
											
											?>
                                                <tr>
													<td><?php echo $c;?></td>
												
                    <td><?php echo $read_listing['vendor_name'];?></td>
					<td><?php echo $read_listing['listing_name'];?></td>
                    <td><img src="images/listing/<?php echo $read_listing["feature_image"]; ?>" alt="" style="height: 120px;width: 140px;"></td>
					<td><?php echo $read_listing['list_category'];?></td>
					<td><?php echo $read_listing['date'];?></td>
				
                                                    <td>
                                                        <a href="view_listing.php?post_id=<?php echo $read_listing['list_id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="edit_listing.php?post_id=<?php echo $read_listing['list_id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
 <a href="delete_listing.php?post_id=<?php echo $read_listing['list_id'];?>" onclick="return con()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                             <?php $c++;} ?>
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


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/listing-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:15:58 GMT -->
</html>