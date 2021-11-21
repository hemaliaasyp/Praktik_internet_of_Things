<?php
include 'connect.php';

session_start();

if ($_SESSION['status'] != "login") {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Data Sensor</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
    <div class="container">
      <a class="navbar-brand" href="index.php">IoT Smart Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li>
            <div class="dropdown">
              <button type="button" class="btn btn-primary" data-toggle="dropdown">
                Notifications <span class="badge badge-light" id="notif"></span>
              </button>
              <div id="nama_notif" class="dropdown-menu custom" style="width: 500px;">
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index_control.php">Data Control</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index_sensor.php">Data Sensor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Title header -->
  <div class="row">
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-1">
      <h1>Data Sensor</h1>
    </div>
  </div>
  <hr>
  <!-- Close Navbar -->
  <center><button type="button" class="btn btn-warning"><a href="tambah_sensor.php"><i class="fas fa-plus"></i></a></button></center>
  <?php
  $sqlInput = mysqli_query($connect, "SELECT * FROM sensor1 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor1.id_sensor 
    WHERE sensor1.id_sensor = 1 ORDER BY waktu DESC LIMIT 1");
  while ($row = mysqli_fetch_array($sqlInput)) {
  ?>
    <!-- PANEL MONITOR-->
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
      <div class="card">
        <strong>
          <div class="card-header bg-primary"><?php echo $row['nama_objek_sensor']; ?></div>
        </strong>
        <div class="card-body">
          <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
          <?php
          $kelembapan = mysqli_query($connect, "SELECT * FROM sensor2 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor2.id_sensor 
    WHERE sensor2.id_sensor = 1 ORDER BY waktu DESC LIMIT 1");
          while ($row = mysqli_fetch_array($kelembapan)) {
          ?>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
          <?php } ?>
          <a href="hapus_sensor.php?id_sensor=1" type="button" class="btn btn-danger"><i class='fas fa-trash'></i></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $sqlInput = mysqli_query($connect, "SELECT * FROM sensor1 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor1.id_sensor 
    WHERE sensor1.id_sensor = 2 ORDER BY waktu DESC LIMIT 1");
  while ($row = mysqli_fetch_array($sqlInput)) {
  ?>
    <!-- PANEL MONITOR-->
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
      <div class="card">
        <strong>
          <div class="card-header bg-primary"><?php echo $row['nama_objek_sensor']; ?></div>
        </strong>
        <div class="card-body">
          <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
          <?php
          $kelembapan = mysqli_query($connect, "SELECT * FROM sensor2 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor2.id_sensor 
    WHERE sensor2.id_sensor = 2 ORDER BY waktu DESC LIMIT 1");
          while ($row = mysqli_fetch_array($kelembapan)) {
          ?>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
          <?php } ?>
          <a href="hapus_sensor.php?id_sensor=2" type="button" class="btn btn-danger"><i class='fas fa-trash'></i></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $sqlInput = mysqli_query($connect, "SELECT * FROM sensor1 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor1.id_sensor 
    WHERE sensor1.id_sensor = 3 ORDER BY waktu DESC LIMIT 1");
  while ($row = mysqli_fetch_array($sqlInput)) {
  ?>
    <!-- PANEL MONITOR-->
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
      <div class="card">
        <strong>
          <div class="card-header bg-primary"><?php echo $row['nama_objek_sensor']; ?></div>
        </strong>
        <div class="card-body">
          <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
          <?php
          $kelembapan = mysqli_query($connect, "SELECT * FROM sensor2 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor2.id_sensor 
    WHERE sensor2.id_sensor = 3 ORDER BY waktu DESC LIMIT 1");
          while ($row = mysqli_fetch_array($kelembapan)) {
          ?>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
          <?php } ?>
          <a href="hapus_sensor.php?id_sensor=3" type="button" class="btn btn-danger"><i class='fas fa-trash'></i></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $sqlInput = mysqli_query($connect, "SELECT * FROM sensor1 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor1.id_sensor 
    WHERE sensor1.id_sensor = 4 ORDER BY waktu DESC LIMIT 1");
  while ($row = mysqli_fetch_array($sqlInput)) {
  ?>
    <!-- PANEL MONITOR-->
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
      <div class="card">
        <strong>
          <div class="card-header bg-primary"><?php echo $row['nama_objek_sensor']; ?></div>
        </strong>
        <div class="card-body">
          <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
          <?php
          $kelembapan = mysqli_query($connect, "SELECT * FROM sensor2 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor2.id_sensor 
    WHERE sensor2.id_sensor = 4 ORDER BY waktu DESC LIMIT 1");
          while ($row = mysqli_fetch_array($kelembapan)) {
          ?>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
          <?php } ?>
          <a href="hapus_sensor.php?id_sensor=4" type="button" class="btn btn-danger"><i class='fas fa-trash'></i></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $sqlInput = mysqli_query($connect, "SELECT * FROM sensor1 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor1.id_sensor 
    WHERE sensor1.id_sensor = 5 ORDER BY waktu DESC LIMIT 1");
  while ($row = mysqli_fetch_array($sqlInput)) {
  ?>
    <!-- PANEL MONITOR-->
    <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
      <div class="card">
        <strong>
          <div class="card-header bg-primary"><?php echo $row['nama_objek_sensor']; ?></div>
        </strong>
        <div class="card-body">
          <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
          <?php
          $kelembapan = mysqli_query($connect, "SELECT * FROM sensor2 INNER JOIN tb_sensor ON tb_sensor.id_sensor = sensor2.id_sensor 
    WHERE sensor2.id_sensor = 5 ORDER BY waktu DESC LIMIT 1");
          while ($row = mysqli_fetch_array($kelembapan)) {
          ?>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
          <?php } ?>
          <a href="hapus_sensor.php?id_sensor=5" type="button" class="btn btn-danger"><i class='fas fa-trash'></i></a>
        </div>
      </div>
    </div>
  <?php } ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="tampil.js"></script>

</body>
<script>
  $(document).ready(function() {
    selesai();
  });


  function selesai() {
    setTimeout(function() {
      jumlah();
      selesai();
      pesan();
    }, 200);
  }


  function jumlah() {
    $.getJSON("data2.php", function(datas) {
      $("#notif").html(datas.jumlah);
    });
  }



  function pesan() {
    $.getJSON("data_pesan2.php", function(data) {
      $("#nama_notif").empty();
      var no = 1;
      $.each(data.result, function() {
        $("#nama_notif").append(`<a id="nama_objek_sensor" class="dropdown-item " href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
            </svg>&nbsp;` + 'Data sensor: ' + this['nama_objek_sensor'].substr(0, 1000) + ` berhasil ditambahkan</a>`);
      });
    });
  }
</script>


</html>