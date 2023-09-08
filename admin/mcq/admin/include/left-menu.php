<?php include('login_check.php');?>
<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">

<?php

if($query_general_setting['g_logo']!="")
{
?>	

    <br />
    <div style="text-align:center;">
    	<a href=""><img src="http://ims.bridgetechnosoft.com/plugins/images/logo-dc-2.png"  style="max-height:200px; max-width:200px;"/> </a>
    </div>
   	<br />
<?php }else{?>

<br />
    <div style="text-align:center;">
    	<a href=""><img src="http://ims.bridgetechnosoft.com/plugins/images/logo-dc-2.png"  style="max-height:100px; max-width:100px;"/> </a>
    </div>
   	<br />
<?php 
	}
	?>
	<ul class="nav nav-collapse collapse nav-collapse-primary">        


		<?php if(basename(url())=="home.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="home.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_DASHBOARD');?>">
					<i class="icon-desktop icon-1x"></i>                  
					<span><?php echo constant('TI_LEFT_MENU_DASHBOARD');?> </span>
				</a>
		</li>
<?php
if (in_array("2", $explode_permistion) or in_array("0", $explode_permistion))
{

		 if(basename(url())=="category.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="category.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_CATEGORY');?>">
					<i class="icon-folder-close icon-1x"></i>                   
					<span>Course </span>
				</a>
		</li>
<?php }

if (in_array("3", $explode_permistion) or in_array("0", $explode_permistion))
{

		 if(basename(url())=="sub_category.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="sub_category.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_SUB_CATEGORY');?>">
					<i class="icon-tags icon-1x"></i>                    
					<span>Course Level </span>
				</a>
		</li>
<?php }
if (in_array("4", $explode_permistion) or in_array("0", $explode_permistion))
{

		 if(basename(url())=="subject.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="subject.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_SUBJECT');?>">
					<i class="icon-tag icon-1x"></i>
					<span><?php echo constant('TI_LEFT_MENU_SUBJECT');?> </span>
				</a>
		</li>
<?php }
if (in_array("5", $explode_permistion) or in_array("0", $explode_permistion))
{		
			if(basename(url())=="center.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="center.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_CENTER');?>">
					<i class="icon-building icon-1x"></i>
					<span><?php echo constant('TI_LEFT_MENU_CENTER');?> </span>
				</a>
			</li>
<?php }

if (in_array("14", $explode_permistion) or in_array("0", $explode_permistion))
{		
			if(basename(url())=="batch.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="batch.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_BATCH');?>">
					<i class="icon-screenshot icon-1x"></i>
					<span><?php //echo constant('TI_LEFT_MENU_BATCH');?>Batch (Attempt) </span>
				</a>
			</li>
<?php }

			

if (in_array("6", $explode_permistion) or in_array("0", $explode_permistion))
{

		if(basename(url())=="student.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="student.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_STUDENT');?>">
					<i class="icon-male icon-1x"></i>
					<span><?php echo constant('TI_LEFT_MENU_STUDENT');?> </span>
				</a>
			</li>

<?php
}
if (in_array("7", $explode_permistion) or in_array("0", $explode_permistion))
{

		if(basename(url())=="exam.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="exam.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_EXAM');?>">
					<i class="icon-book icon-1x"></i>
					<span><?php echo constant('TI_LEFT_MENU_EXAM');?> </span>
				</a>
			</li>
<?php
}
if (in_array("11", $explode_permistion) or in_array("0", $explode_permistion))
{
			 if(basename(url())=="question_add_sort.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
			<span class="glow"></span>
				<a href="question_add_sort.php" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo constant('TI_LEFT_MENU_QUESTION');?>">
					<i class="icon-question-sign icon-1x"></i>
					<span><?php echo constant('TI_LEFT_MENU_QUESTION');?> </span>
				</a>
			</li>

<?php
}
if (in_array("8", $explode_permistion) or in_array("0", $explode_permistion))
{
			
			if(basename(url())=="general_setting.php"){ ?>
			<li class="dark-nav active"><?php }else { ?><li class="dark-nav"><?php } ?>
				<span class="glow"></span>
				<a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu_first" rel="tooltip" data-placement="right" 
					data-original-title="<?php echo constant('TI_LEFT_MENU_SETTINGS');?>">
					<i class="icon-cogs icon-1x"></i>                
					<span><?php echo constant('TI_LEFT_MENU_SETTINGS');?> <i class="icon-caret-down"></i></span>
				</a>
            
				<ul id="settings_submenu_first" class="collapse">
				<?php if (in_array("9", $explode_permistion) or in_array("0", $explode_permistion))
				{?>
				 <li class="">
					<a href="general_setting.php">                  		
                  		<i class="icon-wrench"></i>&nbsp;<?php echo constant('TI_LEFT_MENU_GENERAL_SETTINGS');?></a>
                </li>
				<?php } 
				
				if (in_array("10", $explode_permistion) or in_array("0", $explode_permistion))
				{?>
                <li class="">
					<a href="user.php"><i class="icon-user"></i>&nbsp;<?php echo constant('TI_LEFT_MENU_USER');?></a>
                </li>
               	<?php } ?>
            </ul>
		</li>
<?php }

if (in_array("12", $explode_permistion) or in_array("0", $explode_permistion))
{
if(basename(url())=="notice.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li><?php } ?>	
		<span class="glow"></span>
				<a href="notice.php" rel="tooltip" data-placement="right" 
					data-original-title="<?php echo constant('TI_LEFT_MENU_NOTICE');?>">
					<i class="icon-list-ol icon-1x"></i>					
					<span><?php echo constant('TI_LEFT_MENU_NOTICE');?> </span>
				</a>
		</li>
<?php } 





if (in_array("13", $explode_permistion) or in_array("0", $explode_permistion))
{
if(basename(url())=="selectresult.php"){ ?>
		<li class="dark-nav active"><?php }else { ?><li><?php } ?>	
		<span class="glow"></span>
				<a href="selectresult.php" rel="tooltip" data-placement="right" 
					data-original-title="<?php echo constant('TI_LEFT_MENU_VIEW_RESULT');?>">
					<i class="icon-trophy icon-1x"></i>					
					<span><?php echo constant('TI_LEFT_MENU_VIEW_RESULT');?> </span>
				</a>
		</li>
<?php }
      
		

if (in_array("15", $explode_permistion) or in_array("0", $explode_permistion))
{
if(basename(url())=="export_table.php"){ ?>
<li class="dark-nav active"><?php }else { ?><li><?php } ?>	
<span class="glow"></span>
		<a href="export_table.php" rel="tooltip" data-placement="right" 
			data-original-title="<?php echo constant('TI_DESBOARD_ICON_EXPORT');?>">
			<i class="icon-download icon-1x"></i>					
			<span><?php echo constant('TI_DESBOARD_ICON_EXPORT');?> </span>
		</a>
</li>
<?php }  


if (in_array("16", $explode_permistion) or in_array("0", $explode_permistion))
{
if(basename(url())=="import_table.php"){ ?>
<li class="dark-nav active"><?php }else { ?><li><?php } ?>	
<span class="glow"></span>
		<a href="import_table.php" rel="tooltip" data-placement="right" 
			data-original-title="<?php echo constant('TI_DESBOARD_ICON_IMPORT');?>">
			<i class="icon-upload icon-1x"></i>					
			<span><?php echo constant('TI_DESBOARD_ICON_IMPORT');?> </span>
		</a>
</li>
<?php } ?>   
		
	<li>	
<span class="glow"></span>
		<a href="new_student_reg.php" rel="tooltip" data-placement="right" 
			data-original-title="<?php echo constant('TI_DESBOARD_ICON_IMPORT');?>">
			<i class="icon-male icon-1x"></i>

			
			<span>Registered Student </span>
		</a>
</li>
	
	
	
	
	
	</ul>
	
	
	
	
	
	
	
	
	
	
	
</div>