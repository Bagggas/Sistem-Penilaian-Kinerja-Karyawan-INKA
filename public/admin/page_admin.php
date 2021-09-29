<?php 
  session_start();
  require '../../config.php'; 
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.material.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../../public/admin/style.css">


  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- datatables -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.material.min.js"></script>

  <!-- datatables button -->
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

  <script type="text/javascript">
  function validate() {
    var id = $("#id").val();
    $.ajax({
      type: 'get',
      url: 'ajax.php',
      data: "id=" + id,
    }).success(function(data) {
      var json = data,
        obj = JSON.parse(json);
      $('#status').val(obj.status);
      $('#nama').val(obj.nama);
      $('#golongan').val(obj.golongan);
      $('#divisi').val(obj.divisi);
    });
  }
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
        if($_GET['pesan']=="berhasil-hapus"){
                echo '<script type="text/javascript">

                  $(document).ready(function(){
                    swal({
                      icon : "success",
                      position: "top-end",
                      title: "Berhasil Hapus Data",
                      button: true,
                      timer: 2000
                    })
                  });
                
                </script>';
        }
        else if($_GET['pesan']=="berhasil-edit"){
                echo '<script type="text/javascript">

                  $(document).ready(function(){
                    swal({
                      icon : "success",
                      position: "top-end",
                      title: "Berhasil Edit Data",
                      button: true,
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
                      title: "Berhasil Tambah Data",
                      button: true,
                      timer: 2000
                    })
                  });
                
                </script>';
        }
        else if($_GET['pesan']=="gagal-karyawan"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Oops...",
                    text: "Anda tidak memiliki akses",
                    button: true,
                    timer: 2000
                  })
                });
              
              </script>';
        }
        else if($_GET['pesan']=="gagal-id"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Gagal",
                    text: "Id tidak ditemukan",
                    button: true,
                    timer: 2000
                  })
                });
              
              </script>';
        }
        else if($_GET['pesan']=="gagal"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Gagal",
                    text: "Proses Gagal",
                    button: true,
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
          <h3 class="card-title text-center text-danger">Tambah Data</h3>
        </div>
        <div class="card-body">

          <form method="POST" action="../../public/admin/tambah-data.php" id="tambah-data">

            <div class="form-group">
              <label for="id">ID karyawan</label>
              <input type="number" min="0" class="form-control" name="id" id="id" onkeyup="validate()"
                aria-describedby="id" required>
              <small class="form-text text-warning">Peringatan! ID harus tersedia/telah diregistrasi</small>
            </div>
            <div class="form-group">
              <label for="status">Status Karyawan</label>
              <input type="text" class="form-control readonly" name="status" id="status" readonly required>
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input type="text" class="form-control text-uppercase readonly" name="nama" id="nama" readonly required>
            </div>
            <div class="form-group">
              <label for="golongan">Golongan</label>
              <input type="text" class="form-control" name="golongan" id="golongan" readonly required>
            </div>
            <div class="form-group">
              <label for="divisi">Divisi</label>
              <input type="text" class="form-control" name="divisi" id="divisi" readonly required>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="nilai-output">Nilai Output</label>
                <input type="number" min="0" max="100" class="form-control" name="nilai_output" id="nilai-output"
                  aria-describedby="nilai-output" step="any" required>
              </div>
              <div class="form-group col-md-4">
                <label for="nilai-atasan">Nilai Atasan</label>
                <input type="number" min="0" max="100" class="form-control" name="nilai_atasan" id="nilai-atasan"
                  aria-describedby="nilai-atasan" step="any" required>
              </div>
              <div class="form-group col-md-4">
                <label for="nilai-learning">Nilai learning</label>
                <input type="number" min="0" max="100" class="form-control" name="nilai_learning" id="nilai-learning"
                  aria-describedby="nilai-learning" step="any" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="nilai-kedisiplinan">Nilai kedisiplinan</label>
                <input type="number" min="0" max="100" class="form-control" name="nilai_kedisiplinan"
                  id="nilai-kedisiplinan" aria-describedby="nilai-kedisiplinan" step="any" required>
              </div>
              <div class="form-group col-md-4">
                <label for="nilai-5r">Nilai 5r</label>
                <input type="number" min="0" max="100" class="form-control" name="nilai_5r" id="nilai-5r"
                  aria-describedby="nilai-5r" step="any" required>
              </div>
            </div>
            <button class="btn btn-danger" name="submit" id="submit" value="submit" type="submit" disable>Kirim</button>
          </form>
        </div>
      </div>

      <hr> <!-- break -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center text-success">Tambah Data Melalui Excel</h3>
        </div>
        <div class="card-body">
        
          <form method="post" enctype="multipart/form-data" action="excel.php">
          <p>
          <h5 class="text-danger">Peringatan!</h5>
          Ada beberapa peraturan penting agar dapat mengimport data menggunakan excel, diantaranya :
          <br>
          1. Diharapkan menggunakan format excel yang telah tersedia  
          <a href="format/format.xlsx"><button type="button" title="Download excel disini" class="badge badge-success">Download Excel</button></a>
          <br>
          2. Mengisi seluruh kolom pada detail yang telah tersedia
          <br>
          3. Mengisi data sesuai dengan format tambah data. mulai dari pilihan golongan,jumlah input tiap form,maupun type data yang dimasukkan.
          <br>
          4. Data <span class="text-danger text-bold"> ID karyawan </span> telah ter-registrasi
          <hr>
          </p>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="importexcel">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="berkas_excel" class="form-control" id="file" accept=".xls,.xlsx" required>
              <label class="custom-file-label" for="file">Pilih file</label>
            </div>
              <script type="application/javascript">
                  $('input[type="file"]').change(function(e){
                      var fileName = e.target.files[0].name;
                      $('.custom-file-label').html(fileName);
                  });
              </script>
          </div>
          <button type="submit" id="confirm" class="btn btn-success mt-3">Import</button>
          </form>
        </div>
      </div>
      <hr> <!-- break -->

      <!-- table data -->
      <div class="card" id="card-data">
        <div class="card-header">
          <h3 class="card-title text-center text-danger">Table Data</h3>
        </div>
        <div class="card-body">
          <table id="tabel-data" class="table table-striped text-center table-responsive table-wrap">
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Status karyawan</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Golongan</th>
                <th class="text-center" scope="col">Divisi</th>
                <th class="text-center" scope="col">Nilai Output</th>
                <th class="text-center" scope="col">Penilaian Atasan</th>
                <th class="text-center" scope="col">Nilai Learning</th>
                <th class="text-center" scope="col">Nilai Kedisiplinan</th>
                <th class="text-center" scope="col">Nilai 5R</th>
                <th class="text-center" scope="col">Hasil</th>
                <th class="text-center" scope="col">IKK</th>
                <th class="text-center" scope="col">Keterangan</th>
                <th class="text-center" scope="col">Waktu</th>
                <th class="text-center" scope="col">Aksi</th>
              </tr>
            </thead>
            <?php
          $no = 0;
          $stmt = $koneksi->prepare("SELECT * FROM tkaryawans 
                                     JOIN user
                                     ON user.id=tkaryawans.id
                                     WHERE user.id !=?
                                     AND tkaryawans.divisi =?
                                     AND user.level !=?
                                     ORDER BY tanggal DESC");
          $id=$_SESSION['id'];
          $divisi=$_SESSION['divisi'];
          $level=$_SESSION['level'];

          $stmt->bind_param("iss", $id,$divisi,$level);
          
          $stmt->execute(); 
          $result = mysqli_stmt_get_result($stmt);  
          ?>
            <tbody>
              <?php
            while($data = mysqli_fetch_assoc($result))
            {
              $n1 = ($data["nilai_output"]) * 0.7;
              $n2 = ($data["nilai_atasan"]) * 0.1;
              $n3 = ($data["nilai_learning"]) * 0.1;
              $n4 = ($data["nilai_kedisiplinan"]) * 0.05;
              $n5 = ($data["nilai_5r"]) * 0.05;

              $hasil = ($n1 + $n2 + $n3 + $n4 + $n5);

              if ($hasil >= 95) {
                $grade = 1.25;
                $ikk = "Istimewa";
                $color = 'midnightblue';
              }elseif ($hasil >= 90) {
                $grade = 1.10;
                $color = 'seagreen';
                $ikk = "Sangat Memuaskan"; 
                }elseif ($hasil >= 85) {
                $grade = 1.00;
                $color = 'seagreen';
                $ikk = "Memuaskan";
                }elseif ($hasil >= 80) {
                $grade = 0.90;
                $color = 'seagreen';
                $ikk = "Cukup Memuaskan";
                }elseif($hasil >= 75) {
                $grade = 0.75;
                $color = 'orange';
                $ikk = "Memadai";
                }elseif($hasil >= 70) {
                $grade = 0.50;
                $color = 'orange';
                $ikk = "Kurang Memadai";
                }elseif($hasil >= 1) {
                $grade = 0.25;
                $color = 'crimson';
                $ikk = "Tidak Memadai";
                }elseif($hasil < 1){
                  $grade = 0;
                  $color = 'crimson';
                  $ikk = "Tidak Berkontribusi";
                }

              $no++;
          ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['status'];?></td>
                <td class="text-capitalize"><?php echo $data['nama'];?></td>
                <td><?php echo $data['golongan'];?></td>
                <td><?php echo $data['divisi'];?></td>
                <td><?php echo $data['nilai_output'];?></td>
                <td><?php echo $data['nilai_atasan'];?></td>
                <td><?php echo $data['nilai_learning'];?></td>
                <td><?php echo $data['nilai_kedisiplinan'];?></td>
                <td><?php echo $data['nilai_5r'];?></td>
                <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $hasil;?></td>
                <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $grade;?></td>
                <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $ikk;?></td>
                <td class="text-secondary"><?php echo $data['tanggal'];?></td>
                <td>
                  <a href="javascript:void(0)" class='open_modal btn btn-success btn-sm'
                    id='<?php echo $data['no']; ?>'>Edit</a>
                  <a href="hapus-data.php?id=<?php echo $data['no'];?>" class='btn btn-danger btn-sm'>Hapus</a>
                </td>
              </tr>
              <?php }
            ?>
            </tbody>
            <?php
          mysqli_stmt_close($stmt);

          mysqli_close($koneksi);
          ?>
          </table>
        </div>
      </div>

      <!-- Modal Popup untuk Edit-->
      <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

      </div>

    </div> <!-- /container -->
  </main>

  <!-- Footer -->
  <footer class="page-footer font-small bg-dark mt-5">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
      <a href="https://www.inka.co.id/" class="text-danger"> PT.INKA (PERSERO)</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

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

  <!-- Javascript untuk popup modal Edit-->
  <script type="text/javascript">
  $(document).ready(function() {
    $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "../admin/modal_edit.php",
        type: "GET",
        data: {
          id: m,
        },
        success: function(ajaxData) {
          $("#ModalEdit").html(ajaxData);
          $("#ModalEdit").modal('show', {
            backdrop: 'true'
          });
        }
      });
    });
  });
  </script>

  <script>
  $(document).ready(function() {
    $('#tabel-data').DataTable();
  });
  </script>

  <script type="text/javascript">
  setTimeout(function() {
    // Closing the alert 
    $('.alert').alert('close');
  }, 2000);
  </script>

  <!-- sweetalert JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>