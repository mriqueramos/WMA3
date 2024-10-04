<?php
    $conn = new mysqli ("localhost", "root", "","php_exam");

    if ($conn -> connect_error){
        die("Failed to connect!". $conn->connect_error);
    } else {
        // echo "Connected Successfully!";
    }

?>