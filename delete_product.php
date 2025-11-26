<?php

//Connect to MongoDB
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->Lighthouse;

//Extract ID from POST data
$ProdID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Build PHP array with remove criteria 
$remCriteria = [
    "_id" => new MongoId($ProdID)
];

//Delete the customer document
$returnVal = $db->Products->remove($remCriteria);
    
//Echo result back to user
 if($returnVal['ok']==1){
    echo '<script language="javascript">'; 
	echo 'alert("Product successfully deleted");';
	echo 'window.location.href=("editcms.php");';
	echo '</script>'; 
	} 
else{
  echo '<script language="javascript">';
  echo 'alert("Error deleting the product");'; 
  echo 'window.location.href=("editcms.php");';
  echo '</script>'; 
}



//Close the connection
$mongoClient->close();