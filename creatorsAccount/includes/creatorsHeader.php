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
					<a class="nav-link" href="creatorsIndex.php">Home <span class="sr-only">(current)</span></a>
				</li>
			<li class="nav-item">
				<a class="nav-link" href="bookListings.php">My Book Listings</a>
			</li>
<!-- 			<li class="nav-item">
				<a class="nav-link" href="sales.php">Sales</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="listbookmenu.php">List a book</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../index.php">User Site</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../logout.php">Log out</a>
			</li>
			</ul>
			
			<!--The search button-->
			<form class="form-inline">
				<input class="form-control mr-sm-2" style="width:400px" type="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0 type="submit" >Search </button>
			</form>
				
		</div>
	</nav>
