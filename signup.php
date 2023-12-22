<?php 

require('db.php');

if($conn){

    //if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $email = $_POST['email'];
$password = $_POST['password'];
//$targetFile = $target . basename($_FILES['image']['name']);

$sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response["success"] = false;
    $response["message"] = "user exists";
    $response["token"] = generateToken();
    
} else {

        $sql = "INSERT INTO user  (email, password)
                VALUES ('$email', '$password') ";
                
        $result = $conn->query($sql);

        if($result){
            $response["success"] = true;
            $response["message"] = "Registered";
        }else{
            $response["success"] = false;
            $response["message"] = "registration failed";
            
        }
}

}else { 
    $response["success"] = false;
    $response["message"] = "Connections failed";
}

function generateToken() {
    $token = bin2hex(random_bytes(32));
    return $token;
}
?>