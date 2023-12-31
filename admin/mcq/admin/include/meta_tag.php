<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<link rel="stylesheet" href="css/adminfont.css">
		<link href="css/jquery/jquery-ui-1.10.3.custom.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/admin.css" media="screen" rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
		<script src="../js/html5shiv.js" type="text/javascript"></script>
		<script src="../js/excanvas.js" type="text/javascript"></script>
		<![endif]-->
		<script src="../js/textusintentio.js" type="text/javascript"></script>	
		<title><?php echo $query_general_setting['g_title'];?></title>
		<meta name="description" content="<?php echo $query_general_setting['g_description'];?>">
		<meta name="keywords" content="<?php echo $query_general_setting['g_keywords'];?>">	
		<?php echo add_my_google_analytics($query_general_setting['g_google_analytics']);?>
		<script src="ckeditor/ckeditor.js"></script>
		<link rel="ckeditor/samples/stylesheet" href="sample.css">
		<script>
		// Remove advanced tabs for all editors.
		CKEDITOR.config.removeDialogTabs = 'image:advanced;link:advanced;flash:advanced;creatediv:advanced;editdiv:advanced';
		</script>	

<link rel="stylesheet" media="all" type="text/css" href="../js/timepicker/jquery-ui.css" />
<script type="text/javascript" src="../js/timepicker/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/timepicker/jquery-ui-timepicker-addon.js"></script>
	</head>