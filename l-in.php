<?php
include "../php/connect.php";


if (isset($_POST['btn-login'])) {
    $usernamee = $_POST['name'];
    $passwordd = $_POST['password'];
    if (!empty($usernamee) && !empty($passwordd)) {
        echo "<pre>";
        print_r($_POST);

        $query = "SELECT *FROM tbl_register WHERE name='$usernamee' AND password ='$passwordd' ";
        $result = $conn->query($query);
        if ($result->num_rows === TRUE) {
            header("Location: login-suscess.php");
            exit();
        } else {
            // imap_alerts();
            header("Location:  login-fail.php");
            // echo '<script>alert("THÔNG TIN KHÔNG CHÍNH XÁC")</script>';
            exit();
        }
        $conn->close();
    } else {
        echo "Bạn cần nhập đầy đủ thông tin!";
    }
}