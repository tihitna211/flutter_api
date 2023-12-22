<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

require('db.php');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from Flutter app
$target = "images/";
$targetFile = $target . basename($_FILES['image']['name']);

if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
    
}


// Close the connection
// $conn->close();
?>