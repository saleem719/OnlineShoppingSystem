<?php
if(isset($_GET['admin_id']))
{
	$idm = $_GET['admin_id'];
	$chk = deleteAdmin($idm);
	
	if($chk) 
	{
		header('Location:index.php?alink=aadmin/manage.php&messeage= Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=aadmin/manage.php&messeage= Deletion failed');
		
		}
	
	

	
		
		}
?>