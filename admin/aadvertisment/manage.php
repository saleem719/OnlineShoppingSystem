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
<div class="addnewPr" align="center">  <a href="index.php?alink=aadvertisment/add.php">Add New Advertisment</a></div> 
<br><br> 

<table width="90%" border="1">
<tr> 
<th> ID </th>
<th> Website Link</th>
<th> Images</th>
<th> Active</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$advertise = get_advertisement();

foreach($advertise as $adv)
{
	echo"<tr>";
	echo"<td>".$adv['ID']."</td>";
	echo"<td><a href=".$adv['Link']." target='_blank'>".$adv['Link']."</a></td>";
	echo"<td><img height=120 width=120 src=".$adv['Image']."></td>";
	echo"<td>".$adv['IsActive']."</td>";
	echo"<td><a href=index.php?alink=aadvertisment/edit.php&advid=".$adv['ID'].">Edit</td>";
	echo"<td><a href=index.php?alink=aadvertisment/delete.php&advid=".$adv['ID'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
</body>
</html>