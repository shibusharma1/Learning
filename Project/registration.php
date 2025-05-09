<?php
include_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name', '$email' ,'$password')";
    if (mysqli_query($conn, $sql)) {
        // echo "Data inserted into table";
        header("Location: login.php");

    } else {
        echo "Failed to insert data";
    }




}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Simple Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2 class="mb-4">Registration Form</h2>
    <form action="" method="POST" style="max-width: 500px;">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
</body>

</html>