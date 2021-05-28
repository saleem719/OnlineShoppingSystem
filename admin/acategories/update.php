<?php 
if(isset($_POST['btnUpdate']))
{
	$cateid = $_POST['txtId'];
	$cname = $_POST['txtHeading'];
	$ipa= $_POST['txtIpath'];
	
	if($_FILES['txtImages']['error']>0)
	{   
	
	     update_category_withoutimg($cateid,$cname);
	     header('Location:index.php?alink=acategories/manage.php&message=Update Successfully');

	
	}
	else
	{
		$ipa = "./".$ipa;
		unlink($ipa);
		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/home/".$_FILES['txtImages']['name'];
		update_category($cateid,$cname,$imgpath);
		
		if(!file_exists("./".$imgpath))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		header('location:index.php?alink=acategories/manage.php&message=Update Successfully');
	}
	}
	?>
</body>
</html>