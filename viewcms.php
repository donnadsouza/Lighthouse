<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | View CMS');

?>
	<!--Logo Section-->
	<header>
		<div class="container">
			<div id="Logo">
				<h1><span class="highlight">Light</span> House</h1>
			</div>
			<nav>
				<ul>
					<li><a href="viewcms.php">View</a></li>
					<li><a href="editcms.php">Edit</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!--Admin heading-->
	<section id="newsletter">
		<div class="container">
			<h1>View</h1>
		</div>
	</section>

		<section id="main1">
			<div class="container">

			<!--Selection bar-->
				<aside id="side-col">
					<div class="shade">
						<a href="#view-product"> View Products</a> <br> <br>
						<a href="#view-order"> View Orders</a> <br> <br>
						<a href="#view-contact"> View Contact Us Form Details</a>
					</div>
				</aside>

			<!--View Product section-->
				<article id="center-col">
					<h1 id="view-product">View Products</h1>

					<?php

					//Connect to MongoDB and select database
					$mongoClient = new MongoClient();
					$db = $mongoClient->Lighthouse;

					//Find all products
					$Products = $db->Products->find();

					//Output results onto page
					if($Products->count() > 0){
						echo '<table>';
						echo '<tr>';
						echo '<th> ImageURL </th>';
						echo '<th> ID </th>';
						echo '<th> Name </th>';
						echo '<th> Description </th>';
						echo '<th> Price </th>';
						echo '<th> Quantity </th>';
						echo '</tr>';
							foreach ($Products as $document) {
								echo '<tr>';
								echo '<td> <img src=' . $document["ImageURL"] .'></td>';
								echo '<td> ' . $document["P_id"] . '</td>';
								echo '<td> <b>' . $document["PName"] . '</b></td>';
								echo '<td> '. $document["Description"] . '</td>';
								echo '<td> <b>'. $document["Price"] . '</b></td>';
								echo '<td> '. $document["quantity"] . '</td>';
								echo '</tr>';
							}
						echo '</table>';
					}

					$mongoClient->close(); //Close the connection

					?>
						<hr style="border: #e8491d 2px solid;">
				</article>


				<!--View Order section-->
				<article id="center-col">
					<h1 id="view-order">View Orders</h1>
					<?php
					//Connect to MongoDB and select database
					$mongoClient = new MongoClient();
					$db = $mongoClient->Lighthouse;

					//Find all products
					$Order = $db->Order->find();

					//Output results onto page
					if($Order->count() > 0){
						echo '<table>';
						echo '<tr>';
						echo '<th>Order ID </th>';
						echo '<th>Product ID </th>';
						echo '<th>Product Name </th>';
						echo '<th>Price</th>';
						echo '<th>Quantity</th>';
						echo '</tr>';
						foreach ($Order as $document) {
							echo '<tr>';
							echo '<td> ' . $document["_id"] .'</td>';
							echo '<td>' . $document["P_id"] .'</td>';
							echo '<td> ' . $document["PName"] .'</td>';
							echo '<td>' . $document["Price"] .'</td>';
							echo '<td>' . $document["quantity"] .'</td>';
							echo '</tr>';
						}
						echo '</table>';
					}

					$mongoClient->close(); //Close the connection
					?>
						<hr style="border: #e8491d 2px solid;">
				</article>

				<!--View Contact section-->
				<article id="center-col">
					<h1 id="view-contact">View Contact Us Form Details</h1>
						<table>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Subject</th>
								<th>Message</th>
							</tr>
							<tr>
								<td>Alice Smith</td>
								<td>alice@exmpl.net</td>
								<td>4545</td>
								<td>Offers</td>
								<td>Are there any offers currently available?</td>
							</tr>
						</table>
				</article>
			</div>
		</section>

<?php
	//Output the footer
	outputFooter();
?>
