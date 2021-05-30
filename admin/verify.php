<?php 

if(isset($_POST['btnLogin']))
{
	$li = $_POST['txtLoginId'];
	$pas = $_POST['txtPass'];
	
	$chk=check_admin($li,sha1($pas));
	
	if($chk==true)
	{
		$_SESSION['admin'] = $_POST['txtLoginId'];

		echo "<script>window.location='index.php?alink=adminpanel.php'</script>";
		
		}
	else
	{
		echo "<script>window.location='index.php?alink=adminlogin.php&message=Invalid ID or Password'</script>";
		}
	
	}




?>