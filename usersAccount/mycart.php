<?php
	include "includes/header.php";

	//If the person has logged in with a user account, only then can he access this page
	if(!isset($_SESSION["accountDetails"]["accountType"])){
		header("Location: ../usersAccount/login.php");
	}else{
		if($_SESSION["accountDetails"]["accountType"] != "user"){
			header("Location: ../usersAccount/login.php");
		}
	}
	echo "<pre>";
	print_r($_SESSION['mycart']);
	echo "</pre>";
	//echo $_SESSION['mycart'][0]["isbn"];

	// $sql = "SELECT booksID";
	// $result = mysqli_query($conn,$sql);
	// $resultCheck = mysqli_num_rows($result);

	// $row = mysqli_fetch_assoc($result)){

?>

	<div class="container-fluid">
		<!--Page heading and subheading -->
		<div class="pt-5 pb-3 text-center mt-100">
			<h1 class="text-uppercase page-heading">My cart</h1>
			<p class="lead page-sub-heading">Everything in one place</p>
		</div>

		<!--Page split between cart orders || Checkout button and other related items -->
		<div class="row">
			<div class="col-9">
				<div class="my-cart-item-bar ml-5 mt-5 mb-0">
					<!--The price and Quantity headings -->
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col-2">Book Image</th>
								<th scope="col-2">Book Name</th>
								<th scope="col-2">Price</th>
								<th scope="col-2">Quantity</th>
								<th scope="col-2"></th>
							</tr>
						</thead>
						<tbody>
						<?php
							$counter = -1;
							$orderTotal = 0;
							foreach($_SESSION['mycart'] as $subArray){
								$counter++;
								//Used to calculate the total of the order
								$orderTotal += $subArray['price'];
						?>
							<tr>
								<td><img class="w-25" src="../bookImages/<?php echo $subArray["imageName"]; ?>"></td>
								<td><?php echo $subArray["title"]; ?></td>
								<td>$<?php echo $subArray["price"]; ?></td>
								<td><?php echo $subArray["quantity"]; ?></td>
								<td><a href="includes/removefromcartScript.php?index=<?php echo $counter?>">Remove from cart</a></td>
							</tr>

						<?php
							}
							$_SESSION['mycartinfo']['orderTotal'] = $orderTotal;
						?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-3">
				<div class="bg-light pt-5 pb-5 h-100">
					<h5 class = "text-center"> Subtotal: $<?php echo $orderTotal; ?> </h5>
					<a href="checkout.php" type="button" class="btn btn-primary d-block mx-auto">Proceed to checkout</a>
				</div>
			</div>
	</div>


<?php
	include "includes/footer.php"
?>
