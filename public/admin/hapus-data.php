<?php
// Panggil koneksi database
require "../../config.php";

if (isset($_GET['id'])) 
  {
    $query = "DELETE FROM tkaryawans WHERE no=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "i", $no);
    $no = $_GET['id'];
    mysqli_stmt_execute($stmt);	
    header('location:../../public/admin/page_admin.php?pesan=berhasil-hapus#card-data');
    mysqli_stmt_close($stmt);
  }	
mysqli_close($koneksi);			
?>