<h2><b><center>Manage Orders</center></b></h2>
<?php 
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?></br></br></br>


<table width="97%" border="1">
<tr> 
<th> Order ID</th>
<th> Customer Name</th>
<th> Address</th>
<th> Mobile</th>
<th> Product</th>
<th> Image</th>
<th> Qty</th>
<th> Price</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$orders=get_all_orders();
foreach($orders as $order)
{
	echo"<tr>";
	echo"<td>".$order['id']."</td>";
	echo"<td>".$order['customer_firstname']."</td>";
	echo"<td>".$order['customer_Address']."</td>";
	echo"<td>".$order['customer_mobile']."</td>";
	echo"<td>".$order['product_name']."</td>";
	echo"<td><img height=100 width=90 src=".$order['image']."></td>";
	echo"<td>".$order['qty']."</td>";
	echo"<td>".$order['total_amount']."</td>";
	echo"<td><a href=index.php?alink=orders/delete.php&ordid=".$order['id'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
<br> 
<div class="adminBG">  <a href="index.php?alink=adminpanel.php">Admin panel</a></div> 