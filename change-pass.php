  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="process-update.php">
          <div class="form-group">
            <label for="lpw">Masukkan Password Lama</label>
            <input type="text" class="form-control" name="lpw" id="lpw" aria-describedby="id">
          </div>
          <div class="form-group">
            <label for="npw">Masukkan password Baru</label>
            <input type="text" class="form-control" name="npw" id="npw">
          </div>
          <button class="btn btn-danger" name="submit" value="submit" type="submit">Kirim</button>
        </form>
      </div>
    </div>
  </div>