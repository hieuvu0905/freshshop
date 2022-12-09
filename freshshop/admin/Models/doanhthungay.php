<?php 
	include '../templates/connect.php';
	$days = date('t');
	$month = date('m');
	for($i=1;$i<=$days;$i++){
		$sql = "SELECT SUM(chitietdonhang.SOTIEN) from `chitietdonhang` INNER JOIN donhang ON chitietdonhang.MADONHANG = donhang.MADONHANG where DAY(donhang.NGAYGIAO)='$i' and MONTH(donhang.NGAYGIAO)='$month'";
		$query = $conn->query($sql);
		if($query){
			$row = $query->fetch_array();
			if($row[0]!=null){
				echo '<tr><td>Ngày '.$i.'</td><td>'.number_format($row[0], 0, '', ',').'</td><td></td></tr>';
			}else{
				echo '<tr><td>Ngày '.$i.'</td><td>0</td><td></td></tr>';
			}
		}
	}
?>