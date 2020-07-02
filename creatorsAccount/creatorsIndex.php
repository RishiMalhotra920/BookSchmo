<?php
	include "includes/creatorsHeader.php";

?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Creator's Account</h1>
		<p class="lead page-sub-heading">Good Morning</p>
	</div>

	<!-- Page structure is split into 3 columns -->
	<div class="row">

		<div class="col-3">

			<!--List a book to sell section -->
			<div class="bg-light m-1 p-2">
				<h3> List a book to sell</h3>
				<p><a href="bookListings"> Get started </a></p>
			</div>
			
			<!-- Add a discount section -->
			<div class="bg-light m-1 p-2">
				<h3> Add a discount</h3>
				<p><a href=""> Get started </a></p>
			</div>
		</div>

		<div class="col-6">

			<!--Sales section -->
			<div class="bg-light m-1 p-2">
				<h3>Sales</h3>
				<a href="sales.php">View more</a>
				<br><br>
				
				<!-- Shorthand table of sales -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Author</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Book 1</td>
							<td>Author 1</td>
							<td>Quantity 1</td>
							<td>Price 1</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Book 2</td>
							<td>Author 2</td>
							<td>Quantity 2</td>
							<td>Price 2</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Book 3</td>
							<td>Author 3</td>
							<td>Quantity 3</td>
							<td>Price 3</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="col-3">
		</div>
	</div>


<?php

	include "includes/footer.php"
?>
