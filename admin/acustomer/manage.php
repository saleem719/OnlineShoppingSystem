<?php
echo" <h2><b><center> Manage customer</center></b></h2>";

if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?></br></br></br>

<div class="adminBG">  <a href="index.php?alink=adminpanel.php">Admin panel</a></div></br></br>
<table width="95%" border="1" cellspacing="3" cellpadding="2">
<tr> 
<th> ID</th>
<th> First Name </th>
<th> Last Name </th>
<th> Email</th>
<th> Mobile</th>
<th> Address</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$user=get_customer();
foreach($user as $customer)
{
	echo"<tr>";
	echo"<td>".$customer['customer_id']."</td>";
	echo"<td>".$customer['customer_firstname']."</td>";
	echo"<td>".$customer['customer_lastname']."</td>";
	echo"<td>".$customer['customer_email']."</td>";
	echo"<td>".$customer['customer_mobile']."</td>";
	echo"<td>".substr($customer['customer_Address'],0,150)."</td>";
	echo"<td><a href=index.php?alink=acustomer/edit.php&cid=".$customer['customer_id'].">Edit</td>";
	echo"<td><a href=index.php?alink=acustomer/delete.php&cid=".$customer['customer_id'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
</body>
</html>