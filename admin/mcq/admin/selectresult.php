<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
?>

<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i> <?php echo constant('TI_VIEW_RESULT_ADMIN');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> <?php echo constant('TI_VIEW_RESULT_EXAM');?> </a>
					</li>
				</ul>
			</div>
			<div class="box-content padded">
				<div class="tab-content">
					<div class="tab-pane box active" id="list">
					<br>
						<form action="selectresult.php" method="post" accept-charset="utf-8" class="form-horizontal validatable" target="_top">							
							<div class="padded"> 
							
							<div class="control-group">
                                <label class="control-label"><?php //echo constant('TI_LABEL_CATEGORY_NAME');?>Course Name</label>
                                <div class="controls">
									<select name="category_id" class="chzn-select" onChange="getState(this.value)">
									<option><?php //echo constant('TI_SELECT_CATEGORY');?>Selecet Course</option>  
										<?php $query_category=mysqli_query($con,"select * from category where category_status=1");
										while($result_category=mysqli_fetch_array($query_category))
										{
										?>
                                    	<option value="<?php echo $result_category['c_id'];?>"><?php echo ucfirst($result_category['category_name']);?></option>
										
										<?php }?>
                                    </select>
                                </div>
                            </div>
                           
						</div>						

							<div class="form-actions">
								<input type="hidden" name="operation" value="selection" />
                    			<input type="submit" value="<?php echo constant('TI_SEARCH_BUTTON');?>" class="btn btn-normal btn-gray" />
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>  
	</div>       
</div>






<div class="main-content">
<?php 

if($_POST['category_id']!="" )
{
	
?> 
             <div class="container-fluid padded">
                <div class="box">
					<?php include("message.php");?>
					<div class="box-header">
						<ul class="nav nav-tabs nav-tabs-left">
							<li class="active"><a href="#list" data-toggle="tab"><i class="icon-align-justify"></i><?php echo constant('TI_SEARCH_RESULT') ?></a></li>		
						</ul>
					</div>
					<div class="box-content padded">
						<div class="tab-content">           
							<div class="tab-pane box active" id="list">
								<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                					<thead>
                						<tr>
                						    <th><div><?php //echo constant('TI_TABLE_STUDENT_NAME');?>ICAI Number</div></th>					
											<th><div><?php echo constant('TI_TABLE_STUDENT_NAME');?></div></th>
												<th><div><?php //echo constant('TI_TABLE_STUDENT_NAME');?>Phone Number</div></th>
											<th><div><?php echo constant('TI_TABLE_CENTER_NAME');?></div></th>
											<th><div><?php //echo constant('TI_TABLE_CATEGORY_NAME');?>Course Name</div></th>  						
											<th><div><?php echo constant('TI_TABLE_OPTIONS');?></div></th>
										</tr>
									</thead>
									<tbody>
									<?php 				
										$query=mysqli_query($con,"select * from student where category_id='".$_POST['category_id']."'");
										$i=0;
										while($row=mysqli_fetch_array($query))
										{ 				
											
											$query_Center=mysqli_fetch_array(mysqli_query($con,"select * from center where c_id='".$row['center_id']."'"));

											$query_category_name=mysqli_fetch_array(mysqli_query($con,"select * from category where c_id='".$row['category_id']."'"));


											$query_exam=mysqli_query($con,"select * from exam where category_id='".$query_category_name['c_id']."' subject_id='".$_POST['s_id']."'");
										?>
												<tr>
												    <td><?php echo ucfirst($row['icai']);?> </td>		
												<td><?php echo ucfirst($row['student_name']);?> </td>
												<td><?php echo ucfirst($row['student_phone']);?> </td>	
												<td><?php echo ucfirst($query_Center['centername']);?> </td>								
												
												<td><?php echo ucfirst($query_category_name['category_name']);?> </td>
												<td align="center">												
												
													<a data-toggle="modal" target="_new" href="result-list.php?sid=<?php echo encrypt_string($row['student_id']);?>&caid=<?php echo encrypt_string($row['category_id']);?>&ceid=<?php echo encrypt_string($row['center_id']);?>" class="btn btn-gray btn-small"><i class="icon-wrench"></i> <?php echo 'List of Result'; ?></a>	
											</tr>
												
												
												
												</td>


											
											<?php	
										
										 } ?>                                
									</tbody>
							 </table>
						</div>
           
			
			
            
		</div>
	</div>
</div>   
</div>    
<?php
}

?>


    <?php include("copyright.php");?>        
	</div>
	</div>




<div id="question-modal-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;"></div>
	</div>
    <div class="modal-body" id="modal-body-question"><?php echo constant('TI_LOADING_DATA');?></div>
    <div class="modal-footer">      
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>


<div id="take_exam-modal-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="modal-tablesLabel_take_exam" style="color:#fff; font-size:16px;"></div>
	</div>
    <div class="modal-body" id="modal-body-take_exam"><?php echo constant('TI_LOADING_DATA');?></div>
    <div class="modal-footer">      
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>


<script>
function modal_view_take_exam(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-take_exam').innerHTML = 
		'<iframe id="frame1" src="examinfo_popup.php?s_id='+param2+'" width="100%" height="100" frameborder="0"></iframe>';
	document.getElementById('modal-tablesLabel_take_exam').innerHTML = param1.replace("_"," ");
}
</script>


<script>
function modal_view_student_profile(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-question').innerHTML = 
		'<iframe id="frame1" src="examinfo.php?s_id='+param2+'" width="100%" height="100" frameborder="0"></iframe>';
	document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}
</script>
</body> 
</html>