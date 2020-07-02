<?php
	include "connection.php";
	//The sql commands take all the isbns and store them in an array.
	$sql = "SELECT isbn FROM books";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	$isbnArray = array();
	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			$isbnArray[] = $row['isbn'];
		}
	}
	$accountID = $_SESSION['accountDetails']['id'];

	
	if(isset($_POST["submit"])){


		//Setting form inputs to variables for later use
		$isbn = mysqli_real_escape_string($conn,$_POST["isbn"]);
		$price = mysqli_real_escape_string($conn,$_POST["price"]);

		//Form validation
		//Empty errors array stores all the errors within the form submission
		$_SESSION["listexistingbookErrors"] = array();
		$listexistingbook = True;

		//Validating empty form elements
		if (empty($isbn) || empty($price)){
			array_push($_SESSION["listexistingbookErrors"],"Missing Fields");
			$listexistingbook = False;
		}
		//Validating invalid characters
		if(!preg_match("/^[0-9]*$/", $isbn)){
			array_push($_SESSION["listexistingbookErrors"],"Invalid characters");
			$listexistingbook = False;
		}
		//Validating isbn numbers thats are not 13 characters.
		if(strlen($isbn) !== 13){
			array_push($_SESSION["listexistingbookErrors"],"ISBN has to be 13 characters");
			$listexistingbook = False;
		}

		//if user-defined isbn already exists in the database, then a new entry cannot be added.
		if(!in_array($isbn,$isbnArray)){
			array_push($_SESSION["listexistingbookErrors"],"The book does not exist");
			$listexistingbook = False;
		}

		
		if($listexistingbook==False){//If listexistingbook is a failure
			//Add all user details to the listexistingbookDetails inside the Sessions superglobal
			//This is done so that user input is not lost if something is entered wrong
			$_SESSION["listexistingbookDetails"] = array();
			array_push($_SESSION["listexistingbookDetails"],$isbn,$price);

			//Redirecting the user to the listexistingbook page if there are errors in the listexistingbook form.
			header("Location: ../listexistingbook.php?listing=failure");
			exit();

		}else{//If the listexistingbook is a success

			$sql = "SELECT id
				FROM listings
				WHERE sellerID = $accountID AND booksID = $isbn AND onSale = 1";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$row = mysqli_fetch_assoc($result);
			$listingIDChange = $row['id'];
			
			//Add the ids of the rows where the same book has already been listed by the seller and are on sale
			if($resultCheck > 0){
				$sql = "UPDATE listings
					SET onSale = 0
					WHERE id = $listingIDChange";
				mysqli_query($conn,$sql);
			}
			//Insert the user details into the database using SQL
			$accountID = $_SESSION['accountDetails']['id'];
			$sql = "INSERT INTO listings(booksID,sellerID,price,onSale) 
				VALUES ('$isbn',$accountID,$price,1);";
			mysqli_query($conn, $sql);


			//Once the book is listexistingbooked, the error array is re-instantiated
			unset($_SESSION["listexistingbookErrors"]);

			//Redirect users to the home page
			header("Location: ../listexistingbook.php?listing=success");
			exit();
		}
	}

?>
