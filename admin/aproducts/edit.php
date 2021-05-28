<?php

echo "<h2><b><center> Edit Products</center></b></h2><br>";

if(isset($_GET['proid']))
{
	$pro = $_GET['proid'];
	$products = get_a_product($pro);
	}
?>
<form action="index.php?alink=aproducts/update.php" method="post" enctype="multipart/form-data">
<h3>ID:<h3>
<input type="text" name="txtProId" size="8" readonly value="<?php echo $products[0]['product_id'];?>"><br>

<h3>Name </h3>
<input type="text" name="txtName" size="30" value="<?php echo $products[0]['product_name'];?>"><br>


<h3>Image Path: </h3>
<input type="text" name="txtIpath" size="30"  readonly value="<?php echo $products[0]['image'];?>"><br>

<h3>Price:</h3>
<input type="text" name="txtPrice" value="<?php echo $products[0]['price'];?>"><br>

<h3>Active: <select name="txtActive">
  <?php
			  if($products[0]['active']=='Y')
			  {
		    ?>
            
<option value="Y" selected>Y</option>
<option value="N">N</option>

  <?php
			  }
		else
		{
			?>
       <option value="Y">Y</option>
       <option value="N"  selected>N</option>
		<?php
		}
		?>
        </select></h3><br>
<h3>Upload New image:</h3>
<input type="file" name="txtImages"><br>

<br>
<br>
<input type="submit" name="btnUpdate" value="Update"><br>

 </form>



</body>
</html>