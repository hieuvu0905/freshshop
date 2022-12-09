<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM TAIKHOAN inner join DANHSACHQUYEN on TAIKHOAN.QUYENTAIKHOAN = DANHSACHQUYEN.ID";
	$query = $conn->query($sql);
	if($query){
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$row['TENTAIKHOAN'].'</td>
                    <td>'.$row['QUYENTAIKHOAN'].'</td>
                    <td>'.$row['TENNGUOIDUNG'].'</td>
                    <td>'.$row['EMAIL'].'</td>
                    <td>'.$row['SDT'].'</td>
                    <td>'.$row['DIACHI'].'</td>
                    <td><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_TK'].'" alt="" width="100px"/></td>
                    <td><a href="../chucnang/thaydoiquyentaikhoan.php?TENTAIKHOAN='.$row['TENTAIKHOAN'].'" ><i class="bi bi-pencil-square"></i></a> <a onclick="ConfirmXoa(\''.$row['TENTAIKHOAN'].'\')"><i class="bi bi-trash"></i></a></td>
                </tr>';
		}
	}
?>