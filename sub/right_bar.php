<div class="shopping_cart"> <!-- Main div of shoping cart start-->
<div class="cart_title">Shopping cart</div>
<div id="sjWork"> 
<?php
   include 'sub/myBasket.php';
   ?> 
</div>
</div><br><br><hr><br>                          <!-- Main of shoping cart div end-->
      
<div class="title_box">CATEGORIES  </div><br>    <!-- Right side categories start-->   
<ul class="right_categories">
<?php 
$c = get_category();
foreach($c as $category)
 {
	echo "<li class='list1' id='".$category['category_id']."'>".$category['category_name']."</li><br>";
		}
		
	 ?>
</ul>                                             <!-- endo of side categories start-->
       
      
<div class="title_box">Advertisment</div>
<div class="border_box">
<?php 
 $adv = get_advertisements();
 foreach($adv as $ads)
 {
	 ?>
    <a href="<?php echo $ads['Link']?>" target="_blank"><img src="<?php echo $ads['Image']?>" height="260" width="194"/></a>
	<?php
     
	  }
?>
   </div> 