<?php 
	include '../templates/connect.php';
	if(isset($_REQUEST['thongtintimkiem'])){
		$value = $_REQUEST['thongtintimkiem'];	
		$sql = "SELECT * FROM SANPHAM where TENSANPHAM like '%$value%'";
		$rs= $conn->query($sql);
        $tinhtrang = '';
		if($rs->num_rows>0){
			while ($row = $rs->fetch_assoc()) {
                if($row['SOLUONG']>0){
                    $tinhtrang = "Còn hàng";
                }
                else{
                    $tinhtrang = "Hết hàng";
                }
				echo '<div class="col-lg-3 col-md-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">'.$tinhtrang.'</p>
                            </div>
                            <img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_SP'].'" alt="" />
                            <div class="mask-icon">
                            <ul>
                                <li><a href="chitietsanpham.php" data-toggle="tooltip" data-placement="right" title="Chi tiết"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="So sánh"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Thêm vào yêu thích"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <button onclick="addToCart(\''.$row['MASANPHAM'].'\')" id="update_sl" style=" border: none;
                                    background: #b0b435;
                                    color: #ffffff;"><a class="cart">Add to Cart</a></button>
                            </div>
                        </div>
                    </div>
                </div>';
			}
		}
	}
		
?>