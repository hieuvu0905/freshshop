<?php
	include '../templates/connect.php';
	if(isset($_REQUEST['MADANHMUC'])){
		$MADANHMUC = $_REQUEST['MADANHMUC'];
		$sql = "SELECT sanpham.MASANPHAM FROM `chitietdonhang` INNER JOIN sanpham on chitietdonhang.MASANPHAM = sanpham.MASANPHAM where sanpham.MASANPHAM='$MASANPHAM'";
		$query = $conn->query($sql);
		if($query->num_rows>0){
			echo "Không được phép xóa";	
		}else{
			// echo "Đc phép xóa";
			$sql = "DELETE FROM SANPHAM WHERE MADANHMUC='$MADANHMUC'";
			$query = $conn->query($sql);
			if($query){
				$sql = "DELETE FROM DANHMUCSANPHAM WHERE MADANHMUC='$MADANHMUC'";
				$query = $conn->query($sql);
				if($query){
					echo "Đã xóa";
				}
				
			}
		}
	}
?>