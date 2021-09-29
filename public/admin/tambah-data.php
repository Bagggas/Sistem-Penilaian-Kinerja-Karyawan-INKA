<?php 
require '../../config.php';
session_start();

if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$divisi = trim($_POST['divisi']);
	
	$result = mysqli_query($koneksi,"SELECT id FROM user WHERE id = '$id'");

	if($id!= $_SESSION['id']){
		$row_count = mysqli_num_rows($result);
		if($row_count == 1)
		{
			if($_SESSION['divisi'] == $divisi ){
				$query = "INSERT INTO tkaryawans (no, id, status, nama, divisi, golongan, nilai_output, nilai_atasan, nilai_learning, nilai_kedisiplinan, nilai_5r,tanggal) 
				VALUES ('',?,?,?,?,?,?,?,?,?,?,NOW())";

				$stmt = mysqli_prepare($koneksi, $query);
				mysqli_stmt_bind_param($stmt, "ssssssssss", $id,$status, $nama, $divisi, $golongan, $nilai_output, $nilai_atasan, $nilai_learning, $nilai_kedisiplinan, $nilai_5r);
		
				$id          = $_POST['id'];
				$status         = $_POST['status'];
				$nama         = trim($_POST['nama']);
				$divisi         = trim($_POST['divisi']);
				$golongan        = trim($_POST['golongan']);
				$nilai_output      = $_POST['nilai_output'];
				$nilai_atasan        = $_POST['nilai_atasan'];
				$nilai_learning         = $_POST['nilai_learning'];
				$nilai_kedisiplinan       = $_POST['nilai_kedisiplinan'];
				$nilai_5r                   = $_POST['nilai_5r'];
		
				mysqli_stmt_execute($stmt);	
				if (!$stmt) {
				die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
				} 
				else {
				header('location:../../public/admin/page_admin.php?pesan=berhasil-tambah#tambah-data');
				}
				mysqli_stmt_close($stmt);
			}
			else{
				header('location:../../public/admin/page_admin.php?pesan=gagal#tambah-data');
			}
		}
		else
		{
			header('location:../../public/admin/page_admin.php?pesan=gagal-id#tambah-data');
		}
	}
	else{
		header('location:../../public/admin/page_admin.php?pesan=gagal-clone#tambah-data');
	}
}	

mysqli_close($koneksi);				
?>