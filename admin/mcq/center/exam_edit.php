<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
if(isset($_POST['submit']) && $_POST['p_e_id']!="")
{	

	$category_id= mysql_prep($_POST['category_id']);
	$subcategory_id= mysql_prep($_POST['s_c_id']);
	$exam_name= mysql_prep($_POST['exam_name']);
	$exam_duration= mysql_prep($_POST['exam_duration']);
	$neg_mark_status= mysql_prep($_POST['neg_mark_status']);
	$negative_marks= mysql_prep($_POST['negative_marks']);	
	$subject_id= mysql_prep($_POST['s_id']);
	$center_id=$_SESSION['center_id'];
	$passing_percentage= mysql_prep($_POST['passing_percentage']);
	$re_exam_day= mysql_prep($_POST['re_exam_day']);
	$terms_condition= mysql_prep($_POST['terms_condition']);

	$query_select_exam=mysqli_query($con,"SELECT * FROM practice_exam where exam_name='".$exam_name."' and center_id='".$_SESSION['center_id']."'");
	if(mysqli_num_rows($query_select_exam)>0)
	{
		//$error .= constant('TI_EXAM_ERROR_ALLREADY_EXIT') ;
		 $query_insert_exam = "update practice_exam set category_id='{$category_id}', subcategory_id='{$subcategory_id}', re_exam_day='{$re_exam_day}', subject_id='{$subject_id}',passing_percentage='{$passing_percentage}',  exam_duration='{$exam_duration}',neg_mark_status='{$neg_mark_status}',negative_marks='{$negative_marks}',terms_condition='{$terms_condition}' where p_e_id='".$_POST['p_e_id']."'";

		$result_exam=mysqli_query($con,$query_insert_exam);

		$message_success .=constant('TI_EXAM_EDIT_SUCCESS_MESSAGE');
		
	}
	else
	{
	   
		$query_insert_exam = "update practice_exam set category_id='{$category_id}', subcategory_id='{$subcategory_id}', re_exam_day='{$re_exam_day}', subject_id='{$subject_id}', exam_name='{$exam_name}', center_id='{$center_id}',passing_percentage='{$passing_percentage}',  exam_duration='{$exam_duration}',neg_mark_status='{$neg_mark_status}',negative_marks='{$negative_marks}',terms_condition='{$terms_condition}' where p_e_id='".$_POST['p_e_id']."'";

		$result_exam=mysqli_query($con,$query_insert_exam);
		if($result_exam)
		{
			$message_success .=constant('TI_EXAM_EDIT_SUCCESS_MESSAGE') ;
		}
		else
		{
			$error .= constant('TI_EXAM_MYSQL_ERROR') ;
		}
	}	
	
}
if($_GET['p_e_id']!="")
{
	$p_e_id=$_GET['p_e_id'];
	$query=mysqli_query($con,"SELECT * FROM practice_exam where p_e_id='".$p_e_id."'");
	$result=mysqli_fetch_array($query);	
}

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
<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i><?php echo constant('TI_MANAGE_EXAM');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#add" data-toggle="tab"><i class="icon-wrench"></i><?php echo constant('TI_EXAM_EDIT');?></a>
					</li>
				</ul>	
			</div>
			<div class="box-content padded">
				<div class="tab-content">        
					<?php include("message.php");?>
					<div class="tab-pane active" id="add" style="padding: 5px">
						<form method="post" action="<?php $PHP_SELF ?>" class="form-horizontal validatable" enctype="multipart/form-data">
							<div class="padded">       
							<div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_CATEGORY_NAME');?></label>
                                <div class="controls">
									<select name="category_id" class="chzn-select" onChange="getState(this.value)">
									<option><?php echo constant('TI_SELECT_CATEGORY');?></option>  
										<?php $query_category=mysqli_query($con,"select * from category where category_status=1");
										while($result_category=mysqli_fetch_array($query_category))
										{
										?>
                                    	<option value="<?php echo $result_category['c_id'];?>" <?php if($result_category['c_id']==$result['category_id']){echo 'selected="selected"';}?>><?php echo ucfirst($result_category['category_name']);?></option>
										
										<?php }?>
                                    </select>
                                </div>
                            </div>
						</div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_SUB_CATEGORY_NAME');?></label>
                                 <div class="controls" id="subcategorydiv">
									<select name="s_c_id" class="chzn-select">
									<option><?php echo constant('TI_SELECT_CATEGORY_FIRST');?></option>
										<?php $query_subcategory=mysqli_query($con,"SELECT * FROM subcategory WHERE subcategory_status=1");
										while($result_subcategory=mysqli_fetch_array($query_subcategory))
										{
										?>
                                    	<option value="<?php echo $result_subcategory['s_c_id'];?>"  <?php if($result_subcategory['s_c_id']==$result['subcategory_id']){echo 'selected="selected"';}?>><?php echo ucfirst($result_subcategory['subcategory_name']);?></option>
										<?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
						
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_SUBJECT_NAME');?></label>
                                 <div class="controls" id="subjectdiv">
									<select name="s_id" class="chzn-select">
									<option><?php echo constant('TI_SELECT_SUB_CATEGORY_FIRST');?></option>
										<?php $query_subject=mysqli_query($con,"SELECT * FROM subject WHERE subject_status=1");
										while($result_subject=mysqli_fetch_array($query_subject))
										{
										?>
                                    	<option value="<?php echo $result_subject['s_id'];?>"  <?php if($result_subject['s_id']==$result['subject_id']){echo 'selected="selected"';}?>><?php echo ucfirst($result_subject['subject_name']);?></option>
										<?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
						


						
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_NAME');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="exam_name" value="<?php echo $result['exam_name'];?>"/>
                                </div>
                            </div>
                        </div>

						

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_TIME_DURATION');?></label>
                                <div class="controls">
                                   <input type="text"  name="exam_duration" class="validate[required,custom[integer]]" value="<?php echo $result['exam_duration'];?>"/>
                                </div>
                            </div>
                        </div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_PASSING_PERCENTAGE');?></label>
                                <div class="controls">
                                   <input type="text"  name="passing_percentage" class="validate[required,custom[integer]]" value="<?php echo $result['passing_percentage'];?>"/>
                                </div>
                            </div>
                        </div>

						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_LABEL_RE_EXAM_DAY');?></label>
                                <div class="controls">
                                   <input type="text"  name="re_exam_day" class="validate[required,custom[integer]]" value="<?php echo $result['re_exam_day'];?>"  maxlength="3"/><?php echo constant('TI_LABEL_RE_EXAM_DAY_NOTICE');?>
                                </div>
                            </div>
                        </div>
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label"><?php echo constant('TI_EXAM_NEGATIVE_MARKING');?></label>
                                <div class="controls">
                                <input type="checkbox" name="neg_mark_status"  value="1" onclick="showMe('div1', this)" <?php if($result['neg_mark_status']==1){echo 'checked="checked"';}?>/>
								</div>
                            </div>
                        </div>
						<div  id="div1">
						<div class="padded">                   
						<div class="control-group">
						<label class="control-label"><?php echo constant('TI_NEGATIVE_MARKS');?></label>
						<div class="controls">
						<input type="text"  name="negative_marks" class="validate[required,custom[number]]" id="pr_departuretime_airlines" value="<?php echo $result['negative_marks'];?>"/>
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
												<textarea name="terms_condition" id="terms_condition" rows="5" placeholder="Terms & Condition"><?php echo $result['terms_condition'];?></textarea>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>


							<div class="form-actions">
								<button type="submit" class="btn btn-gray"><?php echo constant('TI_EXAM_EDIT_BUTTON');?></button>
								<input type="hidden" value="Edit_exam" name="submit">
								<input type="hidden" value="<?php echo $result['p_e_id'];?>" name="p_e_id">
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