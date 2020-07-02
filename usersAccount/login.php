<?php
	include "includes/header.php";
	//print_r($_SESSION['mycart']);

?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Login</h1>
		<p class="lead page-sub-heading">To BookSchmo</p>
	</div>
	<div class="container">
		<div class="p-4 mx-auto border rounded" style="width:30%">
			<form action="includes/loginScript.php"  method="POST">

				<div class="form-group">
					<label class="mb-0">Email address</label>
					<input type="email" name="email" class="form-control p-1" id="loginEmail" placeholder="">
				</div>
				<div class="form-group">
					<label class="mb-0">Password</label>
					<input type="password" name="password" class="form-control p-1" id="loginPassword" placeholder="">
				</div>

				<button type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1">Sign in</button>
			</form>
			<hr>
			<p class="text-center mb-2" style="font-size:1.1em"> New to BookSchmo? </p>
			<a type="submit" class="btn btn-primary d-block mx-auto w-100 pt-1 pb-1" href="signup.php">Create an account</a>
		</div>
		
	</div>



<?php
	include "includes/footer.php"
?>
