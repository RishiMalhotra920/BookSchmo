<?php
	include "connection.php";
	//print_r($conn);
	$userID = $_SESSION["accountDetails"]['id'];
	$orderTotal = $_SESSION['mycartinfo']['orderTotal'];
	$addressID = $_SESSION['mycartinfo']['selectedAddressID'];
	//print_r($_SESSION['mycart']);

	//echo $orderTotal;

	//Inserts the addressID and orderTotal into the orders table
	$sql = "INSERT INTO orders (userID,addressID,orderTotal)
		VALUES ($userID,$addressID,$orderTotal);";
	mysqli_query($conn,$sql);

	//Selects the last inserted id from the orders table
	$sql = "SELECT LAST_INSERT_ID() as ordersID FROM orders;";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$ordersID = $row['ordersID'];

	//Inserts the ordersID and listingsID and quantity into the orderitems table
	foreach ($_SESSION['mycart'] as $subarray){
		$listingsID = $subarray['listingsID'];
		$quantity = $subarray['quantity'];
		$sql = "INSERT INTO orderitems (ordersID, listingsID, quantity)
		VALUES ($ordersID,$listingsID,$quantity);";
		echo $sql;
		mysqli_query($conn,$sql);
	}
	$_SESSION['mycart'] = [];
	$_SESSION['mycartinfo'] = [];
	header("Location: ../orderplaced.php");


	//print_r($row);
	// echo $result;
	// print_r($result);
?>