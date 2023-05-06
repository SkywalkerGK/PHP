<?php
//http://localhost:8255/colorful09af/new-color.php
require("helpers/db.php");

$sql = "INSERT INTO color(title,code) VALUES ('แดงเฉย ๆ' , '#FE0000')";
$result = mysqli_query($connection,$sql);
var_dump($result);


 mysqli_close($connection);