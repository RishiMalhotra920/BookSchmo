<?php
	include "includes/creatorsHeader.php"
?>
	<!-- Page Heading and Sub-Heading-->
	<div class="pt-5 pb-3 text-center mt-100">
		<h1 class="text-uppercase page-heading">Complaints and Queries</h1>
		<p class="lead page-sub-heading">Angry customers and Inquisitve customers</p>
	</div>
	
	<!--Page is split into two equal columns -->
	<div class="row">
		<!--First column-->
		<div class="col-sm">
			<div class="p-2">
				<!--The table for complaints -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Complaint</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td><b>Book Not Delivered: </b> Please deliver the book ASAP...</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td><b>Bad Book Quality: </b> Pages are torn and cover is missing!...</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td><b>Wrong Book: </b> I asked for a revision guide...</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
		<!--Second column -->
		<div class="col-sm">
			<div class="p-2">
				<!--Table for queries-->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Query</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td><b>When is the discount coming? </b></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td><b>How reliable are your books?: </b> Just curious whether to trust you or not...</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
	</div>
		
		
		


<?php
	include "includes/footer.php"
?>
