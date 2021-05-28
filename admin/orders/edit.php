<h2><b><center>Manage Order Status</center></b></h2>
<?php
if(isset($_GET['ordid']))
{
	$od = $_GET['ordid'];
	$menu = get_a_order($od);
}
?>
<table>
<form action="index.php?alink=orders/update.php" method="post">
<tr>
<td>ID:</td>
<td><input type="text" name="txtId" size="8" readonly value="<?php echo $menu[0]['ord_id'];?>"></td>
</tr>
<tr><td>Status:</td>
<td><select name="txtStatus">
  <?php
			  if($menu[0]['remarks']=='Pending')
			  {
		    ?>
            
<option value="Pending" selected>Pending</option>
<option value="Approved">Approved</option>
 <?php
			  }
		else
		{
			?>
       <option value="Pending">Pending</option>
       <option value="Approved"  selected>Approved</option>
		<?php
		}
		?>
        </select>
		</td></tr>

<tr><td>&nbsp </td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnUpdate" value="Update"></td></tr>

</form>
</table>