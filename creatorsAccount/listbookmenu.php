<?php
	include "includes/creatorsheader.php";

?>
	<!-- This page gives creators an option to list a new book/ list an existing book -->
	<div class=container-fluid">
		

		<div class="row">
			<div class="col-3">
			</div>

			<!-- Option to list a new book -->
			<div class="col">
				<div class="card mt-5 mx-auto" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title"><a href = "listnewbook.php"> List a new book </a></h5>
						<p class="card-text">List a book which does not exist on the website.</p>
					</div>
				</div>
			</div>

			<!-- Option to list an existing book -->
			<div class="col">
				<div class="card mt-5 mx-auto" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title"><a href = "listexistingbook.php"> List an existing book </a></h5>
						<p class="card-text">List a book which already exists on the website.</p>
					</div>
				</div>
			</div>

			<div class="col-3">
			</div>
		</div>
	</div>
<?php

	include "includes/footer.php";
?>