<?php 
require_once('inc/config.php');
session_start();
  if($_SESSION['v_email']=='' || $_SESSION['v_email']==NULL)
header('location:index.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Vendor Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
  
    <!--== BODY CONTNAINER ==-->
 

<div class="container" style="margin-top: 200px;">
	<center><h1>Your Account Is On Hold.. You can access all the features after Admin's Approval</h1>
		<a href="logout.php" class="btn btn-primary btn-lg">Log Out</a> </center>
				</div>
   

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 10:15:01 GMT -->
</html>