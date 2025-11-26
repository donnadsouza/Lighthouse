<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->Lighthouse;

//Get id, email and password strings - need to filter input to reduce chances of SQL injection etc.
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$_id = filter_input(INPUT_POST, '_id', FILTER_SANITIZE_STRING);

//Convert to PHP array
$userData = [
  "username" => $username,
	"email" => $email, 
	"password" => $password,
	"_id" => new MongoId($_id)
	];

//Save the product in the database - it will overwrite the data for the product with this ID
$returnVal = $db->User->save($userData);

//Echo result back to user
if($returnVal['ok']==1){
  echo '<script langauge="javascript">';
  echo 'alert("Profile successfully updated")';
  echo 'window.location.href=("profile.php");';
  echo '</script>';
}
else {
  echo '<script langauge="javascript">';
  echo 'alert("Error Updating Profile")';
  echo 'window.location.href=("profile.php");';
  echo '</script>';
}

//Close the connection
$mongoClient->close();
