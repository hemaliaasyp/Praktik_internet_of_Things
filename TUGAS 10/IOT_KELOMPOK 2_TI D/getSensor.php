<?php 
include 'connect.php';
$id = $_GET['id'];
$sensor1 = $_GET['sensor1'];
$sensor2 = $_GET['sensor2'];

mysqli_query($connect, "UPDATE input SET sensor1='$sensor1', sensor2='$sensor2' WHERE id='$id'");
