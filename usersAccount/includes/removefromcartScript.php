<?php
	include "connection.php";

	//As values may be deleted from anywhere in the array the array_values function re-indexes the array
	$_SESSION['mycart'] = array_values($_SESSION['mycart']);


	$index = $_GET['index'];
	print_r($_SESSION['mycart']);
	unset($_SESSION['mycart'][$index]);
	print_r($_SESSION['mycart']);
	header("Location: ../mycart.php");

?>