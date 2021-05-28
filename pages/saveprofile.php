<?php
if(isset($_POST['btnEdit']))
{
	$cusid = $_POST['txtId'];
	 $cmail= $_POST['txtMail'];
	 $clid = $_POST['txtLid'];
	 $cmob = $_POST['txtMobile'];
	 $cpass= $_POST['txtPass'];
	 $cadr = $_POST['txtAddress'];
	 
	 $chk = edit_cutomer($cusid,$cmail,$clid,$cmob,$cpass,$cadr);
    if($chk) 
	{
		header('Location:index.php?mlink=account.php&messeage= Profile updated successfully please relogin');
		}
	else
	{
		header('Location:index.php?mlink=account.php&messeage=Updation failed');
		
		}
	
	

	
		
		}
?>