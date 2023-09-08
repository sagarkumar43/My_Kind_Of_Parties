     
    

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'client_myvc');
 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'briduywa_mykindofparties');
 
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//if($_SERVER['HTTP_HOST']=="localhost")
//{
	//$connect=mysqli_connect("localhost","root","","emjicanq_card") or die ('Database not available...');
	//}
//else 
//{
	//$connect=mysqli_connect("localhost","myvcme_myvccard","3?7pG3%6MaAq#2021","myvcme_myvccard") or die ('Connection issue //#567844 Error');
//	}



?>