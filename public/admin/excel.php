<?php
include_once '../../config.php';
require_once ('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    for($i = 1;$i < count($sheetData);$i++)
    {
          $id = $sheetData[$i]['1'];
          $status = $sheetData[$i]['2'];
          $nama = $sheetData[$i]['3'];
          $divisi = $sheetData[$i]['4'];
          $golongan = $sheetData[$i]['5'];
          $nilai_output = $sheetData[$i]['6'];
          $nilai_atasan = $sheetData[$i]['7'];
          $nilai_learning = $sheetData[$i]['8'];
          $nilai_kedisiplinan = $sheetData[$i]['9'];
          $nilai_5r = $sheetData[$i]['10'];

          $query = "INSERT INTO tkaryawans (no, id, status, nama, divisi, golongan, nilai_output, nilai_atasan, nilai_learning, nilai_kedisiplinan, nilai_5r,tanggal) 
          VALUES ('',?,?,?,?,?,?,?,?,?,?,NOW())";
  
          $stmt = mysqli_prepare($koneksi, $query);
          mysqli_stmt_bind_param($stmt, "ssssssssss", $id,$status, $nama, $divisi, $golongan, $nilai_output, $nilai_atasan, $nilai_learning, $nilai_kedisiplinan, $nilai_5r);

          mysqli_stmt_execute($stmt);	
          if (!$stmt) {
            header('location:../../public/admin/page_admin.php?pesan=gagal#importexcel');
          } 
          else {
          header('location:../../public/admin/page_admin.php?pesan=berhasil-tambah#importexcel');
          }
          mysqli_stmt_close($stmt);
        
      }
}

?>