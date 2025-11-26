<?php  
    
	//Start session management
    session_start();

    //Get username and password strings - need to filter input to reduce chances of SQL injection etc.
    $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);    

    //Connect to MongoDB and select database
    $mongoClient = new MongoClient();
    $db = $mongoClient->Lighthouse;

    //Create a PHP array with our search criteria
    $findCriteria = [
        "username" => $username 
     ];

    //Find all of the users that match  this criteria
    $cursor = $db->User->find($findCriteria);

    //Check that there is exactly one user
    if($cursor->count() == 0){
        echo 'Username not recognized.';
        return;
    }
    else if($cursor->count() > 1){
        echo 'Database error: Multiple customers have same username.';
        return;
    }
   
    //Get user
    $User = $cursor->getNext();
    
    //Check password
    if($User['password'] != $password){
        echo 'Password incorrect.';
        return;
    }
        
    //Start session for this user
    $_SESSION['loggedInUserEmail'] = $username;
	
	//Inform web page that login is successful
    echo 'ok';    
    
    //Close the connection
    $mongoClient->close();
    