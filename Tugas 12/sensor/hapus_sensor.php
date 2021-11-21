<?php
error_reporting(0);
include 'connect.php';

if (isset($_GET['id_sensor'])) {
    $id_sensor = $_GET['id_sensor'];

    $query = "DELETE from tb_sensor where id_sensor = '$id_sensor'";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Data gagal ditambahkan; " . mysqli_errno($connect) . mysqli_error($connect));
    } else {
        echo "<script>alert('Data Berhasil Dihapus');
            window.location.href='index_sensor.php'</script>";
    }
}
