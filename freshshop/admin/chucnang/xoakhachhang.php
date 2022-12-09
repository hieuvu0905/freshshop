<?php
	include '../templates/connect.php';
	if(isset($_REQUEST['MAKHACHHANG'])){
		$MAKHACHHANG = $_REQUEST['MAKHACHHANG'];
		$sql = "SELECT MAKHACHHANG FROM `donhang` where MAKHACHHANG='$MAKHACHHANG'";
		$query = $conn->query($sql);
		if($query->num_rows>0){
			echo "Khách hàng đang thực hiện thanh toán";	
		}else{
			// echo "Đc phép xóa";
			$sql = "DELETE FROM KHACHHANG WHERE MAKHACHHANG='$MAKHACHHANG'";
			$query = $conn->query($sql);
			if($query){
				echo "Đã xóa";
			}
		}
	}
?>