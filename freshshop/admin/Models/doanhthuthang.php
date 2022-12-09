<?php 
	include '../templates/connect.php';
	for($i=1;$i<=12;$i++){
		$sql = "SELECT SUM(chitietdonhang.SOTIEN) from `chitietdonhang` INNER JOIN donhang ON chitietdonhang.MADONHANG = donhang.MADONHANG where MONTH(donhang.NGAYGIAO)='$i'";
		$query = $conn->query($sql);
		if($query){
			$row = $query->fetch_array();
			if($row[0]!=null){
				echo '<tr><td>Tháng '.$i.'</td><td>'.number_format($row[0], 0, '', ',').'</td><td></td></tr>';
			}else{
				echo '<tr><td>Tháng '.$i.'</td><td>0</td><td></td></tr>';
			}
		}		
		
	}
?>