<?php

//include koneksi database
include('../koneksi.php');
include("function-gambar.php");
//get data dari form
// var_dump(
//     $id_snack     = $_POST['id_snack'],
//     $barcode           = $_POST['barcode'],
//     $nama_snack = $_POST['nama_snack'],
//     $jenis       = $_POST['jenis'],
//     $harga = $_POST['harga'],
//     $gambarlama = $_POST['gambarLama'],
// );
$id_snack     = $_POST['id_snack'];
$barcode           = $_POST['barcode'];
$nama_snack = $_POST['nama_snack'];
$jenis       = $_POST['jenis'];
$harga = $_POST['harga'];
$gambarlama = htmlspecialchars($_POST['gambarLama']);

if( $_FILES['gambar']['error'] === 4){
    $gambar = $gambarlama ;
}else{
    $gambar = upload() ;
}


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_snack SET barcode = '$barcode', nama_snack = '$nama_snack', jenis = '$jenis', gambar = '$gambar', harga = '$harga' WHERE id_snack = '$id_snack'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
    header("location: ../view/edit-snack.php");
}

?>