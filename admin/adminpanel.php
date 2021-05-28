<?php 
if(!isset($_SESSION['admin']))
{
	echo" <script> window.location='index.php?alink=adminlogin.php'</script>";
}
else
{
	?>
<div class="SearchBar">
<font color="black"> Welcome: <?php echo ucfirst($_SESSION['admin'])?></font>
<div class="logout">
<a href="index.php?alink=adminlogout.php"><img src="images/lout.jpg" height="37" width="120"></a>
</div>  
</div><br><br> <br><hr><br> 

<center><h3><b>Admin Panel </h3></b></center>
<h2></h2>
<div class="AdminTask">
<ul style="list-style:url(images/checked.png)">
<li><h3><a href="index.php?alink=amenus/manage.php"> Manage Menus </a></h3></li>
<li><h3><a href="index.php?alink=acategories/manage.php"> Manage catergories  </a></h3></li>
<li><h3><a href="index.php?alink=aproducts/manage.php"> Manage products</a></h3></li>
<li><h3><a href="index.php?alink=acustomer/manage.php"> Manage customer </a></h3></li>
<li><h3><a href="index.php?alink=aadvertisment/manage.php"> Manage Advertisment</a></h3></li>
<li><h3><a href="index.php?alink=orders/manage.php"> Manage orders</a></h3></li>
<li><h3><a href="index.php?alink=aadmin/manage.php"> Manage Admin </a></h3></li>
</ul>
</div>

<?php 
}
?>