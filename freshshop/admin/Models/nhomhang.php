<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM DANHMUCSANPHAM";
	$query = $conn->query($sql);
	if($query){
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$row['MADANHMUC'].'</td>
                    <td>'.$row['TENDANHMUC'].'</td>
                    <td><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_DM'].'" alt="" width="100px"/></td>
                    <td>'.$row['MOTA'].'</td>
                    <td>'.$row['NGAYBATDAU'].'</td>
                    <td>
					<a href="../chucnang/suadanhmuc.php?MADANHMUC='.$row['MADANHMUC'].'">
					<i class="bi bi-pencil-square"></i></a>
					 <a onclick="ConfirmXoa(\''.$row['MADANHMUC'].'\')"><i class="bi bi-trash"></i></a>
					 </td>
                </tr>';
		}
	}
	
?>