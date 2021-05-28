<div class="center_title_bar">OUR PRODUCTS</div>  <br> <br><br><br> 
<h2>Your search result </h2>
<?php 
if(isset($_POST['btnSrchName']))
{
	$na =$_POST['txtName'];
	$pro = searchName($na);

foreach($pro as $proName)
{
	echo "<div class='bottom-div'>";
	echo "<div class='heading'>".$proName['product_name']."<br></div>";
	echo "<img height='170' width='150' src=".$proName['image']."><br>";
	echo "<div class='detail'> Rs :".$proName['price']."<br></div>";
	echo "<div class='getDetail'><a href='index.php?mlink=prodetails.php&pid=$proName[product_id]'>Detail</a></div>";
	echo "<button name='btnAddCard'  class='button' id=".$proName['product_id'].">Add to Cart</button>";
	echo "</div>";
	
	}

}

if(isset($_POST['btnSrchPrice']))
{
	$na =$_POST['txtprice'];
	$nid = searchPrice($na);

foreach($nid as $proName)
{
	echo "<div class='bottom-div'>";
	echo "<div class='heading'>".$proName['product_name']."<br></div>";
	echo "<img height='170' width='150' src=".$proName['image']."><br>";
	echo "<div class='detail'> Rs :".$proName['price']."<br></div>";
	echo "<div class='getDetail'><a href='index.php?mlink=prodetails.php&pid=$proName[product_id]'>Detail</a></div>";
	echo "<button name='btnAddCard'  class='button' id=".$proName['product_id'].">Add to Cart</button>";
	echo "</div>";
	
	}
}
else{
	header("ocation:index.php?mlink=noitem.php");
		}



?>