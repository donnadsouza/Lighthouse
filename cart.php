<?php

	//Start session management
	session_start();

	//Connect to MongoDB and select database
	$mongoClient = new MongoClient();
	$db = $mongoClient->Lighthouse;

	//Create a cart document if we do not have one
	if( !array_key_exists("basket_id", $_SESSION) ){
		
		//Add an cart
		$dataArray = ["Products" => []];
		$returnVal = $db->Cart->insert($dataArray);

		//Check result 
		if($returnVal['ok'] != 1){
			throw new Exception("Error adding empty cart to MongoDB");
		}

		//Store cart ID in session key
		$_SESSION['basket_id'] = (string)$dataArray['_id'];
	}  
	
	//Request for cart
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){
		
		//Find cart with specified ID
		$findCriteria["_id"] = new MongoId($_SESSION['basket_id']);
		$basketCursor = $db->Cart->find($findCriteria);

		//Check that we have found exactly one cart
		$numResults = $basketCursor->count();//Number of Products in database 
		if($numResults == 0){
			throw new Exception("Cart not found");
		}

		//Get cart from basket cursor
		$basket = $basketCursor->next();

		//Return product in JSON format
		echo json_encode($basket);//Convert PHP representation of product into JSON 	
	}
	
	//Modified cart has been sent to server
	else if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
		//Get JSON document containing cart from POST
		$basketJSON = $_POST['json'];

		//Convert JSON string to PHP  array. 'true' converts to array instead of PHP object.
		$basketPHPArray = json_decode($basketJSON, true);

		//Add ID field to cart array
		$basketPHPArray['_id'] = new MongoId($_SESSION['basket_id']);

		//Save the product in the database - it will overwrite the data for the cart with this ID
		$returnVal = $db->Cart->save($basketPHPArray);

		if($returnVal['ok'] != 1){
			throw new Exception("Error updating MongoDB cart.");
		} 
		
		//Cart updated successfully
		echo 'ok';

		 //Add an order document to the database containing product IDs, customer ID, date, count, price etc.
		if (array_key_exists("loggedInUserEmail", $_SESSION)){

			//Add cart array to order array
			$orderPHPArray= $basketPHPArray;

			//Get the user ID from the $_SESSION variable 
			$orderPHPArray['username'] = ($_SESSION['loggedInUserEmail']);
			
			//Save the order in the database
			$return_Val = $db->Order->save($orderPHPArray);

			if($return_Val['ok'] != 1){
				throw new Exception("Error updating MongoDB order.");
			}
		}
		//Request user's details to buy.
		else{
			echo 'You need to login to buy.';
		}
	}
	else{
		throw new Exception("Request method not recognized.");
	}
	
	$mongoClient->close();//Close connection to server
?>