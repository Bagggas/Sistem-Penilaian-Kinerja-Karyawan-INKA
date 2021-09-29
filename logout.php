<?php
session_start();
$_SESSION['id']= NULL;
$_SESSION['level']= NULL;
unset($_SESSION);

session_destroy();
 
header('location:index.php?pesan=berhasil-logout');

?>