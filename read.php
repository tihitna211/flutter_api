<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=UTF-8');

    // Connection
    require('db.php');

    // Command
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    $response = array();

    if( $result->num_rows > 0 ){
        while( $row = $result->fetch_assoc() ){
            $response[] = $row;
        }
    }

    echo json_encode($response);

?>