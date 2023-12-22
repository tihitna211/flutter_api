<?php
    // Connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "flutter_database";

    $conn = mysqli_connect($server, $username, $password, $db);
    if($conn){
        echo "Successfully Connected";
    }else{
        echo "Error Connecting";
    }

    echo "<br>";


    $sql = "DELETE FROM products WHERE product_id=4";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data Deleted successfully";
    }


?>