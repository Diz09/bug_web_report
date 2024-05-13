<?php

include "koneksi.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    $query = "SELECT * FROM user WHERE user_email = '$username' AND user_password = '$password' AND id_level = 2";
    $result = $koneksi -> query($query);
    
    if ($result) {
        $hasil = $result -> fetch_all(MYSQLI_ASSOC);
        $response = array(
            'code' => 200,
            'status' => 'sukses',
            'data' => $hasil
        );
        echo json_encode($response);
    } else {
        http_response_code(500);
        $response = array(
            'code' => 500,
            'status' => 'gagal',
            'data' => array()
        );
        echo json_encode($response);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('error' => 'Method not allowed.'));
}

?>