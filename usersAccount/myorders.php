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

	$userID = $_SESSION["accountDetails"]['id'];
	$ordersSql = "SELECT id, userID, addressID, orderTotal, createdAt
		FROM orders
		WHERE userID = $userID";
	$ordersResult = mysqli_query($conn,$ordersSql);
	$ordersResultCheck = mysqli_num_rows($ordersResult);




?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">My orders</h1>
		<p class="lead page-sub-heading">Everything in one place</p>
	</div>
	
	<div class="container">
		<?php

			if($ordersResultCheck > 0){
				while ($ordersRow = mysqli_fetch_assoc($ordersResult)){
					$ordersID = $ordersRow['id'];
					$userID = $ordersRow['userID'];
					$addressID = $ordersRow['addressID'];
					$orderTotal = $ordersRow['orderTotal'];
					$createdAt = $ordersRow['createdAt'];

					//Selects all information about the book from multiple tables
					$orderitemsSql = "
					SELECT orderitems.id, listingsID, quantity, isbn, title, author, description, imageName, price, firstName, lastName
					FROM orderitems
					LEFT JOIN listings ON orderitems.listingsID = listings.id
					LEFT JOIN books ON listings.booksID = books.isbn
					LEFT JOIN accounts ON listings.sellerID = accounts.id
					WHERE orderitems.ordersID = $ordersID;";


					$orderitemsResult = mysqli_query($conn,$orderitemsSql);
					$orderitemsResultCheck = mysqli_num_rows($orderitemsResult);
					//Generates a new section for each order placed
		?>	

					<!--All the information about order including header and actual order is contained in order-listing block -->
					<div class="order-listing">
					<!--Price, Date and Order Details headings for orders -->
						<div class="row bg-light pt-2">
							<div class="col-2">
								<p class="text-uppercase mb-0"> Order placed </p>
								<p> <?php echo $createdAt?></p>
							</div>
							<div class="col-2">
								<p class="text-uppercase mb-0"> Order Total </p>
								<p> <?php echo $orderTotal?> </p>
							</div>
							<div class="col-8">
								<p class="text-right text-uppercase mb-0"> Order details </p>
							</div>
						</div>

						<?php
							if($orderitemsResultCheck > 0){
								while ($orderitemsRow = mysqli_fetch_assoc($orderitemsResult)){
									$quantity = $orderitemsRow['quantity'];
									$isbn = $orderitemsRow['isbn'];
									$title = $orderitemsRow['title'];
									$author = $orderitemsRow['author'];
									$description = $orderitemsRow['description'];
									$imageName = $orderitemsRow['imageName'];
									$price = $orderitemsRow['price'];
									$firstName = $orderitemsRow['firstName'];
									$lastName = $orderitemsRow['lastName'];
						?>
							<!--All the individual product data about the order-->
								<div class="row pt-3">
									<div class="col-2">
										<img class="my-cart-product-image" src="../bookImages/<?php echo $imageName?>"  alt="car">
									</div>
									<div class="col-6">
										<h4 class="mb-0"> <?php echo $title?> </h4>
										<small class="text-secondary"> Sold by: <?php echo $firstName." ".$lastName?> </small>
										<p class="lead mt-3"> <?php echo $description?> </p>
										<p class="text-success"> Price: $<?php echo $price?> </p>
										<p class=""> Quantity: <?php echo $quantity?> </p>
										
									</div>
								</div>
							
						<?php
							}
						}
						?>
					</div>
					<hr>
		<?php
				}
			}
		?>

	</div>
	
	

<?php
	include "includes/footer.php"
?>
