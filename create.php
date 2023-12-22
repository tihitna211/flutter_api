<?php 

require('db.php');

if($conn){

    //if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $email = $_POST['email'];
$password = $_POST['password'];
//$targetFile = $target . basename($_FILES['image']['name']);



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
    

}else { 
    $response["success"] = false;
    $response["message"] = "Connections failed";
}


?>