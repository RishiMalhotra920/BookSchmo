<?php
	include "includes/header.php";
	
	$sql = "SELECT isbn,title,author,description,genre,imageName FROM books
		WHERE title = 'A Christmas Carol';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo $row['title'];
		}
	}


	

	$genre = $row["genre"];
	$author = $row["author"];
	$dir = "bookImages/$genre/$author";
	$imageName = $row["imageName"];
	echo "<img src='sampleUploads/5c79161c06089.jpg'>";
?>
	<div class="text-center overflow-hidden">
		<!--A section that displays some of the trending books -->
			<div class="my-3 py-3">
				<h2 class="display-5">Trending Today</h2>
				<a class="lead" href="trending.php">Click to see more</a>
			</div>
			<div class="row">
				<div class="col-6 pb-3">
					<img src="images/aChristmasCarol.jpg" style="max-height:300px"> </img>
				</div>
				<div class="col-6 pb-3">
					<img src="images/davidCopperfield.jpg" style="max-height:300px"> </img>
				</div>
				<div class="col-6">
					<img src="images/davidCopperfield.jpg" style="max-height:300px"> </img>
				</div>
				<div class="col-6">
					<img src="images/aChristmasCarol.jpg" style="max-height:300px"> </img>
				</div>
			</div>
			<!--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
		</div>
	</div>