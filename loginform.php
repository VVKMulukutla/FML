<?php
    session_start();
    if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin'] == true){
        header("location: dashboard.php");
        exit;
    }
    require "sqlconn.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result = $conn -> query($sql);
        if($result->num_rows >0){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $uname;
            header("location: dashboard.php");
            exit;
        }
        $conn->close(); 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with session</title>
</head>
<body>
    <form action="loginform.php" method="POST">
        Enter username : <input type="text" name="uname" id="uname">
        Enter Password : <input type="password" name="pass" id="pass">
        <input type="submit" value="Login">
    </form>
</body>
</html>