<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM `donhang` INNER JOIN khachhang ON donhang.MAKHACHHANG = khachhang.MAKHACHHANG WHERE TINHTRANG='Chờ duyệt'";
	$query = $conn->query($sql);
	if($query){
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$row['MADONHANG'].'</td>
                    <td>'.$row['TENKHACHHANG'].'</td>
                    <td>'.$row['NGAYDATHANG'].'</td>
                    <td>'.$row['TINHTRANG'].'</td>
                    <td>'.$row['TONGTIEN'].'</td>
                    <td><a onclick="ConfirmDuyet(\''.$row['MADONHANG'].'\')">Duyệt</a></td>
                </tr>';
		}
	}
	
?>