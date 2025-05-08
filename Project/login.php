<?php
session_start();

$default_email ="abc@gmail.com";
$default_password ="password";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == $default_email){
        if($password == $default_password)
        {
            $_SESSION['student_login']='login successful';
            header("Location: student/index.php");
        }
        else{
            echo "Wrong password";
        }
        
    }else{
        echo "<span style='color:red;'>wrong email</span>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        Email
        <input type="email" name="email"> 
        Password:
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>