<?php
	include "connection.php";

	//If the user is logged in as a creator, only then he will have access to the page
	
	$searchInput = $_POST['searchInput']; 
	$sql = "SELECT isbn,author,title,description,genre, imageName FROM books
		WHERE title='$searchInput'
		OR author='$searchInput'
		OR genre='$searchInput';";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$_SESSION['searchResults'] = array();
	if($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
			
			
			$_SESSION['searchResults'][] = $row;

		}
	}
	header("Location: ../listexistingbook.php");

?>