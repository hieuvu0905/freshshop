<?php 
	include '../templates/connect.php';
	$sql = "SELECT MASANPHAM,SUM(SOLUONG) FROM SANPHAM GROUP BY MASANPHAM";
	$query = $conn->query($sql);
	if($query){
		while ($row = $query->fetch_array()) {
			echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
		}
	}
?>