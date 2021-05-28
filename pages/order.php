<?php 

include '../include/config.php';
include '../include/functions.php';

$cart = array();

  if(isset($_POST['productId'])){
		$ind = count($cart) + 1;
		$cart[$ind] = $_POST['productId'];
		print_r(count($cart));
  }
	
?>