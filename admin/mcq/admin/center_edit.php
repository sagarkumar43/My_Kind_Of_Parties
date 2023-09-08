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
	$email = mysql_prep($_POST['email']);

	$sql = "SELECT email FROM center WHERE email='$email'";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) >0)
	{
		$query=mysqli_query($con,"update center set centername='{$centername}', centeraddress='{$centeraddress}', username='{$username}',password_md5='{$password_md5}',password='{$password}' where c_id='".$_POST['c_id']."'");
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
		$query=mysqli_query($con,"update center set centername='{$centername}', centeraddress='{$centeraddress}', username='{$username}',password_md5='{$password_md5}',password='{$password}',email='{$email}' where c_id='".$_POST['c_id']."'");
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
if($_GET['c_id']!="")
{
	$c_id=$_GET['c_id'];
	$query=mysqli_query($con,"select * from center where c_id='".$c_id."'");
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
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_EMAIL');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required,custom[email]]" name="email" value="<?php echo $result['email'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_USER_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="username" value="<?php echo $result['username'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_PASSWORD');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="password" value="<?php echo $result['password'];?>"/>
                                </div>
                            </div>
							
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo constant('TI_CENTER_EDIT_BUTTON');?> </button>
							<input type="hidden" value="Update_setting" name="submit">
							<input type="hidden" value="<?php echo $result['c_id'];?>" name="c_id">
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