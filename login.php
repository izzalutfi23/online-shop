<?php 
session_start();
include 'koneksi.php';
$proses = $_GET['proses'];

if($proses == 'registrasi'){
	mysqli_query($koneksi, "INSERT INTO user (nama_user, username, password, level) VALUES ('$_POST[nama_user]', '$_POST[username]', md5('$_POST[password]'), '$_POST[level]')");
	header('location:index.php?page=login');
}

else if($proses == 'login'){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password=md5('$password')");
	$num=mysqli_num_rows($query);
	$data=mysqli_fetch_array($query);
	$level=$data['level'];
	if($num){
		$_SESSION['username']=$username;
		if($level=='pelanggan'){
			header('location:index.php');
		}
		elseif ($level=='admin') {
			header('location:admin/index.php');
		}
	}
	else{
		header('location:index.php?page=login');
	}
}

else if($proses == 'logout'){
	session_start();
	session_destroy();
	header('location:index.php');
}
?>