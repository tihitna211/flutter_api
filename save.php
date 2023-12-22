<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=UTF-8');

// Connection
$server = "localhost";
$username = "root";
$password = "";
$db = "flutter_database";

// Create a connection
$conn = new mysqli($server, $username, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from Flutter app
$product_name = $_POST['product_name'];
$product_type = $_POST['product_type'];

// Insert the data into the database
$sql = "INSERT INTO products (product_name, product_type) 
        VALUES ('$product_name', '$product_type')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>