<!DOCTYPE html>
<?php 
	#includes the connection file
	include "includes/connection.php";
	
?>

<html>
<head>
	<!-- Content delivery networks provides AJAX and Bootstrap files over the internet-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="includes/css/bootstrap.css">
	<link rel="stylesheet" href="includes/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="includes/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="includes/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="includes/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="main.css"><!--Your own stylesheets at the last -->
</head>
<body>
	<!--The main menu at the top of the screen-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">BookSchmo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<!--Navbar elements-->
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
			<li class="nav-item">
				<a class="nav-link" href="trending.php">Trending</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mycart.php">My cart</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="myorders.php">My orders</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../creatorsAccount/creatorsIndex.php">Creator's Site</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="addAddress.php">Add Address</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../logout.php">Log out</a>
			</li>
			</ul>
			
			<!--The search button-->
			<form class="form-inline" action="search.php" method="POST">
				<input class="form-control mr-sm-2" style="width:400px" name = "search" type="Search"> </input>
				<button class="btn btn-outline-success my-2 my-sm-0 type="submit">Search </a>
			</form>
				
		</div>
	</nav>
	
	<?php /*
	<nav class="navbar navbar-expand-md navbar-dark bg-primary">
		<a href="/" class="navbar-brand">BookSchmo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbar5">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="trending.php">Trending</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="cart.php">My cart </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="order-list.php">My orders</a>
				</li>
				
			</ul>
			
			<form class="mx-2 d-inline w-50" method="get" action="products.php">
				<div class="input-group">
					
					<input type="text" class="form-control border border-right-0" placeholder="Search..." name="q" value="<?php 
						if (isset($_GET["q"])){
							echo $_GET["q"];
						}							
					?>">
					<span class="input-group-append">
					<button class="btn btn-outline-secondary border border-left-0" type="submit">
                    <i class="fa fa-search"></i>
                </button>
				  </span>
				</div>
			</form>
			<ul class="navbar-nav">
				<?php
					if (isset($_SESSION["admin"])){
						if ($_SESSION["admin"] == 1){
			?>
				<li class="nav-item">
					<a class="nav-link" href="admin/adminHome.php">Admin site</a>
				</li>
			<?php 
					}
				}
			?>
	
			
			
			<?php
				//Displaying the person's name in the navbar
				if (isset($_SESSION["login"])){
					$sql = "SELECT * FROM users WHERE id=".$_SESSION["login"];
					$result=mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					$greeting = "Hi ".$row["firstName"];
					
			?>
			
				<li class="nav-item dropdown">
					<!--The greeting and href are echoed using php -->
					<a class="nav-link dropdown-toggle" href = "#" id="navbarDropdown2" data-toggle="dropdown">
						<?php echo $greeting?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="operations/logout.php"> Log out </a>
					</div>
				</li>
			<?php
				}else{	
				
			?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Log in</a>
				</li>
			<?php
				} */
			?>
			</ul>
		</div>
	</nav>

