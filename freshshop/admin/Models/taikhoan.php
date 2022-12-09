<?php
	session_start();
	include '../templates/connect.php';
	if(isset($_REQUEST['submit'])){
		$taikhoan = $_REQUEST['taikhoan'];
		$password = md5($_REQUEST['password']);
		$sql = "SELECT * from TAIKHOAN where QUYENTAIKHOAN = '1' and TENTAIKHOAN = '$taikhoan' and MATKHAU='$password'";
		$query = $conn->query($sql);
		if($query->num_rows>0){
			$_SESSION['admin'] = $taikhoan;
			// print_r($_SESSION['admin']);
			header("Location: ../pages/index.php");
		}
		else{
			echo "<script type='text/javascript'>alert('Tên tài khoản hoặc mật khẩu không đúng!'); window.location.href = '../pages/login.php';</script>";
		}
	}
?>