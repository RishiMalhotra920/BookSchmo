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
	

	if(isset($_POST["submit"])){
		//Setting form inputs to variables for later use
		$isbn = mysqli_real_escape_string($conn,$_POST["isbn"]);
		$title = mysqli_real_escape_string($conn,$_POST["title"]);
		$author = mysqli_real_escape_string($conn,$_POST["author"]);
		$genre = mysqli_real_escape_string($conn,$_POST["genre"]);
		$description = mysqli_real_escape_string($conn,$_POST["description"]);
		$price = mysqli_real_escape_string($conn,$_POST["price"]);

		//File variables set from the FILE superglobal
		$userFileName = $_FILES["file"]['name'];
		$fileTmpName = $_FILES["file"]['tmp_name'];
		$fileSize = $_FILES["file"]['size'];
		$fileError = $_FILES["file"]['error'];
		$fileType = $_FILES["file"]['type'];

		//Splits the file name into image name and extension
		$fileExt = explode('.', $userFileName);

		//Takes the second part of the file name (the extension) and converts to lowercase
		$fileActualExt = strtolower(end($fileExt));

		//The allowed image formats
		$allowedFileFormats = array("jpg", "jpeg", "png");

		//Form validation

		//Empty errors array stores all the errors within the form submission
		$_SESSION["listnewbookErrors"] = array();
		$listnewbook = True;

		//Validating empty form elements
		if (empty($isbn) || empty($title) || empty($author) || empty($genre) || empty($description)|| empty($price) ){
			array_push($_SESSION["listnewbookErrors"],"Missing Fields");
			$listnewbook = False;
		}
		//Validating invalid characters
		if(!preg_match("/^[0-9]*$/", $isbn)){
			array_push($_SESSION["listnewbookErrors"],"Invalid characters");
			$listnewbook = False;
		}
		//Validating isbn numbers thats are not 13 characters.
		if(strlen($isbn) !== 13){
			array_push($_SESSION["listnewbookErrors"],"ISBN has to be 13 characters");
			$listnewbook = False;
		}
		//if user-defined isbn already exists in the database, then a new entry cannot be added.
		if(in_array($isbn,$isbnArray)){
			array_push($_SESSION["listnewbookErrors"],"A book with the same ISBN already exists on the website.");
			$listnewbook = False;
		}
		//Validating invalid file formats
		if(!in_array($fileActualExt, $allowedFileFormats)){
			array_push($_SESSION["listnewbookErrors"],"Can only upload files of JPG, JPEG and PNG format");
			$listnewbook= False;
		}

		//Validating other errors
		if($fileError !== 0){
			array_push($_SESSION["listnewbookErrors"],"There was an error upload your file");
			$listnewbook= False;
		}
		//Validating file sizes greater than 500KB
		if ($fileSize > 1000000){
			array_push($_SESSION["listnewbookErrors"],"Your file is too big!");
			$listnewbook= False;
		}

		
		if($listnewbook==False){//If listnewbook is a failure
			//Add all user details to the listnewbookDetails inside the Sessions superglobal
			//This is done so that user input is not lost if something is entered wrong
			$_SESSION["listnewbookDetails"] = array();
			array_push($_SESSION["listnewbookDetails"],$isbn,$title,$author,$genre,$description,$price);
			//exit();
			//Redirecting the user to the listnewbook page if there are errors in the listnewbook form.
			header("Location: ../listnewbook.php?listnewbook=failure");
			exit();
		}else{//If the listnewbook is a success

			//Once the book is listnewbooked, the error array is re-instantiated
			unset($_SESSION["listnewbookErrors"]);
			//unset($_SESSION["listnewbookDetails"]);
			//Generates a unique number
			$imageName = uniqid().".".$fileActualExt;
			$fileDestination = "../../bookImages/".$imageName;
			//Moves the listnewbooked file from temporary location to permanent location
			move_uploaded_file($fileTmpName,$fileDestination);

			//Insert the user details into the database using SQL
			$sql="INSERT INTO books(isbn,author,title,description,genre,imageName)
			VALUES('$isbn','$author','$title','$description','$genre','$imageName')";
			mysqli_query($conn, $sql);
			$accountID = $_SESSION['accountDetails']['id'];
			$sql = "INSERT INTO listings(booksID,sellerID,price,onSale) VALUES ('$isbn',$accountID,$price,1);";
			mysqli_query($conn, $sql);
			//Redirect users to the home page

			header("Location: ../listnewbook.php?listnewbook=success");
			exit();
		}

	}
?>
