<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Alterations</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testingdata";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn -> connect_error){
        die("Connection failed : "+$conn -> connect_error);
    }
    $sql = "SELECT * FROM students";
    $result = $conn -> query($sql);
    if($result->num_rows > 0){
        echo '<table>';
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['number'].'</td>';
            echo '<td>'.$row['dept'].'</td>';
            echo '<tr>';
        }
        echo '</table>';
    }
    $conn -> close();
?>
</body>
</html>