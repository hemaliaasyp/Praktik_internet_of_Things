<?php
error_reporting(0);
include 'connect.php';

if (isset($_POST['simpan'])) {
  $id_control = $_POST['id_control'];
  $nama_objek_control = $_POST['nama_objek_control'];
  $state = $_POST['state'];

  $query = "INSERT INTO tb_control VALUES ('$id_control','$nama_objek_control','$state')";
  $result = mysqli_query($connect, $query);

  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($connect) .
      " - " . mysqli_error($connect));
  } else {
    echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='index_control.php'</script>";
  }
}
