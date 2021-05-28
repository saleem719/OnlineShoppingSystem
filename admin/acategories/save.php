<?php

if(isset($_POST['btnAdd']))
{
	$name = $_POST['txtName'];
	
	if($_FILES['txtImages']['error']>0)
	{   
	
	    add_categories($name);
	    header('Location:index.php?alink=acategories/manage.php&message=Insert Successfully');

	
	}
	else
	{
		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/home/".$_FILES['txtImages']['name'];
		
		 add_category($name,$imgpath);
		
		if(!file_exists("./".$imgpath ))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		header('location:index.php?alink=acategories/manage.php&message=Insert Successfully');
	}
	}
	?>