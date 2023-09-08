<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
?>
  
<script language="javascript" type="text/javascript">

function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(category_id) {		
		
		var strURL="subcategory_find.php?category_id="+category_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subcategorydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getsubject(category_id,subcategory_id) {		
		var strURL="subject_find.php?category_id="+category_id+"&subcategory_id="+subcategory_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subjectdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}	
			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>  
<script type="text/javascript"> 
	<!-- 
	function showMe (it, box) { 
	  var vis = (box.checked) ? "block" : "none"; 
	  document.getElementById(it).style.display = vis;
	} 
	//--> 
</script>

<?php

if (isset($_POST['submit'])) 
{ 
	
	$category_id= mysql_prep($_POST['category_id']);
	$subcategory_id= mysql_prep($_POST['s_c_id']);
	$subject_id= mysql_prep($_POST['s_id']);
	$exam_name= mysql_prep($_POST['exam_name']);
	$exam_duration= mysql_prep($_POST['exam_duration']);
	$neg_mark_status= mysql_prep($_POST['neg_mark_status']);
	$negative_marks= mysql_prep($_POST['negative_marks']);
	$center_id=$_SESSION['center_id'];
	$passing_percentage= mysql_prep($_POST['passing_percentage']);
	$re_exam_day= mysql_prep($_POST['re_exam_day']);
	$terms_condition= mysql_prep($_POST['terms_condition']);
	
	
	
	$query_select_exam=mysqli_query($con,"SELECT * FROM practice_exam where exam_name='".$exam_name."' and center_id='".$_SESSION['center_id']."'");
	if(mysqli_num_rows($query_select_exam)>0)
	{
		$error .= constant('TI_EXAM_ERROR_ALLREADY_EXIT') ;
	}
	else
	{


	echo	$query_insert_exam = "INSERT INTO practice_exam (category_id,subcategory_id,subject_id,exam_name,exam_duration,neg_mark_status,negative_marks,center_id,passing_percentage,re_exam_day,terms_condition) VALUES('{$category_id}','{$subcategory_id}','{$subject_id}','{$exam_name}','{$exam_duration}','{$neg_mark_status}','{$negative_marks}','{$center_id}','{$passing_percentage}','{$re_exam_day}','{$terms_condition}')";
		$result_exam=mysqli_query($con,$query_insert_exam);
		if($result_exam)
		{
			$message_success .=constant('TI_EXAM_SUCCESS_MESSAGE') ;;
		}
		else
		{
			$error .= constant('TI_EXAM_MYSQL_ERROR') ;
		}
	}	
}



?><div class="main-content">
                    <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                        <?php echo constant('TI_MANAGE_EXAM');?> </h3>
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
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo constant('TI_EXAM_LIST');?>                	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo constant('TI_EXAM_ADD');?>              	</a></li>
		</ul>

        
	</div>
	<div class="box-content padded">
		<div class="tab-content">
           
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
							<th><div><?php echo constant('TI_TABLE_HASH') ?></div></th>
							<th><div><?php echo constant('TI_TABLE_CATEGORY_NAME') ?></div></th> 
							<th><div><?php echo constant('TI_TABLE_SUB_CATEGORY_NAME') ?></div></th> 
							<th><div><?php echo constant('TI_TABLE_SUBJECT_NAME') ?></div></th>
							<th><div><?php echo constant('TI_TABLE_EXAM_NAME') ?></div></th>
							<th><div><?php echo constant('TI_TABLE_STATUS') ?></div></th> 
							<th><div><?php echo constant('TI_TABLE_OPTIONS');?></div></th>
						</tr>
					</thead>
                    <tbody>
							<?php 
								$query=mysqli_query($con,"select * from practice_exam where center_id='".$_SESSION['center_id']."'");
								$i=0;
								while($row=mysqli_fetch_array($query))
								{ 
									$query_category_name=mysqli_fetch_array(mysqli_query($con,"select * from category where c_id='".$row['category_id']."'"));
									$query_subcategory_name=mysqli_fetch_array(mysqli_query($con,"select * from subcategory where s_c_id='".$row['subcategory_id']."'"));
									$query_subject_name=mysqli_fetch_array(mysqli_query($con,"select * from subject where s_id='".$row['subject_id']."'"));
									$i++;										
							?>
								<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $query_category_name['category_name'];?></td>
								<td><?php echo $query_subcategory_name['subcategory_name'];?> </td>
								<td><?php echo $query_subject_name['subject_name'];?> </td>
								<td><?php echo $row['exam_name'];?> </td>
								
									
								<td><?php
														if($row['exam_status']==1)
														{?>														

														<a data-toggle="modal" href="#modal-status-deactive" onclick="modal_status_deactive('exam_status.php?p_e_id=<?php echo $row['p_e_id'];?>')" class="btn btn-red btn-small"><i class="icon-eye-close"></i> <?php echo constant('TI_DEACTIVATE_BUTTON');?></a>
													<?php }
														else
														{?>														
															
														<a data-toggle="modal" href="#modal-status-active" onclick="modal_status_active('exam_status.php?p_e_id=<?php echo $row['p_e_id'];?>')" class="btn btn-green btn-small"><i class="icon-eye-open"></i> <?php echo constant('TI_ACTIVATE_BUTTON');?></a>
													<?php }?>	
								 </td>

								<td align="center">

									<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('exam_delete.php?p_e_id=<?php echo $row['p_e_id'];?>')" class="btn btn-red btn-small"><i class="icon-trash"></i> <?php echo constant('TI_DELETE_BUTTON');?> </a>

								<a data-toggle="modal" href="exam_edit.php?p_e_id=<?php echo $row['p_e_id'];?>" class="btn btn-gray btn-small"><i class="icon-wrench"></i> <?php echo constant('TI_EDIT');?></a>

								


								<a data-toggle="modal" href="question_add.php?p_e_id=<?php echo $row['p_e_id'];?>"  class="btn btn-green btn-small"><i class="icon-plus-sign"></i> <?php echo constant('TI_BUTTON_QUESTION');?> </a>

                                <a data-toggle="modal" href="viewquestion.php?p_e_id=<?php echo $row['p_e_id'];?>"  class="btn btn-blue btn-small"><i class="icon-zoom-in"></i> <?php echo constant('TI_EXAM_VIEW_QUESTION_BUTTON');?> </a>
								
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
                                <label class="control-label"><?php echo constant('TI_LABEL_CATEGORY_NAME');?></label>
                                <div class="controls">
									<select name="category_id"  onChange="getState(this.value)" class="validate[required]">
									<option><?php echo constant('TI_SELECT_CATEGORY');?></option>  
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
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_SUB_CATEGORY_NAME');?></label>
                                 <div class="controls" id="subcategorydiv">
									<select name="subcategory_id" class="chzn-select">										
                                    	<option><?php echo constant('TI_SELECT_CATEGORY_FIRST');?></option>
										
                                    </select>
                                </div>
                            </div>
                        </div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_SUBJECT_NAME');?></label>
                                 <div class="controls" id="subjectdiv">
									<select name="subject" class="chzn-select">										
                                    	<option><?php echo constant('TI_SELECT_SUB_CATEGORY_FIRST');?></option>                                               
                                    </select>
                                </div>
                            </div>
                        </div>


						
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="exam_name"/>
                                </div>
                            </div>
                        </div>

						

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_TIME_DURATION');?></label>
                                <div class="controls">
                                   <input type="text"  name="exam_duration" class="validate[required,custom[integer]]" />
                                </div>
                            </div>
                        </div>
						
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_PASSING_PERCENTAGE');?></label>
                                <div class="controls">
                                   <input type="text"  name="passing_percentage" class="validate[required,custom[integer]]" />
                                </div>
                            </div>
                        </div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_RE_EXAM_DAY');?></label>
                                <div class="controls">
                                   <input type="text"  name="re_exam_day" class="validate[custom[integer]]" maxlength="3"/><?php echo constant('TI_LABEL_RE_EXAM_DAY_NOTICE');?>
                                </div>
                            </div>
                        </div>

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_NEGATIVE_MARKING');?></label>
                                <div class="controls">
                                <input type="checkbox" name="neg_mark_status"  value="1" onclick="showMe('div1', this)" />
								</div>
                            </div>
                        </div>

						<div  id="div1" style="display:none">
							<div class="padded">                   
								<div class="control-group">
									<label class="control-label"><?php echo constant('TI_NEGATIVE_MARKS');?></label>
									<div class="controls">
										<input type="text"  name="negative_marks" class="validate[required,custom[number]]" id="pr_departuretime_airlines"/>
									</div>
								</div>
							</div>
						</div>
						<div class="padded">   
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_TERMS_CONDITION');?></label>
                                <div class="controls">
                                    <div class="box closable-chat-box">
                                        <div class="box-content">
											<div class="chat-message-box">
												<textarea name="terms_condition" id="terms_condition" rows="5" placeholder="Terms & Condition"></textarea>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo constant('TI_CREATE_EXAM');?></button>
							<input type="hidden" value="Add new exam" name="submit">
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

<!-----------HIDDEN MODAL FORM - COMMON IN ALL PAGES ------>
<div id="modal-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="modal-tablesLabel" style="color:#fff; font-size:16px;">&nbsp; </div>
	</div>
    <div class="modal-body" id="modal-body"><?php echo constant('TI_LOADING_DATA');?></div>
    <div class="modal-footer">
        <!-- <button class="btn btn-gray" onclick="custom_print('frame1')"><?php echo constant('TI_PRINT');?></button> -->
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>


<!-----------HIDDEN QUESTION MODAL FORM - COMMON IN ALL PAGES ------>
<div id="question-modal-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
	</div>
    <div class="modal-body" id="modal-body-question"><?php echo constant('TI_LOADING_DATA');?></div>
    <div class="modal-footer">
     
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>






<!-----------HIDDEN MODAL DELETE CONFIRMATION - COMMON IN ALL PAGES ------>
<div id="modal-delete" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_POPUP_EXAM_DELETE');?></div>
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
    	<a href="exam_status.php?p_e_id=<?php echo $row['p_e_id'];?>" id="active_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
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
    	<a href="exam_status.php?p_e_id=<?php echo $row['p_e_id'];?>" id="deactive_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>






<script>
function modal_questions_paper(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-question').innerHTML = 
		'<iframe id="frame1" src="question_add.php?p_e_id='+param2+'&g_id='+param3+'" width="100%" height="400" frameborder="0"></iframe>';
	document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}

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

function modal_view_question_profile(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-question').innerHTML = 
		'<iframe id="frame1" src="viewquestion.php?q_id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
	document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}

</script>

</html>