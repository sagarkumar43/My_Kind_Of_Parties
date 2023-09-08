<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0049)http://112.133.194.253/REprintletter/reprint.aspx -->



<?php 
include("mysql_connection.php");
  




?>








<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	ICAI Reprint Letter
</title>
        <script language="JavaScript" type="text/javascript" src="../images/logo/your school.png"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-size:10pt;font-family:Verdana">


    <div align="center"><img alt="" src="../images/logo/your school.png"></div>
    <img src="../images/logo/your school.png"
 id="loader" style="display:none">
    <span id="lblError" style="color:Red"></span>
    <div id="dvM" align="center">
        <br>
        <div style="text-align:center;font-weight:bold;font-size:large">Kindly Enter Following Registration Details</div>    
        <div style="text-align:center;">(should be same as provided to ICAI while registration)</div><br>
		  
    </div>
	
	
	<center><div class="panel panel-default" style="width:50%;">
    
	<form method="POST" enctype="multipart/form-data"  >
    
	
	<div class="form-group  col-md-6">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">Email </label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">D.O.B </label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="date" required>
    </div>
	
	
	
	
	<div class="form-group  col-md-6">
      <label for="email">ICAI Registration Number</label>
      <input type="text" class="form-control" id="email" placeholder="ICAI Registration Number" name="reg" required>
    </div>

    <div class="form-group  col-md-6">
      <label for="email">Father Name</label>
      <input type="text" class="form-control" id="email" placeholder="Father Name" name="father" required>
    </div>

    <div class="form-group  col-md-6">
      <label for="email">Mother Name</label>
      <input type="text" class="form-control" id="email" placeholder="Mother Name" name="mother" required>
    </div>

    <div class="form-group  col-md-6">
      <label for="email">Phone Number</label>
      <input type="number" class="form-control" id="email" placeholder="Phone Number" name="phone" required>
    </div>

    <div class="form-group  col-md-6">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" placeholder="Address" name="address" required>
    </div>
	
	
	<div class="form-group  col-md-6">
      <label for="email">Image Passport Size</label>
      <input type="file" class="form-control" id="simg" name="img" required>
    </div>
	
	<div class="form-group  col-md-6">
      <label for="email">ICAI Letter </label>
      <input type="file" class="form-control" id="slett" name="img_lett" required>
    </div>
	
	
	
	
	
	
	
   <div class="panel-footer clearfix">
      
           <center> <div >
      
     <center> <input type="submit" class="btn btn-success" value="SUBMIT" id="email" placeholder="Enter email" name="submit" style="padding: 7px 25px; font-size: 16px;"></center>
    </div></center>
       
    </div>
	</form>
</div></center>
	
	
	
	

<?php

if(isset($_POST["submit"]))
{
	
	
	
	$name=$_POST["name"];
	$reg=$_POST["reg"];
	$date=$_POST["date"];
	$email=$_POST["email"];
	$father=$_POST["father"];
	$mother=$_POST["mother"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];

	
	$filename=$_FILES["img"]["name"];
				$filetemp=$_FILES["img"]["tmp_name"];
				
				
				move_uploaded_file($filetemp,"uplode image/".$filename);
				
				
				
				$filename_lett=$_FILES["img_lett"]["name"];
				$filetemp=$_FILES["img_lett"]["tmp_name"];
				
				
				move_uploaded_file($filetemp,"uplode letter/".$filename_lett);
				
	
	
	
   $query = "insert into icai set letter='$filename_lett',name='$name',reg='$reg',date='$date',img_pass='$filename',email='$email',father='$father',mother='$mother',phone='$phone',address='$address', status='0'";
			
	
	if($contact_result=$con->query($query)===true)
			{
				echo "<script>alert('Thank you for registration. You will get confirmation email.')</script>";
				//echo "<script>window.location.href='index.php'</script>";
				
			}
			else
			{
				echo "<script>alert('Something went wrong. Please try again.')</script>";
			}
			
}	
			
	
	
?>
	
    <div id="dvData"></div>
    <div align="center" style="page-break-after:always" id="dvPrint"><br>
         &nbsp; &nbsp; &nbsp;
        <a href="index.php">Back</a> &nbsp; &nbsp; &nbsp;
        
    </div>

<script>
    var uploadField = document.getElementById("simg");

uploadField.onchange = function() {
    if(this.files[0].size > 2101699){
       alert("File size must be less than 2 MB!");
       this.value = "";
    };
};

var uploadField = document.getElementById("slett");

uploadField.onchange = function() {
    if(this.files[0].size > 2101699){
       alert("File size must be less than 2 MB!");
       this.value = "";
    };
};
</script>
</body></html>






