<?php
include "../../config.php";

if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($koneksi, $_POST["id"]);
   $sql = "SELECT id FROM user WHERE id='$id'";
   $result = mysqli_query($koneksi, $sql);
   echo mysqli_num_rows($result);
}
?>