<?php
    //Start session management
    session_start();

    //Get username and password strings - need to filter input to reduce chances of SQL injection etc.
    $Username= filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);

    //Connect to MongoDB and select database
    $mongoClient = new MongoClient();
    $db = $mongoClient->Lighthouse;

    //Create a PHP array with our search criteria
    $findCriteria = [
        "Username" => $Username
     ];

    //Find all of the users that match  this criteria
    $cursor = $db->Admin->find($findCriteria);

    //Check that there is exactly one user
    if($cursor->count() == 0){
        echo '<script language="javascript">'; echo 'alert("Username not recognized")';  echo '</script>'
;        return;
    }
    else if($cursor->count() > 1){
        echo 'Database error: Multiple customers have same username.';
        return;
    }

    //Get user
    $Admin = $cursor->getNext();

    //Check password
    if($Admin['Password'] != $Password){
        echo '<script language="javascript">'; echo 'alert("Password incorrect")';
 echo '</script>';       return;
    }

    //Start session for this user
    $_SESSION['loggedInUsrUsername'] = $Username;

 header('Location: viewcms.php');     //Inform web page that login is successful
    echo 'ok';

    //Close the connection
    $mongoClient->close();
