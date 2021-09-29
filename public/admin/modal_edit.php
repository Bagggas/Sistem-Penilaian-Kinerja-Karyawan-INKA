<?php
if (isset($_GET['id'])) {
  include "../../config.php";
	
  $modal = "SELECT no,id,status,nama,divisi,golongan,nilai_output,nilai_atasan,nilai_learning,nilai_kedisiplinan,nilai_5r
            FROM tkaryawans 
            WHERE no=?";
  $stmt = mysqli_prepare($koneksi, $modal);
  if (!$stmt) {
    die('Query Error: '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
  }

  $no=$_GET['id'];

  mysqli_stmt_bind_param($stmt, "i", $no);

  mysqli_stmt_execute($stmt); 

  $result = mysqli_stmt_get_result($stmt);

  while ($data = mysqli_fetch_assoc($result)) {
    $nopk= $data['no'];
    $id= $data['id'];
    $status= $data['status'];
    $nama= $data['nama'];
    $divisi= $data['divisi'];
    $golongan = $data['golongan'];
    $nilai_output = $data['nilai_output'];
    $nilai_atasan = $data['nilai_atasan'];
    $nilai_learning = $data['nilai_learning'];
    $nilai_kedisiplinan = $data['nilai_kedisiplinan'];
    $nilai_5r= $data['nilai_5r'];
  }

  mysqli_stmt_close($stmt);

  mysqli_close($koneksi);
  }
?>

<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="../../public/admin/process-update.php?id=<?php echo $nopk; ?>">

        <div class="form-group">
          <input type="hidden" class="form-control" name="no" id="no" aria-describedby="no"
            value="<?php echo $nopk; ?> " readonly>
        </div>

        <div class="form-group">
          <label for="id">ID karyawan</label>
          <input type="text" class="form-control" name="id" id="id" aria-describedby="id" value="<?php echo $id; ?> "
            readonly>
        </div>
        <div class="form-group">
          <label for="status">Status Karyawan</label>
          <input type="text" class="form-control" name="status" id="status" value="<?php echo $status; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama">Nama Karyawan</label>
          <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="divisi">Divisi</label>
          <input type="text" class="form-control" name="divisi" id="divisi" value="<?php echo $divisi; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="golongan">Golongan</label>
          <input type="text" class="form-control" name="golongan" id="golongan" value="<?php echo $golongan; ?>"
            readonly>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nilai-output">Nilai Output</label>
            <input type="number" min="0" max="100" step="any" class="form-control" name="nilai_output" id="nilai-output"
              aria-describedby="nilai-output" value="<?php echo $nilai_output; ?>" required>
          </div>
          <div class="form-group col-md-4">
            <label for="nilai-atasan">Nilai Atasan</label>
            <input type="number" min="0" max="100" step="any" class="form-control" name="nilai_atasan" id="nilai-atasan"
              aria-describedby="nilai-atasan" value="<?php echo $nilai_atasan; ?>" required>
          </div>
          <div class="form-group col-md-4">
            <label for="nilai-learning">Nilai learning</label>
            <input type="number" min="0" max="100" step="any" class="form-control" name="nilai_learning"
              id="nilai-learning" aria-describedby="nilai-learning" value="<?php echo $nilai_learning; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nilai-kedisiplinan">Nilai kedisiplinan</label>
            <input type="number" min="0" max="100" step="any" class="form-control" name="nilai_kedisiplinan"
              id="nilai-kedisiplinan" aria-describedby="nilai-kedisiplinan" value="<?php echo $nilai_kedisiplinan; ?>"
              required>
          </div>
          <div class="form-group col-md-4">
            <label for="nilai-5r">Nilai 5r</label>
            <input type="number" min="0" max="100" step="any" class="form-control" name="nilai_5r" id="nilai-5r"
              aria-describedby="nilai-5r" value="<?php echo $nilai_5r; ?>" required>
          </div>
        </div>
        <button class="btn btn-danger mt-1" name="submit" value="submit" type="submit">Kirim</button>
      </form>
    </div>
  </div>
</div>