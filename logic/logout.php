<?php
session_start();
unset($_SESSION['login']);
//atau
session_destroy();

header('location: ../index.php');
?>