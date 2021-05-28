
<h2><b><center>Manage Products</center></b></h2><br><br> <br>
 
<div style="text-decoration:none; font-size:14px;"> <a href="index.php?alink=adminpanel.php">Admin Panel</a></div> 
<br><br>
<div class="addnewPr" align="center">  <a href="index.php?alink=aproducts/addnew.php">Add New Products</a></div> 
<br><br>
<?php 
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?>
<br><br>

<table width="90%" border="1">
<tr> 
<th> ID</th>
<th> Name </th>
<th> Category </th>
<th> Image</th>
<th> price</th>
<th> Active</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$pro=get_product();
foreach($pro as $product)
{
	echo"<tr>";
	echo"<td>".$product['product_id']."</td>";
	echo"<td>".$product['product_name']."</td>";
	echo"<td>".$product['category_name']."</td>";
	echo"<td><img height='100' width='94' src=".$product['image']."></td>";
	echo"<td>".$product['price']."</td>";
	echo"<td>".$product['active']."</td>";
	echo"<td><a href=index.php?alink=aproducts/edit.php&proid=".$product['product_id'].">Edit</td>";
    echo"<td><a href=index.php?alink=aproducts/delete.php&pimg=".$product['image']."&proid=".$product['product_id'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 

    
<br> <br> <br> 