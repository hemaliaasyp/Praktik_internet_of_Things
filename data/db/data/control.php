<?php
	if (isset($_POST['id_control']) && isset($_POST['status_control'])) {
		include 'function.php';
		$id_control = $_POST['id_control'];
		$status_control = $_POST['status_control'];

		mysqli_query($koneksi, "UPDATE tb_control SET status_control='$status_control' WHERE id_control='$id_control' ");
		header('location: index_control.php');
		exit;
	}
?>