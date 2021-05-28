<?php
if(isset($_POST['btnUpdate']))
{
	$cusid = $_POST['txtId'];
    $cfname= $_POST['txtFname'];
	$clname= $_POST['txtLname'];
	 $cmail= $_POST['txtMail'];
	 $clid = $_POST['txtLid'];
	 $cmob = $_POST['txtMobile'];
	 $cpass= $_POST['txtPass'];
	 $cadr = $_POST['txtAddress'];
	 $chk = update_customer($cusid,$cfname,$clname,$cmail,$clid,$cmob,$cpass,$cadr);
    if($chk) 
	{
		header('Location:index.php?alink=acustomer/manage.php&messeage=Update successfully');
		}
	else
	{
		header('Location:index.php?alink=acustomer/manage.php&messeage=Updation failed');
		
		}
	
	

	
		
		}
?>