<?php
	// echo "ok";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include '../templates/connect.php';
	$MADONHANG = $_REQUEST['MADONHANG'];
			$sql = "SELECT * FROM CHITIETDONHANG where MADONHANG='$MADONHANG'";
			$query = $conn->query($sql);
			if($conn->query($sql)){
				while ($row = $query->fetch_assoc()) {
					$soluong = $row['SOLUONG'];
					$MASANPHAM = $row['MASANPHAM'];
					$sql = "UPDATE SANPHAM SET SOLUONG=SOLUONG+$soluong WHERE MASANPHAM='$MASANPHAM'";
					$conn->query($sql);
				}
				$sql = "DELETE FROM CHITIETDONHANG where MADONHANG='$MADONHANG'";
				$query = $conn->query($sql);
				if($query){
					$sql = "DELETE FROM DONHANG where MADONHANG='$MADONHANG'";
					$query = $conn->query($sql);
					if($query){
						echo "Đã hủy";
					}
				}
			}
?>