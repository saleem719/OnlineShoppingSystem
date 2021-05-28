<?php
error_reporting(0);
 include('../include/config.php');
 include('../include/functions.php');
  ?>
<table style="font-size:12px; text-align: center; " border="1px"> 
		<th>
			Product
		</th>
			<th>
			Qty
		</th>
			<th>
			Price
		</th>
		<th>
			X
		</th>
<?php
$slc = "SELECT * FROM tempOrder";
$cart = run_query($slc);

if(sizeof($cart) == 0){
	echo "<tr> <td colspan='6'> Your Cart is Empty </td> </tr>";
} 
else {
$totalAmount = 0;
for($i= 0; $i < sizeof($cart); $i++){
	 $productID = $cart[$i]['ProductId'];
	?>
	<tr>
	<td>
		
		<?php echo $cart[$i]['ProductName']; ?>
	</td>	

		<td>
			<?php echo $cart[$i]['Qty']; ?>
							
		</td>

		<td>
			
			<?php echo $cart[$i]['Price']; ?>
			
		</td>

		<td>
			<input type="button" onclick="removeItem('<?php echo $productID ?>')" value="X" title="remove this item?">
		</td>

	
	</tr>

			 	<?php
			 		  $total = $cart[$i]['Qty'] * $cart[$i]['Price']; 
			 		  $totalAmount = $totalAmount + $total;

				?>
				

	<?php 
}


?>
	<tr>
		<td colspan="10"> <br>  </td>
	</tr>

		<tr>
			<th> Total:  </th> 
			<th colspan="3"> <?php echo $totalAmount; ?>	</th>
		</tr>

<th>
	<td colspan="7">
		<input type="button" onclick="confirmMyOrder()" value="Confirm My Order" title="Confirm my order">


	</td>
</th>
	<?php 
}


?>

</table>
