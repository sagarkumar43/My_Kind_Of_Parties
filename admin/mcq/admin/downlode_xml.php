<?php 

ini_set ( 'memory_limit', '64M' );
include('include/configure.php');
include('login_check.php');
$cat=$_GET["cat"];
$sub=$_GET["sub"];
$sub_cat=$_GET["sub_cat"];


$sql = "SELECT * from question where c_id= $cat and s_c_id= $sub_cat and s_id=$sub";  

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
//  echo "<script>window.lcoation.href='addproductbyexcel.php'</script>"
  ?>