<?php
	include "includes/header.php";
	print_r($_SESSION['mycartinfo']);

	$accountsID = $_SESSION["accountDetails"]['id'];

	//Retrieves all the addresses submitted by a particular user
	$sql = "SELECT id, addressLine1, addressLine2, addressLine3, country
		FROM address 
		WHERE accountsID = $accountsID";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

?>
	<div class="container">
		<div class="card text-center mt-5 mb-5">
			<div class="card-header">
			<!-- Place text here if you need -->
			</div>
			<div class="card-body">
				<h2 class="card-title">Checkout</h2>
				<p class="card-text">Place your order here</p>
				<div class="my-cart-item-bar ml-5 mt-5 mb-0">
					<!--The price and Quantity headings -->
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col-2">Book Name</th>
								<th scope="col-2">Price</th>
								<th scope="col-2">Quantity</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$counter = -1;
							foreach($_SESSION['mycart'] as $subArray){
								$counter++;
								//Used to calculate the total of the order
						?>
							<tr>
								<td><?php echo $subArray["title"]; ?></td>
								<td>$<?php echo $subArray["price"]; ?></td>
								<td><?php echo $subArray["quantity"]; ?></td>
							</tr>

						<?php
							}
						?>
						
						</tbody>
					</table>
				</div>
				<br>
				<hr>
				<div class="row">
					<?php
						if($resultCheck > 0){
							while ($row = mysqli_fetch_assoc($result)){
					?>

							
								<div class="col-3 mr-4 mb-4">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Address</h5>
											<?php
												if(isset($_SESSION['mycartinfo']['selectedAddressID'])){
													if($_SESSION['mycartinfo']['selectedAddressID']==$row['id']){
														//exit();
														echo "<p class='text-success'> Selected </p>";
													}
												}
											?>
											<p class="card-text"><?php echo $row['addressLine1'];?></p>
											<p class="card-text"><?php echo $row['addressLine2'];?></p>
											<p class="card-text"><?php echo $row['addressLine3'];?></p>
											<a href="includes/checkoutAddressScript.php?id=<?php echo $row['id'];?>" class="card-link">Select address</a>
										</div>
									</div>
								</div>

					<?php
							}
						}

					?>
				</div>
				<h5 class='text-success'> Total: $<?php echo $_SESSION['mycartinfo']['orderTotal'];?></h5>
				<a href="includes/checkoutScript.php" class="btn btn-primary">Checkout</a>

			</div>
			<div class="card-footer text-muted">
			<!-- Place text here if you need -->
			</div>
		</div>
	</div>

<?php
	include "includes/footer.php";
?>