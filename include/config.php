<?php
define("HOST","localhost");
define("Saleem","root");
define("saleem719","");
define("dbdamas","dbdamas");

function Connect(){
	
	$con = mysqli_connect(HOST,Saleem,saleem719,dbdamas);
	return $con;
	
	}
?>