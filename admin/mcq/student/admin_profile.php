<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
$query_center_name=mysqli_fetch_array(mysqli_query($con,"select * from center where c_id='".$_SESSION['center_id']."'"));

?>
<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-building"></i><?php echo constant('TI_LABEL_CENTER_PROFILE');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#add" data-toggle="tab"><i class="icon-building"></i><?php echo constant('TI_LABEL_CENTER_PROFILE');?></a>
					</li>
				</ul>	
			</div>
	<div class="box-content padded">
		<div class="tab-content">        
			
			<div class="tab-pane active" id="add" style="padding: 5px">
				<form method="post" action="" class="form-horizontal validatable" enctype="multipart/form-data">
				<div class="padded">       
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_CODE');?></label>
                                <div class="controls">
									<?php echo $query_center_name['centercode'];?>
                                </div>
                            </div>
						</div>
					

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_NAME');?></label>
                                <div class="controls">
                                   <?php echo $query_center_name['centername'];?>
								</div>
                            </div>
                        </div>

						 <div class="padded">  
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_ABOUT');?> </label>
                                <div class="controls">                                    
									<?php echo $query_center_name['about_center'];?>
                                </div>
                            </div>							
						</div>	

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_ADDRESS');?></label>
                                <div class="controls">
                                    <?php echo $query_center_name['centeraddress'];?>
                                </div>
                            </div>
                        </div>

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_STUDENT_PHONE_CENTER');?></label>
                                <div class="controls">
                                   <?php echo $query_center_name['phoneno'];?>
                                </div>
                            </div>
                        </div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CENTER_EMAIL');?></label>
                                <div class="controls">
                                   <?php echo $query_center_name['email'];?>
                                </div>
                            </div>
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