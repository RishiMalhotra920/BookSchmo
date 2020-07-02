<?php
	include "includes/header.php";
	$searchInput = $_POST["search"];

	//Joins books table and listings table on isbn = booksID and returns the book details and the minimum price
	$sql = "SELECT isbn,author,title,description,genre,imageName, MIN(price) as minPrice
		FROM books
		LEFT JOIN listings
		ON books.isbn = listings.booksID
		WHERE (title='$searchInput'OR author='$searchInput'OR genre='$searchInput') AND onSale = 1
		GROUP BY booksID;";

	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	print_r($_SESSION);
?>
<h3> Hyphens are a problem </h3>
<h3> Might want to consider programming the two sql statements within each other </h3>
	<!--Page structure split into left-hand categories column and right hand search results column-->
	<div class="row mt-5">
		<div class="col-2">
			<div class="mr-md-3 pt-1 px-1 pt-md-1 px-md-1 overflow-hidden">
				<div class="p-1">
					<h2 class="category-bar-heading">Categories</h2>
				</div>
				<!--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
			</div>
			<ul class="category-bar-list">
				<li> Category 1 </li>
				<li> Category 2 </li>
			</ul>
		</div>
		<div class="col-10">
			<p> Returning <?php echo $resultCheck ?> search results</p>
			<hr>
			<!--Each book returned from the search query-->
		
			<?php 
				if($resultCheck > 0){
					while ($row = mysqli_fetch_assoc($result)){
						$isbn = $row['isbn'];
						$author = $row['author'];
						$title = $row['title'];
						$description = $row['description'];
						$genre = $row['genre'];
						$imageName = $row['imageName'];
						$minPrice = $row['minPrice'];
			?>
				<div class="row pt-3">
					<div class="col-2">
						<img class="my-cart-product-image" src="../bookImages/<?php echo $row['imageName']?>">
					</div>
					<!--Returns the book details for every row returned from the search query-->
					<div class="col-6">
						<h4><?php echo $title?></h4>
						<p class="lead"><?php echo $description?></p>
						<?php
							//$priceLow = number_format($secondRow['priceLow'],2);

						?>
						<p class="text-success"> Price: <?php echo number_format($minPrice,2) ?></p>
						<a class="btn btn-primary pt-1 pb-1" href="viewbook.php?isbn=<?php echo $isbn?>">View Book</a>
					</div>

					
				</div>
				<hr>
			<?php


					}
				}
			?>
					
				
			
		</div>
	</div>

		




<?php
	include "includes/footer.php"
?>
