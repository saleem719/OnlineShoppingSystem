<?php

if(isset($_POST['btnLogin']))
{
	
	$li = $_POST['txtLoginId'];
	$pa = $_POST['txtPass'];
	
	
	$chk = check_user($li,$pa);
	
	
	if($chk==true)
	{
		$users = find_user($li,$pa);
		    $_SESSION['user']= $users[0]['customer_id'];
		   $_SESSION['fname']= $users[0]['customer_firstname'];
		   $_SESSION['lname']= $users[0]['customer_lastname'];
		    $_SESSION['mail']= $users[0]['customer_email'];
		  $_SESSION['mobile']= $users[0]['customer_mobile'];
		 $_SESSION['address']= $users[0]['customer_Address'];
		 $_SESSION['loginid']= $users[0]['customer_loginid'];
		    $_SESSION['pass']= $users[0]['customer_pass'];
		
                echo"<script>window.location='index.php?mlink=Home.php' </script>";
	}
	else
	{
       echo"<script>window.location='index.php?mlink=Mainlogin.php&message=Invalid User ID or  Password' </script>";
	
	
	}
}
?>