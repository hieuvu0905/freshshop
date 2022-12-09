<?php
	// echo "ok";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include '../templates/connect.php';
	$MADONHANG = $_REQUEST['MADONHANG'];
	$timestamp = time();
	$ngayduyet = date("Y-m-d H:i:s", $timestamp);
	$sql = "UPDATE `donhang` SET `TINHTRANG`='Đã duyệt',NGAYDUYET='$ngayduyet' WHERE `MADONHANG`='$MADONHANG'";
	$query = $conn->query($sql);
	if($query){
		echo "Đã duyệt-";
		// $sql = "SELECT * FROM `donhang` WHERE TINHTRANG='Đã duyệt'";
		// $query = $conn->query($sql);
		// $timestamp = time();
		// $ngayduyet = date("Y-m-d H:i:s", $timestamp);
		// if($query){
		// 	while ($row = $query->fetch_assoc()) {
		// 		$sql = "INSERT INTO `xulygiaohang`(`MADONHANG`, `TINHTRANG`, `NGAYXULY`) VALUES ('".$row['MADONHANG']."','Đã duyệt','$ngayduyet')";
		// 		$query = $conn->query($sql);
		// 		if($query){
		// 			echo "Đã duyệt-";	
		// 		}
		// 	}
		// }
	}
?>