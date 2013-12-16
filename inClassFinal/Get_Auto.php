<?php
// Database Connection
include("FinalTBox.php");
	$likeString = '%' . $_GET['term'] . '%';
    $STM = $dbh->prepare("SELECT city FROM US_Zip_Codes WHERE state LIKE :likeString");
// bind parameters, Named parameters always start with colon(:)
    $STM->bindParam(':likeString', $likeString);
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
// Deifne array for category.
	$city_array = array();
// Use for each loop to push all results in category array.
foreach($STMrecords as $row)
{
// Store all values in $result variable.
$result = $row[0];
// push all values in category array using array_push function which treats array as a stack, and pushes the passed variables onto the end of array.
array_push($city_array, $result);	
}
// encode it using json_encode which returns a string containing the JSON representation of value.		
$json = json_encode($city_array);
// echo it for getting it using Ajax function explained above.
echo $json;          
?>