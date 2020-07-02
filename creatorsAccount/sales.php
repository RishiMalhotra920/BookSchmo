<?php
	include "includes/creatorsHeader.php";

?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Sales</h1>
		<p class="lead page-sub-heading">Your sales, sorted and categorized</p>
	</div>
	<!--Page is split into two columns -->
	<div class="container">
		<!--Second column-->
		<div class="col-sm">
			
			<div class="p-2">
				<!--The table for sales by time-->
				<table class="table table-hover">
				<h3 class="d-inline">Sales by time</h3>
					<button class="btn btn-primary ml-2">Sort by </button>
					<br><br>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Author</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
							<th scope="col">Sales</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Book 1</td>
							<td>Img</td>
							<td>Author 1</td>
							<td>Quantity 1</td>
							<td>Price 1</td>
							<td>Sale 1</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Book 2</td>
							<td>Img</td>
							<td>Author 2</td>
							<td>Quantity 2</td>
							<td>Price 2</td>
							<td>Sale 2</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Book 3</td>
							<td>Img</td>
							<td>Author 3</td>
							<td>Quantity 3</td>
							<td>Price 3</td>
							<td>Sale 3</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
	</div>


<?php
	include "includes/footer.php"
?>
