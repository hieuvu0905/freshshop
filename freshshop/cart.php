<?php 
    ob_start();
    session_start();
    include 'templates/connect.php';
?>

<head>
    <?php include 'templates/link.php'; ?>

</head>

<body>
    <!-- Start Main Top -->
   <?php include 'templates/header.php'; ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php include 'templates/menu.php'; ?>
    <!-- End Main Top -->

   

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="gallery.php">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main" id="listCart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <form action="updateCart.php">
                        <table class="table" id="cartU">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                    <?php 
                                        $cart = $_SESSION['cart']??[];
                                        if(count($cart)){
                                            foreach ($cart as $key =>$value) {
                                                
                                                // $sqlSelect = "SELECT * FROM `giohang` WHERE MASANPHAM = '$key'";
                                                echo '<tr>
                                                <td class="thumbnail-img">
                                                        <a href="#">
                                                    <img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$value['HINHANH_SP'].'" alt="" />
                                                    </a>
                                                    </td>
                                                    <td class="name-pr">
                                                        <a href="#">
                                                    '.$value['TENSANPHAM'].'
                                                    </a>
                                                    </td>
                                                    <td class="price-pr">
                                                        <p>'.$value['GIA'].'</p>
                                                    </td>
                                                    <td class="quantity-box"><input type="number" size="4" value="'.$value['soluong'].'" min="0" step="1" class="c-input-text qty text" name="soluong['.$key.']" id="soluong_'.$key.'" onchange ="updateCart(\''.$key.'\')"></td>
                                                    <td class="total-pr">
                                                        <p>'.(int)$value['soluong'] * (int)$value['GIA'].'</p>
                                                    </td>
                                                    <td class="remove-pr">
                                                        <a href="deleteCart.php?MASANPHAM='.$key.'">
                                                    <i class="fas fa-times"></i>
                                                    </a>
                                                    </td>
                                                    </tr>';
                                            }
                                        }else{
                                            echo '<tr><td class="thumbnail-img">Không có sản phẩm nào trong giỏ hàng của bạn. Vui lòng mua hàng tại <a href="gallery.php">Sản phẩm</a></td></tr>';
                                        }
                                        
                                     ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text" name="MAGIAMGIA" id="MAGIAMGIA">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button" onclick="funMaGiamGia();" name="sudungmagiamgia">Sử dụng mã giảm giá</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">

                            <input value="Update Cart" type="submit" name="submit_update"></a>
                        
                    </div>
                </div>
            </div></form>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Thành tiền</h4>
                            <div class="ml-auto font-weight-bold" id="thanhtien"> <?php echo $tongtien; ?> </div>
                        </div>
                        <!-- <div class="d-flex">
                            <h4>Giảm giá</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div> -->
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Mã giảm giá</h4>
                            <div class="ml-auto font-weight-bold" id="magiamgia" name=""> 0 </div>
                        </div>
                        <!-- <div class="d-flex">
                            <h4>Thuế</h4>
                            <div class="ml-auto font-weight-bold" id="thue">
                                <?php 
                                    // $thue = 0.01*$tongtien; echo "$thue";
                                 ?>
                                    
                                </div>
                        </div> -->
                        <!-- <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div> -->
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Tổng tiền</h5>
                            <div class="ml-auto h5" id="tongcon" name="tongcon"> <?php echo $tongtien; ?> </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover" name="checkout" id="checkout">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <?php include 'templates/images.php'; ?>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
   <?php include 'templates/footer.php'; ?>
    <!-- End Footer  -->

    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function funMaGiamGia() {
            var MAGIAMGIA = document.getElementById("MAGIAMGIA").value;
            MAGIAMGIA==="undefined"?"0":MAGIAMGIA;
            // alert(MAGIAMGIA);
            $.post("Models/MAGIAMGIAModels.php",{'MAGIAMGIA':MAGIAMGIA}, function(data, status){
                // alert(data);
                item = data.split('-');
                $("#magiamgia").html(item[1]);
                $("#magiamgia").attr("name", item[0]);  
              });
            var ThanhTien = $("#thanhtien").text();
            var tongtien = ThanhTien - MAGIAMGIA.substr(1,4);
            $("#tongcon").html(tongtien);
        }
        $("#checkout").onclick = function() {
            funMaGiamGia();
        }
        
    </script>
    
</body>