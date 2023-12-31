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
	
	function getState(sub_category_id) {		
		
		var strURL="subject_find.php?sub_category_id="+sub_category_id;
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subjectydiv').innerHTML=req.responseText;						
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
<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i><?php echo constant('TI_MANAGE_PRACTICE_TEST');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active"><a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> <?php echo constant('TI_TAKE_EXAM');?>   	</a></li>
				</ul>      
			</div>
			<div class="box-content padded">
				<div class="tab-content">
					<div class="tab-pane box active" id="list">
						<form action="selectexam.php" method="post" accept-charset="utf-8" class="form-horizontal validatable" target="_top">	
							<div class="padded">       
								<div class="control-group">
									<label class="control-label"><?php //echo constant('TI_LABEL_SELECT_CATEGORY');?>Select Course</label>
									<div class="controls">
										<?php 
										$query_student=mysqli_fetch_array(mysqli_query($con,"select * from student  where student_id='".$_SESSION['student_id']."'"));
										$student_category=$query_student['category_id'];
										$query_category=mysqli_fetch_array(mysqli_query($con,"select * from category  where c_id='".$student_category."'"));
										?>
										<select name="c_id"  style="float:left;" class="validate[required]">                               
										<option value="<?php echo $student_category;?>"><?php echo $query_category['category_name'];?></option>
										</select>
									</div>
								</div>
							</div>
							<div class="padded">                   
								<div class="control-group">
									<label class="control-label"><?php //echo constant('TI_LABEL_SELECT_SUBCATEGORY');?>Select Course Level</label>
									<div class="controls" id="subcategorydiv">
										<?php
										$category_id=intval($student_category);
										$query=mysqli_query($con,"SELECT * FROM subcategory WHERE category_id=".$category_id." and subcategory_status=1");
										?>
										<select name="s_c_id" onChange="getState(this.value)"   class="validate[required]">
										<option value=""><?php echo constant('TI_SELECT_SUB_CATEGORY');?></option>
										<?php while($row=mysqli_fetch_array($query)) { ?>
										<option value=<?php echo $row['s_c_id']?>><?php echo ucfirst($row['subcategory_name']);?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>							
							<div class="padded">                   
								<div class="control-group">
									<label class="control-label"><?php echo constant('TI_LABEL_SELECT_SUBJECT');?></label>
									<div class="controls" id="subjectydiv">										
									<select name="s_id"  class="validate[required]">										
										<option value=""><?php echo constant('TI_SELECT_SUB_CATEGORY_FIRST');?></option>	
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

if($_POST['c_id']!="" && $_POST['s_c_id']!="" && $_POST['s_id']!="")
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
							
							<th><div><?php echo constant('TI_TABLE_EXAME_NAME');?></div></th>
											<th><div><?php echo constant('TI_TABLE_SUBJECT_NAME');?></div></th> 
											<th><div><?php echo constant('TI_TABLE_SUB_CATEGORY_NAME');?></div></th> 
											<th><div><?php echo constant('TI_TABLE_CATEGORY_NAME');?></div></th>  						
											<th><div><?php echo constant('TI_TABLE_OPTIONS');?></div></th>
						</tr>
					</thead>
                    <tbody>
					<?php 				
								$query=mysqli_query($con,"select * from practice_exam where category_id='".$_POST['c_id']."' and subcategory_id='".$_POST['s_c_id']."'  and 	subject_id='".$_POST['s_id']."' and exam_status=1 and center_id='".$_SESSION['center_id']."'");
								$i=0;
								while($row=mysqli_fetch_array($query))
								{ 									
									$center_id_session=$_SESSION['center_id'];
									$query_subject_name=mysqli_fetch_array(mysqli_query($con,"select * from subject where s_id='".$row['subject_id']."'"));

									$query_subcategory_name=mysqli_fetch_array(mysqli_query($con,"select * from subcategory where s_c_id='".$row['subcategory_id']."'"));

									$query_category_name=mysqli_fetch_array(mysqli_query($con,"select * from category where c_id='".$row['category_id']."'"));						
									$i++;
								
								?>
									<tr>
									<td><?php echo $row['exam_name'];?> </td>								
									<td><?php echo $query_subject_name['subject_name'];?> </td>
									<td><?php echo ucfirst($query_subcategory_name['subcategory_name']);?> </td>
									<td><?php echo ucfirst($query_category_name['category_name']);?> </td>
									<td align="center">
									<?php											
									if($row['re_exam_day']==0)
									{
										 $query1 = "select * from practice_exam_status where subject_id='".$_POST['s_id']."' and center_id='".$_SESSION['center_id']."' and exam_id='".$row['p_e_id']."' and student_id='".$_SESSION['student_id']."'";
										$check_exam_query1=mysqli_num_rows(mysqli_query($con,$query1));
										if($check_exam_query1 >=1)
										{
											?>
										<a data-toggle="modal" href="#take_exam-modal-form" onclick="modal_view_take_exam('<i class=icon-time icon-2x></i> Time_Remaining',0)" class="btn btn-red btn-small"><?php echo constant('TI_TAKE_EXAM_BUTTON');?></a>	
										<?php
									
										}
										else
										{
										?>
										<form name="take_exam_<?php echo $row['p_e_id'];?>" method="POST" action="termscondition.php">
										<input type="hidden" name="exam_id" value="<?php echo $row['p_e_id'];?>">								
										<input type="submit" class="btn btn-gray btn-small "  value="<?php echo constant('TI_TAKE_EXAM_BUTTON');?>"/>	
										</form>
										<?php										
										}									
									}
									else
									{
										$query1 = "select max(exam_date) from practice_exam_status where subject_id='".$_POST['s_id']."' and center_id='".$_SESSION['center_id']."' and exam_id='".$row['p_e_id']."' and student_id='".$_SESSION['student_id']."'";

										$result1 = mysqli_query($con,$query1) or die ("Error in query: $query. " .mysql_error());
										$row1 = mysqli_fetch_row($result1);

										$date2= $row1[0];
										$date1 = date('Y-m-d');
										$days = floor(abs((strtotime($date1) - strtotime($date2))) / (60 * 60 * 24));

										$re_exam_day=$row['re_exam_day'];
										$Diff_day_sow_your_exam=$row['re_exam_day']-$days;

										if($days >= $re_exam_day){?>
										<form name="take_exam_<?php echo $row['p_e_id'];?>" method="POST" action="termscondition.php">
										<input type="hidden" name="exam_id" value="<?php echo $row['p_e_id'];?>">								
										<input type="submit" class="btn btn-gray btn-small "  value="<?php echo constant('TI_TAKE_EXAM_BUTTON');?>"/>	
										</form>
										<?php }else{
										?>
										<a data-toggle="modal" href="#question-modal-form" onclick="modal_view_student_profile('<i class=icon-time icon-2x></i> Time_Remaining',<?php echo $Diff_day_sow_your_exam;?>)" class="btn btn-red btn-small"><?php echo constant('TI_TAKE_EXAM_BUTTON');?></a>	
										<?php
										}						
									}
										?>
									</td>
									</tr>
									
										
								
								 <?php } ?> 
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