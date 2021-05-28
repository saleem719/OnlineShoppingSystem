<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_GET['cateid']))
{
	$cat = $_GET['cateid'];
	$chk = delete_category($cat);
	
	if($chk) 
	{
		header('Location:index.php?alink=acategories/manage.php&messeage=Delete successfully');
		}
	else
	{
		header('Location:index.php?alink=acategories/manage.php&messeage=Deletion failed');
		
		}	
		}
?>
</body>
</html>