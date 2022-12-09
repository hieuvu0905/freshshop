<?php 
	include '../templates/connect.php';
	$sql = "SELECT * FROM  DANHSACHQUYEN";
	$query = $conn->query($sql);
	if($query){
        $i=1;
		while ($row = $query->fetch_assoc()) {
			echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$row['QUYENTAIKHOAN'].'</td>
                    <td><a onclick="ConfirmXoa(\''.$row['id'].'\')"><i class="bi bi-trash"></i></a></td>
                </tr>';
            $i++;
		}
	}
?>