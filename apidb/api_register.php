<?php

include "koneksi.php";

$email = $_POST['user_email'];
$password = $_POST['user_password'];
$nama = $_POST['user_fullname'];

$queryRegister = "SELECT * FROM user WHERE user_email = '".$email."'";

$msql = mysqli_query($koneksi, $queryRegister);

$result = mysqli_num_rows($msql);

if (!empty($email) && !empty($password) && !empty($nama)) {
    if($result == 0) {
        $regis = "INSERT INTO user (user_email, user_password, user_fullname, id_level)
        VALUES ('$email','$password','$nama', 2)";

        $msqlRegis = mysqli_query($koneksi, $regis);

        echo "berhasil";
    } else {
        echo "username sudah digunakan";
    }
} else {
    echo "semua data harus terisi";
}

?>