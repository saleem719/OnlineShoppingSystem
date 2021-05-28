<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_POST['btnUpdate']))
{
	$menid= $_POST['txtMid'];
	$menname= $_POST['txtMname'];
	$mlink= $_POST['txtMlink'];
	$mstatus= $_POST['txtMstatus'];
	$chk = updateMenus($menid,$menname,$mlink,$mstatus);
    if($chk) 
	{
		header('Location:index.php?alink=amenus/manage.php&messeage=Update successfully');
		}
	else
	{
		header('Location:index.php?alink=amenus/manage.php&messeage=Updation failed');
		
		}
	
	

	
		
		}
?>
</body>
</html>