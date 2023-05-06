<?php
//http://localhost:8255/colorful09af/index.php
?>

<?php
require("helpers/db.php");

$sql = "SELECT * FROM color";
$result = mysqli_query($connection,$sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
    var_dump($row);
    echo  "<h4>$row[title]</h4>";
    echo  "<p>$row[code]</p>";
}


mysqli_close($connection);

