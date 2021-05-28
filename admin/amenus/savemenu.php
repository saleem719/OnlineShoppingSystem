<?php

if(isset($_POST['btnAdd']))
{
	
	$mname = $_POST['txtMname'];
	$mlink = $_POST['txtMlink'];
	$mstat = $_POST['txtMstatus'];
	
	$add = add_menu($mname,$mlink,$mstat);
	
	
	if($add)
	{
		header('location:index.php?alink=amenus/manage.php&message=New menu add successfully');
	}
	else
	{
		header('location:index.php?alink=amenus/manage.php&message= Addition failed');
	
	
	}
}
?>