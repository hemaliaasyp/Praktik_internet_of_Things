<?php
error_reporting(0);
include 'connect.php';

if (isset($_POST['simpan'])) {
  $id_sensor = $_POST['id_sensor'];
  $nama_objek_sensor = $_POST['nama_objek_sensor'];

  $query = "INSERT INTO tb_sensor VALUES ('$id_sensor','$nama_objek_sensor')";
  $result = mysqli_query($connect, $query);

  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($connect) .
      " - " . mysqli_error($connect));
  } else {
    echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='index_sensor.php'</script>";
  }
}
