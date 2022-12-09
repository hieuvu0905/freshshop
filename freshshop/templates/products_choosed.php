
<div class="side" id="products_choosed">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <!-- xử lí khi add sản phẩm 
                        xử lí gọn với session
                    -->
                    <ul class="cart-list">
                        <?php 
                            
                             if(isset($_SESSION['cart'])){
                                
                                foreach ($cart as $key =>$value){
                                    
                                    echo '<li>
                                            <a href="#" class="photo"><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$value['HINHANH_SP'].'" alt="" /></a>
                                            <h6><a href="#">'.$value['TENSANPHAM'].'</a></h6>
                                            <p><span id="sl_cart">'.$value['soluong'].'</span>x - <span class="price">'.(int)$value['soluong'] * (int)$value['GIA'].'</span></p>
                                        </li>';     
                                }
                             }
                             
                         ?>
                        <li class="total">
                            <?php
                                $tongtien = 0;
                                if(isset($_SESSION['cart'])){
                                    foreach ($cart as $value) {
                                        $tongtien += (int)$value['soluong'] * (int)$value['GIA'];
                                    }
                                }                     
                             ?>
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right" id="tongtien"><?php echo $tongtien; ?></span>
                        </li>
                    </ul>
                </li>
</div>