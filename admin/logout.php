<?php
require_once('inc/config.php');

session_start();
session_destroy();
echo '<div class="alert success>You are Successfully Logout</div>"';
echo"<script>window.location.href = 'index.php'</script>";
?>