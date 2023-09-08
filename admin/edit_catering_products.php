<?php 
session_start();
require_once('inc/config.php');
  if($_SESSION['email']=='' || $_SESSION['email']==NULL)
header('location:index.php');
$id=$_GET['id'];
$get_managment="select * from catering_product where id='$id'";
                $run_managment=mysqli_query($conn, $get_managment);	

                $read_data=mysqli_fetch_array($run_managment);
                
                $images=$read_data["slider_image"];
                $images1=explode(",",$images);
                //$category=explode(",",$read_data['category_name']);
if(isset($_POST['submit_details']))
{
    $pname=$_POST["p_name"];
    $pprice=$_POST["p_price"];
    $pdesc=$_POST["p_desc"];
    $pinclude=$_POST["p_include"];
    $service=$_POST["p_service"];
    $offered=$_POST['p_cuisinesoffered'];
    $category=implode(",",$_POST['slctcategory']);
    $cancel=$_POST["p_cancell"];
    $video_path=$_FILES["p_video"]["name"];
    $tmp= $_FILES['p_video']['tmp_name'];
    $filename1=$_FILES["p_featureimage"]["name"]; 
    $filetmp1=$_FILES["p_featureimage"]["tmp_name"];
    $filename=$_FILES["p_sliderimage"]["name"]; 
    $filetmp=$_FILES["p_sliderimage"]["tmp_name"];
    $fileupload=implode(",",$filename);
    move_uploaded_file($tmp, '../images/Catering images/upload/product video/'.$video_path);
    move_uploaded_file($filetmp1, "../images/Catering images/upload/".$filename1);
    move_uploaded_file($filetmp1, "../images/Catering images/upload/".$filename1);


// Feature image condition
if($filename1=="")
						{
					$im=$read_data["feature_image"];
					}
					else 
					{
				        $im=$filename1;
				}


// Slider image condition
if($filename=="")
						{
					$imslider=$read_data["slider_image"];
					}
					else 
					{
				        $imslider=$filename;
				}

// Video condition
if($video_path=="")
						{
					$video=$read_data["product_video"];
					}
					else 
					{
				        $video=$video_path;
				}
    
$error=array();
$items = array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["p_sliderimage"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["p_sliderimage"]["name"][$key];
    $file_tmp=$_FILES["p_sliderimage"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("../images/Catering images/upload/slider image/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["p_sliderimage"]["tmp_name"][$key],"../images/Catering images/upload/slider image/".$file_name);
            $items[] =$file_name;
            
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["p_sliderimage"]["tmp_name"][$key],"../images/Catering images/upload/slider image/".$newFileName);
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
$final_multiple_images=$read_data["slider_image"];
}
else
{
    $final_multiple_images=$multi_images;
}

$product_managment="update catering_product set prodcut_name='$pname',product_price='$pprice',product_desc='$pdesc',product_include='$pinclude',product_video='$video',service_speciality='$service',cuisines_offered='$offered',cancellation_policy='$cancel',feature_image='$im',slider_image='$final_multiple_images',uploaded_by='Admin',catering_category='$category' where id='$id'";

if(mysqli_query($conn, $product_managment)==true)
{
    echo "<script>alert('Catering Products Update')</script>";
    echo "<script>window.location.href='manage_catering_product.php'</script>";
}
else
{
    echo "<script>alert('Catering Products not Update')</script>";
    echo "<script>window.location.href='manage_catering_product.php'</script>";
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
    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/mob.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/materialize.css" /> -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">

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
                        <h4 class="page-title">Edit Products</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="manage_catering_product.php">Products</a></li>
                            <li class="active">Edit Products</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Details</h3>
                            <form class="form-material form-horizontal" method="post" enctype= multipart/form-data>

                            <div class="form-group">
                                    <label class="col-md-12" for="example-text">Category</span>
                                    </label>
                                </div>
                                   
                                <select class="selectpicker form-control" name="slctcategory[]" multiple data-live-search="true">
                                            <?php
													$data="select * from  categories_catering";
													$exe=mysqli_query($conn,$data);
                                                    while($read=mysqli_fetch_array($exe)){
                                                        $category=explode(",",$read_data['catering_category']);
                                                      
												    $fetch_details=$read["category_name"];
if(in_array("$fetch_details",$category))
{ ?>
                                    <option value="<?php echo $read["category_name"]; ?>" selected><?php echo $read["category_name"]; ?></option>
                                    <?php }  else { ?>
                                        <option value="<?php echo $read["category_name"]; ?>" ><?php echo $read["category_name"]; ?></option>
                                        <?php } } ?>
                                    </select>&nbsp;&nbsp;&nbsp;


                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Product Name</span>
                                    </label>
                                    <div class="col-md-12">
                                       <input id="website" type="text" value="<?php echo $read_data['prodcut_name'];?>" name="p_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="sdate">Product Price ( In Rs/- )</label>
                                    <div class="col-md-12">
                                       <input id="phone" type="number" value="<?php echo $read_data['product_price'];?>" name="p_price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="duration">Products Description</label>
                                    <div class="col-md-12">
                                       <!-- <input id="phone" type="text" value="" name="p_desc" class="form-control"> -->
                                       <textarea id="editor2" name="p_desc"><?php echo $read_data['product_desc'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor2');
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="price"> Products Include</label>
                                    <div class="col-md-12">
                                      <!-- <input id="website" type="text" value="" name="p_include" class="form-control"> -->
                                      <textarea id="editor3" name="p_include"><?php echo $read_data['product_include'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor3');
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Products Video</label>
                                    <div class="col-md-12">
                                    <video width="320" height="240" controls>
                                    <source src="img\product_img\product_video\<?php echo $read_data['product_video'];?>">
                                    </video>
                                     <input id="password" type="file" value="" name="p_video" class="form-control">
                                     
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Service Speciality</label>
                                    <div class="col-md-12">
                                     <!-- <input id="password" type="text" value="" name="p_needtoknow" class="form-control"> -->
                                     <textarea id="editor4" name="p_service"><?php echo $read_data['service_speciality'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor4');
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Cuisines offered</label>
                                    <div class="col-md-12">
                                     <!-- <input id="password" type="text" value="" name="p_needtoknow" class="form-control"> -->
                                     <textarea id="editor6" name="p_cuisinesoffered"><?php echo $read_data['cuisines_offered'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor6');
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Cancellation Policy</label>
                                    <div class="col-md-12">
                                     <!-- <input id="password" type="text" value="" name="p_cancell" class="form-control"> -->
                                     <textarea id="editor5" name="p_cancell"><?php echo $read_data['cancellation_policy'];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor5');
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Feature Images</label>
                                    <div class="col-md-12">
                                    <img src="../images/Catering images/upload/<?php echo $read_data['feature_image'] ?>" alt="" style="width: 7%;">
                                     <input id="password" type="file" value="" name="p_featureimage" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="professor">Slider Images</label>
                            
                                    <div class="col-md-12">
                                    <?php
foreach($images1 as $im){
?>
                                    <img src="../images/Catering images/upload/slider image/<?php echo $im;?>" alt="" style="height: 85px;">
                                    <?php } ?>
                                     <input id="password" type="file" value="" name="p_sliderimage[]" class="form-control" multiple>
                                    </div>
                                    
                                </div>
                              
                                <button type="submit" name="submit_details" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                             
                            </form>
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
