<?php
include('common.php'); //PHP file

//Output header and navigation
outputHeader('Light House | Update Product');
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
$cursor = $db->Products->find($findCriteria);

//Output the results as forms
echo "<h1>Products</h1>";
foreach ($cursor as $prod){
    echo '<form action="update_products.php" method="post">';
    echo '<div>';
    echo '<label>Product Name</label><br>';
    echo ' <input type= "text" name="PName" value= "'. $prod['PName'] . '" placeholder="Name" required>';
    echo '</div>';
    echo '<div>';
    echo '<label>Description</label><br>';
    echo '<input name="Description" value="'. $prod['Description'] . '" placeholder="Description" required>';
    echo '</div>';
    echo '<div>';
    echo '<label>Quantity</label><br>';
    echo '<input type="number" name="quantity" value="'. $prod['quantity'] . '" placeholder="quantity" required>';
    echo '</div>';
    echo '<div>';
    echo '<label>Price</label><br>';
    echo '<input type="number" name="Price" value="'. $prod['Price'] . '" placeholder="Price" required>';
    echo '</div>';
    echo '<input type="hidden" name="id" value="' . $prod['_id'] . '" required>';
    echo '<br>';
    echo '<button class ="button_1" type="submit value"Up">Update Product</button>';
    echo '</form><br>';
}

//Close the connection
$mongoClient->close();
