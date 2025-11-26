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
						<form class="info">
							<div>
								<label>Product ID</label><br>
								<input type="number" id="P_id" name="P_id" placeholder="Product ID" required>
							</div>
							<div>
								<label>Product Name</label><br>
								<input type="text" id="PName" name="PName" placeholder="Name" required>
							</div>
							<div>
								<label>Description</label><br>
								<textarea name="Description" id="Description" placeholder="Description"required></textarea>
							</div>
							<div>
								<label>Quantity</label><br>
								<input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
							</div>
							<div>
								<label>Price</label><br>
								<input type="number" id="Price" name="Price" placeholder="Price" required>
							</div>
							<div>
								<label>Image URL</label><br>
								<input type="url" id="ImageURL" name="ImageURL" placeholder="URL" required>
							</div> <br>
							<button onclick="insert()" class="button_1" type="button" value="Ip">Insert Product</button>
						</form>
						<hr style="border: #e8491d 2px solid;">

				</article>

				<script>
			            function insert(){
			                //Create request object
			                var request = new XMLHttpRequest();

			                //Create event handler that specifies what should happen when server responds
			                request.onload = function(){
			                    //Check HTTP status code
			                    if(request.status === 200){
			                        //Get data from server
			                        var responseData = request.responseText;

			                        //Add data to page
			                        alert("Product Successfully Inserted")
			                    }
			                    else
			                        alert("Error communicating with server: " + request.status);
			                };

											request.open("POST", "insert_products.php");
							request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

							//Extract registration data
							var prodId = document.getElementById("P_id").value;
							var prodName = document.getElementById("PName").value;
							var prodDescription = document.getElementById("Description").value;
							var prodStock = document.getElementById("quantity").value;
							var prodPrice = document.getElementById("Price").value;
							var prodImage = document.getElementById("ImageURL").value;

							//Send request
							request.send("P_id=" + prodId + "&PName=" + prodName + "&Description=" + prodDescription + "&quantity=" + prodStock + "&Price=" + prodPrice + "&ImageURL=" + prodImage);
					}


			</script>

				<!--Update Product section-->
				<article id="center-col">
					<h1 id="update-product">Update Products</h1>
						<form class="info" action="product_update_forms.php" method="post">
							<div>
								<label>Product Name</label><br>
								<input type="text" name="search" placeholder="Product Name">
							</div> <br>
							<button class="button_1" type="submit" value="Sp">Search Product</button> <br>
							 <br>
							<hr style="border: #e8491d 2px solid;">
						</form>

				</article>

				<!--Delete Product section-->
				<article id="center-col">
					<h1 id="delete-product">Delete Products</h1>
						<form class="info" action="delete_product.php" method="post">
							<div>
								<label>Product ID</label><br>
								<input type="text" name="id" placeholder="Product ID" >
							</div> <br>
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
