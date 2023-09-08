<?php 
include('include/configure.php');
$category_id=intval($_GET['category_id']);
$subcategory_id=intval($_GET['subcategory_id']);

$query="SELECT * FROM subject WHERE category_id=".$category_id." AND subcategory_id=".$subcategory_id." AND  subject_status=1";
$result=mysqli_query($con,$query);

?>
<select name="s_id"  class="chzn-select">
<option><?php echo constant('TI_SELECT_SUBJECT_NAME');?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?php echo $row['s_id']?>"><?php echo ucfirst($row['subject_name']);?></option>
<?php } ?>
</select>
