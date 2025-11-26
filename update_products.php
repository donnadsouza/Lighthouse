<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->Lighthouse;

//Extract the customer details
$P_id= filter_input(INPUT_POST, 'P_id', FILTER_SANITIZE_STRING);
$PName = filter_input(INPUT_POST, 'PName', FILTER_SANITIZE_STRING);
$Description = filter_input(INPUT_POST, 'Description', FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
$Price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Construct PHP array with data
$productsData = [
  "P_id" => $P_id,
  "PName" => $PName,
  "Description" => $Description,
  "quantity" => $quantity,
  "Price" => $Price,
  "_id" => new MongoId($id)
];

//Save the product in the database - it will overwrite the data for the product with this ID
$returnVal = $db->Products->save($productsData);

//Echo result back to user
if($returnVal['ok']==1){
    echo '<script langauge="javascript">';
  echo 'alert("Product successfully updated");';
  echo 'window.location.href=("editcms.php");';
  echo '</script>';
}
else {
  echo '<script langauge="javascript">';
  echo 'alert("Error Updating Product");';
  echo 'window.location.href=("editcms.php");';
  echo '</script>';
}

//Close the connection
$mongoClient->close();
