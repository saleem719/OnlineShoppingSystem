<?php
if(isset($_POST['btnSend']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtMail'];
	$sub = $_POST['txtSubject'];
	$from= $_POST['txtFrom'];
	$mess = $_POST['txtMessage'];
 $to = "saleem.Duhs@gmail.com";
 $header = $name. "From : ".$from. "Email Address: ".$email;
	
	if(mail($to,$sub,$mess,$header))
	{
		echo "Message sent Successfully";
	
		}
    else
	{
		header('location:index.php?mlink=errcontact.php');
		}	
	}

?>