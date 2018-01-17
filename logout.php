<?php 
	include 'inicio.php';
	$username="";
	$password="";
	session_destroy();
	$_SESSION["session_username"]="";
	$url='inicio.php';
	header("Location: $url");

?>
