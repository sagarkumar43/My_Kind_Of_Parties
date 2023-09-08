<?php

session_start();
require_once('config.php');
$listing_name=$_POST['listing_name'];
$list_id=$_POST['list_id'];
$price=$_POST['price'];
$from_date=$_POST['from_date'];
$guest=$_POST['guest'];
$to_date=$_POST['to_date'];



$_SESSION['listing_name']=$listing_name;
$_SESSION['list_id']=$list_id;
$_SESSION['price']=$price;
$_SESSION['from_date']=$from_date;
$_SESSION['guest']=$guest;
$_SESSION['to_date']=$to_date;
$_SESSION['bookingtype']='venue';

echo"<script>window.location.href='login.php'</script>";






?>
