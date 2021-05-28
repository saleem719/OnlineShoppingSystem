

<h2><b><center>Add New Product</center></b></h2><br>

<form action="index.php?alink=aproducts/save.php" method="post" enctype="multipart/form-data">
<h3>Name: </h3>
<input type="text" name="txtName"><br>

<h3>Price :</h3>
<input type="text" name="txtPrice"><br><br>

<h3>Category:

<?php
 
echo "<select name='txtCatId'>";
echo "<option value='' disabled selected> Select</option>";
$cate=get_category();
foreach($cate as $category)
{
echo "<option value=".$category['category_id'].">".$category['category_name']."</option>";
}
echo "</select><br><br>";
?></h3>

<h2>Active: 
<select name="isActive">
    <option value="Y" selected>Y</option>
    <option value="N">N</option></select></h2></br>

<h3>Upload New image:</h3>
<input type="file" name="txtImages"><br>

<br>
<br>
<input type="submit" name="btnAdd" value="Add"><br>

 </form>
