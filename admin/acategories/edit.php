<?php

echo "<h2><b><center> Edit categories</center></b></h2><br>";

if(isset($_GET['cateid']))
{
	$cate = $_GET['cateid'];
	$cat = get_a_category($cate);
	}
?>

<form action="index.php?alink=acategories/update.php" method="post" enctype="multipart/form-data">
<h3>ID:<h3>
<input type="text" name="txtId" size="8" readonly value="<?php echo $cat[0]['category_id'];?>"><br>

<h3>Heading: </h3>
<input type="text" name="txtHeading" size="40" value="<?php  echo $cat[0]['category_name'];?>"><br>

<h3>Image Path :</h3>
<input type="text" name="txtIpath" readonly value="<?php  echo $cat[0]['category_image'];?>"><br>

<h3>Upload New image:</h3>
<input type="file" name="txtImages"><br><br><br>

<input type="submit" name="btnUpdate" value="Update"><br>

 </form>