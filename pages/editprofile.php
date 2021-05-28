<?php
if(isset($_GET['btnEdit']))
{
	$c = $_GET['btnEdit'];
	$customer = get_a_customer($c);
}
?>

<table>
<form action="index.php?alink=acustomer/update.php" method="post">
<tr><td><h2> ID:</td>
<td><input type="text" name="txtId" readonly size="5" value="<?php echo $customer[0]['customer_id'];?>"></h2></td></tr>

<tr><td nowrap><h2> First Name:</td>
<td nowrap><input type="text" name="txtFname"  value="<?php echo $_SESSION['fname'];?>"></h2></td></tr>

<tr><td nowrap><h2> Last Name:</td>
<td nowrap><input type="text" name="txtLname"  value="<?php echo $_SESSION['lname'];?>"></h2></td></tr>

<tr><td><h2> Email:</td>  
<td><input type="text" name="txtMail" value="<?php echo $_SESSION['mail'];?>"></h2></td></tr>

<tr><td><h2> Login ID:</td>   
<td><input type="text" name="txtLid" value="<?php echo  $_SESSION['loginid'];?>"></h2></td></tr>

<tr><td><h2> Mobile:</td>   
<td><input type="text" name="txtMobile" value="<?php echo $_SESSION['mobile'];?>"></h2></td></tr>

<tr><td><h2> Password:</td>   
<td><input type="text" name="txtPass" value="<?php echo $_SESSION['pass'];?>"></h2></td></tr>

<tr><td><h2> Address:</td></h2>  
<td><textarea name="txtAddress" cols="30" rows="4"><?php echo $_SESSION['address'];?></textarea></td></tr>

<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnUpdate" value="Update"></td></tr>

</form>
</table>