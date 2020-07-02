<?php
	include "connection.php";
	$_SESSION["mycartinfo"]['selectedAddressID'] = $_GET['id'];
	header("Location: ../checkout.php");

?>