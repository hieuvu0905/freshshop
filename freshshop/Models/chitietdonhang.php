<?php 
	include '../templates/connect.php';
	if(isset($_REQUEST['MADONHANG'])){
		echo '
		<h1>Chi tiết đơn hàng</h1>
		<tr>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        </tr>';
		$value = $_REQUEST['MADONHANG'];
		$sql = "SELECT sanpham.TENSANPHAM,chitietdonhang.SOLUONG,chitietdonhang.SOTIEN FROM `chitietdonhang` INNER JOIN sanpham ON chitietdonhang.MASANPHAM=sanpham.MASANPHAM WHERE chitietdonhang.MADONHANG='$value'";
		$query = $conn->query($sql);
		if($query){
			while ($row = $query->fetch_assoc()) {
				echo '<tr>
		            <td>'.$row['TENSANPHAM'].'</td>
		            <td>'.$row['SOLUONG'].'</td>
		            <td>'.$row['SOTIEN'].'</td>
		        </tr>';
			}
		}
	}
?>