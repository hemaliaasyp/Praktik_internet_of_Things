<?php
include 'connect.php';

session_start();

if ($_SESSION['status'] != "login") {
  header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>small IOT</title>
</head>

<body>
  <div class="container">

    <!-- Title header -->
    <div class="row">
      <div class="col-12 col-md-5 text-center mt-1 mx-auto p-1">
        <h2>small IOT</h2> <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>

    <!-- Panel Control Relay/Lamp -->
    <?php
    $sqlOutput = mysqli_query($connect, "SELECT * FROM output");
    while ($row = mysqli_fetch_assoc($sqlOutput)) {
    ?>
      <div class="col-5 col-md-5 text-center mt-1 mx-auto p-4">
        <div class="card">
          <div class="card-header bg-success">
            Panel Control <?= $row['name'] ?>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <?php
              if ($row['state'] == '0') {
                $state = "OFF";
              } else {
                $state = "ON";
              }
              echo "Status: " . $state;
              ?>
            </h5>
            </p>
            <a href="control.php?id=1&state=1" class="btn btn-success">ON</a>
            <a href="control.php?id=1&state=0" class="btn btn-danger">OFF</a>
          </div>
        </div>
      </div>
    <?php }
    $sqlInput = mysqli_query($connect, "SELECT * FROM input");
    while ($row = mysqli_fetch_assoc($sqlInput)) {
    ?>
    <!-- PANEL MONITOR-->
      <div class="col-12 col-md-5 text-center mt-1 mx-auto p-4">
        <div class="card">
          <div class="card-header bg-primary">
            Panel Sensor DHT22
          </div>
          <div class="card-body">
            <h5 class="card-title">Suhu: <?php echo $row['sensor1']; ?>C</h5>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2']; ?>%</h5>
            </p>
          </div>
        </div>
      </div>
    <?php }

    $url = $_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url"); ?>

</body>

</html>