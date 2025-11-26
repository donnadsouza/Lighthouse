<?php

include('common.php'); //PHP file

	//Output header and navigation
	outputHeader('Light House | Search Result');
	outputBannerNavigation('Search Result');
?>
	<script src="logout.js"></script>
	<script src="recommender.js"></script>

	<!--Search bar-->
	<section id="newsletter">
		<div class="container">
			<h1>Search Results</h1> &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="text" name = "search" id="SearchInput"  placeholder="Search more products..." >
				<input type="submit" class="button_1" onclick="search()" >
		</div>
	</section>

	<section id="main1">
		<div class="container">
			<?php

				//Connect to MongoDB
				$mongoClient = new MongoClient();

				//Select a database
				$db = $mongoClient->Lighthouse;

				//Extract the data that was sent to the server
				$search_string = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

				//Create a PHP array with our search criteria
				$findCriteria = [
						'$text' => [ '$search' => $search_string ]
				 ];

				 //Find all of the customers that match  this criteria
				 $Products = $db->Products->find($findCriteria);

				 echo '<div id="boxes">' ;
				 foreach ($Products as $document) {
				 echo '<div class="box">';
				 echo '<img src=' . $document["ImageURL"] .'><br>';
				 echo '<p hidden>' . $document["P_id"] . '</p>';
				 echo '<b>' . $document["PName"] . '</b>';
				 echo '<br>'. $document["Description"] . '<br>';
				 echo '<b>'. $document["Price"] . '</b>';
				 echo '</div>';
					}
				echo '</div>';

				$mongoClient->close();
			?> 

			<h1>Recommended Products</h1>
			<div id="RecomendationDiv"></div>
			<script>
				//Create recommender object - it loads its state from local storage
				var recommender = new Recommender();
				
				//Display recommendation
				window.onload = showRecommendation;
				
				//Searches for products in database
				function search(){
					//Extract the search text
					var searchText = document.getElementById("SearchInput").value;
									
					//Add the search keyword to the recommender
					recommender.addKeyword(searchText);
					showRecommendation();
					
					//#FIXME# PERFORM SEARCH FOR PRODUCTS
				}
				
				//Display the recommendation in the document
				function showRecommendation(){
					document.getElementById("RecomendationDiv").innerHTML = recommender.getTopKeyword();
				}
			</script>

		</div>
	</section>

<?php
	//Output the footer
	outputFooter();
?>

