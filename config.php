<?php
  // buat koneksi dengan database mysql 
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "inka";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  
  if(!$koneksi){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  }

?>