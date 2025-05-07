<?php 
$a=false;
if($a){
   $name="Ram";
}
else{
   $name="sita";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>

    <h1>Hello World</h1>
    <?php echo "<h1>".$name."</h1>"; ?>
    <a href="../index.php">Index</a>
    <a href="../new/hello.php">New</a>
</body>
</html>