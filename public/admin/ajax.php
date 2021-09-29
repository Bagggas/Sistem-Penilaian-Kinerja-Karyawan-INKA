<?php
include "../../config.php";

  $id = $_GET['id'];
  $query = $koneksi->prepare("SELECT id,nama,status,divisi,golongan FROM user WHERE id = ? ");
  $query->bind_param("i", $id);
  $query->execute();
  $result = $query->get_result();
  $row = $result->fetch_array();
  if(count($row)) 
  {
      $data = array(
                  'status'=>$row['status'],
                  'nama'=>$row['nama'],
                  'golongan'=>$row['golongan'],
                  'divisi'=>$row['divisi'],
                  );
  }else{
    die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
  }
  
  echo json_encode($data);
?>