
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php echo include 'sub/logout_bar.php';?>
<br><br><br><hr><br>

</div>
<?php
if(isset($_GET['menuid']))
{
	$m = $_GET['menuid'];
	$menu = get_a_menus($m);
}
?>
<table>
<form action="index.php?alink=amenus/update.php" method="post">
<tr><td><h2> Menu ID:</td>
<td><input type="text" name="txtMid" readonly size="5" value="<?php echo $menu[0]['mId'];?>"></h2></td></tr>

<tr><td><h2> Menu Name:</td>  
<td><input type="text" name="txtMname" value="<?php echo $menu[0]['mName'];?>"></h2></td></tr>

<tr><td><h2> Menu Link:</td>   
<td><input type="text" name="txtMlink" value="<?php echo $menu[0]['mLink'];?>"></h2></td></tr>

<tr><td><h2>Menu Status:</td>  
<td><select name="txtMstatus">
  <?php
			  if($menu[0]['mStatus']==1)
			  {
		    ?>
            
<option value="1" selected>Active</option>
<option value="0">Inactive</option>

  <?php
			  }
		else
		{
			?>
       <option value="1">Active</option>
       <option value="0"  selected>Inactive</option>
		<?php
		}
		?>
        </select></h2></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnUpdate" value="Update"></td></tr>

</form>
</table>

</body>
</html>