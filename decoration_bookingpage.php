<?php

session_start();
require_once('config.php');
$product_name=$_POST['product_name'];
$productprice=$_POST['product_price'];
$fdate=$_POST['date'];
$time=$_POST['time'];
$zipcode=$_POST['pincode'];



$_SESSION['product_name']=$product_name;
$_SESSION['product_price']=$productprice;
$_SESSION['date']=$fdate;
$_SESSION['time']=$time;
$_SESSION['pincode']=$zipcode;
$_SESSION['bookingtype']='decoration';

echo"<script>window.location.href='login.php'</script>";






?>
<!--  -->