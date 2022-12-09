<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM KHACHHANG";
	$query = $conn->query($sql);
	if($query){
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$row['MAKHACHHANG'].'</td>
                    <td>'.$row['TENKHACHHANG'].'</td>
                    <td>'.$row['DIACHI'].'</td>
                    <td>'.$row['DIACHI2'].'</td>
                    <td>'.$row['SDT'].'</td>
                    <td>'.$row['EMAIL'].'</td>
                    <td><a onclick="ConfirmXoa(\''.$row['MAKHACHHANG'].'\')"><i class="bi bi-trash"></i></a></td>
                </tr>';
		}
	}
	
?>