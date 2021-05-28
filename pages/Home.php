<?php
if(!isset($_SESSION['user']))
{
        echo"<script>window.location='index.php?mlink=Mainlogin.php' </script>";
	
	}
	
else{
	
	$fn = $_SESSION['fname'];
	$ln = $_SESSION['lname'];
	}
?>

<div class="SearchBar">
<div class="user"><img src="images/icon.png" height="38" width="80"></div>
<div class="UserIcon"><?php  echo "<font color='#000000'>".ucfirst($fn).'&nbsp;'. $ln."</font>"?></div>
<div class="logout">
<a href="index.php?mlink=logout.php"><img src="images/lout.jpg" height="37" width="120"></a>
</div>
</div>

  <br><hr><br><br> 
  
 <div class="center_title_bar">CATEGORIES</div>  <br> <br><br><br> 

  
<?php  
$c = get_category();
foreach($c as $category)
{
	echo " <div class='bottom-div'>";
	echo "<div class='heading'>".$category['category_name']."<br></div>";
	echo "<div class='thumbnail'><a href=index.php?mlink=Products.php&categ_id=".$category['category_id'].">
	<img height=100% width=100% src=".$category['category_image']." ></a><br></div>";
	echo "<div class='detail'><a href=index.php?mlink=Products.php&categ_id=".$category['category_id'].">See more</a><br></div>";
	
	echo"</div>";
	}
	?>
    

		
   
   
  