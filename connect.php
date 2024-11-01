<?php
// include "../configDb/config.php";
// include "./admin/configDb/config.php";

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "project_management";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("kết nối không thành công: " . $conn->connect_error);
}