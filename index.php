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

//foreach ($foods as $food) {
//    echo "<h2>$food[title]</h2>";
//    echo "<p>$food[price]</p>";
//}

?>

<?php foreach ($foods as $food): ?>
    <div>
        <h2> <?php echo $food["title"]; ?> </h2>
        <p>ราคา = <?php echo $food["price"] ?> บาท</p>
    </div>
<?php endforeach; ?>

