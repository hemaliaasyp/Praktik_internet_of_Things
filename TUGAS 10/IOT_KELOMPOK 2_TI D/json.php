<?php 
if(isset($_GET['id'])){
	include 'connect.php';
	$id = $_GET['id'];

	$sql = mysqli_query($connect, "SELECT * FROM output WHERE id='$id'");
	$query = mysqli_num_rows($sql);

	if($query > 0){
		$data = mysqli_fetch_assoc($sql);
	}else{
		$data = ["id" => "Not Valid"];
	}
	$res = json_encode($data);
	echo($res);
}
?>