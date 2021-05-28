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
	$admid = $_POST['txtAdid'];
	$lid   = $_POST['txtLig'];
	$pass = $_POST['txtPass'];
	
	$chk = updateAdmin($admid,$lid,sha1($pass));
    if($chk) 
	{
		header('Location:index.php?alink=aadmin/manage.php&messeage= Update admin successfully');
		}
	else
	{
		header('Location:index.php?alink=aadmin/manage.php&messeage = Updation failed');
		
		}
	
	

	
		
		}
?>
</body>
</html>