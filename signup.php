<?php 

require('db.php');

if($conn){

    //if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $email = $_POST['email'];
$password = $_POST['password'];
$targetFile = $target . basename($_FILES['image']['name']);

$sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response["success"] = false;
    $response["message"] = "user exists";
    
    
    
} else {

        $sql = "INSERT INTO user  (email, password)
                VALUES ('$email', '$password') ";
                
        $reslt = $conn->query($sql);

        if($reslt){
            $response["code"] = 201;
            $response["success"] = true;
            $response["message"] = "Registered";
            
        }else{

            $response["success"] = false;
            $response["message"] = "registration falied";
            
        }
}
echo json_encode($response);
}
