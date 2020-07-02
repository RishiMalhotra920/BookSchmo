<?php
	include "connection.php";
	//Setting variables in the POST superglobal to variables in the script for later use
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$passwordInput = mysqli_real_escape_string($conn,$_POST["password"]);


	//SQL Query returns the hash password in the database for the email with 
	//which the user logs in.
	$sql = "SELECT id,firstName,lastName,email,dateOfBirth,hashPassword,accountType FROM accounts WHERE email = '$email'";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	$passwordVerified = password_verify($passwordInput,$row['hashPassword']);

	//Empty errors array stores all the errors within the login
	$_SESSION["loginErrors"] = array();
	$login = True;

	//Validating empty email
	if (empty($email)){
		array_push($_SESSION["loginErrors"],"Please enter an email");
		$login = False;
	}

	//Validating invalid email. If no results are returned, then an account is not registered with the email.
	if($resultCheck == 0){
		array_push($_SESSION["loginErrors"],"An account with this email does not exist");
		$login = False;
	}

	//Validating passwords that do not match
	if (!$passwordVerified){
		array_push($_SESSION["loginErrors"],"Incorrect password");
		$login = False;

	}

	
	if($login==False){
		header("Location: ../login.php?login=failure");
		exit();
	}else{//If the login is a success
		unset($_SESSION["loginErrors"]);
		$_SESSION["accountDetails"] = []; 
		$_SESSION["accountDetails"]['id'] = $row['id'];
		$_SESSION["accountDetails"]['firstName'] = $row['firstName'];
		$_SESSION["accountDetails"]['lastName'] = $row['lastName'];
		$_SESSION["accountDetails"]['email'] = $row['email'];
		$_SESSION["accountDetails"]['dateOfBirth'] = $row['dateOfBirth'];
		$_SESSION["accountDetails"]['accountType'] = $row['accountType'];
		$_SESSION['mycart'] = [];

		if($row['accountType'] == "user"){
			header("Location: ../index.php?login=success");
			exit();
		}elseif ($row['accountType'] == "creator") {
			header("Location: ../../creatorsAccount/creatorsIndex.php?login=success");
			exit();
		}

	}

	
	

// ?>