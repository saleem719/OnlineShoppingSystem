
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<br><br><br>
<h2><b><center>Edit Customer Detail</center></b></h2>
<br><br><br>
<?php
if(isset($_GET['cid']))
{
	$c = $_GET['cid'];
	$customer = get_a_customer($c);
}
?>

<table>
<form action="index.php?alink=acustomer/update.php" method="post">
<tr><td><h2> ID:</td>
<td><input type="text" name="txtId" readonly size="5" value="<?php echo $customer[0]['customer_id'];?>"></h2></td></tr>

<tr><td nowrap><h2> First Name:</td>
<td nowrap><input type="text" name="txtFname"  value="<?php echo $customer[0]['customer_firstname'];?>"></h2></td></tr>

<tr><td nowrap><h2> Last Name:</td>
<td nowrap><input type="text" name="txtLname"  value="<?php echo $customer[0]['customer_lastname'];?>"></h2></td></tr>

<tr><td><h2> Email:</td>  
<td><input type="text" name="txtMail" value="<?php echo $customer[0]['customer_email'];?>"></h2></td></tr>

<tr><td><h2> Login ID:</td>   
<td><input type="text" name="txtLid" value="<?php echo $customer[0]['customer_loginid'];?>"></h2></td></tr>

<tr><td><h2> Mobile:</td>   
<td><input type="text" name="txtMobile" value="<?php echo $customer[0]['customer_mobile'];?>"></h2></td></tr>

<tr><td><h2> Password:</td>   
<td><input type="text" name="txtPass" value="<?php echo $customer[0]['customer_pass'];?>"></h2></td></tr>

<tr><td><h2> Address:</td></h2>  
<td><textarea name="txtAddress" cols="30" rows="4"><?php echo $customer[0]['customer_Address'];?></textarea></td></tr>

<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnUpdate" value="Update"></td></tr>

</form>
</table>

</body>
</html>