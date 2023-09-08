<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');



if(isset($_POST['submit']) && $_POST['s_id']!="")
{	
	$subcategory_id= mysql_prep($_POST['s_c_id']);
	$subject_name= mysql_prep($_POST['subject_name']);
	$category_id= mysql_prep($_POST['category_id']);

	$query_select_subject=mysqli_query($con,"SELECT * FROM subject WHERE subject_name='".$subject_name."' and subcategory_id='".$subcategory_id."' and category_id='".$category_id."'");
	if(mysqli_num_rows($query_select_subject)>0)
	{
		$error .= ucfirst($subject_name)." ".constant('TI_SUBJECT_ERROR_EXITS');
	}
	else
	{
		
		$query_update_mysql_subject=mysqli_query($con,"update subject set subcategory_id='{$subcategory_id}',subject_name='{$subject_name}',category_id='{$category_id}' where s_id='".$_POST['s_id']."'");
		if($query_update_mysql_subject)
		{
			
			$message_success .=ucfirst($subject_name)." ". constant('TI_SUBJECT_EDIT_MESSAGE');

		}
		else
		{
			$error .=  constant('TI_SUBJECT_MYSQL_ERROR');
		}
	}
	
}
if($_GET['s_id']!="")
{
$s_id=$_GET['s_id'];
$query=mysqli_query($con,"select * from subject where s_id='".$s_id."'");
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
	
</script> 
<div class="main-content">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="area-top clearfix">
				<div class="pull-left header">
					<h3 class="title"><i class="icon-edit"></i><?php echo constant('TI_MANAGE_SUBJECT');?> </h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padded">
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						<a href="#add" data-toggle="tab"><i class="icon-wrench"></i><?php echo constant('TI_SUBJECT_EDIT');?></a>
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
                                <label class="control-label"><?php //echo constant('TI_LABEL_CATEGORY_NAME');?>Course Name</label>
                                <div class="controls">
									<select name="category_id" class="chzn-select" onChange="getState(this.value)">
									<option><?php //echo constant('TI_SELECT_CATEGORY');?>Select Course</option>  
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
                                <label class="control-label" ><?php //echo constant('TI_LABEL_SUB_CATEGORY_NAME');?>Course Level Name</label>
                                <div class="controls" id="subcategorydiv">
									<select name="s_c_id" class="chzn-select">
									<option><?php //echo constant('TI_SELECT_CATEGORY_FIRST');?>Select Course First</option>
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
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="subject_name" value="<?php echo $result['subject_name']; ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo constant('TI_SUBJECT_EDIT_BUTTON');?> </button>
							<input type="hidden" value="Update_setting" name="submit">
							<input type="hidden" value="<?php echo $result['s_id'];?>" name="s_id">
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