<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_snack WHERE id_snack = '$id'";

if($connection->query($query)) {
    header("location: ../index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>