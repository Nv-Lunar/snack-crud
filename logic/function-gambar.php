<?php 
function upload(){

$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tmpName = $_FILES['gambar']['tmp_name'];

//cek apakah ada gambar yang di upload
if($error === 4){
    echo
    "<script>
    alert('pilih gambar dulu !');
    </script>";
    return false ;
}
//cek yang di upload gambar/bukan
$ekstensiGambarValid = ['jpg', 'png','jpeg'];
$ekstensiGambar = explode('.',$namaFile) ;
$ekstensiGambar = strtolower(end($ekstensiGambar)) ;

if( !in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
    alert('yang anda upload bukan gambar !');
    </script>";
    return false ;
}
//cek jika ukuran besar
if($ukuranFile > 100000000000){
    echo
    "<script>
    alert('ukuran file terlalu besar !')
    </script>";
    return false ;
}

//lolos pengecekan, gambar siap di upload
//generate nama gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .= '.'; 
$namaFileBaru .= $ekstensiGambar; 

move_uploaded_file($tmpName, '../img/' . $namaFileBaru);
return $namaFileBaru ;
}

?>