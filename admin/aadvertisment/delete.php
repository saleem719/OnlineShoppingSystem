<?php
if(isset($_GET['advid']))
{
	$advertise = $_GET['advid'];
	$chk =delete_advertisment($advertise);
	
	if($chk) 
	{
		header('Location:index.php?alink=aadvertisment/manage.php&messeage=Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=aadvertisment/manage.php&messeage=Deletion failed');
		
		}
		
		}
?>