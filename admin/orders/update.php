<?php 
if(isset($_POST['btnUpdate']))
{
	$aid = $_POST['txtId'];
	$sta= $_POST['txtStatus'];
	
	$done = update_status($aid,$sta);
		
	if($done)
	{
		echo" <script>window.location='index.php?alink=orders/manage.php&message=Update Successfully'</script>";
	}
	else
	{
		echo" <script>window.location='index.php?alink=orders/manage.php&message=Updation failed'</script>";
	}
}
	?>