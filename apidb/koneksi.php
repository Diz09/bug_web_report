<?php

$servername = "localhost"; // default localhost
$username   = "root"; // default root
$password   = ""; // default kosong
$database   = "c_vios0"; //nama db

$koneksi    = mysqli_connect($servername, $username, $password, $database);

//cek jika koneksi gagal
if(mysqli_connect_errno()) {
    echo "Koneksi gagal : " . mysqli_connect_error();
}

?>