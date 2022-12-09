<?php
	// echo "ok";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include '../templates/connect.php';
	$MADONHANG = $_REQUEST['MADONHANG'];
	$timestamp = time();
	$ngaygiao = date("Y-m-d H:i:s", $timestamp);
	$sql = "UPDATE DONHANG SET `TINHTRANG`='Đã giao',`NGAYGIAO`='$ngaygiao' WHERE `MADONHANG`='$MADONHANG'";
	$query = $conn->query($sql);
	if($query){
		echo "Đã xử lý";
		// $sql = "DELETE FROM xulygiaohang where tinhtrang='Đã giao'";
		// $query = $conn->query($sql);
		// if($query){
		// 	$sql = "DELETE FROM CHITIETDONHANG where MADONHANG='$MADONHANG'";
		// 	$query = $conn->query($sql);
		// 	if($query){
		// 		$sql = "DELETE FROM DONHANG where MADONHANG='$MADONHANG'";
		// 		$query = $conn->query($sql);
		// 		if($query){
		// 			echo "Đã xử lý";
		// 		}
		// 	}
		// }
	}
?>