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
        
    </div> <!-- end search products -->
<br><br><br><br>



<?php 


if(isset($_GET['categ_id']))
{
	$cid=$_GET['categ_id'];
	$nid = get_products($cid);

echo "<div class=mainProducts>";	

foreach($nid as $necklace)
{
	$pid = $necklace['product_id'];
	echo "<div class='bottom-div'>";
	echo "<div class='heading'>".$necklace['product_name']."<br></div>";
	echo "<a href='index.php?mlink=prodetails.php&pid=$necklace[product_id]'>
	      <img height='170' width='150' src=".$necklace['image']."></a><br>";
	echo "<div class='detailprice'> Rs :".$necklace['price']."<br></div>";
	echo "<div class='getDetail'><a href='index.php?mlink=prodetails.php&pid=$necklace[product_id]'>Detail</a></div>";
	echo "<button name='btnAddCard'  class='button' id=".$necklace['product_id']." onClick='addProductToCart($pid)'>  Add to cart </button>";
	echo "<br></div>";
	
	}
	echo "<br></div>";
	
}


?>
<div class='ourProducts'> Our Products </div>

<?php 
echo "<div class=mainProducts>";
$pro = get_all_products();

foreach($pro as $proName)
{
	
	echo "<div class='bottom-div' data-value='".$proName['category_id']."'> ";
	echo "<div class='heading'>".$proName['product_name']."<br></div>";
	echo "<a href='index.php?mlink=prodetails.php&pid=$proName[product_id]'>
	      <img height='170' width='150' src=".$proName['image']."></a><br>";
	echo "<div class='detailprice'> Rs :".$proName['price']."<br></div>";
	$pid = $proName['product_id'];
	echo "<div class='getDetail'><a href='index.php?mlink=prodetails.php&pid=$proName[product_id]'>Detail</a></div>";
	echo "<button name='btnAddCard'  class='button' id=".$proName['product_id']." onClick='addProductToCart($pid)'> Add to Cart</button>";
	?>
	

	<?php 
	echo "</div>";
	
	
	
	}
	
	echo "</div>";
}


?>

<script>
function addProductToCart(id){
        $.ajax({
            url:"include/addToCart.php",  
            type:"GET",
            data:"id="+id,
            success:function(content) {
			loadCart();
  		}
     });
    	
}


function loadCart(){
			$("#thankYouMsg").html(" ");
	        $.ajax({
            url:"pages/myBasket.php",  
            type:"GET",
            success:function(content) {			
				$("#sjWork").html(content);
		}
     });

}



function removeItem(id){	
	        $.ajax({
            url:"include/removeItem.php",  
            type:"GET",
             data:"id="+id,
            success:function(content) {
				loadCart();
			}
     });

}

function confirmMyOrder(){	
	        $.ajax({
            url:"include/post_order.php",  
            type:"GET",
            success:function(content) {
            console.log(content);
			window.location.href='index.php?mlink=Home.php';
			//loadCart();
			$("#thankYouMsg").html("Your Order Has Been Submitted. Thank You");
			
			// redicret to order history page.

		}
     });

}



</script>


