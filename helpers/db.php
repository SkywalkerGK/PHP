<?php
$hostname = "localhost";
$username = "root";
$password = "0817260364";
$database = "php_colorful09af";
$port = 3306;

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname,$username,$password,$database,$port);

//if (!$connection) {
//    die("ทอดสะพานไม่ได้" . mysqli_connect_error());
//}
//else {
//    echo "ทอดสะพานได้แล้ว";
//}