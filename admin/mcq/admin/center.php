<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');

if (isset($_POST['submit'])) 
{ 
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$sql = "SELECT email FROM center WHERE email='$email'";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) >0)
	{
	   $message_success .=constant('TI_CENTER_ERROR_ALLREADY_EXIT') ;
	}
	else
	{	
		
		
		$centercode=mysql_prep($_POST['centercode']);
		$centername=mysql_prep($_POST['centername']);
		$centeraddress=mysql_prep($_POST['centeraddress']);
		$email=mysql_prep($_POST['email']);
		$username=mysql_prep($_POST['username']);
		$password_md5=encrypt($_POST['password']);
		$password=mysql_prep($_POST['password']);

	 $query_add_center=mysqli_query($con,"insert into center (centercode,centername,centeraddress,email,username,password,password_md5,theme_id) values('".$centercode."','".$centername."','".$centeraddress."','".$email."','".$username."','".$password."','".$password_md5."','1')");

		if($query_add_center)
		{
			$message_success .=constant('TI_CENTER_SUCCESS_MESSAGE') ;
			
		}
		else
		{
		$error .= constant('TI_CENTER_MYSQL_ERROR');
		}		   
	}
}


?>
	<div class="main-content">
		<div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                        <?php echo constant('TI_MANAGE_CENTER');?> </h3>
                    </div>
                </div>
            </div>
        </div>       
		<div class="container-fluid padded">
			<div class="box">
				<?php include("message.php");?>
					<div class="box-header">    
						<ul class="nav nav-tabs nav-tabs-left">
							<li class="active">
								<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i><?php echo constant('TI_CENTER_LIST');?></a>
							</li>
							<li>
								<a href="#add" data-toggle="tab"><i class="icon-plus"></i><?php echo constant('TI_CENTER_ADD');?></a>
							</li>
						</ul>  
					</div>
					<div class="box-content padded">
						<div class="tab-content">        
							<div class="tab-pane box active" id="list">
								<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
									<thead>
										<tr>
											<!-- <th><div><?php //echo constant('TI_TABLE_ID');?></div></th> -->
											<th><div><?php echo constant('TI_TABLE_CENTER_NAME');?></div></th>
											<th><div><?php echo constant('TI_TABLE_CENTER_CODE');?></div></th>							
											<th><div><?php echo constant('TI_TABLE_CENTER_EMAIL');?></div></th>
											<th><div><?php echo constant('TI_TABLE_CENTER_USER_NAME');?></div></th>
											<th><div><?php echo constant('TI_TABLE_STATUS');?></div></th>
											<th><div><?php echo constant('TI_TABLE_OPTIONS');?></div></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$query_center_setting=mysqli_query($con,"select * from center order by c_id");
											$i=0;
											while($res=mysqli_fetch_array($query_center_setting))
											{ 
												$i++;										
											?>
											<tr>
												<td><?php echo @$res['centername'];?></td>
												<td><?php echo $res['centercode'];?></td>											
												<td><?php echo $res['email'];?></td>
												<td><?php echo $res['username'];?></td>
												<td><?php
														if($res['center_status']==1)
														{?>														

														<a data-toggle="modal" href="#modal-status-deactive" onclick="modal_status_deactive('center_status.php?c_id=<?php echo $res['c_id'];?>')" class="btn btn-red btn-small"><i class="icon-eye-close"></i> <?php echo constant('TI_DEACTIVATE_BUTTON');?></a>
													<?php }
														else
														{?>														
															
														<a data-toggle="modal" href="#modal-status-active" onclick="modal_status_active('center_status.php?c_id=<?php echo $res['c_id'];?>')" class="btn btn-green btn-small"><i class="icon-eye-open"></i> <?php echo constant('TI_ACTIVATE_BUTTON');?></a>
													<?php }?>	
												</td>
												<td align="center">
													<a data-toggle="modal" href="#question-modal-form" onclick="modal_view_center_profile('Center_profile',<?php echo $res['c_id'];?>)"class="btn btn-default btn-small"><i class="icon-user"></i>  <?php echo constant('TI_PROFILE_BUTTON');?> </a>
													

													<a data-toggle="modal" href="center_edit.php?c_id=<?php echo $res['c_id'];?>"  class="btn btn-gray btn-small"><i class="icon-wrench"></i> <?php echo constant('TI_EDIT_BUTTON');?></a>

													<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('center_delete.php?c_id=<?php echo $res['c_id'];?>')" class="btn btn-red btn-small"><i class="icon-trash"></i> <?php echo constant('TI_DELETE_BUTTON');?> </a>
												</td>
											</tr>
											<?php } ?>                                
										</tbody>
									</table>
								</div>
          
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<form action="<?php $PHP_SELF ?>" method="post" accept-charset="utf-8" class="form-horizontal validatable" target="_top">	
				    
						<div class="padded"> 
								<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_CODE');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" readonly name="centercode" value="<?php echo randomNumber("4");?>"/>
                                </div>
                            </div>  
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="centername"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_ADDRESS');?> </label>
                                <div class="controls">                                    
									<div class="box closable-chat-box">									
									<div class="chat-message-box">
									<textarea name="centeraddress" id="text_for_signature" rows="5" placeholder="Add Center"></textarea>									
									</div>
									</div>
                                </div>
                            </div>
							         
							
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_EMAIL');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required,custom[email]]" name="email"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_USER_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="username"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_PASSWORD');?></label>
                                <div class="controls">
                                    <input type="password" class="validate[required]" name="password"/>
                                </div>
                            </div>
							
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo constant('TI_CENTER_ADD_BUTTON');?></button>
							<input type="hidden" value="Add new Center" name="submit">
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



<!-----------HIDDEN QUESTION MODAL FORM - COMMON IN ALL PAGES ------>
<div id="question-modal-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
	</div>
    <div class="modal-body" id="modal-body-question"><?php echo constant('TI_LOADING_DATA');?></div>
    <div class="modal-footer">
        <!-- <button class="btn btn-gray" onclick="custom_print('frame1')"><?php echo constant('TI_PRINT');?></button> -->
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>






<!-----------HIDDEN MODAL DELETE CONFIRMATION - COMMON IN ALL PAGES ------>
<div id="modal-delete" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i> <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_POPUP_DELETE_CENTER');?></div>
    <div class="modal-footer">
    	<a href="" id="delete_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>
<!-----------HIDDEN MODAL ACTIVE STATUS CONFIRMATION - COMMON IN ALL PAGES ------>

<div id="modal-status-active" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_STATUS_DATA_ACTIVE');?></div>
    <div class="modal-footer">
    	<a href="center_status.php?c_id=<?php echo $row['c_id'];?>" id="active_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>


<div id="modal-status-deactive" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_STATUS_DATA_DEACTIVE');?></div>
    <div class="modal-footer">
    	<a href="center_status.php?c_id=<?php echo $row['c_id'];?>" id="deactive_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>






<script>

function modal_status_active(param1)
{	
	document.getElementById('active_link').href = param1;
}

function modal_status_deactive(param1)
{	
	document.getElementById('deactive_link').href = param1;
}

function modal_delete(param1)
{
	document.getElementById('delete_link').href = param1;
}

function modal_view_center_profile(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-question').innerHTML = 
		'<iframe id="frame1" src="center_view.php?c_id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
	document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}

</script>

</html>