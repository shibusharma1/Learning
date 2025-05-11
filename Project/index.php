<?php
include_once 'config/config.php';
session_start();
$_SESSION['home'] = "Welcome";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<>

    <h1>Landing page</h1>



    
<?php 
if(isset($_SESSION['home'])){
?>


<script>
Swal.fire('Hello!', 'This is a SweetAlert message.', 'success');
</script>




<?php
}
?>

    <!-- <a href="student/index.php">Student Login</a> -->
    <a href="admin/index.php">Admin Login</a>
    <a href="Login.php">Login Here</a>
</body>

</html>