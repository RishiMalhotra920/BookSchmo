<?php
	include "connection.php";
	//set up a shopping cart in the session


	array_push($_SESSION['mycart'],$_POST);
	header("Location: ../mycart.php");
?>