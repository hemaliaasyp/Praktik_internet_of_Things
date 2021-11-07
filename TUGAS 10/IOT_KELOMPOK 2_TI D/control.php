<?php
	if (isset($_GET['id']) && isset($_GET['state'])) {
		include 'connect.php';
		$id = $_GET['id'];
		$state = $_GET['state'];

		mysqli_query($connect, "UPDATE output SET state='$state' WHERE id='$id' ");
		header('location: index.php');
		exit;
	}
?>