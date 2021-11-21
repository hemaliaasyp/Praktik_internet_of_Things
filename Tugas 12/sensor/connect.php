<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "smarthome";

$connect = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_errno()){
	echo "koneksi error ke database".mysqli_connect_errno();
}
