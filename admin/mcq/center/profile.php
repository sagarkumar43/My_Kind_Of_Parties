<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
if(isset($_POST['submit']) and $_POST['c_id']!="")
{			
	$centername=mysql_prep($_POST['centername']);
	$centeraddress=mysql_prep($_POST['centeraddress']);
	$username=mysql_prep($_POST['username']);
	$password_md5=encrypt($_POST['password']);
	$password=mysql_prep($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);
	$phoneno=mysql_prep($_POST['phoneno']);
	$about_center=mysql_prep($_POST['about_center']);

	
	

	$sql = "SELECT email FROM center WHERE email='$email'";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) >0)
	{
		$query=mysqli_query($con,"update center set centername='{$centername}', about_center='{$about_center}', centeraddress='{$centeraddress}', phoneno='{$phoneno}', password_md5='{$password_md5}',password='{$password}' where c_id='".$_POST['c_id']."'");


		if($_FILES['centerlogo']['name']!="")
		{		
			$img_dir="../images/logo/centerlogo/";	
			list($width, $height, $type, $attr) = getimagesize($_FILES["centerlogo"]['tmp_name']);		
			if($width<='200' && $height<='200')
			{
				$img = explode('.', $_FILES['centerlogo']['name']);	
				$img_type=$img[1];//image type(like jpg.png,gif,bmp)
				$extension_type = strtolower($img_type);

				if(in_array($extension_type , array('jpg','jpeg', 'gif', 'png', 'bmp')))
				{
					if($extension_type=='jpg' || $extension_type=='jpeg' || $extension_type=='gif' || $extension_type=='png' || $extension_type=='bmp')
					{
						$originalImage=$img_dir.$_FILES['centerlogo']['name'];
						$fileupload=move_uploaded_file ($_FILES['centerlogo']['tmp_name'],$originalImage);
						if($fileupload)
						{
							$query_update_mysql_setting=mysqli_query($con,"update center set centerlogo='".$_FILES['centerlogo']['name']."' where c_id='".$_POST['c_id']."'");
						}
					}
				}
			}
		}


		if($query)
		{
			$message_success .= constant('TI_CENTER_EDIT_MESSAGE');
		}
		else
		{
		$error .= constant('TI_CENTER_MYSQL_ERROR');
		}		
	}
	else
	{		
		$query=mysqli_query($con,"update center set centername='{$centername}', centeraddress='{$centeraddress}', password_md5='{$password_md5}',password='{$password}',email='{$email}' where c_id='".$_POST['c_id']."'");
		
		if($_FILES['centerlogo']['name']!="")
		{		
			$img_dir="../images/logo/centerlogo/";	
			list($width, $height, $type, $attr) = getimagesize($_FILES["centerlogo"]['tmp_name']);		
			if($width<='200' && $height<='200')
			{
				$img = explode('.', $_FILES['centerlogo']['name']);	
				$img_type=$img[1];//image type(like jpg.png,gif,bmp)
				$extension_type = strtolower($img_type);

				if(in_array($extension_type , array('jpg','jpeg', 'gif', 'png', 'bmp')))
				{
					if($extension_type=='jpg' || $extension_type=='jpeg' || $extension_type=='gif' || $extension_type=='png' || $extension_type=='bmp')
					{
						$originalImage=$img_dir.$_FILES['centerlogo']['name'];
						$fileupload=move_uploaded_file ($_FILES['centerlogo']['tmp_name'],$originalImage);
						if($fileupload)
						{
							$query_update_mysql_setting=mysqli_query($con,"update center set centerlogo='".$_FILES['centerlogo']['name']."' where c_id='".$_POST['c_id']."'");
						}
					}
				}
			}
		}
		if($query)
		{
			$message_success .= constant('TI_CENTER_EDIT_MESSAGE');
		}
		else
		{
		$error .= constant('TI_CENTER_MYSQL_ERROR');
		}		   
	}
}

if($_SESSION['center_id']!="")
{
	$c_id=$_GET['c_id'];
	$query=mysqli_query($con,"select * from center where c_id='".$_SESSION['center_id']."'");
	$result=mysqli_fetch_array($query);
}

?>
<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i><?php echo constant('TI_MANAGE_CENTER');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#add" data-toggle="tab"><i class="icon-wrench"></i><?php echo constant('TI_CENTER_EDIT');?></a>
					</li>
				</ul>	
			</div>
	<div class="box-content padded">
		<div class="tab-content">        
			<?php include("message.php");?>
			<div class="tab-pane active" id="add" style="padding: 5px">
				<form method="post" action="" class="form-horizontal validatable" enctype="multipart/form-data">
                        
                         <div class="padded"> 
								<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_CODE');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" readonly name="centercode" value="<?php echo $result['centercode'];?>"/>
                                </div>
                            </div>  
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="centername" value="<?php echo $result['centername'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_ABOUT');?> </label>
                                <div class="controls">                                    
									<div class="box closable-chat-box">
									
									<div class="chat-message-box">
									<textarea name="about_center" id="text_for_signature" rows="5" placeholder="About Center"><?php echo $result['about_center'];?></textarea>
									
									</div>
									</div>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_ADDRESS');?> </label>
                                <div class="controls">                                    
									<div class="box closable-chat-box">
									
									<div class="chat-message-box">
									<textarea name="centeraddress" id="text_for_signature" rows="5" placeholder="Add Center"><?php echo $result['centeraddress'];?></textarea>
									
									</div>
									</div>
                                </div>
                            </div>
							 <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_STUDENT_PHONE_CENTER');?></label>
                                <div class="controls">
                                    <input type="text"  name="phoneno" value="<?php echo $result['phoneno'];?>"/>
                                </div>
                            </div>


							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_GENERALSETTING_CERTIFICATE_LOGO');?></label>
                                <div class="controls">
                                     <input type="file" class="" name="centerlogo"  /><br><b><?php echo constant('TI_GENERALSETTING_LOGO_SIZE');?></b>
                                </div>
                            </div>
							<?php if($result['centerlogo']!=""){?>
                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="../images/logo/centerlogo/<?php echo $result['centerlogo'];?>" alt="your Logo" height="100" />
                                </div>
                            </div>
							<?php } else{?>
								<div class="control-group">
									<label class="control-label"></label>
									<div class="controls" style="width:210px;">                                   
									 <i class="icon-user icon-5x" style="color:#34495E;"></i>									
									</div>
								</div>
							<?php }?>	
							
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_EMAIL');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required,custom[email]]" name="email" value="<?php echo $result['email'];?>"/>
                                </div>
                            </div>							
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_PASSWORD');?></label>
                                <div class="controls">
                                    <input type="password" class="validate[required]" name="password" value="<?php echo $result['password'];?>"/>
                                </div>
                            </div>
							
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo constant('TI_CENTER_EDIT_BUTTON');?> </button>
							<input type="hidden" value="Update_setting" name="submit">
							<input type="hidden" value="<?php echo $_SESSION['center_id'];?>" name="c_id">
                        </div>
                    </form>                
                </div>                
			</div>
		
            
		</div>
	</div>
</div>
</div>       
    <?php include("copyright.php");?>        
	</div>
	</div>
</body> 
</html>