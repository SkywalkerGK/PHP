<?php 
//http://localhost:8255/colorful09af/index.php
require("helpers/db.php"); 
?>

<?php
$searchTitle = "";
$searchValue = "";
if (isset($_GET["search"])) {
    $searchTitle = "ค้นหา \"$_GET[search]\" | ";
    $searchValue = $_GET["search"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $searchTitle; ?> Colorful 09AF</title>
    <link rel="stylesheet" href="./static/style.css">
</head>
<body>
    <header class="site-header">
        <h2>Colorful 09AF</h2>
        <p>
            <a href="./">หน้าแรก</a>
            <a href="./new-color.php">เพิ่มสีใหม่</a>
        </p>
    </header>
    <section class="section">
        <div class="container">
            <?php
                //var_dump($_GET["search"]);              
                $sql = "SELECT * FROM color ";
                if (isset($_GET["search"])) {
                    $search = mysqli_real_escape_string($connection,$_GET["search"]);
                    $sql .= "WHERE title LIKE '%$search%' ";
                }
                $sql .= "ORDER BY id DESC";
                $result = mysqli_query($connection,$sql);
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
            <form>
                <p>
                    <input type="search" name="search" value="<?php echo $searchValue; ?>">
                    <button type="submit">ค้นหา</button>
                </p>
            </form>
            <h3>พบสี <?php echo count($rows); ?> รายการ</h3>
            <?php foreach ($rows as $row): ?>
                <div class="color-item" style="border-color: <?php echo $row["code"]; ?>;">
                    <h4><?php echo $row["title"]; ?></h4>
                    <p><?php echo $row["code"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>
</html>

<?php //mysqli_close($connection); ?>



