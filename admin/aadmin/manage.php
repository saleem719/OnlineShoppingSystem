
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br> 
<h2><b><center>Manage admin </center></b></h2>
<?php 
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?><br><br><br>
<div align="center"><a href="index.php?alink=aadmin/addnew.php">Add New admin</a></div> 
<br><br><br>
<div class="adminBG"><a href="index.php?alink=adminpanel.php">Admin panel</a></div> 
<br><br><br><br><br>
<table width="90%" border="1">
<tr> 
<th> ID </th>
<th> Login ID</th>
<th> Password</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$admin=get_admin();
foreach($admin as $adm)
{
	echo"<tr>";
	echo"<td>".$adm['admin_id']."</td>";
	echo"<td>".$adm['admin_loginid']."</td>";
	echo"<td>".$adm['admin_pass']."</td>";
	echo"<td><a href=index.php?alink=aadmin/edit.php&aid=".$adm['admin_id'].">Edit</td>";
	echo"<td><a href=index.php?alink=aadmin/delete.php&aid=".$adm['admin_id'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
    
<br> 
<br> 
</body>
</html>