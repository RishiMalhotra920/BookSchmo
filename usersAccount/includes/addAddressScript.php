<?php
	include "connection.php";
	$accountsID = $_SESSION["accountDetails"]['id'];
	$addressLine1 = $_POST['addressLine1'];
	$addressLine2 = $_POST['addressLine2'];
	$addressLine3 = $_POST['addressLine3'];
	$country = $_POST['country'];

	$_SESSION["addressErrors"] = array();
	$addAddress = True;
	//Validating empty form elements
	if (empty($addressLine1) || empty($country)){
		array_push($_SESSION["addressErrors"],"Missing Fields");
		$addAddress = False;
	}
	if($addAddress == False){//If addAddress is False return errors
		$_SESSION["addressDetails"] = array();
		array_push($_SESSION["addressDetails"],$addressLine1,$addressLine2,$addressLine3,$country);
		header("Location: ../addAddress.php?insertaddress=failure");
		exit();
	}else{//If addAddress is True, then add the address to the database
		$sql = "INSERT INTO address(accountsID,addressLine1,addressLine2,addressLine3,country)
			VALUES('$accountsID','$addressLine1','$addressLine2','$addressLine3','$country');";
		mysqli_query($conn,$sql);
		header("Location: ../addAddress.php?insertaddress=success");
	}




?>