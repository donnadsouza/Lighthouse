<?php
    //Get username, email and password strings - need to filter input to reduce chances of SQL injection etc.
    $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	
	if($username != "" && $email != "" && $password != ""){//Check query parameters 
	
		//Connect to database
		$mongoClient = new MongoClient();

		//Select a database
		$db = $mongoClient->Lighthouse;

		//Select a collection 
		$collection = $db->User;

		//Convert to PHP array
		$dataArray = [
			"username" => $username, 
			"email" => $email, 
			"password" => $password
		 ];

		//Add the new user to the database
		$returnVal = $collection->insert($dataArray);
			
		//Echo result back to user
		if($returnVal['ok']==1){
			//Output message confirming registration
			echo '<script>alert("Thank you for registering!")</script> ';
		}
		else {
			echo '<script>alert("Error adding user")</script>';
		}

	}
	
	else{//A query string parameter cannot be found
        echo '<script>alert("Registration data missing")</script>';
    }
	
	header('Location: signup.php'); //Close the connection	
	//Close the connection
	$mongoClient->close();	
?>