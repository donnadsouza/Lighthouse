<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->Lighthouse;

//Select a collection
$collection = $db->Products;

$P_id= filter_input(INPUT_POST, 'P_id', FILTER_SANITIZE_STRING);
$PName = filter_input(INPUT_POST, 'PName', FILTER_SANITIZE_STRING);
$Description = filter_input(INPUT_POST, 'Description', FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
$Price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_STRING);
$ImageURL = filter_input(INPUT_POST, 'ImageURL', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "P_id" => $P_id,
    "PName" => $PName,
    "Description" => $Description,
    "quantity" => $quantity,
    "Price" => $Price,
    "ImageURL" => $ImageURL
 ];

 //Add the new product to the database
 $returnVal = $collection->insert($dataArray);

 //Echo result back to user
 if($returnVal['ok']==1){
     echo '<script langauge="javascript">';
     echo 'alert("Product successfully inserted")';
     echo '</script>';
 }
 else {
     echo '<script langauge="javascript">';
     echo 'alert("Error inserting Product")';
     echo '</script>';
 }

 //Close the connection
 $mongoClient->close();
