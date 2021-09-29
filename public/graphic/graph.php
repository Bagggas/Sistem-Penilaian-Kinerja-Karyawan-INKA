<?php 
  session_start();
  require_once '../../config.php'; 

	if($_SESSION['level'] !=="admin"){
		header("location:../../public/karyawan/page_karyawan.php?pesan=gagal-admin");
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

  <link rel="stylesheet" href="../../public/graphic/style.css">
  <link rel="stylesheet" href="../../public/admin/style.css">
  <link rel="stylesheet" href="../../public/admin/custom.css">

  <!-- highchart -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>


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
                    title: "Gagal",
                    text: "Anda tidak memiliki akses!",
                    showConfirmButton: false,
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
                      showConfirmButton: false,
                      timer: 1500
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

    <!-- Graph -->
    <div class="card text-nowrap text-center">
      <div class="card-body" >
      <!-- Chart overall -->
          <?php
            $koneksi->query("SET lc_time_names = 'id_ID'");
            $sql = "SELECT
                    DATE_FORMAT(tanggal, '%M-%Y') AS date,
                    CAST(AVG(0.7*nilai_output + 0.1*nilai_atasan + 0.1*nilai_learning +
                            0.05*nilai_kedisiplinan + 0.05*nilai_5r) AS DECIMAL (10,2)) AS average
                    FROM tkaryawans
                    GROUP BY
                        DATE_FORMAT(tanggal, '%M - %Y')
                    ORDER BY
                      tanggal ASC;
                  ";
            $result = $koneksi->query($sql);
            $arrayAverage = array();
            $arrayTanggal = array();
            while($row = $result->fetch_assoc()) {
              $arrayAverage[] = $row['average'];
              $arrayTanggal[] = "'".$row['date']."'";
            }
            $result->close();

            // DPP-----------------------------------
            $koneksi->query("SET lc_time_names = 'id_ID'");
            $sql = "SELECT
                    DATE_FORMAT(tanggal, '%M-%Y') AS datedpp,
                    CAST(AVG(0.7*nilai_output + 0.1*nilai_atasan + 0.1*nilai_learning +
                            0.05*nilai_kedisiplinan + 0.05*nilai_5r) AS DECIMAL (10,2)) AS averagedpp
                    FROM tkaryawans
                    WHERE divisi='Divisi Pengembangan perusahaan'
                    GROUP BY
                        DATE_FORMAT(tanggal, '%M - %Y')
                    ORDER BY
                      tanggal ASC;
                    ";
            $result = $koneksi->query($sql);
            $arrayAveragedpp = array();
            $arrayTanggaldpp = array();
            while($row = $result->fetch_assoc()) {
              $arrayAveragedpp[] = $row['averagedpp'];
              $arrayTanggaldpp[] = "'".$row['datedpp']."'";
            }
            $result->close();
            
            // DPP-----------------------------------
            $koneksi->query("SET lc_time_names = 'id_ID'");
            $sql = "SELECT
                    DATE_FORMAT(tanggal, '%M-%Y') AS dateit,
                    CAST(AVG(0.7*nilai_output + 0.1*nilai_atasan + 0.1*nilai_learning +
                            0.05*nilai_kedisiplinan + 0.05*nilai_5r) AS DECIMAL (10,2)) AS averageit
                    FROM tkaryawans
                    WHERE divisi='Divisi IT'
                    GROUP BY
                        DATE_FORMAT(tanggal, '%M - %Y')
                    ORDER BY
                      tanggal ASC;
                    ";
            $result = $koneksi->query($sql);
            $arrayAverageit = array();
            $arrayTanggalit = array();
            while($row = $result->fetch_assoc()) {
              $arrayAverageit[] = $row['averageit'];
              $arrayTanggalit[] = "'".$row['dateit']."'";
            }
            $result->close();

            // DPm-----------------------------------
            $koneksi->query("SET lc_time_names = 'id_ID'");
            $sql = "SELECT
                    DATE_FORMAT(tanggal, '%M-%Y') AS datepm,
                    CAST(AVG(0.7*nilai_output + 0.1*nilai_atasan + 0.1*nilai_learning +
                            0.05*nilai_kedisiplinan + 0.05*nilai_5r) AS DECIMAL (10,2)) AS averagepm
                    FROM tkaryawans
                    WHERE divisi='Divisi Pemasaran'
                    GROUP BY
                        DATE_FORMAT(tanggal, '%M - %Y')
                    ORDER BY
                      tanggal ASC;
                    ";
            $result = $koneksi->query($sql);

            $arrayAveragepm = array();
            $arrayTanggalpm = array();
            while($row = $result->fetch_assoc()) {
              $arrayAveragepm[] = $row['averagepm'];
              $arrayTanggalpm[] = "'".$row['datepm']."'";
            }
            $result->close();
          ?>
          <div class="containers pr-3" id="graph"><?php echo $average;?></div>
      </div>

    </div>

    </div>
    <!-- /container -->
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

  <!-- script overall-->
  <script>
    $(function(){
  var chart = new Highcharts.Chart({
      chart: {
          renderTo: 'graph',
          scrollablePlotArea: {minWidth: 700},
      },

      title: {
      text: 'GRAFIK RATA-RATA NILAI KARYAWAN'
    },

      subtitle: {
      text: 'PT.INKA(PERSERO)'
    },

    xAxis: {
      categories: [<?php echo join($arrayTanggal, ',') ?>],
      tickWidth: 0,
      gridLineWidth: 1,
      labels: {
        align: 'left',
        x: -40,
        y: -3
      }
    },

    yAxis: [{ // left y axis
    title: {
      text: null
    },  
    labels: {
      align: 'left',
      x: 3,
      y: 16,
      format: '{value:.,0f}'
    },
    showFirstLabel: false
  }, { // right y axis
    linkedTo: 0,
    gridLineWidth: 0,
    opposite: true,
    title: {
      text: null
    },
    labels: {
      align: 'right',
      x: -3,
      y: 16,
      format: '{value:.,0f}'
    },
    showFirstLabel: false
  }],


    legend: {
      align: 'left',
      verticalAlign: 'top',
      borderWidth: 0
    },

    tooltip: {
      shared: true,
      crosshairs: true
    },

    series: [{
      name: 'Overall',
      color: '#dc3545',
      data: [<?php echo join($arrayAverage, ',') ?>],
      lineWidth: 3,
      marker: {
        radius: 8
      }
    },
    {
      name: 'Divisi Pengembangan Perusahaan',
      color: '#f0a500',
      data: [<?php echo join($arrayAveragedpp, ',') ?>],
      lineWidth: 1,
      marker: {
        radius: 5
      }
    },
    {
      name: 'Divisi Teknologi',
      color: '#590995',
      data: [<?php echo join($arrayAverageit, ',') ?>],
      lineWidth: 1,
      marker: {
        radius: 5
      }
    },{
      name: 'Divisi Pemasaran',
      color: '#7ea04d',
      data: [<?php echo join($arrayAveragepm, ',') ?>],
      lineWidth: 1,
      marker: {
        radius: 5
      }
    },]

  });
});
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