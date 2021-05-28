<?php
if(isset($_GET['mlink']))
{
	$page = $_GET['mlink'];
	include 'pages/'.$page;
	}

else if(isset($_GET['alink']))
{
	$page = $_GET['alink'];
	
	include 'admin/'.$page;
}
	
	else
	{
		$home = 'Home.php';
		include 'pages/'.$home;
		}

?>
      
      