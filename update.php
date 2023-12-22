<?php
    // Connection
    // $server = "omishtujoy.com";
    // $username = "omishtujoyco_flutterapi";
    // $password = "omishtujoyco_flutterapi";
    // $db = "omishtujoyco_flutterapi";

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "flutter_user";



    $conn = mysqli_connect($server, $username, $password, $db);
    if($conn){
        echo "Successfully Connected";
    }else{
        echo "Error Connecting";
    }

    echo "<br>";


    $sql = "UPDATE products SET product_name='Clothes' WHERE product_id=3 ";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data updated successfully";
    }


?>