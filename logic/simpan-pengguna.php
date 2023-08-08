<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama           = $_POST['nama'];
$email = $_POST['email'];
$password       = $_POST['password'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_pengguna (nama, email, password) VALUES ('$nama', '$email', '$password')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>