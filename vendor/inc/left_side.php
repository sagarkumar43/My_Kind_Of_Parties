<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');

if($_SESSION['v_status']=='Pending')
{
header('location:dashboard2.php');
}


$name=$_SESSION['v_name'];

?>


<div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                    <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Welcome <?php echo $name; ?><span> </span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>             

			 <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="dashboard.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li id="arrowdropdown"><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Listing</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="listing.php">All listing</a>
                                    </li>
                                    <li><a href="add_listing.php">Add New listing</a>
                                    </li>
                                   <!-- <li><a href="listing_cat.php">All listing Categories</a>
                                    </li>
                                    <li><a href="add_listing_category.php">Add listing Categories</a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>
                     
                        <!-- <li id="arrowdropdown"><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-inr" aria-hidden="true"></i> Discounts</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discounts.php">All Discounts</a>
                                    </li>
                                    <li><a href="add_discount.php">Add New Discounts</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                       
                        <li><a href="booking_enquiry.php" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                        </li>
                        <li><a href="vender_review.php" class="collapsible-header"><i class="fa fa-address-card" aria-hidden="true"></i> Reviews</a>
                        </li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                       
                    </ul>
                </div>
            </div>
			
			</div>