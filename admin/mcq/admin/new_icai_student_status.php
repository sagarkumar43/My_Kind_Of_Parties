<?php
include('include/configure.php');
include('include/meta_tag.php');
include('include/main-header1.php');
include('login_check.php');

$s_id=$_GET["s_id"];
$name=$_GET["name"];
$email=$_GET["email"];
$date=$_GET["date"];
$reg=$_GET["reg"];
$father=$_GET["father"];
$mother=$_GET["mother"];
$phone=$_GET["phone"];
$address=$_GET["address"];
$address=$_GET["address"];

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
		
	</title>
</head>
<body style="background-image: url(screenshot.PNG); background-repeat: no-repeat;">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="width: 530px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Below Details</h4>
        </div>
        <div class="modal-body">
         <form method="POST" enctype="multipart/form-data"  style="margin-top: 20px;">
    
	
	<div class="form-group  col-md-6" style="margin-left: 45px;">
      <label for="email">Course Name</label>
       <div class="controls">
									<select name="course_name" class="chzn-select" name="course" onChange="getState(this.value)" style="width: 90%;" required>
									<option value=""><?php //echo constant('TI_SELECT_CATEGORY');?>Select Course</option>  
										<?php $query_category=mysqli_query($con,"select * from category where category_status=1");
										while($result_category=mysqli_fetch_array($query_category))
										{
										?>
                                    	<option value="<?php echo $result_category['c_id'];?>"><?php echo ucfirst($result_category['category_name']);?></option>
										
										<?php }?>
                                                
                                    </select>
                                </div>
    </div>
	
	<br>
	<div class="form-group  col-md-6" style="margin-left: 45px;">
      <label for="email">Center Name </label>
      <div class="controls">
                                   <select name="center_name" class="chzn-select" style="width: 90%;" required>
								   <option value=""><?php echo constant('TI_DROPDOWN_STUDENT_SELECT_CENTER');?></option>
								   <?php 
								   $query_center=mysqli_query($con,"select * from center order by centername");
								   while($result_center=mysqli_fetch_array($query_center))
								   {?>
									<option value="<?php echo $result_center['c_id'];?>"><?php echo $result_center['centername'];?></option>

								   <?php }
								   ?>
								   </select>
                                </div>
    </div>
	
		<br>
    <div class="form-group  col-md-6" style="margin-left: 45px;">
      <label for="email">Batch Name & Time</label>
        <div class="controls">
                                   <select name="batch_time" class="chzn-select" style="width: 90%;" required>
								   <option value=""><?php echo constant('TI_DROPDOWN_BATCH_SELECT');?></option>
								   <?php 
								   $query_batch=mysqli_query($con,"select * from batch order by b_id");
								   while($result_batch=mysqli_fetch_array($query_batch))
								   {?>
									<option value="<?php echo $result_batch['b_id'];?>"><?php echo $result_batch['batch_name']."(".$result_batch['batch_time'].")";?></option>

								   <?php }
								   ?>
								   </select>
                                </div>
    </div>
    	<br>
    	<div class="padded" style="margin-left: 30px;" >  
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_PASSWORD');?><spen style="color:red"> * </spen></label>
                                <div class="controls">
                                    <input type="password" class="validate[required]" name="password" style="width: 92%;" required>
                                </div>
                            </div>
						 </div>
    <br>
   

  
	
        </div>
        <div class="modal-footer">
        	<input type="submit" value="Confirm" name="confirm" class="btn btn-success"/>
        	
        	<a href="new_student_reg.php" class="btn btn-red" >Cancel</a>
          
        </div>
      </div>
      </form>

      <?php
       if(isset($_POST['confirm'])) 
 		 {
 	$course_name=$_POST["course_name"];
	$center_name=$_POST["center_name"];
	$batch_time=$_POST["batch_time"];
	$password=$_POST["password"];
	$password_md5= mysql_prep(encrypt($_POST['password']));
$s_id=$_GET["s_id"];
$name=$_GET["name"];
$email=$_GET["email"];
$date=$_GET["date"];
$reg=$_GET["reg"];
$father=$_GET["father"];
$mother=$_GET["mother"];
$phone=$_GET["phone"];
$address=$_GET["address"];

$sql1="INSERT INTO  student set student_name='$name',student_father='$father',student_mother='$mother',student_dob='$date',student_address='$address',student_phone='$phone',student_email='$email',password='$password',password_md5='$password_md5',student_status='1',category_id='$course_name',subcategory_id='0',subject_id='0',center_id='$center_name',b_id='$batch_time',icai='$reg'";
	
	 $data=mysqli_query($con,$sql1);

	 		if ($data>0) 
	 		{
	 		   $sql1 = "update icai set status ='1' where id = '$s_id' ";
	 		   $data1 = mysqli_query($con,$sql1);
              echo "<script>alert('Student Status Activated Sucessfully')</script>";
              echo "<script>window.location.href='new_student_reg.php'</script>";

            } 
			else {
              echo "<script>alert('!Something Went Wrong')</script>";
              echo "<script>window.location.href='new_student_reg.php'</script>";
            }

	}
?>
    </div>
  </div>
  <script type="text/javascript">
  	 $(window).on('load',function(){
        $('#myModal').modal('show');
         
    });
  	 
  </script>
  
</body>
</html>