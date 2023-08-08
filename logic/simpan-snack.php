<?php

//include koneksi database
include('../koneksi.php');
require "function-gambar.php";
//get data dari form
$barcode           = $_POST['barcode'];
$nama_snack = $_POST['nama_snack'];
$jenis       = $_POST['jenis'];
$gambar = upload();
$harga = $_POST['harga'];

if( !$gambar){
    return false ;
}

//query insert data ke dalam database
$query = "INSERT INTO tbl_snack (barcode, nama_snack, jenis, gambar, harga) VALUES ('$barcode', '$nama_snack', '$jenis', '$gambar', '$harga')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
    header("location: ../view/tambah-snack.php");

}

?>