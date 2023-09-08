<?php
ini_set ( 'memory_limit', '64M' );
include('include/configure.php');
include('login_check.php');


$sql = "SELECT * from question";  
$setRec = mysqli_query($con, $sql);  
$columnHeader = '';  
$columnHeader = "q_id" . "\t" . "s_id" . "\t" . "c_id" . "\t" . "s_c_id" . "\t" . "question" . "\t" . "typeofquestion" . "\t" . "option_a" . "\t" . "option_b" . "\t" . "option_c" . "\t" . "option_d" . "\t" . "correct_ans" . "\t" . "question_status" . "\t" . "marks" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  ?>