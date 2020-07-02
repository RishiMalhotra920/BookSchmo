<?php 
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="bookschmo";

	$conn=mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//If the person has logged in with a creator account, only then he will be allowed to access the creator pages
	//This is placed in the connection file, because all the creator pages and the creators scripts pages include the connection file.
	//So none of these pages can be accessed without logging in with a creator's account.
	if(!isset($_SESSION["accountDetails"]["accountType"])){
		header("Location: ../usersAccount/login.php");
	}else{
		if($_SESSION["accountDetails"]["accountType"] != "creator"){
			header("Location: ../usersAccount/index.php");
		}
	}

?>