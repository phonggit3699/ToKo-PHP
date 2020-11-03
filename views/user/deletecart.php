<?php
	session_start();
	$id = $_GET['id'];
	echo "<pre>";
	// print_r($_SESSION['cart']);
	echo $id;
	unset($_SESSION['cart'][$id]);
	header("location:cart.php");
?>