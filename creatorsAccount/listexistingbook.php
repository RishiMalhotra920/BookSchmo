<?php
	include "includes/creatorsHeader.php";

?>
	<div class="container-fluid">
		<!-- Page heading and sub-heading -->
		<div class="pt-5 pb-3 text-center mt-100">
			<h1 class="text-uppercase page-heading">List an existing book</h1>
			<p class="lead page-sub-heading">To BookSchmo</p>
		</div>


		<div class="row">
			<div class="col">
				<div class="p-4 mx-auto border rounded" style="width:50%">
					<?php
					// Displays any errors associated with listing existing books
					if(isset($_SESSION["listexistingbookErrors"])){
						foreach ($_SESSION["listexistingbookErrors"] as $element){
							echo "<p class='text-danger'>$element</p>";
						}
					}

					//Displays a success message if the book was listed successfully
					if(isset($_GET["listing"])){
						if($_GET["listing"] == "success"){
							echo "<p class='text-success'>Book uploaded</p>";
						}
					}
					?>
					<!-- Form takes in ISBN and price inputs -->
					<form action="includes/listexistingbookScript.php" method="POST" enctype="multipart/form-data">

						<!-- ISBN input -->
						<div class="form-group">
							<h3> Insert the book </h3>
							<br>
							<label class="mb-0">ISBN</label>
							<input type="text" name="isbn" class="form-control p-1" id="bookIsbn" placeholder="" 
							value="<?php 
								if(isset($_SESSION["listabookDetails"][0])){
									echo $_SESSION["listabookDetails"][0];
								}
							 ?>">
						</div>

						<!-- Price input -->
						<div class="form-group">
							<label class="mb-0">Price ($)</label>
							<input type="number" step="0.01" min="0.00" name="price" class="form-control p-1" id="bookUploadPrice" placeholder=""
							value="<?php 
								if(isset($_SESSION["listabookDetails"][1])){
									echo $_SESSION["listabookDetails"][1];
								}
							 ?>">
						</div>

						<button type="submit" name="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1">Add book</button>
					</form>
					<hr>
				</div>
			</div>

			<!-- Search for book within the existing page -->
			<div class="col">
				<h4 class="mt-4"> Book Search </h4>
				<br>

				<!-- Form takes in a search field input -->
				<form class="form-inline mb-3" action="includes/booksearchScript.php" method="POST">
					<div class="form-group">
						<input class="form-control form-control-lg mr-2" name="searchInput" type="text" placeholder="Search a book...">
						<button type="submit" class="btn btn-primary btn-lg">Search</button>
					</div>
				</form>

				<!-- Table displays the results from the search query -->
				<?php
					if(isset($_SESSION['searchResults'])){
				?>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">ISBN</th>
								<th scope="col">Title</th>
								<th scope="col">Author</th>
							</tr>
						</thead>
						<tbody>
					<?php
					//Loop the html code below for every row returned by the sql query
						$numRows = sizeof($_SESSION['searchResults']);
						if($numRows > 0){
							foreach ($_SESSION['searchResults'] as $counter){
					?>
							<tr>
								<td scope="row"><?php echo $counter['isbn']?></td>
								<td><?php echo $counter['title'];?></td>
								<td><?php echo $counter['author'];?></td>
							</tr>

					<?php
							}
						}
					?>
						</tbody>
					</table>
					<?php
					}
					?>	
			</div>
		</div>
	</div>

<?php
	include "includes/footer.php";
?>