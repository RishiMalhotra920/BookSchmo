<?php
	include "connection.php";
	$id = $_GET["id"];
	$sql = "DELETE FROM address 
		WHERE id = $id;";
	mysqli_query($conn,$sql);
	echo $sql;
	header("Location: ../viewAddress.php");
	exit();

?>