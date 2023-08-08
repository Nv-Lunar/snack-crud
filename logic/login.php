<?php 
session_start();
require "../koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

 
$login = mysqli_query($connection,"SELECT * FROM tbl_pengguna WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['login'] = true;
	header("location:../index.php");
}else{
	header("location:../index.php");	
}
 
?>
