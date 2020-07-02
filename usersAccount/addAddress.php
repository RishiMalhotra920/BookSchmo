<?php
	include "includes/header.php";

	// exists($_SESSION['addressDetails'],0);
	if (isset($_SESSION["addressDetails"])){
		print_r($_SESSION["addressDetails"]);
	
	}
?>


	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Add an Address</h1>
		<p class="lead page-sub-heading">To BookSchmo</p>
	</div>

	<!--Form elements-->
	<!--Each form element has a value attribute attached to it. If the user submits form incorrectly-->
	<!--and is redirected to the signup page, then his old submissions will be stored in the form input field-->
	<div class="container">
		<div class="p-4 mx-auto border rounded" style="width:30%">
			<?php
			if(isset($_SESSION["addressErrors"])){
				foreach ($_SESSION["addressErrors"] as $element){
					echo "<p class='text-danger'>$element</p>";
				}
			}
			if(isset($_GET["insertaddress"])){
				if($_GET["insertaddress"]=="success"){
					echo "<p class=text-success>Your address has been added</p>";
				}
			
			}
			?>
			<form action="includes/addAddressScript.php"  method="POST">
				<div class="form-group">
					<label class="mb-0">Address Line 1</label>
					<span class="text-secondary" style="font-size: 0.9rem"> * Necessary field </span>
					<input type="text" name="addressLine1" class="form-control p-1" id="adderssLine1" placeholder="" 
					value="<?php 
						if(isset($_SESSION["addressDetails"][0])){
							echo $_SESSION["addressDetails"][0];
						}
					 ?>">
				</div>
				<div class="form-group">
					<label class="mb-0">Address Line 2</label>
					<input type="text" name="addressLine2" class="form-control p-1" id="adderssLine2" placeholder=""
					value="<?php 
						if(isset($_SESSION["addressDetails"][1])){
							echo $_SESSION["addressDetails"][1];
						}
					 ?>">
				</div>

				<div class="form-group">
					<label class="mb-0">Address Line 3</label>
					<input type="text" name="addressLine3" class="form-control p-1" id="adderssLine3" placeholder=""
					value="<?php 
						if(isset($_SESSION["addressDetails"][2])){
							echo $_SESSION["addressDetails"][2];
						}
					 ?>">
				</div>

				<div class="form-group">
					<label class="mb-0">Country</label>
					<span class="text-secondary" style="font-size: 0.9rem"> * Necessary field </span>
					<input type="text" name="country" class="form-control p-1" id="adderssLine4" placeholder=""
					value="<?php 
						if(isset($_SESSION["addressDetails"][3])){
							echo $_SESSION["addressDetails"][3];
						}
					 ?>">
				</div>

				<button type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1">Add</button>
			</form>
			<hr>
			<p class="text-center mb-2" style="font-size:1.1em"> Already have an address? </p>
			<a type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1" href="login.php">Check them here</a>
		</div>
	</div>
		

<?php
	include "includes/footer.php"
?>
