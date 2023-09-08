

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
include('include/configure.php');
include('login_check.php');
include('include/meta_tag.php');
include('include/main-header.php');
include('include/left-menu.php');

		if (isset($_POST['submit']) and $_POST['s_id']!="") 
		{ 		
			$question= mysql_prep($_POST['question']);
			$typeofquestion= mysql_prep($_POST['typeofquestion']);			
			$marks= mysql_prep($_POST['marks']);
           

			$subject_query=mysqli_query($con,"select * from subject where s_id='".$_POST['s_id']."'");
			$subject=mysqli_fetch_array($subject_query);


		
			$category_id=$subject['category_id'];
			$s_c_id=$subject['subcategory_id'];
			
			if($typeofquestion=="Single")
			{
				$correct_ans= mysql_prep($_POST['correct_ans']);
				$option_a= mysql_prep($_POST['option_a']);
				$option_b= mysql_prep($_POST['option_b']);
				$option_c= mysql_prep($_POST['option_c']);
				$option_d= mysql_prep($_POST['option_d']);

				$query_question_insert = "insert into question (s_id,c_id,s_c_id,question,typeofquestion,option_a,option_b,option_c,option_d,correct_ans,marks) values('".$_POST['s_id']."','".$category_id."','".$s_c_id."','".$question."','".$typeofquestion."','".$option_a."','".$option_b."','".$option_c."','".$option_d."','".$correct_ans."','".$marks."')";
			}
			else if($typeofquestion=="Multiple")
			{
				$correct_ans= mysql_prep($_POST['correct_ans_A'])."-".mysql_prep($_POST['correct_ans_B'])."-".mysql_prep($_POST['correct_ans_C'])."-".mysql_prep($_POST['correct_ans_D']);
				$option_a= mysql_prep($_POST['check_option_a']);
				$option_b= mysql_prep($_POST['check_option_b']);
				$option_c= mysql_prep($_POST['check_option_c']);
				$option_d= mysql_prep($_POST['check_option_d']);

				$query_question_insert = "insert into question (s_id,c_id,s_c_id,question,typeofquestion,option_a,option_b,option_c,option_d,correct_ans,marks) values('".$_POST['s_id']."','".$category_id."','".$s_c_id."','".$question."','".$typeofquestion."','".$option_a."','".$option_b."','".$option_c."','".$option_d."','".$correct_ans."','".$marks."')";
			}
			else
			{
				$error .= constant('TI_QUESTION_MYSQL_ERROR') ;
			}
			



			$result=mysqli_query($con,$query_question_insert);
			confirm_query($result);
			
			if($result)
			{
			$message_success .= constant('TI_QUESTION_SUCCESS_MESSAGE') ;
			}
			else
			{
			$error .= constant('TI_QUESTION_MYSQL_ERROR') ;
			}
		}

	
?>
<script>
	function showDiv(elem){
	if(elem.value == 'Single')
	{
	document.getElementById('hidden_div_single').style.display = "block";
	document.getElementById('hidden_div_multiple').style.display = "none";
	document.getElementById('hidden_div_descriptive').style.display = "none";
	}
	else if(elem.value=='Multiple')
	{
	document.getElementById('hidden_div_multiple').style.display = "block";
	document.getElementById('hidden_div_single').style.display = "none";
	document.getElementById('hidden_div_descriptive').style.display = "none";

	}
	else if(elem.value=='Descriptive')
	{
		document.getElementById('hidden_div_descriptive').style.display = "block";
		document.getElementById('hidden_div_single').style.display = "none";
		document.getElementById('hidden_div_multiple').style.display = "none";
	}
	}
</script>













<div class="main-content">
	
	
           
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                       Uplode Excel  /  Downlode Excel </h3>
                    </div>

                </div>
           
       
	
	
		<div class="box">
			<div class="box-header">    	
				<ul class="nav nav-tabs nav-tabs-left">
					<li class="active">
						
<a  href="question_add_sort.php"class="btn btn-primary"style="color:black;"> <span class="fa fa-plus icon-plus"></span>Add Question</a>
						
					</li>
					<li class="active">
					<a  href="addproductbyexcel.php"class="btn btn-primary"style="color:gold;"> <span class="fa fa-plus icon-plus"></span>Download Excel File</a>
					</li>
				</ul>	
			</div>
			
		
		
		
		
		
		
		<table >
		<tr>
		<td >
		
		
		
		<form  method="post" style="margin-left:100px">
 
    
	 
  <div class="form-row" style="margin-top:50px">
    <div class="form-group col-md-4">
      <label for="inputCity"><b>Course <b></label>
	  
	   <select id="category" name="category" class="form-control">
	
	  
        <option >Select Course</option>
	  
	  <?php   
	 echo  $sql_cat = "SELECT * FROM category where category_status=1";
$result = mysqli_query($con,$sql_cat);
 while($row = mysqli_fetch_array($result))
 {
 
 ?> 

        <option value="<?php echo $row['c_id']?>"><?php echo ucfirst($row['category_name']);?></option>
 <?php } ?>
      </select>
	  
	  
	  
	  
    </div>
	 
    <div class="form-group col-md-4">
      <label for="Subject"><b>Subject<b> </label>
      <select id="subject" name="subject" class="form-control">
       
		
		
        <option select value="">Select Course First</option>
	
		

      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip"><b>Course Level <b></label>
       <select id="subategory" name="subategory" class="form-control">
 
        <option select value="">Select Course First</option>
	
      </select>
    </div>
  </div>
  
  <center><input name="submit" type="submit" class="btn btn-primary"/></cente>	

</form>


<?php 
			
			if(isset($_POST["submit"]))
			{
			
			$cat=$_POST["category"];
			$sub=$_POST["subject"];
			$s_cat=$_POST["subategory"];
			$message=$_POST["message"];
			$url="downlode_xml.php?cat=$cat&sub=$sub&sub_cat=$s_cat";
			echo "<script>window.location.href='".$url."'</script>";
			
			
			}
			
			?>
		
		
		
		
		
		
		
		</td>
		
		
	
		
		</tr>
		
		
		
		
		
		</table>
		
			
		
		<div>
	
				<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
				
					
				<div class="form-actions">
					<div class="padded">                   
					<div class="control-group">
						
					</div>
				</div>	
					
				</div>
                               
                </div>                
			</div>
		
            
		</div>
	</div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>            </div>       
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
        <button class="btn btn-gray" onclick="custom_print('frame1')"><?php echo constant('TI_PRINT');?></button>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CLOSE');?></button>
    </div>
</div>
<!-----------HIDDEN MODAL DELETE CONFIRMATION - COMMON IN ALL PAGES ------>
<div id="modal-delete" class="modal hide fade" style="height:140px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i></h6>
	</div>
  <div class="modal-delete-body" id="modal-body-delete"><?php echo constant('TI_DELETE_DATA');?></div>
    <div class="modal-footer">
    	<a href="" id="delete_link" class="btn btn-red" ><?php echo constant('CONFIRME');?></a>
        <button class="btn btn-default" data-dismiss="modal"><?php echo constant('TI_CANCEL');?></button>
    </div>
</div>

<script>
function modal(param1 ,param2 ,param3)
{
	

		document.getElementById('modal-body').innerHTML = 
		'<iframe id="frame1" src="edit_teacher.php?t_id='+param2+'/'+param3+'" width="100%" height="400" frameborder="0"></iframe>';

	document.getElementById('modal-tablesLabel').innerHTML = param1.replace("_"," ");
}

function modal_delete(param1)
{
	document.getElementById('delete_link').href = param1;
}

/////////////PRINT A DIV FUNCTION////////////////

function custom_print(div_id)
{
	var mywindow = window.open('', 'my div', 'height=400,width=600');
	mywindow.document.write(document.getElementById(div_id).contentWindow.document.head.innerHTML);
	mywindow.document.write(document.getElementById(div_id).contentWindow.document.body.innerHTML); 
	mywindow.print();
	mywindow.close();
	return true;
}

</script>
 <script type="text/javascript">
$(document).ready(function(){
    $('#category').on('change',function(){
        var categoryid = $(this).val();
        if(categoryid){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxData.php',
                data:'category_id='+categoryid,
                success:function(html){
                    $('#subject').html(html);
                    $('#subategory').html('<option value="">Select Category first</option>'); 
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select Category first</option>');
            $('#subategory').html('<option value="">Select Category first</option>'); 
        }
    });
    
    $('#category').on('change',function(){
        var categoryid1 = $(this).val();
        if(categoryid1){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxData.php',
                data:'category_id1='+categoryid1,
                success:function(html){
                    $('#subategory').html(html);
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select Category first</option>'); 
        }
    });
});
</script>
</html>