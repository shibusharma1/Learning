<?php
$server ="localhost";
$user ="root";
$password="";
$dbname ="learning";

$conn = mysqli_connect($server,$user,$password,$dbname);

// $sql = "SELECT * FROM users WHERE email= 'shibu@gmail.com'";
// if (mysqli_query($conn, $sql)) {
//     // echo "User Found";
//     $sql1 =mysqli_query($conn,$sql);
//     if(mysqli_num_rows($sql1) > 0){
//     $row = mysqli_fetch_assoc($sql1);
//     if($row['password']==$password){
//             header("Location: student/index.php");

//     }


//     }













// } else {
//     echo "Error Creating table: " . mysqli_error($conn);
// }






?>