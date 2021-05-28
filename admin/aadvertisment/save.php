<?php
if(isset($_POST['btnAdd']))
{
	$links = $_POST['txtLink'];
	$status = $_POST['isActive'];
	
	if($_FILES['txtImages']['error']>0)
	{   
	    add_advertise($links,$status);
	    header('Location:index.php?alink=aadvertisment/manage.php&message=Insert Successfully');

	
	}
	else
	{		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/advertisment/".$_FILES['txtImages']['name'];
		
		add_advertisment($links,$imgpath,$status);
		
		if(!file_exists("./".$imgpath ))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		header('location:index.php?alink=aadvertisment/manage.php&message=Insert Successfully');
	}
	}
	?>