<?php 
if(isset($_POST['btnUpdate']))
{
	$id = $_POST['txtId'];
	$link = $_POST['txtLink'];
	$ipa= $_POST['txtIpath'];
	$status= $_POST['txtActive'];
	
	if($_FILES['txtImages']['error']>0)
	{   
	
	    update_advs($id,$link,$status);
	     header('Location:index.php?alink=aadvertisment/manage.php&message=Update Successfully');

	
	}
	else
	{
		$ipa = "./".$ipa;
		unlink($ipa);
		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/advertisment/".$_FILES['txtImages']['name'];
		update_Advertisment($id,$link,$imgpath,$status);
		
		if(!file_exists("./".$imgpath))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		header('location:index.php?alink=aadvertisment/manage.php&message=Update Successfully');
	}
	}
	?>