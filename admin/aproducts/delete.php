<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body
<?php

if(isset($_GET['proid']))
{

  $pro= $_GET['proid'];
  
  $proimg = $_GET['pimg'];
  
  unlink($proimg);
  
  
 $chk = deleteNews($pro);
 
 if($chk)
 {
	 header('location:index.php?alink=aproducts/manage.php&message=Deleted successfully');
 }
 else
 {
	 header('location:index.php?alink=aproducts/manage.php&message=deletion failed');
 }

}

?>



?>

</body>
</html>