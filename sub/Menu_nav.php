<ul class="menu">
<?php 
$menus = get_active_menus(); 
foreach($menus as $menu)
 {
	echo "<li><a href=index.php?mlink=".$menu['mLink']."><span>".$menu['mName']."</span></a></li>";
	echo " <li class='divider'></li>";
     }
?>
<li><a href="index.php?alink=adminpanel.php"><span>Admin</span></a></li>
</ul>