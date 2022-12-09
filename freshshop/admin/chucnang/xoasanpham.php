<?php
	include '../templates/connect.php';
	if(isset($_REQUEST['MASANPHAM'])){
		$MASANPHAM = $_REQUEST['MASANPHAM'];
		// $sql = "SELECT sanpham.MASANPHAM FROM `chitietdonhang` INNER JOIN sanpham on chitietdonhang.MASANPHAM = sanpham.MASANPHAM where sanpham.MASANPHAM='$MASANPHAM'";
		// $query = $conn->query($sql);
		// if($query->num_rows>0){
		// 	echo "Không được phép xóa";	
		// }else{
			// echo "Đc phép xóa";
			$sql = "DELETE FROM SANPHAM WHERE MASANPHAM='$MASANPHAM'";
			$query = $conn->query($sql);
			if($query){
				echo "xoá thành công";
			}
		}
	// }
?>