<?php
	include "includes/header.php";

	// exists($_SESSION['signupDetails'],0);
	if (isset($_SESSION["signupDetails"])){
		print_r($_SESSION["signupDetails"]);
	
	}
	print_r($_SESSION);
?>


	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Sign up</h1>
		<p class="lead page-sub-heading">To BookSchmo</p>
	</div>

	<!--Form elements-->
	<!--Each form element has a value attribute attached to it. If the user submits form incorrectly-->
	<!--and is redirected to the signup page, then his old submissions will be stored in the form input field-->
	<div class="container">
		<div class="p-4 mx-auto border rounded" style="width:30%">
			<?php
			if(isset($_SESSION["signupErrors"])){
				foreach ($_SESSION["signupErrors"] as $element){
					echo "<p class='text-danger'>$element</p>";
				}
			}	
			?>
			<form action="includes/signupScript.php"  method="POST">
				<div class="form-group">
					<label class="mb-0">First Name</label>
					<input type="text" name="firstName" class="form-control p-1" id="signupFirstName" placeholder="" 
					value="<?php 
						if(isset($_SESSION["signupDetails"][0])){
							echo $_SESSION["signupDetails"][0];
						}
					 ?>">
				</div>
				<div class="form-group">
					<label class="mb-0">Last Name</label>
					<input type="text" name="lastName" class="form-control p-1" id="signupLastName" placeholder=""
					value="<?php 
						if(isset($_SESSION["signupDetails"][1])){
							echo $_SESSION["signupDetails"][1];
						}
					 ?>">
				</div>
				<div class="form-group">
					<label class="mb-0">Email address</label>
					<input type="email" name="email" class="form-control p-1" id="signupEmail" placeholder="" 
					value="<?php 
						if(isset($_SESSION["signupDetails"][2])){
							echo $_SESSION["signupDetails"][2];
						}
					 ?>">
				</div>
				<div class="form-group">
					<label class="mb-0">Date of Birth</label>
					<input type="date" name="dateOfBirth" class="form-control p-1" id="signupEmail" placeholder="" 
					value="<?php 
						if(isset($_SESSION['signupDetails'][3])){
							echo $_SESSION['signupDetails'][3];
						}

					 ?>">
				</div>
				<div class="form-group">
					<label class="mb-0">Password</label>
					<input type="password" name="password" class="form-control p-1" id="signupPassword" placeholder="">
				</div>
				<div class="form-group">
					<label class="mb-0">Re-enter Password</label>
					<input type="password" name="confirmPassword" class="form-control p-1" id="signupConfirmPassword" placeholder="">
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="accountType" id="radioUser" value="user" checked>
					<label class="form-check-label">User</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="accountType" id="radioCreator" value="creator">
					<label class="form-check-label">Creator</label>
				</div>

				<button type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1">Sign up</button>
			</form>
			<hr>
			<p class="text-center mb-2" style="font-size:1.1em"> Already have an account? </p>
			<a type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1" href="login.php">Login</a>
		</div>
	</div>
		

<?php
	include "includes/footer.php"
?>
