<?php 
	include 'templates/connect.php';
	$value = $_REQUEST['masanpham'];
	$sql = "SELECT * FROM SANPHAM WHERE MASANPHAM='$value'";
	$query = $conn->query($sql);
	$tinhtrang="";
	if($query){
		while ($row = $query->fetch_assoc()) {
			if($row['SOLUONG']>0){
                $tinhtrang = "Còn hàng";
            }
            else{
                $tinhtrang = "Hết hàng";
            }
			echo '<div class="col-lg-6">
               	<img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_SP'].'" alt="" width ="400px" height="400px"/>
               </div>
               <div class="col-lg-6">
               		<h1 style="font-weight:bold;font-size:40px">'.$row['TENSANPHAM'].'</h1>
               		<h1>Đơn giá</h1>
               		<h3>'.number_format($row['DONGIA'],0,'',',').'đ</h3>
               		<h1>Đơn vị tính</h1>
               		<h3>'.$row['DVT'].'</h3>
               		<h1>Tình trạng</h1>
               		<h3 style="font-weight:bold;">'.$tinhtrang.'</h3>
               		<button onclick="addToCart(\''.$row['MASANPHAM'].'\')" id="update_sl" style=" border: none;
                                background: #b0b435;
                                color: #ffffff;width: 200px;height: 50px;cursor: pointer;"><a class="cart">Add to Cart</a></button>
               		<h1 style="padding-top:20px">Mô tả</h1>
               		<hr>
               		<p style="font-size:18px;word-wrap: break-word;">'.$row['MOTA'].'</p>
               </div>';
		}
	}
?>