<?php
	include "includes/creatorsHeader.php";
	

	//SQL Query to return all the books a seller has listed from his account
	$sellerID = $_SESSION['accountDetails']['id'];
	// $sql = "SELECT isbn, author, title, description, genre, sellerID, price FROM books
	// LEFT JOIN listings
	// ON books.isbn = listings.booksID
	// WHERE sellerID = $sellerID AND onSale=1";
	$sql = "
		SELECT isbn,SUM(quantity) as sales,author, title, description, genre, sellerID, price
		FROM orderitems
		LEFT JOIN listings ON orderitems.listingsID= listings.id
		LEFT JOIN books ON books.isbn = listings.booksID
		WHERE sellerID = 58
		GROUP by isbn
	";


	$result = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($result);

?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">My book listings</h1>
		<p class="lead page-sub-heading">All your listings in one place</p>
	</div>
	
	<div class="container">
		<div class="form-group">
		<form action ="includes/bookListingsScript.php" method="GET">
			<input list="browsers" name="sortby"></inp
			<datalist id="browsers">
				<option value="Internet Explorer"></option>
				<option value="Firefox"></option>
				<option value="Chrome"></option>
				<option value="Opera"></option>
				<option value="Safari"></option>
			</datalist>
			<input type="submit">
		</form>
	</div>
		<!--Simple table containing all books-->
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ISBN</th>
					<th scope="col">Title</th>
					<th scope="col">Author</th>
					<th scope="col">Price($)</th>
					<th scope="col">Sales</th>
				</tr>
			</thead>
			<tbody>
			<?php
			//Loop the html code below for every row returned by the sql query
			if($numRows > 0){
				while ($row = mysqli_fetch_assoc($result)){	

			?>

			<tr>
				<td scope="row"><?php echo $row['isbn'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['author'];?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['sales']; ?></td>
			</tr>

			<?php
				}
			}
			?>
					
						
			</tbody>
		</table>
	</div>


<?php
	include "includes/footer.php"
?>
