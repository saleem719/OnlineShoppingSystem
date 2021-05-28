<?php
if(isset($_GET['ordid']))
{
	$men = $_GET['ordid'];
	$chk = delete_ord($men);
	
	if($chk) 
	{
		header('Location:index.php?alink=orders/manage.php&message=&messeage=Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=orders/manage.php&message=&messeage=Deletion failed');
		
		}
	
	

	
		
		}
?>