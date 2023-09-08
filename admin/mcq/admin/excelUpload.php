<?php
$dbHost = "localhost";
	$dbDatabase = "waytopinnacle";
	$dbPasswrod = "";
	$dbUser = "root";
	$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');

require('mysql_connection.php');
	
if(isset($_POST['import'])){

	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
	if(in_array($_FILES["file"]["type"],$mimes)){

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		
		$uploadFilePath = 'upload/'.basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

		$Reader = new SpreadsheetReader($uploadFilePath);

		$totalSheet = count($Reader->sheets());


		$html="<table border='1'>";
		$html.="<tr><th>Product Name</th><th>Authentication Code</th></tr>";

		/* For Loop for all sheets */
		for($i=0;$i<$totalSheet;$i++){

			$Reader->ChangeSheet($i);
			foreach ($Reader as $Row)
	        {
	        	$html.="<tr>";
				/* Check If sheet not emprt */
				$ou_id = isset($Row[0]) ? $Row[0] : '';
				$sb_id = isset($Row[1]) ? $Row[1] : '';
				$ct_id = isset($Row[2]) ? $Row[2] : '';
				$sb_ct_id = isset($Row[3]) ? $Row[3] : '';
		        $question = isset($Row[4]) ? $Row[4] : '';
				$type = isset($Row[5]) ? $Row[5] : '';
				$o_a = isset($Row[6]) ? $Row[6] : '';
				$o_b = isset($Row[7]) ? $Row[7] : '';
				$o_c = isset($Row[8]) ? $Row[8] : '';
				$o_d = isset($Row[9]) ? $Row[9] : '';
				$correct = isset($Row[10]) ? $Row[10] : '';
				$question_status = isset($Row[11]) ? $Row[11] : '';
				$marks = isset($Row[12]) ? $Row[12] : '';
				
				
				$html.="</tr>";

				 $query = "INSERT INTO `question`(`q_id`, `s_id`, `c_id`, `s_c_id`, `question`, `typeofquestion`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`, `question_status`, `marks`) values('".$ou_id."','".$sb_id."','".$ct_id."','".$sb_ct_id."','".$question."','".$type."', '".$o_a."' , '".$o_b."','".$o_c."','".$o_d."','".$correct."','".$question_status."','".$marks."')";
	 
				$mysqli->query($query);
	        }

		}
		?>
		<script> window.location.href="addproductbyexcel.php" 
		alert("Data Uplode Success");
		
		
		</script>
		
		
		<?php
		
		
			
		

	}else { 
		die("<br/>Sorry, File type is not allowed. Only Excel file."); 
	}

}

?>