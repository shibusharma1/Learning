<?php
include_once 'config/config.php';
session_start();



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $password;


    $sql = "SELECT * FROM users WHERE email= '$email'";

    $sql1 =mysqli_query($conn,$sql);



    if(mysqli_num_rows($sql1) > 0){
    $row = mysqli_fetch_assoc($sql1);

    // echo $row['name'];
    // echo $row['email'];
    // echo $row['password'];
    // exit;



    if($row['password'] == $password){
        $_SESSION['login'] = "login";
            
            header("Location: student/index.php");

    }

    
}
else{
    echo "User not found.Please Register first.";
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