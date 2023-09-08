<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
?>




<script>
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

<?php

if (isset($_POST['submit'])) 
{ 
	$category_id= mysql_prep($_POST['category_id']);
	$subcategory_id= mysql_prep($_POST['s_c_id']);
	$subject_id= mysql_prep($_POST['s_id']);
	$center_id= mysql_prep($_POST['c_id']);
	$student_name= mysql_prep($_POST['student_name']);
	$student_father= mysql_prep($_POST['student_father']);
	$student_mother= mysql_prep($_POST['student_mother']);
	$student_address= mysql_prep($_POST['student_address']);
	$student_phone= $_POST['student_phone'];
	$student_email= $_POST['student_email'];
	$password_md5= mysql_prep(encrypt($_POST['password']));
	$password= $_POST['password'];
$b_id= $_POST['b_id'];

	

  $query_select_student=mysqli_query($con,"SELECT * FROM student where student_email='".$student_email."'");
	if(mysqli_num_rows($query_select_student)>0)
		{
			$error .=constant('TI_STUDENT_ERROR_ALLREADY_EXIT');
		}
	else
	 {
		
		$student_dob = mysql_prep($_POST['student_dob']);
		if($student_dob!="")
		{
		$dobexplode=explode("/",$student_dob);
		$dob_day=$dobexplode[1];
		$dob_month=$dobexplode[0];
		$dob_year=$dobexplode[2];
		$student_dob_from=$dob_day.'-'.$dob_month.'-'.$dob_year;
		}

		 $query_insert_student = "INSERT INTO student (category_id,subcategory_id,subject_id,center_id,b_id,student_name,student_father,student_mother,student_dob,student_address,student_phone,student_email,user_name,password,password_md5) VALUES('{$category_id}','{$subcategory_id}','{$subject_id}','{$center_id}','{$b_id}','{$student_name}','{$student_father}','{$student_mother}','{$student_dob_from}','{$student_address}','{$student_phone}','{$student_email}','{$username}','{$password}','{$password_md5}')";
		$result_student=mysqli_query($con,$query_insert_student);
		if($result_student)
		{
			$message_success .= $student_name." ".constant('TI_STUDENT_ADD_MESSAGE');
		}
		else
		{
			$error .= constant('TI_STUDENT_MYSQL_ERROR');
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
                        Manage ICAI Student Registration
                        <?php //echo constant('TI_MANAGE_STUDENT');?> </h3>
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
				<?php echo constant('TI_STUDENT_LIST');?>                	</a></li>
			
				</ul>
				</div>
	<div class="box-content padded">
		<div class="tab-content">
           
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
							<th>S.No.</th> 
							<th>Name</th> 
							<th>Email</th>
							<th>D.O.B</th>
							<th>ICAI Number</th>
							<th>Father Name</th>
							<th>Mother Name</th>
							<th>Phone Number</th>
							<th>Address</th>
							<th>Image</th>
							<th>ICAI Letter</th> 
                    		<th>Status</th>
                    		<th>Action</th>
						</tr>
					</thead>
                    <tbody>
							<?php 
								$query=mysqli_query($con,"select * from icai");
								$i=1;
								while($row=mysqli_fetch_array($query))
								{ 
								
									
										
							?>
								<tr>
								<td><?php echo $i ?></td>								
								<td><?php echo $row['name'];?></td>								
								<td><?php echo $row['email'];?> </td>
								<td><?php echo $row['date'];?> </td>
								<td><?php echo $row['reg'];?> </td>
								<td><?php echo $row['father'];?> </td>
								<td><?php echo $row['mother'];?> </td>
								<td><?php echo $row['phone'];?> </td>
								<td><?php echo $row['address'];?> </td>
								<td>
									<img id="myImg" src="../student/uplode image/<?php echo $row['img_pass'];?>" alt="Snow" style="width:50%;max-width:100px">

								</td>
								<td>

									<a href="../student/uplode letter/<?php echo $row['letter'];?>" alt="Snow" style="width:50%;max-width:100px">View </a>
										


								</td>
							
								
								<td>
									<?php
									if($row['status']==1)
									{?>														

									<a data-toggle="modal" href="#modal-status-deactive" onclick="modal_status_deactive('student_status.php?s_id=<?php echo $row['id'];?>')" class="btn btn-red btn-small"><i class="icon-eye-close"></i> <?php echo constant('TI_DEACTIVATE_BUTTON');?></a>
									<?php }
									else
									{?>														

									<a data-toggle="modal" href="new_icai_student_status.php?s_id=<?php echo $row['id'];?>&name=<?php echo $row['name']?>&email=<?php echo $row['email'] ?>&date=<?php echo $row['date'] ?>&reg=<?php echo $row['reg'] ?>&father=<?php echo $row['father'] ?>&mother=<?php echo $row['mother'] ?>&phone=<?php echo $row['phone'] ?>&address=<?php echo $row['address'] ?>" class="btn btn-green btn-small"><i class="icon-eye-open"></i> <?php //echo constant('TI_ACTIVATE_BUTTON');?> Activate</a>

									<?php }?>	

									
								 </td>

								<td align="center">
								

								<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('new_student_del.php?student_id=<?php echo $row['id'];?>')" class="btn btn-red btn-small"><i class="icon-trash"></i> <?php echo constant('TI_DELETE_BUTTON');?> </a>

								</td>

								</tr>
								<div id="myModal" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_STATUS_DATA_DEACTIVE');?></div>
    <div class="modal-footer">
    	<a href="category_status.php?c_id=<?php echo $row['c_id'];?>" id="deactive_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>

						<?php $i++;
					} ?>
                                
							</tbody>
                </table>
			</div>
           
			
			
		</div>
	</div>
</div>            </div>       
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
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_POPUP_STUDENT_DELETE');?></div>
    <div class="modal-footer">
    	<a href="" id="delete_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>

<div id="modal-status-active" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php echo constant('TI_DELETE_CONFIRMATION');?></h6>
	</div>
   <div class="modal-delete-body" id="modal-body-delete">
   	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; <?php //echo constant('TI_DELETE_CONFIRMATION');?>Are You Sure</h6>
  
   </div>
    <div class="modal-footer">


    	<a href="new_icai_student_status.php?course='llb'" id="active_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
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
    	<a href="category_status.php?c_id=<?php echo $row['id'];?>" id="deactive_link" class="btn btn-red" ><?php echo constant('TI_CONFIRME_BUTTON');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL_BUTTON');?></button>
    </div>
</div>
<?php


 ?>



<script>
function modal_delete(param1)
{
	document.getElementById('delete_link').href = param1;
}

function modal_view_student_profile(param1 ,param2 ,param3)
{
	document.getElementById('modal-body-question').innerHTML = 
		'<iframe id="frame1" src="viewstudent.php?s_id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
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
</script>
 
</html>