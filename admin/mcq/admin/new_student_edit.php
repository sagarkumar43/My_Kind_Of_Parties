<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');


if(isset($_POST["submit"]))
{

	
		$student=$_POST['student_id'];
		
	$name=$_POST["name"];
	$reg=$_POST["reg"];
	$date=$_POST["date"];
	$email=$_POST["email"];

	
	$filename=$_FILES["img"]["name"];
				$filetemp=$_FILES["img"]["tmp_name"];
				
				
				move_uploaded_file($filetemp,"uplode image/".$filename);
				
				
				
				$filename_lett=$_FILES["img_lett"]["name"];
				$filetemp=$_FILES["img_lett"]["tmp_name"];
				
				
				move_uploaded_file($filetemp,"uplode letter/".$filename_lett);
				
echo	$query = "update icai set letter='$filename_lett',name='$name',reg='$reg',date='$date',img_pass='$filename',email='$email' where sno='$student'";
		
	
	
	
	
	
	
	if($contact_result=$con->query($query)===true)
		{
			
			$message_success .=ucfirst($student_name)." ". constant('TI_STUDENT_EDIT_MESSAGE');

		}
		else
		{
			$error .=  constant('TI_SUBJECT_MYSQL_ERROR');
		}
			
}	
			
	



if($_GET['student_id']!="")
{
$student_id=$_GET['student_id'];
$query=mysqli_query($con,"select * from icai where sno='".$student_id."'");
$result=mysqli_fetch_array($query);

}
?>

<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i><?php echo constant('TI_MANAGE_STUDENT');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#add" data-toggle="tab"><i class="icon-wrench"></i><?php echo constant('TI_STUDENT_EDIT_BUTTON');?></a>
					</li>
				</ul>	
			</div>
	<div class="box-content padded">
		<div class="tab-content">        
			<?php include("message.php");?>
			<div class="tab-pane active" id="add" style="padding: 5px">
				

<form method="POST" enctype="multipart/form-data"  >
    
	
	<div class="form-group  col-md-6">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" value="<?php echo $result['name'];?>" name="name">
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">Email </label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $result['email'];?>" name="email">
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">D.O.B </label>
      <input type="date" class="form-control" id="email" placeholder="Enter email"  value="<?php echo $result['date'];?>" name="date">
    </div>
	
	
	
	
	<div class="form-group  col-md-6">
      <label for="email">ICAI Number</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Registration Number"  value="<?php echo $result['reg'];?>" name="reg">
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">Image Passport Size</label>
      <input type="file" class="form-control" id="email" placeholder="Enter email"  value="<?php echo $result['img'];?>" name="img">
    </div>
	
	<div class="form-group  col-md-6">
      <label for="email">ICAI Letter </label>
      <input type="file" class="form-control" id="email" placeholder="Enter email"   value="<?php echo $result['letter'];?>" name="img_lett">
    </div>
	
	
	
	
	
	
	
   <div class="panel-footer clearfix">
      
           <center> <div >
      
     <center> <input type="submit" class="form-control btn btn-info" value="submit" id="email" placeholder="Enter email" name="submit"></center>
    </div></center>
       
    </div>
	</form>

                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>
</div>       
           <?php include("copyright.php");?>
		   </div>
	</div>
</body> 
</html>