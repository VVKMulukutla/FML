<?php
    $credentials = [
        'admin' => 'admin',
        'vamsi' => 'test',
        'krishna' => 'test',
    ];    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['uname'];
        $pass = $_POST['pass'];

        if (isset($credentials[$name]) && $credentials[$name]=== $pass){
            // echo "<p>Logged in successfully</p>";
            header("Location: validated.php");
        }
        else{
            // echo "<p>Invalid username or password</p>";
            header("Location: rejected.php");
        }

    } else{
        header("Location: form.html");
        exit();
    }
?>