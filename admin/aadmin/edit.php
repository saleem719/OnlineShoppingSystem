<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<br><br><br>
<h2><b><center>Edit admin </center></b></h2>
<br>
<?php
if(isset($_GET['aid']))
{
	$admin = $_GET['aid'];
	$adm = get_a_admin($admin);
}
?>
<br><br><br><br><br>
<table>
<form action="index.php?alink=aadmin/update.php" method="post">
<tr><td><h2> ID:</td>
<td><input type="text" name="txtAdid"  size="5" readonly value="<?php echo $adm[0]['admin_id'];?>"></h2></td></tr>

<tr><td><h2>Login ID</td>  
<td><input type="text" name="txtLig" value="<?php echo $adm[0]['admin_loginid'];?>"></h2></td></tr>

<tr><td><h2> Password</td>   
<td><input type="password" name="txtPass" size="40" value="<?php echo $adm[0]['admin_pass'];?>"></h2></td></tr>

<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnUpdate" value="Update"></td></tr>

</form>
</table>

</body>
</html>