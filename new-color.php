<?php 
//http://localhost:8255/colorful09af/new-color.php
require("helpers/db.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสีใหม่ | Colorful 09AF</title>
</head>
<body>
    <div>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php
                //var_dump($_POST);
                $code = mysqli_real_escape_string($connection,$_POST["code"]);
                $title = mysqli_real_escape_string($connection,$_POST["title"]);
                $sql = "INSERT INTO color(title,code) VALUES ('$title' , '$code')";
                $result = mysqli_query($connection,$sql);
                //var_dump($result);
            ?>
            <?php if ($result): ?>
                <h3>บันทึกสีเรียบร้อย</h3>
                <p>
                    <a href="./">กลับหน้าแรก</a>
                </p>
            <?php else: ?>
                <h3>บันทึกสีผิดพลาด</h3>
                <p>
                    <a href="new-color.php">เพิ่มสีใหม่อีกครั้ง</a>
                </p>
            <?php endif; ?>
        <?php else: ?>  
            <form method="post">
                <p>
                    <label>โค้ดสี</label>
                    <input type="color" name="code">
                </p>
                <p>
                    <label>ชื่อสี</label>
                    <input type="text" name="title">
                </p>
                <p>
                    <button type="submit">บันทึกสี</button>
                </p>
            </form> 
        <?php endif; ?>

    </div>
</body>
</html>

<?php mysqli_close($connection); ?>
