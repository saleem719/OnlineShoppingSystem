<?php 
	include("functions.php");
	$id = $GET['id'];
	if($id){
		addToCart($id);
	}
?>