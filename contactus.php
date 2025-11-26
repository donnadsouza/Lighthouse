<?php

//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->Lighthouse;

//Select a collection 
$collection = $db->ContactUs;

//Extract the data that was sent to the server
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "name" => $name, 
    "email" => $email, 
    "phone" => $phone,
    "subject" => $subject,
    "message" => $message
 ];

//Add the new contact to the database
$returnVal = $collection->insert($dataArray);
    
//Echo result back to user
if($returnVal['ok']==1){
    echo 'ok' ;

}
else {
    echo 'Error adding information';
}

header('Location: contact.php'); //Close the connection  

//Close the connection
$mongoClient->close();
?>