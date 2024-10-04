<?php

    include("connection.php");
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE student_id = '$id'";
    if (mysqli_query($conn, $query)){
        echo "<script>alert('Deleted Successfully!')</script>";
        echo "<script>window.location.href='main.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete!')</script>";
    }

?>