<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <?php
        include("connection.php");
    ?>
    <style>
        table, tr, th, td{
            border: solid 1px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Student Enrollment</h1>
    <hr>
    <h3>Student Information</h3>
    <a href="insert.php"><button>Add Student</button></a>
    <p></p>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Section</th>
            <th>Subject Title</th>
            <th>Subject Description</th>
            <th>Instructor</th>
            <th>Date of Enrollment</th>
            <th>Actions</th>
        </tr>
        <?php
            $query = "SELECT stu.*, sub.*, enr.* FROM students stu, subjects sub, enrollment enr WHERE stu.student_id = enr.student_id AND sub.subject_id = enr.subject_id";

            $result = ($conn -> query ($query));

            while ($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $row ['student_id']?></td>
                        <td><?php echo $row ['first_name']?></td>
                        <td><?php echo $row ['last_name']?></td>
                        <td><?php echo $row ['date_of_birth']?></td>
                        <td><?php echo $row ['section']?></td>
                        <td><?php echo $row ['subject_title']?></td>
                        <td><?php echo $row ['subject_desc']?></td>
                        <td><?php echo $row ['instructor']?></td>
                        <td><?php echo $row ['date_of_enrollment']?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['student_id']?>">Update</a> 
                            <a href="delete.php?id=<?php echo $row['student_id']?>">Delete</a>
                        </td>
                    </tr>

                <?php
            }
        ?>
    </table>
</body>
</html>