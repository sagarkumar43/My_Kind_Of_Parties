<?Php
include('include/configure.php');
	date_default_timezone_set('Asia/Kolkata');
$date = date("H:i:s");
$current_date=date("Y-m-d");
list($cur_hor, $cur_min, $cur_sec) = explode(':', $date);


$_Student=mysqli_fetch_array(mysqli_query($con,"select * from student where student_id='".$_SESSION['student_id']."'"));
$_batch_id=$_Student['b_id'];
$_batch=mysqli_fetch_array(mysqli_query($con,"select * from batch where b_id='".$_batch_id."'"));
$batch_time=$_batch['batch_time'];

$current_time=$cur_hor.':'.$cur_min;



if($_GET["main_exam_id"]!="")
{
    
    $query="select * from exam where e_id='".$_GET["main_exam_id"]."'";
   $da=mysqli_query($con, $query);
	$query_exam_term=mysqli_fetch_array($da);
	$exam_duration=$query_exam_term['exam_duration'];
	$exam_end_date=$query_exam_term['date_end'];
}

 $selectedTime = $batch_time;
 $Starttime_plus_duration = strtotime($selectedTime) + $exam_duration*60;
 $endTimeduration= date('H:i', $Starttime_plus_duration);

//echo $current_time.">=".$batch_time;
					?>
                        
						<a style="cursor:pointer;" onclick="isChecked('<?php echo date("H:i:s");?>'); return false;">
                        <div class="btn btn-gray btn-small "><i class="icon-play-circle icon-1x"></i>&nbsp; <?php echo constant('TI_STAET_EXAM_BUTTON');?></div>
						</a>
					<?php 
						
					?>