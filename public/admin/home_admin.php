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

  <!-- toast -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css">

  <!-- sweetaelert CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- dattables css -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.0.0/css/searchBuilder.dataTables.min.css">
  <link rel="stylesheet" href="../../public/admin/style.css">
  <link rel="stylesheet" href="../../public/admin/custom.css">
  <link rel="stylesheet" href="../../public/graphic/style.css">

  <!-- datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <!-- datatables button -->
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.0.0/js/dataTables.searchBuilder.min.js"></script>

  <!-- toast -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>

  <!-- highchart -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/highcharts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/modules/data.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/modules/series-label.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/modules/exporting.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/modules/export-data.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.0/modules/accessibility.min.js"></script>


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
      <div class="card-body">
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

            while($row = $result->fetch_assoc()) {
              $arrayAveragepm[] = $row['averagepm'];
              $arrayTanggalpm[] = "'".$row['datepm']."'";
            }
            $result->close();
          ?>
        <div class="containers pr-3" id="graph"></div>

      </div>
    </div>

    </div>

    <!-- table data -->
    <div class="card text-nowrap text-center">
      <div class="card-header">
        <h3 class="card-title text-center text-danger">Table Data</h3>
      </div>
      <div class="card-body">
        <table id="tabel-data" class="table-responsive table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center" scope="col">No</th>
              <th class="text-center" scope="col">ID</th>
              <th class="text-center" scope="col">Status Karyawan</th>
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
              <th class="text-center" scope="col">Periode</th>
              <th class="text-center" scope="col">Tanggal</th>
            </tr>
          </thead>
          <?php
          $no = 0;
          $koneksi->query("SET lc_time_names = 'id_ID'");
          $stmt = $koneksi->prepare ("SELECT id,status,nama,golongan,divisi,nilai_output,nilai_atasan,nilai_learning,nilai_kedisiplinan,nilai_5r,tanggal,
           DATE_FORMAT(`tanggal`,'%M') 
           AS showdate
           FROM tkaryawans ORDER BY tanggal DESC");
          $stmt->execute();
          if (!$stmt) {
            die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
          }
          else{

          $stmt->bind_result($id,$status, $nama,$golongan,$divisi,$nilai_output,$nilai_atasan,$nilai_learning,$nilai_kedisiplinan,$nilai_5r,$tanggal,$showdate);
          ?>
          <tbody>
            <?php
            while($stmt->fetch())
            {
              $n1 = $nilai_output * 0.7;
              $n2 = $nilai_atasan * 0.1;
              $n3 = $nilai_learning * 0.1;
              $n4 = $nilai_kedisiplinan * 0.05;
              $n5 = $nilai_5r * 0.05;

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
              <td><?php echo $id;?></td>
              <td><?php echo $status;?></td>
              <td class="text-Capitalize font-weight-bold" style="color:<?=$color;?>"><?php echo $nama;?></td>
              <td><?php echo $golongan;?></td>
              <td><?php echo $divisi;?></td>
              <td><?php echo $nilai_output;?></td>
              <td><?php echo $nilai_atasan;?></td>
              <td><?php echo $nilai_learning;?></td>
              <td><?php echo $nilai_kedisiplinan;?></td>
              <td><?php echo $nilai_5r;?></td>
              <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $hasil;?></td>
              <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $grade;?></td>
              <td class="font-weight-bold" style="color:<?=$color;?>"><?php echo $ikk;?></td>
              <td class="text-secondary"><?php echo $showdate;?></td>
              <td class="text-secondary"><?php echo $tanggal;?></td>
            </tr>
            <?php } ?>
          </tbody>
          <?php
          }
          $stmt->close();

          $koneksi->close();
          ?>
        </table>
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


  <!-- script graph-->
  </script>
  <script>
  $(function() {
    var chart = new Highcharts.Chart({
      chart: {
        renderTo: 'graph',
        scrollablePlotArea: {
          minWidth: 700
        },
      },

      title: {
        text: 'GRAFIK RATA-RATA NILAI KARYAWAN'
      },

      subtitle: {
        text: 'PT.INKA(PERSERO)'
      },

      xAxis: {
        categories: [<?php echo implode(',', $arrayTanggal) ?>],
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

      plotOptions: {
        series: {
          cursor: 'pointer',
          point: {
            events: {
              click: function(e) {
                toastr.warning('Periode : ' + this.category + '</br> Hasil : <strong>' + this.y +
                  '</strong>');
              }
            }
          },
          marker: {
            lineWidth: 1
          }
        }
      },

      series: [{
          name: 'Overall',
          color: '#dc3545',
          data: [<?php echo implode(',', $arrayAverage) ?>],
          lineWidth: 3,
          marker: {
            radius: 8
          }
        },
        {
          name: 'Divisi Pengembangan Perusahaan',
          color: '#f0a500',
          data: [<?php echo implode(',', $arrayAveragedpp) ?>],
          lineWidth: 1,
          marker: {
            radius: 5
          }
        },
        {
          name: 'Divisi Teknologi',
          color: '#590995',
          data: [<?php echo implode(',', $arrayAverageit) ?>],
          lineWidth: 1,
          marker: {
            radius: 5
          }
        }, {
          name: 'Divisi Pemasaran',
          color: '#7ea04d',
          data: [<?php echo implode(',', $arrayAveragepm) ?>],
          lineWidth: 1,
          marker: {
            radius: 5
          }
        },
      ]

    });
  });
  </script>

  <!-- Optional JavaScript -->
  <script type="text/javascript">
  $(document).ready(function() {
    $("#keluar").click(function() {

      swal({
          title: 'Logout',
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

  <script>
  $(document).ready(function() {
    $('#tabel-data').DataTable({
      dom: 'Bfrtip',
      language: {
        searchBuilder: {
          add: 'Tambah kondisi',
          button: 'Filter Data',
          condition: 'kondisi',
          clearAll: 'Reset ulang',
          deleteTitle: 'Hapus',
          data: 'Kolom data',
          leftTitle: 'kiri',
          logicAnd: 'Dan',
          logicOr: 'Atau',
          rightTitle: 'Kanan',
          title: {
            0: 'Filter Data',
            _: 'Filters (%d)'
          },
          value: 'Pilihan',
        }
      },

      buttons: [
        'copy',
        // searchbuild
        {
          "extend": "searchBuilder",
          "className": "btnBlue",
          "config": {
            "columns": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            "conditions": {
              "string": {
                "=": {
                  "conditionName": "Sama dengan"
                },
                "!=": {
                  "conditionName": "Tidak sama dengan"
                },
                "!null": null,
                "null": null,
                "contains": null,
                "exclude": null,
                "starts": null,
                "ends": null,

              },

              "date": {
                "=": {
                  "conditionName": "Sama dengan"
                },
                "!=": null,
                "!null": null,
                'null': null,
                ">": null,
                "<": null,
                "exclude": null,
                "between": {
                  "conditionName": "Diantara"
                },
                "!between": null,
              },

              "num": {
                "=": {
                  "conditionName": "Sama dengan"
                },
                "!=": {
                  "conditionName": "Tidak sama dengan"
                },
                "<": {
                  "conditionName": "Kurang dari"
                },
                "<=": {
                  "conditionName": "Kurang dari sama dengan"
                },
                ">": {
                  "conditionName": "Lebih dari"
                },
                ">=": {
                  "conditionName": "Lebih dari sama dengan"
                },
                "!null": null,
                'null': null,
                "between": {
                  "conditionName": "Diantara"
                },
                "!between": {
                  "conditionName": "Bukan diantara"
                }
              }

            }
          }
        },

        // excel
        {
          extend: 'excelHtml5',
          title: 'PT Industri Kereta Api(Persero)',
          messageTop: 'The information in this table is copyright to PT INKA (Persero).',
          customize: function(xlsx) {
            var sheet = xlsx.xl.worksheets['sheet1.xml'];

            $('row c[r^="N"]', sheet).each(function() {

              if ($('is t', this).text() == 'Istimewa') {
                $(this).attr('s', '47');
              } else if ($('is t', this).text() == 'Sangat Memuaskan') {
                $(this).attr('s', '17');
              } else if ($('is t', this).text() == 'Memuaskan') {
                $(this).attr('s', '17');
              } else if ($('is t', this).text() == 'Cukup Memuaskan') {
                $(this).attr('s', '17');
              } else if ($('is t', this).text() == 'Memadai') {
                $(this).attr('s', '7');
              } else if ($('is t', this).text() == 'Kurang Memadai') {
                $(this).attr('s', '7');
              } else if ($('is t', this).text() == 'Tidak Memadai') {
                $(this).attr('s', '12');
              } else if ($('is t', this).text() == 'Tidak Berkontribusi') {
                $(this).attr('s', '12');
              } else {
                $(this).attr('s', '0');
              }

            });
          }
          // asdads
        },
        // pdf
        {
          extend: 'pdfHtml5',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          title: 'PT Industri Kereta Api(Persero)',
          customize: function(doc) {
            doc.content.splice(0, 0, {
              margin: [0, 0, 0, 12],
              alignment: 'center',
              image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABdsAAAHOCAYAAABguNCeAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAC4jAAAuIwF4pT92AAAAB3RJTUUH4gIVBAQDcDPYhgAAgABJREFUeNrs3Xl8VNX9//HXvXeSkI0lAdxqq98fbbVqrVXr1uKCrXaxtoprFVTQrtYFXFuX1n2tda37iqIsQdS4CwruaNUKKogibhh2CCEhc+/9/XHmzAwxmbmTkGQmeT8fjxiYJCOZuffcc9/3cz8HRERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERHoXp7v/ASK9VRiGLR9yEh9h4iP1BUe7qoiIiIiIiIiISD5TgifShVoE7A7gJj77rB+wu4mPEAjSv6bgXUREREREREREJP8otRPpIi2Cdg8TsKcbBGwOfAIsbfG19b5fgbuIiIiIiIiIiEh+UWIn0gVaBO0xIA70B/YCdkt8bAsMwATt7wIvJz6eB1am/VySQncRERERERERERER6RXCMEz/cBOf9wvDcH74dUErj30YhuFP037eSX9OEREREREREREREZEeLS0Ud8Iw9BKfL04L0uNhGDYnPgdpgXv649aFCtxFREREREREREREpNdJC8Rjic/np4XsfhiNn/a99ypwFxEREREREREREZFeJRGEe4nPQxNV6+vaaBeTif25MAzD+xS4i4iIiIiIiIiIiEivkNY+xgnDsDIMw4/SKtXbS4G7iIiIiIiIiIiIiPQeLara994AQbsCdxERERERERERkTzldvc/QKSHcxKfdwNCINgAz1kENAO/A8YlntNJ+38pcBcREREREREREeliCttFOpcN1/egRSDe+ncHEC0ot4H7kShwFxEREREREREREZGeKq21S3kYhl+mLXS6IdmWMuPUUkZERERERERERKT7qLJdpPPYKvP/B2zc4rH1JULx8M23wPfN31XhLiIiIiIiIiIiUjAUtot0vljic9upt+8D4Nx6J+GRI8Fx2ttS5n4UuIuIiIiIiIiIiHQ5he0inchxHMgUsrc0sArnoXGEJ54CnteewP0IFLiLiIiIiIiIiIh0OYXtIvnE98F1ca6/Bv5wogJ3ERERERERERGRAqGwXSSfhJhwvc8AuPl6+MNfOhK4P4ACdxERERERERERkS6hsF0kH8XjUFQJN98Av2934H44CtxFRERERERERES6hMJ2kXzVnAjcb9kggXuIAncREREREREREZFOo7BdJJ+tF7j/uSOB+/0ocBcREREREREREek0CttF8l0ycL8RTlDgLiIiIiIiIiIiko8UtosUAhu439rhwF0tZURERERERERERDqBwnaRQpEeuB//p/YG7oehwF1ERERERERERGSDU9guUkhs4H7bTRsycE+OAwrcRURERERERERE2kdhu0ihWS9w/+OGCNxBgbuIiIiIiIiIiEiHKGwXKUTJwP0/MLpDgft4FLiLiIiIiIiIiIh0mMJ2kUJlA/fbOxS4H4oCdxERERERERERkQ5T2C5SyNYL3P+gwF1ERERERERERKSbKGwXKXTJwP1mGKXAXUREREREREREpDsobBfpCWzgfkd64B62J3B/MPFYiAJ3ERERERERERGRyBS2i/QU6wXuvwfPbU/gfgjwEGZsUOAuIiIiIiIiIiISkcJ2kZ4kGbjfAsclAvcw58D9YBS4i4iIiIiIiIiI5ERhu0hPYwP3OxOBu9uuwP0gFLiLiIiIiIiIiIhEprBdpCdaL3A/oSOB+wQUuIuIiIiIiIiIiGSlsF2kp0oG7rfCse0O3H8LTESBu4iIiIiIiIiISEYK20V6Mhu439WhwP03wCTAQ4G7iIiIiIiIiIhIqxS2i/R06wXux7c3cD8QU+GuwF1ERERERERERKQVCttFeoNk4H4bHNOhwF0V7iIiIiIiIiIiIq1Q2C7SW9jA/e4OBe6/RoG7iIiIiIiIiIjI1yhsF+lN1gvcRytwFxERERERERER2UAUtov0NsnA/XYY2aHAfTIK3EVERERERERERACF7SK9kw3c7+lQ4H4AJnCPocBdRERERERERER6OYXtIr3VeoH7qI4E7pNQ4C4iIiIiIiIiIr2cwnaR3iwZuN8BIxS4i4iIiIiIiIiItJfCdpHezgbu9ypwFxERERERERERaS+F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',
              width: 200,
              height: 60
            });
          },
        }
      ]
    });
  });
  </script>


  <!-- sweetalert JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
  </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>