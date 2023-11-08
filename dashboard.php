<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] !== true){
    header("location: loginform.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']?>!</h1>
    <p><a href="logout.php">Click here to log out</a></p>
</body>
</html>