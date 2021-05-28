<?php 
if(isset($_POST['btnUpdate']))
{
	$pid   = $_POST['txtProId'];
	$pname = $_POST['txtName'];
	$ipa   = $_POST['txtIpath'];
	$price = $_POST['txtPrice'];
	$actv  = $_POST['txtActive'];
	
	
	
	if($_FILES['txtImages']['error']>0)
	{   
	
	     update_product_withoutimg($pid,$pname,$price,$actv);
	     header('Location:index.php?alink=aproducts/manage.php&message= Update Successfully');

	
	}
	else
	{
		$ipa = "./".$ipa;
		unlink($ipa);
		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/products/".$_FILES['txtImages']['name'];
		update_products($pid,$pname,$price,$imgpath,$actv);
		
		if(!file_exists("./".$imgpath ))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		header('location:index.php?alink=aproducts/manage.php&message=Update Successfully');
	}
	}
	?>
</body>
</html>