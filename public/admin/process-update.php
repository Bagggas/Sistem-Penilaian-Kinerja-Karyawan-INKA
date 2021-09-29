<?php
  include "../../config.php";
  
  $no=$_POST['no'];
	$id=$_POST['id'];
	$status=$_POST['status'];
	$nama = $_POST['nama'];
	$golongan = $_POST['golongan'];
	$divisi = $_POST['divisi'];
	$nilai_output = $_POST['nilai_output'];
	$nilai_atasan = $_POST['nilai_atasan'];
	$nilai_learning = $_POST['nilai_learning'];
	$nilai_kedisiplinan = $_POST['nilai_kedisiplinan'];
	$nilai_5r = $_POST['nilai_5r'];
  
  $query ="UPDATE tkaryawans SET id = '$id', status = '$status', nama = '$nama', golongan = '$golongan', divisi = '$divisi', nilai_output = '$nilai_output', nilai_atasan = '$nilai_atasan', nilai_learning = '$nilai_learning', nilai_kedisiplinan = '$nilai_kedisiplinan', nilai_5r = '$nilai_5r', tanggal = NOW() WHERE no = '$no'";
  
  $stmt = mysqli_prepare($koneksi, $query);
  mysqli_stmt_bind_param($stmt, "sssssssss",$no, $id,$status,$nama, $nilai_output, $nilai_atasan, $nilai_learning, $nilai_kedisiplinan, $nilai_5r, $tanggal);

  mysqli_stmt_execute($stmt);

  if (!$stmt) {
    die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
    } 
    else {
      header('location:../../public/admin/page_admin.php?pesan=berhasil-edit#card-data');
    }
  
  mysqli_stmt_close($stmt);
  mysqli_close($koneksi); 
?>