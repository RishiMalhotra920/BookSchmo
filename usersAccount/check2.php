<?php
	include "includes/header.php";
	
	$sql = "SELECT isbn,title,author,description,genre,imagePath FROM books
		WHERE title = 'A Christmas Carol';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo $row['title'];
		}
	}
	echo uniqid().".jpg";


?>
<form action="upload.php" method="POST" enctype="multipart/form-data">

	<input type="file" name="file">
	<button type="submit" name="submit"> UPLOAD </button> 
</form>