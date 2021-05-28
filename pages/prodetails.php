<html>
<head>
<meta charset="utf-8">
<title>Products Details</title>
<script>
	$(document).ready(function() {
		
		
		$(".zoom").hover(function(){
			$(this).animate({height:'410px',width:'310px'},3000);
			$("h3").hide(10);
		},
		
		function(){
			$("h3").show(10);
			$(this).animate({height:'300px',width:'230px'},2000);
			
		});
        
    });
</script>
</head>
<body>
<div class="Prodetails">
<div class="center_title_bar">Product Details</div>  <br>
<br><br><br><br>

<?php 
if(isset($_GET['pid']))
{
	$n= $_GET['pid'];
	$pro = get_a_product($n);	
	foreach ($pro as $product)
 {
	 $pid = $product['product_id'];
	 echo "<div class='detailImg'>";
	 echo "<h3>Zoom +</h3><img height=300 width=230 src=".$product['image']."  class='zoom'></div>";
	 echo "<div class='detailHeading'>";
	 echo $product['product_name']."<hr><br>";
	 echo "<div class='productDet'>";
	 echo "<u>".$product['product_name']."</u><br><br>";
	 echo "<b>Rs:<font color=#CC0000>".$product['price']."</font></b><br><br>";
	 echo "<button name='btnAddCard'  class='button' id=".$product['product_id']." onClick='addProductToCart($pid)'>  Add to cart </button>";
	 echo "</div>";
	 
	 echo "</div>";


	
	
	}


}

?>

</div>
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


</body>
</html>