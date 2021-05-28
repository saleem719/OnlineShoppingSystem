
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<table>
<form action="index.php?alink=amenus/savemenu.php" method="post">
<tr><td><h2> Menu ID:</td>
<td><input type="text" name="txtAid" readonly size="5"> </h2></td></tr>

<tr><td><h2> Menu Name:</td>  
<td><input type="text" name="txtMname"></h2></td></tr>

<tr><td><h2> Menu Link:</td>        
<td><input type="text" name="txtMlink" ></h2></td></tr>

<tr>
<td><h2>Menu Status:</td>  
<td><select name="txtMstatus">
    <option value="1" selected>Active</option>
    <option value="0">Inactive</option>
        </select></h2></td></tr>
        
<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnAdd" value="Add New Menu"></td></tr>

</form>
</table>



</body>
</html>