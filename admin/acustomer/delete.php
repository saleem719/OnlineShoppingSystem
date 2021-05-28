<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_GET['cid']))
{
	$cusId = $_GET['cid'];
	$chk = delete_customer($cusId);
	
	if($chk) 
	{
		header('Location:index.php?alink=acustomer/manage.php&messeage=Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=acustomer/manage.php&messeage=Deletion failed');
		
		}
	
	

	
		
		}
?>
</body>
</html>