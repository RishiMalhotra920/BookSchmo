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
	$isbn = $_GET['isbn'];
	//SQL Query to return all the books a seller has listed from his account
	$sellerID = $_SESSION['accountDetails']['id'];
	$sql = "SELECT isbn,author,title,description,genre,imageName, price, sellerID, firstName, lastName 
		FROM books 
		LEFT JOIN listings ON listings.booksID = books.isbn
		LEFT JOIN accounts ON accounts.id = listings.sellerID
		WHERE isbn = $isbn AND onSale = 1";
	
	$result = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($result);

?>

	<div class="container">
		<!--Simple table containing all books-->
		<table class="table table-hover w-50">
			<thead>
				<tr>
					<th scope="col">Seller Name</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
			<?php
			//Loop the html code below for every row returned by the sql query
			if($numRows > 0){
				while ($row = mysqli_fetch_assoc($result)){	
					$sellerID = $row['sellerID'];
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$price = $row['price'];
			?>

			<tr>
				<td scope="row"><?php echo $firstName.$lastName;?></td>
				<td><?php echo $price;?></td>
			</tr>

			<?php
				}
			}
			?>
					
						
			</tbody>
		</table>
	</div>


<?php
	include "includes/footer.php"
?>
