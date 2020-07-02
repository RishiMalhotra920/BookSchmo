<?php
	include "includes/header.php"
?>

<div class="container-fluid">

	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-5 text-center mt-100">
	  <h1 class="text-uppercase page-heading">Trending</h1>
	  <p class="lead page-sub-heading"> Check what everyone's reading today! </p>
	</div>
	<!--Starts a grid structure-->
	<div class="row bg-light">
		<!--Categories on the left-->
		<div class="col-2">
			<div class="mr-md-3 pt-1 px-1 pt-md-1 px-md-1 overflow-hidden">
				<div class="p-1">
					<h2 class="category-bar-heading">Categories</h2>
				</div>
				<!--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
			</div>
			<ul class="category-bar-list">
				<li> Category 1 </li>
				<li> Category 2 </li>
			</ul>
		</div>
		<!--Products on the right-->
		<div class="col-10">
			
			
			<div class="album py-5 bg-light p-3">
				<div class="row">
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<img class="bd-placeholder-img card-img-top" width="100%" src="../images/aChristmasCarol.jpg"></img>
							<div class="card-body">
								<p class="card-text">A Christmas Carol - Charles Dickens</p>
								<div class="d-flex justify-content-between align-items-center">
									<span class="text-success">$6.99</span>
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<img class="bd-placeholder-img card-img-top" width="100%" src="../images/davidCopperfield.jpg"></img>
							<div class="card-body">
								<p class="card-text">David Copperfield - Charles Dickens</p>
								<div class="d-flex justify-content-between align-items-center">
									<span class="text-success">$6.99</span>
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<img class="bd-placeholder-img card-img-top" width="100%" src="../images/aChristmasCarol.jpg"></img>
							<div class="card-body">
								<p class="card-text">A Christmas Carol - Charles Dickens</p>
								<div class="d-flex justify-content-between align-items-center">
									<span class="text-success">$6.99</span>
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
</div>



<?php
	include "includes/footer.php"
?>
