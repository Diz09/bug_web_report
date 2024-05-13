<?php

$servername = "localhost";
$username   = "id21452276_vioscake1";
$password   = "Slaoapwan211#@";
$database   = "id21452276_vioscakedb"; //nama db

$koneksi    = mysqli_connect($servername, $username, $password, $database);

//cek jika koneksi gagal
if(mysqli_connect_errno()) {
    echo "Koneksi gagal : " . mysqli_connect_error();
}

?>