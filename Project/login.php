<?php
include_once 'config/config.php';

// command to install php mailer
// composer require phpmailer/phpmailer


require '../vendor/autoload.php'; // Include PHPMailer if using Composer
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



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

        // code of mailer

        
        // Email Sending Code - PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nagarctservices@gmail.com';
            $mail->Password = 'gnpl gqhu pukx gmal'; // Ensure this is a secure App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Email Details
            $mail->setFrom('nagarctservices@gmail.com', 'NagarYatra');
            $mail->addAddress($email, "unknown");
            $mail->isHTML(true);
            $mail->Subject = "Login";

            $mail->Body = "
                            Login successfuly                        ";

            $mail->AltBody = "Dear $name, you have requested to reset your NagarYatra password. Your temporary password is: $password. It will expire in 2 minutes. If you did not request this, please ignore this email or contact support.";

            $mail->send();

            $_SESSION['login'] = "login successful"
            header("Location: student/index.php");


        }catch (Exception $e) {
            $_SESSION['error'] = "Email could not be sent. Error: " . $mail->ErrorInfo;
        }
   
    }}}
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