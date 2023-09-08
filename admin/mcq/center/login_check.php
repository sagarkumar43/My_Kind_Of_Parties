<?php
if($_SESSION['center_id']=="" and $_SESSION['centeremail']=="" and $_SESSION['center_username']=="" and $_SESSION['cente_rname']=="")
{
	redirect_to('index.php');
}
?>