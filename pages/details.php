<?php
session_start();
?>

<html>
<head>
<title>Products Details</title>
</head>
<body>

<?php
if(!isset($_SESSION['user']))
{
        echo"<script>window.location='index.php?mlink=Mainlogin.php' </script>";
	
	}
else{

?>

<div class="SearchBar"><!------ Search products start------------->
<?php
include 'sub/search.php';
?> 
        
</div> <!--  end search products -->
<br><br><br><br>
<?php 
if(isset($_GET['categ_id']))
{
	$cid=$_GET['categ_id'];
	$nid = get_products($cid);
	

foreach($nid as $necklace)
{
	echo "<div class='bottom-div'>";
	echo "<div class='heading'>".$necklace['product_name']."<br></div>";
	echo "<a href='index.php?mlink=prodetails.php&pid=$necklace[product_id]'>
	      <img height='170' width='150' src=".$necklace['image']."></a><br>";
	echo "<div class='detailprice'> Rs :".$necklace['price']."<br></div>";
	echo "<div class='getDetail'><a href='index.php?mlink=prodetails.php&pid=$necklace[product_id]'>Detail</a></div>";
	echo "<button name='btnAddCard'  class='button' id=".$necklace['product_id']." onClick='addProductToCart($pid)'>Add to Cart</button>";
	echo "</div>";
	
	}
}


}
?>

</body>
</html>