<?php

	//Connect to database
	$mongoClient = new MongoClient();

	//Select a database
	$db = $mongoClient->Lighthouse;

	//Select a collection 
	$collection = $db->Subscription;

	//Extract the data that was sent to the server
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

	//Convert to PHP array
	$dataArray = [
		"email" => $email
	 ];

	//Add the new email to the database
	$returnVal = $collection->insert($dataArray);
		
	//Echo result back to user
	if($returnVal['ok']==1){
		echo 'ok' ;
	}
	else {
		echo 'Error adding information';
	}

	header('Location: index.php'); //Close the connection  

	//Close the connection
	$mongoClient->close();
?>
