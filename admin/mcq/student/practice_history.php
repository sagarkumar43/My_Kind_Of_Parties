<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');
?><div class="main-content">
                    <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-lightbulb"></i>
                        <?php echo constant('TI_MANAGE_PRACTICE_TEST_HISTOY');?> </h3>
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
				<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> <?php echo constant('TI_TAB_HISTORY');?> </a></li>
				
				</ul>
				</div>
	<div class="box-content padded">
		<div class="tab-content">
           
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
							<th><div><?php echo constant('TI_TABLE_HASH') ?></div></th>
							<th><div><?php echo constant('TI_TABLE_CATEGORY_NAME'); ?></div></th>
							<th><div><?php echo constant('TI_TABLE_SUB_CATEGORY_NAME'); ?></div></th>
							<th><div><?php echo constant('TI_TABLE_SUBJECT_NAME');?></div></th>
							<th><div><?php echo constant('TI_TABLE_EXAM_NAME');?></div></th>
							<th><div><?php echo constant('TI_TABLE_TAKE_EXAM_DATE');?></div></th>
                    		<th><div><?php echo constant('TI_TABLE_OPTIONS');?></div></th>
						</tr>
					</thead>
                    <tbody>
							<?php 
						
							$query=mysqli_query($con,"select * from practice_exam_status where center_id='".$_SESSION['center_id']."' and 	student_id='".$_SESSION['student_id']."' and status=1" );
								$i=0;
								while($row=mysqli_fetch_array($query))
								{ 
									$query_category_name=mysqli_fetch_array(mysqli_query($con, "select * from category where c_id='".$row['category_id']."'"));

									$query_subcategory_name=mysqli_fetch_array(mysqli_query($con,"select * from subcategory where s_c_id='".$row['subcategory_id']."'"));

									$query_subject_name=mysqli_fetch_array(mysqli_query($con,"select * from subject where s_id='".$row['subject_id']."'"));

									$query_exam_name=mysqli_fetch_array(mysqli_query($con,"select * from practice_exam where p_e_id ='".$row['exam_id']."'"));

									$i++;
										
							?>
								<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $query_category_name['category_name'];?> </td>								
								<td><?php echo $query_subcategory_name['subcategory_name'];?> </td>
								<td><?php echo $query_subject_name['subject_name'];?> </td>
								<td><?php echo $query_exam_name['exam_name'];?> </td>
								<td><?php echo $row['exam_date'];?> </td>

								<td align="center"><a data-toggle="modal" target="_new" href="history-result.php?exam_id=<?php echo encrypt_string($row['exam_id']);?>&exam_dy=<?php echo encrypt_string($row['exam_date']);?>" class="btn btn-gray btn-small"><i class="icon-wrench"></i> View Result</a>
								</td>
								</tr>
						<?php } ?>
                                
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
</html>