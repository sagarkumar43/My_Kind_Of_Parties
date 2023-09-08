<?php
$SERVER_SERVER="localhost";
$SERVER_USER="onlinesumit";
$SERVER_PASSWORD="sumit@123";
$DATABASE_NAME="online18";
$con = mysqli_connect($SERVER_SERVER,$SERVER_USER,$SERVER_PASSWORD, $DATABASE_NAME);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>