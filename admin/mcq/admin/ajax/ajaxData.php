<?php
//Include the database configuration file
include('../mysql_connection.php');

if(!empty($_POST["category_id"])){
    //Fetch all state data
    $query = $con->query("SELECT * FROM subject WHERE category_id = ".$_POST['category_id']." AND subject_status = 1 ORDER BY subject_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    //$cat=$_POST["category_id"];
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select Subject</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['s_id'].'">'.$row['subject_name'].'</option>';
        }
    }else{
        echo '<option value="">Subject not available</option>';
    }
}
else if(!empty($_POST["category_id1"])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM subcategory WHERE category_id = ".$_POST['category_id1']." AND subcategory_status = 1 ORDER BY subcategory_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select Category</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['s_c_id'].'">'.$row['subcategory_name'].'</option>';
        }
    }
	else{
        echo '<option value="">Subcategory not available</option>';
    }
}
?>