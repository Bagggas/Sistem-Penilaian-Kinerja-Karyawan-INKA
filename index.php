<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">


  <!-- icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
  <link rel="manifest" href="img/icons/site.webmanifest">
  <link rel="mask-icon" href="img/icons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>INKA</title>
        <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="gagal"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Gagal",
                    text: "Pastikan ID atau Password anda benar!",
                    button :false,
                    timer: 2000
                  })
                });
              
              </script>';

              }
              else if($_GET['pesan']=="berhasil-logout"){
                echo '<script type="text/javascript">

                  $(document).ready(function(){
                    swal({
                      icon : "success",
                      position: "top-end",
                      type: "Sukses!",
                      title: "Berhasil Logout",
                      button :false,
                      timer: 2000
                    })
                  });
                
                </script>';
              }
            
              else if($_GET['pesan']=="gagal-admin"){
                echo '<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    icon : "error",
                    position: "top-end",
                    title: "Oops...",
                    text: "Anda bukan admin",
                    button :false,
                    timer: 2000
                  })
                });
              
              </script>';
              }
              
            }
            
            ?>
</head>

<body>
  <!-- jumbo tron  -->
  <div class="jumbotron jumbotron-fluid ">
    <!-- container -->
    <div class="container mt-n4">
      <!-- login -->
      <div class=" d-flex flex-row-reverse ml-5">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#LoginModal">Masuk</button>
      </div>
      <!-- login end -->

      <!-- modal -->
      <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="LoginModal">Masuk Akun</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- form -->
              <form action="cek_login.php" method="POST">
                <div class="form-group">
                  <label for="id">ID Pengguna</label>
                  <input type="text" class="form-control" name="idlog" placeholder="Masukkan ID" required="required">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="passworddb" required="required"
                    placeholder="Masukkan Password">
                  <small class="form-text text-warning">Rahasiakan Password Anda!</small>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" value="login" name="loginbtn">Masuk</button>
            </div>
            </form>
            <!-- form end -->

          </div>
        </div>
      </div>
      <!-- modal end -->

      <!-- text title -->
      <div class="container container-title pt-5 text-white" id="str">
        <h1 class="text-lg-center text-wrap text-title pt-5 w3-animate-opacity">SISTEM INFORMASI PENILAIAN KINERJA
          KARYAWAN </br> PERUSAHAAN PT INKA (PERSERO)</h1>
      </div>
      <!-- text-title end -->
    </div>
    <!-- container end -->
  </div>
  <!-- jumbo tron end -->

  <!-- Optional JavaScript -->

  <!-- script bootstrap -->
  <script type="text/javascript">
  setTimeout(function() {
    // Closing the alert 
    $('.alert').alert('close');
  }, 2000);
  </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>