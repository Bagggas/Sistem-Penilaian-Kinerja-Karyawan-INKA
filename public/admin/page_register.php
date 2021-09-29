<?php 
  session_start();
  include '../../config.php'; 
 
	if($_SESSION['level'] !=="admin"){
		header("location:../../index.php?pesan=gagal-admin");
	}
	?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../img/icons/favicon-16x16.png">
  <link rel="manifest" href="../../img/icons/site.webmanifest">
  <link rel="mask-icon" href="../../img/icons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- sweetaelert CSS -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/admin/style.css">

  <!-- select2 -->
  <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#golongan').select2({
      theme: 'bootstrap4',
      allowClear: true,
      closeOnSelect: false
    });
  });
  </script>

  <title>INKA</title>
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom">
    <a class="navbar-brand font-weight-bold" href="../../public/admin/home_admin.php"><img
        src="../../img/icons/favicon-32x32.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active ">
          <a class="nav-link text-danger" href="../../public/admin/home_admin.php">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="dropdown01" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Akses</a>
          <div class="dropdown-menu text-danger" aria-labelledby="dropdown01">
            <a class="dropdown-item text-danger" href="../../public/admin/page_admin.php">Data Karyawan</a>
            <a class="dropdown-item text-danger" href="../../public/admin/page_register.php">Register Pengguna</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="../../public/admin/page_karyawan_admin.php">Info saya</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-danger" id="keluar" name="keluar ">keluar</button>
      </form>
    </div>
  </nav>

  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal-karyawan"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Oops...",
                    text: "Anda bukan karyawan",
                    button :true,
                    timer: 2000
                  })
                });
              
              </script>';
        }
        else if($_GET['pesan']=="berhasil"){
                echo '<script type="text/javascript">

                  $(document).ready(function(){
                    swal({
                      icon : "success",
                      position: "top-end",
                      type: "Sukses!",
                      title: "Berhasil Login",
                      Button: false,
                      timer: 2000
                    })
                  });
                
                </script>';
        }
        else if($_GET['pesan']=="berhasil-tambah"){
                echo '<script type="text/javascript">

                    $(document).ready(function(){
                    swal({
                        icon : "success",
                        position: "top-end",
                        type: "Sukses!",
                        title: "Berhasil Register Data",
                        Button: false,
                        timer: 2000
                    })
                    });
                
                </script>';
        }
      }
    ?>
      <div class="container">
        <h1 class="display-3 text-white pt-5 pb-3">Selamat datang!</h1>
        <p class="text-white">Pada halaman admin anda bisa manambahkan data, menghapus data, mengedit data pada navigasi
          akses <strong class="text-danger">Data Karyawan </strong> dan juga menambahkan akun karyawan baru pada
          navigasi akses <strong class="text-danger">registrasi pengguna</strong>.</p>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center text-danger">Register Pengguna</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="../../public/admin/register_user.php">

            <div class="form-group">
              <label for="id">ID karyawan</label>
              <input type="text" class="form-control text-capitalize" name="id" id="id" aria-describedby="id" pattern="[1-9]{1}[0-9]{8}" title="ID kurang/lebih dari 9">
              <div id="msg" class="form-group pt-1 font-italic"></div>
            </div>
            <div class="form-group pb-3">
              <label for="status">Status Karyawan</label>
              <select id="status" name="status" class="form-control text-capitalize" disabled required>
                <option></option>
                <option>Tetap</option>
                <option>PKWT</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input type="text" class="form-control text-uppercase" name="nama" id="nama" disabled required>
            </div>
            <div class="form-group pb-1">
              <label for="golongan">Golongan</label>
              <select id="golongan" data-placeholder="" data-allow-clear="1" name="golongan"
                class="text-capitalize js-select" style="width:100%" disabled required>
                <option></option>
                <option value="-">-</option>
                <optgroup label="Golongan I-6">
                  <option value="I-6-1">I-6-1</option>
                  <option value="I-6-2">I-6-2</option>
                  <option value="I-6-3">I-6-3</option>
                  <option value="I-6-4">I-6-4</option>
                  <option value="I-6-5">I-6-5</option>
                  <option value="I-6-6">I-6-6</option>
                  <option value="I-6-7">I-6-7</option>
                  <option value="I-6-8">I-6-8</option>
                  <option value="I-6-9">I-6-9</option>
                  <option value="I-6-10">I-6-10</option>
                  <option value="I-6-11">I-6-11</option>
                  <option value="I-6-12">I-6-12</option>
                  <option value="I-6-13">I-6-13</option>
                  <option value="I-6-14">I-6-14</option>
                  <option value="I-6-15">I-6-15</option>
                  <option value="I-6-16">I-6-16</option>
                  <option value="I-6-17">I-6-17</option>
                  <option value="I-6-18">I-6-18</option>
                  <option value="I-6-19">I-6-19</option>
                  <option value="I-6-20">I-6-20</option>
                  <option value="I-6-21">I-6-21</option>
                  <option value="I-6-22">I-6-22</option>
                </optgroup>
                <optgroup label="Golongan I-7">
                  <option value="I-7-1">I-7-1</option>
                  <option value="I-7-2">I-7-2</option>
                  <option value="I-7-3">I-7-3</option>
                  <option value="I-7-4">I-7-4</option>
                  <option value="I-7-5">I-7-5</option>
                  <option value="I-7-6">I-7-6</option>
                  <option value="I-7-7">I-7-7</option>
                  <option value="I-7-8">I-7-8</option>
                  <option value="I-7-9">I-7-9</option>
                  <option value="I-7-10">I-7-10</option>
                  <option value="I-7-11">I-7-11</option>
                  <option value="I-7-12">I-7-12</option>
                  <option value="I-7-13">I-7-13</option>
                  <option value="I-7-14">I-7-14</option>
                  <option value="I-7-15">I-7-15</option>
                  <option value="I-7-16">I-7-16</option>
                  <option value="I-7-17">I-7-17</option>
                  <option value="I-7-18">I-7-18</option>
                  <option value="I-7-19">I-7-19</option>
                  <option value="I-7-20">I-7-20</option>
                  <option value="I-7-21">I-7-21</option>
                  <option value="I-7-22">I-7-22</option>
                </optgroup>
                <optgroup label="Golongan I-8">
                  <option value="I-8-1">I-8-1</option>
                  <option value="I-8-2">I-8-2</option>
                  <option value="I-8-3">I-8-3</option>
                  <option value="I-8-4">I-8-4</option>
                  <option value="I-8-5">I-8-5</option>
                  <option value="I-8-6">I-8-6</option>
                  <option value="I-8-7">I-8-7</option>
                  <option value="I-8-8">I-8-8</option>
                  <option value="I-8-9">I-8-9</option>
                  <option value="I-8-10">I-8-10</option>
                  <option value="I-8-11">I-8-11</option>
                  <option value="I-8-12">I-8-12</option>
                  <option value="I-8-13">I-8-13</option>
                  <option value="I-8-14">I-8-14</option>
                  <option value="I-8-15">I-8-15</option>
                  <option value="I-8-16">I-8-16</option>
                  <option value="I-8-17">I-8-17</option>
                  <option value="I-8-18">I-8-18</option>
                  <option value="I-8-19">I-8-19</option>
                  <option value="I-8-20">I-8-20</option>
                  <option value="I-8-21">I-8-21</option>
                  <option value="I-8-22">I-8-22</option>
                </optgroup>
                <optgroup label="Golongan I-9">
                  <option value="I-9-1">I-9-1</option>
                  <option value="I-9-2">I-9-2</option>
                  <option value="I-9-3">I-9-3</option>
                  <option value="I-9-4">I-9-4</option>
                  <option value="I-9-5">I-9-5</option>
                  <option value="I-9-6">I-9-6</option>
                  <option value="I-9-7">I-9-7</option>
                  <option value="I-9-8">I-9-8</option>
                  <option value="I-9-9">I-9-9</option>
                  <option value="I-9-10">I-9-10</option>
                  <option value="I-9-11">I-9-11</option>
                  <option value="I-9-12">I-9-12</option>
                  <option value="I-9-13">I-9-13</option>
                  <option value="I-9-14">I-9-14</option>
                  <option value="I-9-15">I-9-15</option>
                  <option value="I-9-16">I-9-16</option>
                  <option value="I-9-17">I-9-17</option>
                  <option value="I-9-18">I-9-18</option>
                  <option value="I-9-19">I-9-19</option>
                  <option value="I-9-20">I-9-20</option>
                  <option value="I-9-21">I-9-21</option>
                  <option value="I-9-22">I-9-22</option>
                </optgroup>
                <optgroup label="Golongan I-10">
                  <option value="I-10-1">I-10-1</option>
                  <option value="I-10-2">I-10-2</option>
                  <option value="I-10-3">I-10-3</option>
                  <option value="I-10-4">I-10-4</option>
                  <option value="I-10-5">I-10-5</option>
                  <option value="I-10-6">I-10-6</option>
                  <option value="I-10-7">I-10-7</option>
                  <option value="I-10-8">I-10-8</option>
                  <option value="I-10-9">I-10-9</option>
                  <option value="I-10-10">I-10-10</option>
                  <option value="I-10-11">I-10-11</option>
                  <option value="I-10-12">I-10-12</option>
                  <option value="I-10-13">I-10-13</option>
                  <option value="I-10-14">I-10-14</option>
                  <option value="I-10-15">I-10-15</option>
                  <option value="I-10-16">I-10-16</option>
                  <option value="I-10-17">I-10-17</option>
                  <option value="I-10-18">I-10-18</option>
                  <option value="I-10-19">I-10-19</option>
                  <option value="I-10-20">I-10-20</option>
                  <option value="I-10-21">I-10-21</option>
                  <option value="I-10-22">I-10-22</option>
                </optgroup>
                <optgroup label="Golongan II-11">
                  <option value="II-11-1">II-11-1</option>
                  <option value="II-11-2">II-11-2</option>
                  <option value="II-11-3">II-11-3</option>
                  <option value="II-11-4">II-11-4</option>
                  <option value="II-11-5">II-11-5</option>
                  <option value="II-11-6">II-11-6</option>
                  <option value="II-11-7">II-11-7</option>
                  <option value="II-11-8">II-11-8</option>
                  <option value="II-11-9">II-11-9</option>
                  <option value="II-11-10">II-11-10</option>
                  <option value="II-11-11">II-11-11</option>
                  <option value="II-11-12">II-11-12</option>
                  <option value="II-11-13">II-11-13</option>
                  <option value="II-11-14">II-11-14</option>
                  <option value="II-11-15">II-11-15</option>
                  <option value="II-11-16">II-11-16</option>
                  <option value="II-11-17">II-11-17</option>
                  <option value="II-11-18">II-11-18</option>
                  <option value="II-11-19">II-11-19</option>
                  <option value="II-11-20">II-11-20</option>
                  <option value="II-11-21">II-11-21</option>
                  <option value="II-11-22">II-11-22</option>
                </optgroup>
                <optgroup label="Golongan II-12">
                  <option value="II-12-1">II-12-1</option>
                  <option value="II-12-2">II-12-2</option>
                  <option value="II-12-3">II-12-3</option>
                  <option value="II-12-4">II-12-4</option>
                  <option value="II-12-5">II-12-5</option>
                  <option value="II-12-6">II-12-6</option>
                  <option value="II-12-7">II-12-7</option>
                  <option value="II-12-8">II-12-8</option>
                  <option value="II-12-9">II-12-9</option>
                  <option value="II-12-10">II-12-10</option>
                  <option value="II-12-11">II-12-11</option>
                  <option value="II-12-12">II-12-12</option>
                  <option value="II-12-13">II-12-13</option>
                  <option value="II-12-14">II-12-14</option>
                  <option value="II-12-15">II-12-15</option>
                  <option value="II-12-16">II-12-16</option>
                  <option value="II-12-17">II-12-17</option>
                  <option value="II-12-18">II-12-18</option>
                  <option value="II-12-19">II-12-19</option>
                  <option value="II-12-20">II-12-20</option>
                  <option value="II-12-21">II-12-21</option>
                  <option value="II-12-22">II-12-22</option>
                </optgroup>
                <optgroup label="Golongan II-13">
                  <option value="II-13-1">II-13-1</option>
                  <option value="II-13-2">II-13-2</option>
                  <option value="II-13-3">II-13-3</option>
                  <option value="II-13-4">II-13-4</option>
                  <option value="II-13-5">II-13-5</option>
                  <option value="II-13-6">II-13-6</option>
                  <option value="II-13-7">II-13-7</option>
                  <option value="II-13-8">II-13-8</option>
                  <option value="II-13-9">II-13-9</option>
                  <option value="II-13-10">II-13-10</option>
                  <option value="II-13-11">II-13-11</option>
                  <option value="II-13-12">II-13-12</option>
                  <option value="II-13-13">II-13-13</option>
                  <option value="II-13-14">II-13-14</option>
                  <option value="II-13-15">II-13-15</option>
                  <option value="II-13-16">II-13-16</option>
                  <option value="II-13-17">II-13-17</option>
                  <option value="II-13-18">II-13-18</option>
                  <option value="II-13-19">II-13-19</option>
                  <option value="II-13-20">II-13-20</option>
                  <option value="II-13-21">II-13-21</option>
                  <option value="II-13-22">II-13-22</option>
                </optgroup>
                <optgroup label="Golongan II-14">
                  <option value="II-14-1">II-14-1</option>
                  <option value="II-14-2">II-14-2</option>
                  <option value="II-14-3">II-14-3</option>
                  <option value="II-14-4">II-14-4</option>
                  <option value="II-14-5">II-14-5</option>
                  <option value="II-14-6">II-14-6</option>
                  <option value="II-14-7">II-14-7</option>
                  <option value="II-14-8">II-14-8</option>
                  <option value="II-14-9">II-14-9</option>
                  <option value="II-14-10">II-14-10</option>
                  <option value="II-14-11">II-14-11</option>
                  <option value="II-14-12">II-14-12</option>
                  <option value="II-14-13">II-14-13</option>
                  <option value="II-14-14">II-14-14</option>
                  <option value="II-14-15">II-14-15</option>
                  <option value="II-14-16">II-14-16</option>
                  <option value="II-14-17">II-14-17</option>
                  <option value="II-14-18">II-14-18</option>
                  <option value="II-14-19">II-14-19</option>
                  <option value="II-14-20">II-14-20</option>
                  <option value="II-14-21">II-14-21</option>
                  <option value="II-14-22">II-14-22</option>
                </optgroup>
                <optgroup label="Golongan III-15">
                  <option value="III-15-1">III-15-1</option>
                  <option value="III-15-2">III-15-2</option>
                  <option value="III-15-3">III-15-3</option>
                  <option value="III-15-4">III-15-4</option>
                  <option value="III-15-5">III-15-5</option>
                  <option value="III-15-6">III-15-6</option>
                  <option value="III-15-7">III-15-7</option>
                  <option value="III-15-8">III-15-8</option>
                  <option value="III-15-9">III-15-9</option>
                  <option value="III-15-10">III-15-10</option>
                  <option value="III-15-11">III-15-11</option>
                  <option value="III-15-12">III-15-12</option>
                  <option value="III-15-13">III-15-13</option>
                  <option value="III-15-14">III-15-14</option>
                  <option value="III-15-15">III-15-15</option>
                  <option value="III-15-16">III-15-16</option>
                  <option value="III-15-17">III-15-17</option>
                  <option value="III-15-18">III-15-18</option>
                  <option value="III-15-19">III-15-19</option>
                  <option value="III-15-20">III-15-20</option>
                  <option value="III-15-21">III-15-21</option>
                  <option value="III-15-22">III-15-22</option>
                </optgroup>
                <optgroup label="Golongan III-16">
                  <option value="III-16-1">III-16-1</option>
                  <option value="III-16-2">III-16-2</option>
                  <option value="III-16-3">III-16-3</option>
                  <option value="III-16-4">III-16-4</option>
                  <option value="III-16-5">III-16-5</option>
                  <option value="III-16-6">III-16-6</option>
                  <option value="III-16-7">III-16-7</option>
                  <option value="III-16-8">III-16-8</option>
                  <option value="III-16-9">III-16-9</option>
                  <option value="III-16-10">III-16-10</option>
                  <option value="III-16-11">III-16-11</option>
                  <option value="III-16-12">III-16-12</option>
                  <option value="III-16-13">III-16-13</option>
                  <option value="III-16-14">III-16-14</option>
                  <option value="III-16-15">III-16-15</option>
                  <option value="III-16-16">III-16-16</option>
                  <option value="III-16-17">III-16-17</option>
                  <option value="III-16-18">III-16-18</option>
                  <option value="III-16-19">III-16-19</option>
                  <option value="III-16-20">III-16-20</option>
                  <option value="III-16-21">III-16-21</option>
                  <option value="III-16-22">III-16-22</option>
                </optgroup>
                <optgroup label="Golongan III-17">
                  <option value="III-17-1">III-17-1</option>
                  <option value="III-17-2">III-17-2</option>
                  <option value="III-17-3">III-17-3</option>
                  <option value="III-17-4">III-17-4</option>
                  <option value="III-17-5">III-17-5</option>
                  <option value="III-17-6">III-17-6</option>
                  <option value="III-17-7">III-17-7</option>
                  <option value="III-17-8">III-17-8</option>
                  <option value="III-17-9">III-17-9</option>
                  <option value="III-17-10">III-17-10</option>
                  <option value="III-17-11">III-17-11</option>
                  <option value="III-17-12">III-17-12</option>
                  <option value="III-17-13">III-17-13</option>
                  <option value="III-17-14">III-17-14</option>
                  <option value="III-17-15">III-17-15</option>
                  <option value="III-17-16">III-17-16</option>
                  <option value="III-17-17">III-17-17</option>
                  <option value="III-17-18">III-17-18</option>
                  <option value="III-17-19">III-17-19</option>
                  <option value="III-17-20">III-17-20</option>
                  <option value="III-17-21">III-17-21</option>
                  <option value="III-17-22">III-17-22</option>
                </optgroup>
                <optgroup label="Golongan IV-18">
                  <option value="IV-18-1">IV-18-1</option>
                  <option value="IV-18-2">IV-18-2</option>
                  <option value="IV-18-3">IV-18-3</option>
                  <option value="IV-18-4">IV-18-4</option>
                  <option value="IV-18-5">IV-18-5</option>
                  <option value="IV-18-6">IV-18-6</option>
                  <option value="IV-18-7">IV-18-7</option>
                  <option value="IV-18-8">IV-18-8</option>
                  <option value="IV-18-9">IV-18-9</option>
                  <option value="IV-18-10">IV-18-10</option>
                  <option value="IV-18-11">IV-18-11</option>
                  <option value="IV-18-12">IV-18-12</option>
                  <option value="IV-18-13">IV-18-13</option>
                  <option value="IV-18-14">IV-18-14</option>
                  <option value="IV-18-15">IV-18-15</option>
                  <option value="IV-18-16">IV-18-16</option>
                  <option value="IV-18-17">IV-18-17</option>
                  <option value="IV-18-18">IV-18-18</option>
                  <option value="IV-18-19">IV-18-19</option>
                  <option value="IV-18-20">IV-18-20</option>
                  <option value="IV-18-21">IV-18-21</option>
                  <option value="IV-18-22">IV-18-22</option>
                </optgroup>
                <optgroup label="Golongan IV-19">
                  <option value="IV-19-1">IV-19-1</option>
                  <option value="IV-19-2">IV-19-2</option>
                  <option value="IV-19-3">IV-19-3</option>
                  <option value="IV-19-4">IV-19-4</option>
                  <option value="IV-19-5">IV-19-5</option>
                  <option value="IV-19-6">IV-19-6</option>
                  <option value="IV-19-7">IV-19-7</option>
                  <option value="IV-19-8">IV-19-8</option>
                  <option value="IV-19-9">IV-19-9</option>
                  <option value="IV-19-10">IV-19-10</option>
                  <option value="IV-19-11">IV-19-11</option>
                  <option value="IV-19-12">IV-19-12</option>
                  <option value="IV-19-13">IV-19-13</option>
                  <option value="IV-19-14">IV-19-14</option>
                  <option value="IV-19-15">IV-19-15</option>
                  <option value="IV-19-16">IV-19-16</option>
                  <option value="IV-19-17">IV-19-17</option>
                  <option value="IV-19-18">IV-19-18</option>
                  <option value="IV-19-19">IV-19-19</option>
                  <option value="IV-19-20">IV-19-20</option>
                  <option value="IV-19-21">IV-19-21</option>
                  <option value="IV-19-22">IV-19-22</option>
                </optgroup>
                <optgroup label="Golongan IV-20">
                  <option value="IV-20-1">IV-20-1</option>
                  <option value="IV-20-2">IV-20-2</option>
                  <option value="IV-20-3">IV-20-3</option>
                  <option value="IV-20-4">IV-20-4</option>
                  <option value="IV-20-5">IV-20-5</option>
                  <option value="IV-20-6">IV-20-6</option>
                  <option value="IV-20-7">IV-20-7</option>
                  <option value="IV-20-8">IV-20-8</option>
                  <option value="IV-20-9">IV-20-9</option>
                  <option value="IV-20-10">IV-20-10</option>
                  <option value="IV-20-11">IV-20-11</option>
                  <option value="IV-20-12">IV-20-12</option>
                  <option value="IV-20-13">IV-20-13</option>
                  <option value="IV-20-14">IV-20-14</option>
                  <option value="IV-20-15">IV-20-15</option>
                  <option value="IV-20-16">IV-20-16</option>
                  <option value="IV-20-17">IV-20-17</option>
                  <option value="IV-20-18">IV-20-18</option>
                  <option value="IV-20-19">IV-20-19</option>
                  <option value="IV-20-20">IV-20-20</option>
                  <option value="IV-20-21">IV-20-21</option>
                  <option value="IV-20-22">IV-20-22</option>
                </optgroup>
                <optgroup label="Golongan V-21">
                  <option value="V-21-1">V-21-1</option>
                  <option value="V-21-2">V-21-2</option>
                  <option value="V-21-3">V-21-3</option>
                  <option value="V-21-4">V-21-4</option>
                  <option value="V-21-5">V-21-5</option>
                  <option value="V-21-6">V-21-6</option>
                  <option value="V-21-7">V-21-7</option>
                  <option value="V-21-8">V-21-8</option>
                  <option value="V-21-9">V-21-9</option>
                  <option value="V-21-10">V-21-10</option>
                  <option value="V-21-11">V-21-11</option>
                  <option value="V-21-12">V-21-12</option>
                  <option value="V-21-13">V-21-13</option>
                  <option value="V-21-14">V-21-14</option>
                  <option value="V-21-15">V-21-15</option>
                  <option value="V-21-16">V-21-16</option>
                  <option value="V-21-17">V-21-17</option>
                  <option value="V-21-18">V-21-18</option>
                  <option value="V-21-19">V-21-19</option>
                  <option value="V-21-20">V-21-20</option>
                  <option value="V-21-21">V-21-21</option>
                  <option value="V-21-22">V-21-22</option>
                </optgroup>
                <optgroup label="Golongan V-22">
                  <option value="V-22-1">V-22-1</option>
                  <option value="V-22-2">V-22-2</option>
                  <option value="V-22-3">V-22-3</option>
                  <option value="V-22-4">V-22-4</option>
                  <option value="V-22-5">V-22-5</option>
                  <option value="V-22-6">V-22-6</option>
                  <option value="V-22-7">V-22-7</option>
                  <option value="V-22-8">V-22-8</option>
                  <option value="V-22-9">V-22-9</option>
                  <option value="V-22-10">V-22-10</option>
                  <option value="V-22-11">V-22-11</option>
                  <option value="V-22-12">V-22-12</option>
                  <option value="V-22-13">V-22-13</option>
                  <option value="V-22-14">V-22-14</option>
                  <option value="V-22-15">V-22-15</option>
                  <option value="V-22-16">V-22-16</option>
                  <option value="V-22-17">V-22-17</option>
                  <option value="V-22-18">V-22-18</option>
                  <option value="V-22-19">V-22-19</option>
                  <option value="V-22-20">V-22-20</option>
                  <option value="V-22-21">V-22-21</option>
                  <option value="V-22-22">V-22-22</option>
                </optgroup>
                <optgroup label="Golongan V-23">
                  <option value="V-23-1">V-23-1</option>
                  <option value="V-23-2">V-23-2</option>
                  <option value="V-23-3">V-23-3</option>
                  <option value="V-23-4">V-23-4</option>
                  <option value="V-23-5">V-23-5</option>
                  <option value="V-23-6">V-23-6</option>
                  <option value="V-23-7">V-23-7</option>
                  <option value="V-23-8">V-23-8</option>
                  <option value="V-23-9">V-23-9</option>
                  <option value="V-23-10">V-23-10</option>
                  <option value="V-23-11">V-23-11</option>
                  <option value="V-23-12">V-23-12</option>
                  <option value="V-23-13">V-23-13</option>
                  <option value="V-23-14">V-23-14</option>
                  <option value="V-23-15">V-23-15</option>
                  <option value="V-23-16">V-23-16</option>
                  <option value="V-23-17">V-23-17</option>
                  <option value="V-23-18">V-23-18</option>
                  <option value="V-23-19">V-23-19</option>
                  <option value="V-23-20">V-23-20</option>
                  <option value="V-23-21">V-23-21</option>
                  <option value="V-23-22">V-23-22</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control text-capitalize" name="password" id="password" disabled required>
            </div>
            <div class="form-group pb-3">
              <label for="divisi">Divisi</label>
              <select id="divisi" name="divisi" class="form-control text-capitalize" disabled required>
                <option></option>
                <option>Divisi Pengembangan Perusahaan</option>
                <option>Divisi Pemasaran</option>
                <option>Divisi IT</option>
              </select>
            </div>
            <div class="form-group pb-3">
              <label for="level">Level</label>
              <select id="level" name="level" class="form-control " disabled required>
                <option></option>
                <option>karyawan</option>
                <option>admin</option>
              </select>
            </div>

            <button class="btn btn-danger" name="submit" id="submit" type="submit" value="submit"
              disabled required>Kirim</button>
          </form>
        </div>
      </div>
      <hr>
    </div> <!-- /container -->
  </main>

  <!-- Optional JavaScript -->
  <script type="text/javascript">
  $(document).ready(function(){
      $("#keluar").click(function(){

              swal({  title: 'Logout',
                  text: "Apakah Anda yakin?",
                  icon: 'warning',
                  buttons: true,
              })
              .then((willOUT) => {
                      if (willOUT) {
                            window.location.href = '../../logout.php', {
                            icon: 'success',
                          }
                        }
              });

      });
  });
  </script>
  <!-- Optional JavaScript -->
  <script type="text/javascript">
  setTimeout(function() {
    // Closing the alert 
    $('.alert').alert('close');
  }, 2000);
  </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript">
  $(document).keyup(function() {
    $("#id").blur(function(e) {
      var uname = $(this).val();
      if (uname == "") {
        $("#msg").html("");
        $("#submit").attr("disabled", true);
      } else {
        $("#msg").html("checking...");
        $.ajax({
          url: "../../public/admin/check_availability.php",
          data: {
            id: uname
          },
          type: "POST",
          success: function(data) {
            if (data > '0') {
              $("#msg").html('<span class="text-danger">ID tidak tersedia/telah digunakan</span>');
              $("#status").prop("disabled", true);
              $("#nama").prop("disabled", true);
              $("#password").prop("disabled", true);
              $("#golongan").prop("disabled", true);
              $("#level").prop("disabled", true);
              $("#divisi").prop("disabled", true);
              $("#submit").prop("disabled", true);
            } else {
              $("#msg").html('<span class="text-success">ID tersedia dan dapat digunakan.</span>');
              $("#status").prop("disabled", false);
              $("#nama").prop("disabled", false);
              $("#password").prop("disabled", false);
              $("#golongan").prop("disabled", false);
              $("#level").prop("disabled", false);
              $("#divisi").prop("disabled", false);
              $("#submit").prop("disabled", false);
            }
          }
        });
      }
    });
  });
  </script>

  <!-- sweetalert JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

<!-- Footer -->
<footer class="page-footer font-small bg-dark mt-5">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
    <a href="https://www.inka.co.id/" class="text-danger"> PT.INKA (PERSERO)</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</html>