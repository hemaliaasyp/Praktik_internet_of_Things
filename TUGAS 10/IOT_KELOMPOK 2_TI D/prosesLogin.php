<?php 
include 'connect.php';

$user = $_POST['inputUserID'];
$pass = $_POST['inputPassword'];

$sql = mysqli_query($connect, "SELECT * FROM `user` WHERE user_id='$user' AND password='$pass'"); 
$cek = mysqli_num_rows($sql);

if($cek > 0){
    session_start();
	$_SESSION['user'] = $user;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
    session_start();
    $_SESSION['message'] = 'username atau password salah';
    header("location:login.php");
}


?>