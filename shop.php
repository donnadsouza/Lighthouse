<?php
	include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Shop');
	outputBannerNavigation('Shop');
?>
	<script src="logout.js"></script>

	<!--Search bar-->
	<section id="newsletter">
		<div class="container">
			<h1>Search From Our Collection</h1>
			<form action="search_result.php" method=post>
				<input type="text" name="search" placeholder="Search a product...">
				<input type="submit" class="button_1" >
			</form>
		</div>
	</section>
	
	 <!--Products section-->
	<section id="main1">
		<div class="container">
		
			<!-- PHP loads product information -->        
			<?php

			//Connect to MongoDB and select database
			$mongoClient = new MongoClient();
			$db = $mongoClient->Lighthouse;
			
			//Find all products
			$Products = $db->Products->find() -> sort(array("Price" => 1));
				
			//Output results onto page
			if($Products->count() > 0){
			echo '<div id="boxes">' ;
			foreach ($Products as $document) {
			echo '<div class="box">';
					echo '<img src=' . $document["ImageURL"] .'><br>';
					echo '<p hidden>' . $document["P_id"] . '</p>';
					echo '<b>' . $document["PName"] . '</b>';
					echo '<br>'. $document["Description"] . '<br>';
					echo '<b>'. $document["Price"] . '</b> <br>';
					echo '<button class="button_1" type="submit" value="Add" onclick=\'basket.add("' . $document["P_id"] . '","' . $document["PName"] . '", "' . $document["Price"] . '",1)\'>';
					echo 'Add To Cart</button><br><br>';
					echo '</div>';
				}
			echo '</div>';
			}

			$mongoClient->close(); //Close the connection
			
			?>

			<!--Selection bar-->
			<aside id="side-col">
				<div class="shade">
					<h3> Cart </h3>
				<!-- Displays contents of cart -->    
				<script src="cart.js"></script>
				<div id="BasketDiv">Loading...</div>
				<script>
					//Create a new cart
					var basket = new Basket("cart.php");
					basket.get();
				</script>
					<button class='button_1' type='submit' value='Empty' onclick='basket.empty()'>Empty Cart</button> &nbsp; &nbsp; &nbsp; &nbsp;
					<button class='button_1' type='submit' value='BuyNow' onclick='basket.checkout()'>Buy Now</button>
				</div>
			</aside>
		</div>
	</section>

<?php
	//Output the footer
	outputFooter();
?>
