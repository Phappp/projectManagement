<?php
include "../php/connect.php";
if (isset($_POST['btn-reg'])) {
    $namee = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    if (!empty($namee) && !empty($pass) && !empty($email)) {
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO tbl_register (name,password,email) VALUES('$namee','$pass','$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Lưu dữ liệu thành công";
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin!";
    }
}
?>
<style>
button {
    margin-left: 80px;
    margin-top: 24px;
    height: 30px;
    width: 100px;
    cursor: pointer;
}
</style>
<a href="./index.php"><button>QUAY LẠI</button></a>