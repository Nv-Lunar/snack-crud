<?php
$db = "db_snack";

$connection = mysqli_connect("localhost", "root", "", $db);

if($connection){
    echo "Koneksi Berhasil";
}else {
    echo "Koneksi Gagal"; mysqli_connect_error();
}
?>