<?php

echo "<h2><b><center> Manage categories</center></b></h2><br>";

if(isset($_GET['message']))
{
	$mes = $_GET['message'];
	echo"<font color=red>".$mes."</font>";
	}
	?>
<br><br>
<div style="text-decoration:none; font-size:14px">  <a href="index.php?alink=adminpanel.php">Admin panel</a></div> <br> <br> <br>   
<br><br>
<div class="addnewPr" align="center">  <a href="index.php?alink=acategories/add.php">Add New new</a></div> 
<br><br> 

<table width="90%" border="1">
<tr> 
<th> ID </th>
<th> Name </th>
<th> Image path</th>
<th> Images</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$homes = get_category();

foreach($homes as $home)
{
	echo"<tr>";
	echo"<td>".$home['category_id']."</td>";
	echo"<td>".$home['category_name']."</td>";
	echo"<td>".$home['category_image']."</td>";
	echo"<td><img height=100 width=90 src=".$home['category_image']."></td>";
	echo"<td><a href=index.php?alink=acategories/edit.php&cateid=".$home['category_id'].">Edit</td>";
	echo"<td><a href=index.php?alink=acategories/delete.php&cateid=".$home['category_id'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
</body>
</html>