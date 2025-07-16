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
			<h1>View Products</h1>
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
					<table>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Descrption</th>
								<th>Stock</th>
								<th>Price</th>
								<th>Image URL</th>
							</tr>
							<tr> <!--Dummy data for demonstration purpose-->
								<td>1</td>
								<td>Meganti</td>
								<td>Voice Activated RGB LED Colorful Light</td>
								<td>105</td>
								<td>200.00</td>
								<td>/img/3.jpg</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Princepesa</td>
								<td>LED Light</td>
								<td>134</td>
								<td>150.00</td>
								<td>/img/4.jpg</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Zapinza</td>
								<td>Modern LED light </td>
								<td>314</td>
								<td>200.00</td>
								<td>/img/5.jpg</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Bambi</td>
								<td>Conventional Light</td>
								<td>134</td>
								<td>10.00</td>
								<td>/img/6.jpg</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Asavi</td>
								<td>LED Chandelier</td>
								<td>141</td>
								<td>250.00</td>
								<td>/img/7.jpg</td>
							</tr>
						</table>
						<hr style="border: #e8491d 2px solid;">						
				</article>
				
				<!--View Order section-->
				<article id="center-col">
					<h1 id="view-order">View Orders</h1>
						<table>
							<tr>
								<th>Order ID</th>
								<th>Product ID</th>
								<th>Customer ID</th>
								<th>Shipping Address</th>
								<th>Date</th>
								<th>Time</th>
								<th>Cost</th>
							</tr>
							<tr>
								<td>2</td>
								<td>5</td>
								<td>4</td>
								<td>3 Example Road, London</td>
								<td>2017/08/12</td>
								<td>10:00:00</td>
								<td>300.00</td>
							</tr>
						</table>
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