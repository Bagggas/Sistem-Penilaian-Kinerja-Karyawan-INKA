<?php 
session_start();
include 'config.php';

$stmt = $koneksi->prepare("SELECT * FROM user where id=? and password=?");
$stmt->bind_param("is", $id,$hash);

$id = $_POST['idlog'];
$password = $_POST['passworddb'];
$hash = hash('sha256',$password);

$stmt->execute();
$result = $stmt->get_result();

$cek = mysqli_num_rows($result);

if($cek > 0){
	$data = $result->fetch_assoc();
	$_SESSION['divisi'] = $data["divisi"];

	if($data['level']=="admin"){
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "admin";
		header("location:public/admin/home_admin.php?pesan=berhasil");
	}
	else if($data['level']=="karyawan"){
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "karyawan";
		header("location:public/karyawan/page_karyawan.php?pesan=berhasil");
	}
	else{
		die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
	}	
}
else{
	header("location:index.php?pesan=gagal");
}

mysqli_stmt_close($stmt);

?>