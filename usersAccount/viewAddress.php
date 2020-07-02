<?php
	include "includes/header.php";
	$accountsID = $_SESSION["accountDetails"]['id'];

	//Retrieves all the addresses submitted by a particular user
	$sql = "SELECT id, addressLine1, addressLine2, addressLine3, country
		FROM address 
		WHERE accountsID = $accountsID";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">View your addresses</h1>
		<p class="lead page-sub-heading">in one place</p>
	</div>
	<div class="container">
		<div class="row">
		<?php
			if($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
		?>

				
					<div class="col-3 mr-4 mb-4">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">Address</h5>
								<p class="card-text"><?php echo $row['addressLine1'];?></p>
								<p class="card-text"><?php echo $row['addressLine2'];?></p>
								<p class="card-text"><?php echo $row['addressLine3'];?></p>
								<a href="includes/removeAddressScript.php?id=<?php echo $row['id'];?>" class="card-link">Remove address</a>
							</div>
						</div>
					</div>

		<?php
				}
			}

		?>
		</div>
	</div>






<?php
	include "includes/footer.php"
?>
