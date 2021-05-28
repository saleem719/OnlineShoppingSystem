<?php 
if(isset($_POST['btnAdd']))
{
	$pname = $_POST['txtName'];
	$pprice = $_POST['txtPrice'];
	$pcatid = $_POST['txtCatId'];
	$pactive = $_POST['isActive'];
	
	if($_FILES['txtImages']['error']>0)
	{   
	
	    add_product($pname,$pprice,$pcatid,$pactive);
		echo "<script>window.location='index.php?alink=aproducts/manage.php&message=Insert Successfully'</script>";

	
	}
	else
	{
		
		echo $_FILES['txtImages']['name'];
		echo $_FILES['txtImages']['tmp_name'];
		
		$imgpath = "images/products/".$_FILES['txtImages']['name'];
		
		 add_products($pname,$imgpath,$pprice,$pcatid,$pactive);
		
		if(!file_exists("./".$imgpath ))
		{
			move_uploaded_file($_FILES['txtImages']['tmp_name'],"./".$imgpath);
		}
		
		echo "<script>window.location='index.php?alink=aproducts/manage.php&message=Insert Successfully'</script>";
	}
	}
	?>