<?php
	include "includes/header.php";
?>

	<!--Slideshow-->
	<div id="homePageSlideshow" class="carousel slide" data-ride="carousel">
		<!-- Slideshow bottom of the frame indicators -->
		<ol class="carousel-indicators">
			<li data-target="#homePageSlideshow" data-slide-to="0" class="active"></li>
			<li data-target="#homePageSlideshow" data-slide-to="1"></li>
			<li data-target="#homePageSlideshow" data-slide-to="2"></li>
		</ol>
		<!-- Slideshow frames -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block" src="../images/fictionBooksSlideshow.jpg" alt="First slide" id="slideshowImage1">
				<div class="carousel-caption d-none d-md-block bg-warning">
					<h3 class="">BookSchmo</h3>
					<p class="">A great mind begins with a book</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../images/koboEReaderSlideshow.jpg" alt="Second slide" id="slideshowImage1">
				<div class="carousel-caption d-none d-md-block bg-warning">
					<h3 class="">Kobo E-Reader</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block" src="../images/WimpyKidCollage.jpg" alt="Third slide" id="slideshowImage1">
				<div class="carousel-caption d-none d-md-block bg-warning">
					<h3 class="">Books for Kids</h3>
				</div>
			</div>
		</div>
		<!--Slideshow next and previous buttons -->
		<a class="carousel-control-prev" href="#homePageSlideshow" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#homePageSlideshow" role="button" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<!--The row is split into two sections of equal width -->
			<div class="col-6">
				<div class="text-center overflow-hidden">
				<!--A section that displays some of the trending books -->
					<div class="my-3 py-3">
						<h2 class="display-5">Trending Today</h2>
						<a class="lead" href="trending.php">Click to see more</a>
					</div>
					<div class="row">
						<div class="col-6 pb-3">
							<img src="../images/aChristmasCarol.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6 pb-3">
							<img src="../images/davidCopperfield.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6">
							<img src="../images/davidCopperfield.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6">
							<img src="../images/aChristmasCarol.jpg" style="max-height:300px"> </img>
						</div>
					</div>
					<!--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
				</div>
			</div>
			<!--A section devoted to the Kobo E-Reader-->
			<div class="col-6">
				<div class="bg-light text-center overflow-hidden">
					<div class="my-3 p-3">
						<h2 class="display-5">Kobo E-Reader</h2>
						<p class="lead">For a convenient and customized reading experience</p>
					</div>
					<img src="../images/koboEReader.png" class="w-100"></img> 
					<!--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
				</div>
			</div>
		</div>
		
		<!-- Shows the user some books according to his preferences-->
		<div class="album py-5 bg-light p-3">
			<h3 class="mb-4"> Recommended for you </h3>
			<div class="row">
				<div class="col-md-2">
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
				<div class="col-md-2">
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
				<div class="col-md-2">
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
		
		<div class="row">
			<!--The row is split into two sections of equal width -->
			<div class="col-6">
				<div class="text-center overflow-hidden">
				<!--A section that displays some of the trending books -->
					<div class="my-3 py-3">
						<h2 class="display-5">More from BookSchmo</h2>
						<a class="lead" href="trending.php">Click to see more</a>
					</div>
					<div class="row">
						<div class="col-6 pb-3">
							<img src="../images/aChristmasCarol.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6 pb-3">
							<img src="../images/davidCopperfield.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6">
							<img src="../images/davidCopperfield.jpg" style="max-height:300px"> </img>
						</div>
						<div class="col-6">
							<img src="../images/aChristmasCarol.jpg" style="max-height:300px"> </img>
						</div>
					</div>
					<!--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
				</div>
			</div>
			<!--A section devoted to the Book of the month-->
			<div class="col-6">
				<div class="bg-light text-center overflow-hidden">
					<div class="my-3 p-3">
						<h2 class="display-5">Book of the month</h2>
						<a class="lead" href="#">Click here to see more like these</a>
					</div>
					<img src="../images/davidCopperfield.jpg" class="" style="max-height:500px"></img> 
					<!--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	include "includes/footer.php"
?>