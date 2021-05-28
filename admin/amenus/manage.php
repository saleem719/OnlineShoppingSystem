
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<br> 
<br> 
<h2><b><center>Manage Manus</center></b></h2>

<?php 
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?></br></br></br>


<table width="90%" border="1">
<tr> 
<th> Menu ID</th>
<th> Manu Name</th>
<th> Manu Link</th>
<th> Manu Status</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$menus=get_menus();
foreach($menus as $menu)
{
	echo"<tr>";
	echo"<td>".$menu['mId']."</td>";
	echo"<td>".$menu['mName']."</td>";
	echo"<td>".$menu['mLink']."</td>";
	echo"<td>".$menu['mStatus']."</td>";
	echo"<td><a href=index.php?alink=amenus/edit.php&menuid=".$menu['mId'].">Edit</td>";
	echo"<td><a href=index.php?alink=amenus/delete.php&menuid=".$menu['mId'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
    
<br> 
<br> 
<div align="center">  <a href="index.php?alink=amenus/addmenu.php">Add New Menu</a></div> 
<br> 


<div class="adminBG">  <a href="index.php?alink=adminpanel.php">Admin panel</a></div> 
</body>
</html>