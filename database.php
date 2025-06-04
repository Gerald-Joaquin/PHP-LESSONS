<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "user_validation";

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die ("Connection field! " . $conn->connect_error);
    }
?>