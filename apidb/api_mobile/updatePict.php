<?php

header ('Content-Type: application/json');

include '../koneksi.php';

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$id = $_POST['id'];

// Move uploaded file to destination folder
move_uploaded_file($file_tmp, 'file/' . $foto);

// Update the 'pict' column in the 'user' table
$query = "UPDATE `user` SET `pict` = ? WHERE id = ?";
$stmt = mysqli_prepare($con, $query);

// Bind parameters
mysqli_stmt_bind_param($stmt, "si", $foto, $id);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "File uploaded and database updated successfully.";
} else {
    echo "Error updating database: " . mysqli_error($con);
}

?>