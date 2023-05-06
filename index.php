<?php 
//http://localhost:8255/colorful09af/index.php
require("helpers/db.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful 09AF</title>
</head>
<body>
    <div>
        <?php
            $sql = "SELECT * FROM color";
            $result = mysqli_query($connection,$sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <h3>พบสี <?php echo count($rows); ?> รายการ</h3>
        <?php foreach ($rows as $row): ?>
            <div>
                <h4><?php echo $row["title"]; ?></h4>
                <p><?php echo $row["code"]; ?></p>
            </div>


        <?php endforeach; ?>

    </div>
</body>
</html>

<?php //mysqli_close($connection); ?>



