<?php
	include '../templates/connect.php';
	$value = $_REQUEST['quyentaikhoan'];
	$sql = "INSERT INTO DANHSACHQUYEN VALUES ('','$value')";
	$query = $conn->query($sql);
	if($query){
		echo "Đã thêm";
	}
	else{
		echo "Quyền đã có";
	}
?>