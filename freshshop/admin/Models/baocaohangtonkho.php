<?php 
	// include '../templates/connect.php';
	// //$month = date("m");
	// for($i=1;$i<=12;$i++){
	// 	$sql = "SELECT SUM(chitietdonhang.SOLUONG) from `chitietdonhang` INNER JOIN donhang ON chitietdonhang.MADONHANG = donhang.MADONHANG where MONTH(donhang.NGAYGIAO)='$i'";
	// 	$sql1 = "SELECT SUM(chitietnhaphang.SOLUONG) FROM `chitietnhaphang` WHERE MONTH(chitietnhaphang.NGAYNHAPHANG)='$i'";
	// 	$query1 = $conn->query($sql1);
	// 	$query = $conn->query($sql);
	// 	if($query){
	// 		$row = $query->fetch_array();
	// 		$row1 = $query1->fetch_array();
	// 		if($row[0]!=null&&$row1[0]==null){
	// 			echo '<tr><td>Tháng '.$i.'</td><td>0</td><td>'.$row[0].'</td></tr>';	
	// 		}else if($row[0]==null&&$row1[0]!=null){
	// 			echo '<tr><td>Tháng '.$i.'</td><td>'.$row1[0].'</td><td>0</td></tr>';
	// 		}
	// 		else if($row[0]!=null&&$row1[0]!=null){
	// 			echo '<tr><td>Tháng '.$i.'</td><td>'.$row1[0].'</td><td>'.$row[0].'</td></tr>';
	// 		}
	// 		else{
	// 			echo '<tr><td>Tháng '.$i.'</td><td>0</td><td>0</td></tr>';
	// 		}
	// 	}		
		
	// }
?>
<?php
	include '../templates/connect.php';
	if(isset($_REQUEST['value'])){
		// $sql = "SELECT chitietnhaphang.MASANPHAM,SUM(chitietnhaphang.SOLUONG) FROM `chitietnhaphang` where MONTH(NGAYNHAPHANG)='$value' GROUP BY chitietnhaphang.MASANPHAM";
		$value = $_REQUEST['value'];
		echo '<tr><td>Mặt hàng</td><td>Số lượng nhập</td><td>Số lượng bán ra</td><td>Tồn kho</td></tr>';
		$sql = "SELECT MASANPHAM FROM SANPHAM";
		$query = $conn->query($sql);
		if($query){
			while ($row = $query->fetch_array()) {
				$sql1 = "SELECT SUM(chitietnhaphang.SOLUONG) FROM `chitietnhaphang` WHERE chitietnhaphang.MASANPHAM='".$row[0]."' and MONTH(chitietnhaphang.NGAYNHAPHANG)='$value'";
				$sql2 = "SELECT SUM(chitietdonhang.SOLUONG) from `chitietdonhang` INNER JOIN donhang ON chitietdonhang.MADONHANG = donhang.MADONHANG where MONTH(donhang.NGAYGIAO)='$value' and chitietdonhang.MASANPHAM = '".$row[0]."'";
				$query1 = $conn->query($sql1);
				$query2 = $conn->query($sql2);
				$row1 = $query1->fetch_array();
				$row2 = $query2->fetch_array();
				if($row1[0]!=null&&$row2[0]==null){
					echo '<tr><td>'.$row[0].'</td><td>'.$row1[0].'</td><td>0</td><td>'.$row1[0].'</td></tr>';
				}else if($row1[0]==null&&$row2[0]!=null){
					echo '<tr><td>'.$row[0].'</td><td>0</td><td>'.$row2[0].'</td><td>'.-$row2[0].'</td></tr>';
				}else if($row1[0]!=null&&$row2[0]!=null){
					echo '<tr><td>'.$row[0].'</td><td>'.$row1[0].'</td><td>'.$row2[0].'</td><td>'.(int)($row1[0]-$row2[0]).'</td></tr>';
				}else{
					echo '<tr><td>'.$row[0].'</td><td>0</td><td>0</td><td>0</td></tr>';
				}	
			}
		}
	}
	
?>