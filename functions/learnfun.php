<?php 
// for sorting
if($_SERVER['REQUEST_METHOD']=='POST'){
    $first_number = $_POST['a'];
    $sec_number = $_POST['b'];
    echo $first_number;
    echo "<br>";
    echo $sec_number;
    swap($first_number,$sec_number);
}
function swap($a,$b){
    // using three
    $temp = $a;
    $a = $b;
    $b = $temp;
    //using two variables
    // $a = $a + $b;
    // $b = $a - $b;
    // $a = $a - $b;

    echo "Swapped value: b ".$a;
    echo "<br>";
    echo "Swapped value: a ".$b;
}


?>
