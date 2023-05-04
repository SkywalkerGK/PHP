<?php
//http://localhost:8255/colorful09af/index.php
?>

<?php 
function total_price($number,$price) {
    $total = $number * $price; 
    return $total;
}

$number1 = 5;
$price1 = 10;
$value1 = total_price($number1 , $price1);
echo "<h1> $value1 </h1>";

$value2 = total_price(10,15);
echo "<h2> $value2 </h2>";


?>
