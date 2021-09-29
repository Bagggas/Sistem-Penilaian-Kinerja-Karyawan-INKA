<?php
// Panggil koneksi database
require "../../config.php";

if (isset($_POST['submit'])) {
  
  $query = "INSERT INTO user (id,status,nama,password,level,divisi,golongan) VALUES (?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($koneksi, $query);
  mysqli_stmt_bind_param($stmt, "sssssss" ,$id,$status,$nama, $password_hash, $level, $divisi,$golongan);

  $id = trim($_POST['id']);
  $status = trim($_POST['status']);
	$nama = trim(strtoupper($_POST['nama']));
	$password = $_POST['password'];
	$password_hash = hash('sha256',$password); // hash password
	$level = trim($_POST['level']);
	$divisi = trim($_POST['divisi']);
	$golongan = trim($_POST['golongan']);
  
  mysqli_stmt_execute($stmt);	

	if (!$stmt) {
		die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
	} 
	else {
		header('location:../../public/admin/page_register.php?pesan=berhasil-tambah');
	}
    mysqli_stmt_close($stmt);
}			
?>