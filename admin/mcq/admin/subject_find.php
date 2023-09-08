<?php 
include('include/configure.php');
$category_id=intval($_GET['category_id']);
$subcategory_id=intval($_GET['subcategory_id']);

$query="SELECT * FROM subject WHERE category_id=".$category_id." AND subcategory_id=".$subcategory_id." AND  subject_status=1";
$result=mysqli_query($con,$query);

?>
<script type="text/javascript"> 
	<!-- 
	function showMe (it, box) {
	    if (box.checked)
	    {
	    vis="block";
	    document.getElementById(it).style.display = vis;
	    }
	    else
	    {
	         vis="none";
	         
	          document.getElementById(it).style.display = vis;
	    }
	 // var vis = (box.checked) ? "block" : "none"; 
	 
	} 
	//--> 
</script>
<div class="control-group">
    <select name="subject_id">
        <option value="">-Select Subject-</option>
<?php while($row=mysqli_fetch_array($result)) {
	
	
	$query_question_no=mysqli_query($con,"SELECT * FROM question WHERE c_id=".$category_id." AND s_c_id=".$subcategory_id." AND  question_status=1 AND s_id='".$row['s_id']."'");
	$numbrofquestion_in_a_subject=mysqli_num_rows($query_question_no);

	?>
 <option value="<?php echo $row['s_id']?>"><?php echo ucfirst($row['subject_name']);?> </option>

<?php } ?>
</select>

	<div class="padded">                   
    <div class="control-group">
                               
                                <div class="controls">
                                   <?php echo constant("TEXTUSINTENTIO_EXAM_LABEL_SUBJECT_QUESTION");?>(<?php echo $numbrofquestion_in_a_subject;?>)&nbsp;<input type="text" name="show_question" class="validate[required]">&nbsp;&nbsp; <?php echo constant("TEXTUSINTENTIO_EXAM_LABEL_SUBJECT_QUESTION_WARNING");?> 
                                </div>
                            </div>
                        </div>


</div>
