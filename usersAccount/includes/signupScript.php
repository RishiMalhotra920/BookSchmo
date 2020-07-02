<?php
	include "connection.php";

	$sql = "SELECT email FROM accounts";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	$emailArray = array();
	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			$emailArray[] = $row['email'];
		}
	}
	//Setting variables in the POST superglobal to variables in the script for later use
	$firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
	$lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$dateOfBirth = mysqli_real_escape_string($conn,$_POST["dateOfBirth"]);
	$password = mysqli_real_escape_string($conn,$_POST["password"]);
	$confirmPassword = mysqli_real_escape_string($conn,$_POST["confirmPassword"]);
	$accountType = mysqli_real_escape_string($conn,$_POST["accountType"]);

	//Hashing the password
	$hashPassword = password_hash($password, PASSWORD_DEFAULT);

	//Form validation

	//Empty errors array stores all the errors within the form submission
	$_SESSION["signupErrors"] = array();
	$signup = True;
	//Validating empty form elements
	if (empty($firstName) || empty($lastName) || empty($dateOfBirth) || empty($email) || empty($password)){
		array_push($_SESSION["signupErrors"],"Missing Fields");
		$signup = False;
	}
	//Validating invalid characters
	if(!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)){
		array_push($_SESSION["signupErrors"],"Invalid characters");
		$signup = False;
	}
	//Validating invalid email entries
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		array_push($_SESSION["signupErrors"],"Invalid email");
		$signup = False;
	}

	//if user-defined isbn already exists in the database, then a new entry cannot be added.
	if(in_array($email,$emailArray)){
		array_push($_SESSION["signupErrors"],"An account with the same email already exists on the website.");
		$signup = False;
	}

	//Validating the case when passwords don't match
	if($password != $confirmPassword){
		array_push($_SESSION["signupErrors"],"Passwords don't match");
		$signup = False;
	}
	
	if($signup==False){//If signup is a failure
		//Add all user details to the signupDetails inside the Sessions superglobal
		//This is done so that user input is not lost if something is entered wrong
		$_SESSION["signupDetails"] = array();
		array_push($_SESSION["signupDetails"],$firstName,$lastName,$email,$dateOfBirth);
		//print_r($_SESSION["signupDetails"]);
		//exit();
		//Redirecting the user to the signup page if there are errors in the signup form.
		header("Location: ../signup.php?signup=failure");
		exit();
	}else{//If the signup is a success
		unset($_SESSION["signupDetails"]);
		unset($_SESSION["signupErrors"]);
		//Insert the user details into the database using SQL
		$sql="INSERT INTO accounts(firstName,lastName,email,dateofBirth,hashPassword,accountType)
		VALUES('$firstName','$lastName','$email','$dateOfBirth','$hashPassword','$accountType')";
		mysqli_query($conn, $sql);

		//User should be logged in once he signs up
		$sql = "SELECT id FROM accounts 
			WHERE email = '$email'";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);


		$_SESSION["accountDetails"] = []; 
		$_SESSION["accountDetails"]['id'] = $row['id'];
		$_SESSION["accountDetails"]['firstName'] = $firstName;
		$_SESSION["accountDetails"]['lastName'] = $lastName;
		$_SESSION["accountDetails"]['email'] = $email;
		$_SESSION["accountDetails"]['dateOfBirth'] = $dateofBirth;
		$_SESSION["accountDetails"]['accountType'] = $accountType;

		print_r($_SESSION);
		//Redirect users to the home page 
		header("Location: ../index.php?signup=success");
		exit();
	}
?>