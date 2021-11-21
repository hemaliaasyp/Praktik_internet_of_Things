<?php
if (isset($_GET['id_control']) && isset($_GET['state'])) {
	include 'connect.php';
	$id_control = $_GET['id_control'];
	$nama_objek_control = $_GET['nama_objek_control'];
	$state = $_GET['state'];

	mysqli_query($connect, "UPDATE tb_control SET state = '$state' WHERE id_control = '$id_control' ");
	header('location: index_control.php');
	exit;
}
