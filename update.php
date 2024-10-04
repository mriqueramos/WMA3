<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <?php
        include("connection.php");
    ?>
</head>
<body>
    <?php
        $id = $_GET['id'];

        $query = "UPDATE enrollment SET date_of_enrollment = CURDATE() WHERE student_id = '$id'";

        if ($conn -> query ($query)){
            echo "<script>alert('Enrollment Date was Updated!')</script>";
            echo "<script>window.location.href='main.php';</script>";
        } else {
            echo "<script>alert('Failed to Update Date!')</script>";
        }
    ?>

</body>
</html>