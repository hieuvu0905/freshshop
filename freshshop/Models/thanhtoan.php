<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include '../templates/connect.php';
	ob_start();
    session_start();
		if($_SESSION['cart']){
			$hoten = $_REQUEST['hoten'];
			$email = $_REQUEST['email'];
			$sdt = $_REQUEST['sdt'];
			$matinh = $_REQUEST['matinh'];
			$mahuyen = $_REQUEST['mahuyen'];
			$maxa = $_REQUEST['maxa'];
			$selectXHT = "SELECT xaphuongthitran.`name`, quanhuyen.`name`, tinhthanhpho.`name` FROM `quanhuyen` INNER JOIN tinhthanhpho ON quanhuyen.matp = tinhthanhpho.matp INNER JOIN xaphuongthitran ON xaphuongthitran.maqh = quanhuyen.maqh WHERE xaphuongthitran.xaid='$maxa'";
			$q = $conn->query($selectXHT);
			$kq = $q->fetch_array();
			$diachi1 = $_REQUEST['diachi1'] . " " . $kq['0'] . " " . $kq['1'] . $kq['2'];
			$diachi2 = $_REQUEST['diachi2'] . " " . $kq['0'] . " " . $kq['1'] . $kq['2'];
			$hinhthucthanhtoan = $_REQUEST['hinhthucthanhtoan']??"Thanh toán khi nhận hàng";
			$hinhthucvanchuyen = $_REQUEST['hinhthucvanchuyen']??"FREE";
			$magiamgia = $_REQUEST['magiamgia'];
			$MASANPHAM = "";
			$soluong = "";
			$timestamp = time();
			$ngaydathang = date("Y-m-d H:i:s", $timestamp);
			$tongtien = $_REQUEST['tongtien'];
			$sql = "INSERT INTO `khachhang`(`TENKHACHHANG`, `DIACHI`, `DIACHI2`, `SDT`, `EMAIL`, `SOLANTHANHTOAN`) VALUES ('$hoten','$diachi1','$diachi2','$sdt','$email','1')";
			$query = $conn->query($sql);
			if($query){
				$sql1 = "SELECT MAKHACHHANG FROM KHACHHANG where EMAIL = '$email'";
				$query1 = $conn->query($sql1);
				if($query1){
					$row = $query1->fetch_assoc();
					$makhachhang = $row['MAKHACHHANG'];
					$sql2 = "INSERT INTO `donhang`(`NGAYDATHANG`, `TINHTRANG`, `TONGTIEN`, `MAKHACHHANG`,MAGIAMGIA,`NGAYGIAO`, `NGAYDUYET`) VALUES ('$ngaydathang','Chờ duyệt','$tongtien','$makhachhang','$magiamgia','','')";
					$query2 = $conn->query($sql2);
					if($query2){
						$sl6 = "SELECT DISTINCT MADONHANG FROM `chitietdonhang`";
						$query6 = $conn->query($sl6);
						if($query6->num_rows<=0){
							$sql3 = "SELECT MADONHANG FROM DONHANG";
							$query3 = $conn->query($sql3);
							if($query3){
								$row = $query3->fetch_assoc();
								$madonhang = $row['MADONHANG'];
								$cart = $_SESSION['cart'];
								foreach ($cart as $key => $value) {
									$soluong = $value['soluong'];
									$sotien = (int)$value['soluong'] * (int)$value['GIA'];
									unset($_SESSION['cart'][$key]);
									$sql4 = "INSERT INTO `chitietdonhang`(`MADONHANG`, `MASANPHAM`, `SOLUONG`, `SOTIEN`) VALUES ('$madonhang','$key','$soluong','$sotien')";
									$query4 = $conn->query($sql4);
									if($query4){
										$sql = "UPDATE SANPHAM SET SOLUONG=SOLUONG-$soluong WHERE MASANPHAM='$key'";
										if($conn->query($sql)){
											echo "Vui lòng chờ xác nhận đơn hàng tại hệ thống-";
										}
										
									}
								}
								unset($_SESSION['MAGIAMGIA']);
							}	
						}else{
							$sql3 = "SELECT MADONHANG FROM `donhang` WHERE MADONHANG NOT IN(SELECT MADONHANG FROM chitietdonhang)";
							$query3 = $conn->query($sql3);
							if($query3){
								$row = $query3->fetch_assoc();
								$madonhang = $row['MADONHANG'];
								$cart = $_SESSION['cart'];
								foreach ($cart as $key => $value) {
									$soluong = $value['soluong'];
									$sotien = (int)$value['soluong'] * (int)$value['GIA'];
									unset($_SESSION['cart'][$key]);
									$sql7 = "INSERT INTO `chitietdonhang`(`MADONHANG`, `MASANPHAM`, `SOLUONG`, `SOTIEN`) VALUES ('$madonhang','$key','$soluong','$sotien')";
									$query7 = $conn->query($sql7);
									if($query7){
										$sql = "UPDATE SANPHAM SET SOLUONG=SOLUONG-$soluong WHERE MASANPHAM='$key'";
										if($conn->query($sql)){
											echo "Vui lòng chờ xác nhận đơn hàng tại hệ thống-";
										}
									}

								}
								unset($_SESSION['MAGIAMGIA']);
							}
						}
						
					}else{
						echo "KHONG THEM DUOC DON HANG ".$conn -> error;
					}
				}else{
					echo "LAY MA KHACH HANG";
				}
			}else{
				$sql = "UPDATE `khachhang` SET `TENKHACHHANG`='$hoten',`DIACHI`='$diachi1',`DIACHI2`='$diachi2' , `SOLANTHANHTOAN`=SOLANTHANHTOAN+1 WHERE SDT = '$sdt'";
				$query = $conn->query($sql);
				if($query){
					$sql1 = "SELECT MAKHACHHANG FROM KHACHHANG where EMAIL = '$email'";
					$query1 = $conn->query($sql1);
					if($query1){
						$row = $query1->fetch_assoc();
						$makhachhang = $row['MAKHACHHANG'];
						$sql2 = "INSERT INTO `donhang`(`NGAYDATHANG`, `TINHTRANG`, `TONGTIEN`, `MAKHACHHANG`,MAGIAMGIA,`NGAYGIAO`, `NGAYDUYET`) VALUES ('$ngaydathang','Chờ duyệt','$tongtien','$makhachhang','$magiamgia','','')";
						$query2 = $conn->query($sql2);
						if($query2){
							$sl6 = "SELECT DISTINCT MADONHANG FROM `chitietdonhang`";
							$query6 = $conn->query($sl6);
							if($query6->num_rows<=0){
								$sql3 = "SELECT MADONHANG FROM DONHANG";
								$query3 = $conn->query($sql3);
								if($query3){
									$row = $query3->fetch_assoc();
									$madonhang = $row['MADONHANG'];
									$cart = $_SESSION['cart'];
									foreach ($cart as $key => $value) {
										$soluong = $value['soluong'];
										$sotien = (int)$value['soluong'] * (int)$value['GIA'];
										unset($_SESSION['cart'][$key]);
										$sql4 = "INSERT INTO `chitietdonhang`(`MADONHANG`, `MASANPHAM`, `SOLUONG`, `SOTIEN`) VALUES ('$madonhang','$key','$soluong','$sotien')";
										$query4 = $conn->query($sql4);
										if($query4){
											$sql = "UPDATE SANPHAM SET SOLUONG=SOLUONG-$soluong WHERE MASANPHAM='$key'";
											if($conn->query($sql)){
												echo "Vui lòng chờ xác nhận đơn hàng tại hệ thống-";
											}
										}
									}
									unset($_SESSION['MAGIAMGIA']);
								}	
							}else{
								$sql3 = "SELECT MADONHANG FROM `donhang` WHERE MADONHANG NOT IN(SELECT MADONHANG FROM chitietdonhang)";
								$query3 = $conn->query($sql3);
								if($query3){
									$row = $query3->fetch_assoc();
									$madonhang = $row['MADONHANG'];
									$cart = $_SESSION['cart'];
									foreach ($cart as $key => $value) {
										$soluong = $value['soluong'];
										$sotien = (int)$value['soluong'] * (int)$value['GIA'];
										unset($_SESSION['cart'][$key]);
										$sql7 = "INSERT INTO `chitietdonhang`(`MADONHANG`, `MASANPHAM`, `SOLUONG`, `SOTIEN`) VALUES ('$madonhang','$key','$soluong','$sotien')";
										$query7 = $conn->query($sql7);
										if($query7){
											$sql = "UPDATE SANPHAM SET SOLUONG=SOLUONG-$soluong WHERE MASANPHAM='$key'";
											if($conn->query($sql)){
												echo "Vui lòng chờ xác nhận đơn hàng tại hệ thống-";
											}
										}
									}
									unset($_SESSION['MAGIAMGIA']);

								}

							}
							
						}else{
							echo "KHONG THEM DUOC DON HANG ".$conn -> error;
						}
					}else{
						echo "LAY MA KHACH HANG";
					}
				}
			}
		}
		else{
			echo "Bạn chưa có sản phẩm nào!Vui lòng mua hàng tại cửa hàng";
		}
		
?>