<?php

if(isset($_POST['btnAdd']))
{
	
	  $lid = $_POST['txtLig'];
	 $pass = $_POST['txtPass'];
	
	$add = add_Admin($lid,sha1($pass));
	
	if($add)
	{
		header('location:index.php?alink=aadmin/manage.php&message= New admin add successfully');
	}
	else
	{
		header('location:index.php?alink=aadmin/manage.php&message= Addition failed');
	
	 
	}
}
?>