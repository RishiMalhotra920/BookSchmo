<?php
	include "includes/header.php";
	$isbn = $_GET['isbn'];
	$sql = "SELECT listings.id as listingsID, isbn,author,title,description,genre,imageName, price, sellerID, firstName, lastName 
		FROM books 
		LEFT JOIN listings ON listings.booksID = books.isbn
		LEFT JOIN accounts ON accounts.id = listings.sellerID
		WHERE isbn = $isbn AND onSale = 1";


	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

	$listingsID = $row['listingsID'];
	$isbn = $row['isbn'];
	$author = $row['author'];
	$title = $row['title'];
	$description = $row['description'];
	$genre = $row['genre'];
	$imageName = $row['imageName'];

?>

	<div class="row mt-5 ml-4">
		<div class="col-2">
			<img class="my-cart-product-image" src="../bookImages/<?php echo $row['imageName']?>">
		</div>
		<div class="col-6">

			<h1 class="mt-4"><?php echo $row['title']?></h1>
			<p class="">By <?php echo $row['author']?></p>
			<p class="lead"><?php echo $row['description']?></p>

		</div>
		<div class="col-4">
			<h4> All sellers </h4>

			<?php
				//The same sql query ran again
				$result = mysqli_query($conn,$sql);
				$numRows = mysqli_num_rows($result);

			?>

			<div class="container">
				<!--Simple table containing all books-->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Seller Name</th>
							<th scope="col">Price</th>
						</tr>
					</thead>
					<tbody>
					<?php
					//Loop the html code below for every row returned by the sql query
					if($numRows > 0){
						while ($row = mysqli_fetch_assoc($result)){	
							$sellerID = $row['sellerID'];
							$firstName = $row['firstName'];
							$lastName = $row['lastName'];
							$price = $row['price'];
					?>

					<tr>
						<td scope="row"><?php echo $firstName." ".$lastName;?></td>
						<td>$<?php echo $price;?></td>
						<td>
						<form action="includes/addtocartScript.php?sellerid=<?php echo $sellerID?>" method="POST">
							<!-- Sending all these items to the addtocartScript where they are added to the session -->
							<input type="hidden" name="listingsID" value="<?php echo $listingsID?>"></input>
							<input type="hidden" name="author" value="<?php echo $author?>"></input>
							<input type="hidden" name="title" value="<?php echo $title?>"></input>
							<input type="hidden" name="description" value="<?php echo $description?>"></input>
							<input type="hidden" name="genre" value="<?php echo $genre?>"></input>
							<input type="hidden" name="imageName" value="<?php echo $imageName?>"></input>
							<input type="hidden" name="price" value="<?php echo $price?>"></input>
							<input style="width:50px" type="number" name="quantity" value=1></input>
							<button type="submit" class="btn btn-primary">Add to cart</button>
						</form>
						</td>
					</tr>

					<?php
						}
					}
					?>
							
								
					</tbody>
				</table>
			</div>
		</div>

		



<?php
	include "includes/footer.php"
?>
