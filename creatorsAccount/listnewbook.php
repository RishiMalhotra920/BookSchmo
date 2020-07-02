<?php
	include "includes/creatorsHeader.php";

?>
	<p> Some errors in the page include</p>
	<p> User enters an author not mentioned and the directory for that author is not set </p>
	<p> User enters an genre not mentioned and the directory for that author is not set </p>
	<p> User wants to list a new author or genre </p>
	<p> To list author should be easy </p>
	<p> To list genre would require admin privileges </p>

	<!--Page headings and sub-headings-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">List a new book</h1>
		<p class="lead page-sub-heading">To BookSchmo</p>
	</div>
	<div class="container">
		<div class="p-4 mx-auto border rounded" style="width:30%">
			<?php
			//If any, list the errors associated with uploading a book at the top of the form.
			if(isset($_SESSION["listnewbookErrors"])){
				foreach ($_SESSION["listnewbookErrors"] as $element){
					echo "<p class='text-danger'>$element</p>";
				}
			}

			//Display the success message if the book was uploaded
			if(isset($_GET["listnewbook"])){
				if($_GET["listnewbook"] == "success"){
					echo "<p class='text-success'>Book uploaded</p>";
				}
			}
			?>
			<!--Form takes in ISBN, title, author, genre, description, price inputs and a file upload as well.-->
			<form action="includes/listnewbookScript.php" method="POST" enctype="multipart/form-data">

				<!--ISBN input-->
				<div class="form-group">
					<label class="mb-0">ISBN</label>
					<input type="text" name="isbn" class="form-control p-1" id="bookIsbn" placeholder="" 
					value="<?php 
						if(isset($_SESSION["listnewbookDetails"][0])){
							echo $_SESSION["listnewbookDetails"][0];
						}
					 ?>">
				</div>

				<!--Title input-->
				<div class="form-group">
					<label class="mb-0">Book Title</label>
					<input type="text" name="title" class="form-control p-1" id="bookUploadTitle" placeholder="" 
					value="<?php 
						if(isset($_SESSION["listnewbookDetails"][1])){
							echo $_SESSION["listnewbookDetails"][1];
						}
					 ?>">
				</div>

				<!--Author input-->
				<div class="form-group">
					<label class="mb-0">Author</label>
					<input type="text" name="author" class="form-control p-1" id="bookUploadAuthor" placeholder=""
					value="<?php 
						if(isset($_SESSION["listnewbookDetails"][2])){
							echo $_SESSION["listnewbookDetails"][2];
						}
					 ?>">
				</div>

				<!--Genre input-->
				<div class="form-group">
					<label>Genre</label>
					<select class="form-control" id="bookUploadGenre" name="genre" default="">>
						<option <?php 
						if(isset($_SESSION['listnewbookDetails'][3])){
							if($_SESSION['listnewbookDetails'][3] == 'Literature'){
								echo "selected='selected'";
							}
						}

					 ?>>Literature</option>
						<option <?php 
						if(isset($_SESSION['listnewbookDetails'][3])){
							if($_SESSION['listnewbookDetails'][3] == 'Fiction'){
								echo "selected='selected'";
							}
						}

					 ?>>Fiction</option>
						<option <?php 
						if(isset($_SESSION['listnewbookDetails'][3])){
							if($_SESSION['listnewbookDetails'][3] == 'Romance'){
								echo "selected='selected'";
							}
						}

					 ?>>Romance</option>
					</select>
				</div>

				<!--Description input-->
				<div class="form-group">
					<label class="mb-0">Description</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php
						if(isset($_SESSION['listnewbookDetails'][4])){
							echo $_SESSION['listnewbookDetails'][4];
						}

					 ?></textarea>
				</div>

				<!--Price input-->
				<div class="form-group">
					<label class="mb-0">Price ($)</label>
					<input type="number" step="0.01" name="price" class="form-control p-1" id="bookUploadPrice" placeholder=""
					value="<?php 
						if(isset($_SESSION["listnewbookDetails"][5])){
							echo $_SESSION["listnewbookDetails"][5];
						}
					 ?>">
				</div>

				<!--The image upload -->
				<div class="form-group">
					<label class="mb-0">Upload Image</label>
					<input type="file" name="file" class="form-control-file p-1" id="signupConfirmPassword">
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1">Add book</button>
			</form>
			<hr>
		</div>
	</div>
<?php

include "includes/footer.php";



?>