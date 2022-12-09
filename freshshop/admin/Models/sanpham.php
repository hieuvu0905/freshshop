<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM SANPHAM";
	$query = $conn->query($sql);

	if($query){
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$row['MASANPHAM'].'</td>
                    <td name="tensanpham">'.$row['TENSANPHAM'].'</td>
                    <td><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_SP'].'" alt="" width="100px"/></td>
                    <td name="mota">'.$row['MOTA'].'</td>
                    <td name="dongia">'.$row['DONGIA'].'</td>
                    <td name="dongia">'.$row['SOLUONG'].'</td>
                    <td name="DVT">'.$row['DVT'].'</td>
                    <td name="ngaybatdau">'.$row['NGAYBATDAU'].'</td>
                    <td><a href="../chucnang/suasanpham.php?MASANPHAM='.$row['MASANPHAM'].'" >
                    <i class="bi bi-pencil-square"></i></a> <a onclick="ConfirmXoa(\''.$row['MASANPHAM'].'\')">
                    <i class="bi bi-trash"></i></a>
                    </td>
                </tr>';
		}
	}
?>