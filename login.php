<?php

header("Access-Control-Allow-Origin: *" );
header('Content-Type: application/json; charset=UTF-8');


require('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//if($_SERVER['REQUEST_METHOD'] == 'POST' ){
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response["success"] = true;
    $response["message"] = "Login successful";
    $response["token"] = generateToken();
    
} else {
    $response["success"] = false;
    $response["message"] = "Login failed";
}

echo json_encode($response);
$conn->close();

function generateToken() {
    $token = bin2hex(random_bytes(32));
    return $token;
}
?>