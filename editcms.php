<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Edit CMS');
	
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
			<h1>Edit Products</h1>
		</div>
	</section>
	
		<section id="main1">
			<div class="container">
			
			<!--Selection bar-->
				<aside id="side-col">
					<div class="shade">
						<a href="#insert-product"> Insert Products</a> <br> <br>
						<a href="#update-product"> Update Products</a> <br> <br>
						<a href="#delete-product"> Delete Products</a> <br> <br>
					</div>
				</aside>
			
			<!--Insert Product section-->
				<article id="center-col">
					<h1 id="insert-product">Insert Products</h1>
						<form class="info" action="" method=POST>
							<div>
								<label>Product ID</label><br>
								<input type="number" name="PId" placeholder="Product ID">
							</div>
							<div>
								<label>Product Name</label><br>
								<input type="text" name="PName" placeholder="Name">
							</div> 
							<div>
								<label>Description</label><br>
								<textarea name="Description" placeholder="Description"></textarea>
							</div>
							<div>
								<label>Stock</label><br>
								<input type="number" name="Stock" placeholder="Stock">
							</div>
							<div>
								<label>Price</label><br>
								<input type="number" name="Price" placeholder="Price">
							</div>
							<div>
								<label>Image URL</label><br>
								<input type="url" name="image" placeholder="URL">
							</div> <br>
							<button class="button_1" type="submit" value="Ip">Insert Product</button>
						</form>		
						<hr style="border: #e8491d 2px solid;">						
				</article>
				
				<!--Update Product section-->
				<article id="center-col">
					<h1 id="update-product">Update Products</h1>
						<form class="info" action="" method=POST>
							<div>
								<label>Product ID</label><br>
								<input type="number" name="PId" placeholder="Product ID">
							</div> <br>
							<button class="button_1" type="submit" value="Sp">Search Product</button> <br> <br>
							<div>
								<label>Product Name</label><br>
								<input type="text" name="PName" placeholder="Name">
							</div> 
							<div>
								<label>Description</label><br>
								<textarea name="Description" placeholder="Description"></textarea>
							</div>
							<div>
								<label>Stock</label><br>
								<input type="number" name="Stock" placeholder="Stock">
							</div>
							<div>
								<label>Price</label><br>
								<input type="number" name="Price" placeholder="Price">
							</div>
							<div>
								<label>Image URL</label><br>
								<input type="url" name="image" placeholder="URL">
							</div> <br>
							<button class="button_1" type="submit" value="Up">Update Product</button>
						</form>	
						<hr style="border: #e8491d 2px solid;">		
				</article>
				
				<!--Delete Product section-->
				<article id="center-col">
					<h1 id="delete-product">Delete Products</h1>
						<form class="info" action="" method=POST>
							<div>
								<label>Product ID</label><br>
								<input type="number" name="PId" placeholder="Product ID">
							</div> <br>
							<button class="button_1" type="submit" value="Sp">Search Product</button> 
							<button class="button_1" type="submit" value="Dp">Delete Product</button> <br> <br>
						</form>	
						<hr style="border: #e8491d 2px solid;">		
				</article>
			</div>
		</section>

<?php
	//Output the footer
	outputFooter();
?>