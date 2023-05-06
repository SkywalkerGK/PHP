<?php
//http://localhost:8255/colorful09af/index.php
?>

<?php 
//require ("helper/header.php");

$foods = [
    [
        "title" => "อาหารแมวน้อย",
        "price" => 299
    ],

    [
        "title" => "อาหารหมา",
        "price" => 399
    ]

];

echo $foods[0]["title"];

//for ($i=0;$i < count($foods);$i++) {
//    $food = $foods[$i];
//    echo "<h2>$food[title]</h2>";
//    echo "<p>$food[price]</p>";
//}

foreach ($foods as $food) {
    echo "<h2>$food[title]</h2>";
    echo "<p>$food[price]</p>";
}

?>
