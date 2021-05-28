<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_GET['menuid']))
{
	$men = $_GET['menuid'];
	$chk = delete_menus($men);
	
	if($chk) 
	{
		header('Location:index.php?alink=amenus/manage.php&messeage=Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=amenus/manage.php&messeage=Deletion failed');
		
		}
	
	

	
		
		}
?>
</body>
</html>