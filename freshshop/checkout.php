<?php 
    include 'templates/connect.php';
    session_start();
    if (!isset($_SESSION['users'])) {
        header('Location: login.php');
    }
?>
<?php 
    $sql = "SELECT * from TAIKHOAN where TENTAIKHOAN = '".$_SESSION['users']."'";
    // echo "$sql";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    $str = explode(" ", $row['TENNGUOIDUNG']);
    // print_r($str);
    // echo array_pop($str); 
    // print_r($str);
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="gallery.php">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Thông tin thanh toán</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Họ đệm *</label>
                                    <input type="text" name="hodem" class="form-control" id="firstName" placeholder="" value=<?php echo '"'; ?><?php for($i=0;$i<count($str)-1;$i++){
                                                                    echo $str[$i]." ";
                                                                } ?><?php echo '"'; ?> required> 
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Tên *</label>
                                    <input type="text" name="ten" class="form-control" id="lastName" placeholder="" value=<?php echo '"'; ?><?php for($i=count($str)-1;$i<=count($str)-1;$i++){
                                                                    echo $str[count($str)-1]." ";
                                                                } ?><?php echo '"'; ?> required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Email Address *</label>
                                <div class="input-group">
                                    <input type="email" name="emailaddress" class="form-control" id="email" placeholder="" value=<?php echo '"'.$row['EMAIL'].'"'; ?> required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Số điện thoại *</label>
                                <input type="email" name="sdt" class="form-control" id="sdt" placeholder="" value=<?php echo '"'.$row['SDT'].'"'; ?> required>
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Địa chỉ *</label>
                                <input type="text" name="diachi1" class="form-control" id="address" placeholder="" value=<?php echo '"'.$row['DIACHI'].'"'; ?> required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">Địa chỉ 2 </label>
                                <input type="text" name="diachi2" class="form-control" id="address2" placeholder=""> </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="country">Tỉnh/Thành phố *</label>
                                    <select class="wide w-100" id="country" name="tinh" onchange="changeFunc(value);">
									<option value="Choose..." data-display="Select">Choose...</option>

									<?php 
                                        $sql = "SELECT * from tinhthanhpho";
                                        $query = $conn->query($sql);
                                        if($query){
                                            while ($row = $query->fetch_assoc()) {
                                                echo "<option value=\"".$row['matp']."\">".$row['name']."</option>";
                                            }
                                        }
                                        else{
                                            echo "<option>Hồ Chí Minh</option>";
                                            echo "<option>Hà Nội</option>";
                                            echo "<option>Đà Nẵng</option>";
                                        }
                                     ?>
								</select>
                                    <!-- <div class="invalid-feedback"> Please select a valid country. </div> -->
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="district">Quận/Huyện *</label>
                                    <select class="wide w-100" id="district" name="huyen" onchange="changeDistrict(value);">
                                        <option data-display="Select">Choose...</option> 
								    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="wards">Phường/Xã *</label>
                                    <select class="wide w-100" id="wards" name="wards">
                                        <option data-display="Select">Choose...</option> 
                                    </select>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <hr class="mb-4">
                            <div class="title"> <span>Chọn hình thức thanh toán</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required onclick="chon(this);" value="Thanh toán khi nhận hàng"> 
                                    <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="custom-control custom-radio" style=";">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required onclick="chon(this);" value="Thanh toán bằng thẻ tín dụng">
                                    <label class="custom-control-label" for="debit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio" style="">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required onclick="chon(this);" value="Thanh toán qua ZaloPay">
                                    <label class="custom-control-label" for="paypal">ZaloPay</label>
                                </div>
                            </div>
                            <div class="row" id="thongtinthe1" style="display: none;">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Tên trên thẻ</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Tên đầy đủ như hiển thị trên thẻ</small>
                                    <!-- <div class="invalid-feedback"> Name on card is required </div> -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Số thẻ</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row" id="thongtinthe2" style="display: none;">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Ngày hết hạn</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Số CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Chọn hình thức vận chuyển</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shippingoption" class="custom-control-input" type="radio" value="FREE" onclick="handleClick(this);">
                                        <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold" name="standard">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shippingoption" class="custom-control-input" type="radio" value="1000" onclick="handleClick(this);">
                                        <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">$10.00</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 business days)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shippingoption" class="custom-control-input" type="radio" value="2000" onclick="handleClick(this);">
                                        <label class="custom-control-label" for="shippingOption3">Next Business day</label> <span class="float-right font-weight-bold">$20.00</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Thông tin giỏ hàng</h3>
                                </div>
                                <div class="rounded p-2 bg-light ">       
                                        <?php 
                                            $tongtien = 0;
                                            $cart = $_SESSION['cart']??[];
                                            if(count($cart)){
                                                foreach ($cart as $key =>$value) {
                                                    $tongtien += (int)$value['soluong'] * (int)$value['GIA'];
                                                    echo '<div class="media mb-2 bgborder1 "><div class="media-body"> <a href="#">'.$value['TENSANPHAM'].'</a>
                                                            <div class="small text-muted">Price: '.$value['GIA'].'<span class="mx-2">|</span> Qty: '.$value['soluong'].' <span class="mx-2">|</span> Subtotal: '.(int)$value['soluong'] * (int)$value['GIA'].'</div>
                                                        </div></div>';
                                                }
                                            }
                                            else{
                                                echo '<div class="media mb-2 bgborder1 "><div class="media-body"><a href="gallery.php"><h1>Không có sản phẩm nào.Vui lòng mua hàng <h2>tại đây</h2></h1></a></div></div>';
                                            }

                                         ?>
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold" id="thanhtien"> <?php echo "$tongtien"; ?> </div>
                                </div>
                                <!-- <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 40 </div>
                                </div> -->
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold" id="magiamgia"> <?php echo $_SESSION['MAGIAMGIA']['MAGIAMGIA']??0;
                                    ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>GIÁ ĐƯỢC GIẢM</h4>
                                    <div class="ml-auto font-weight-bold" id="giagiam"> <?php echo $_SESSION['MAGIAMGIA']['TIENGIAM']??0;
                                    ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold" id="thue"> <?php $thue = 0.01*$tongtien; echo "$thue"; ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold" id="shipCost">FREE</div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5" id="tiencuoicung" name="tiencuoicung"> <?php $tongtien =$tongtien+ 0.01*$tongtien; echo $tongtien; ?> </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-3 d-flex shopping-box ml-auto btn hvr-hover" ><a href="" style="padding: 0;"><button name="submit_thanhtoan" id="submit_thanhtoan" style=" border: none;
                                    background: #b0b435;
                                    color: #ffffff; padding: 10px 20px;" onclick="thanhtoan();">Place Order</button></a></div>
                    </div>
                </div>
                
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
        function changeFunc($i) {
            // alert($i);
            $.post('Models/DistrictsModels.php', {'value': $i}, function(data, textStatus, xhr) {
               // alert(data);
               $("#district").html(data);
            });
            
        }
        function changeDistrict(maquanhuyen) {
            // alert(quanhuyen);
            $.post('Models/WardsModels.php', {'valueDistrict': maquanhuyen}, function(data, textStatus, xhr) {
               $("#wards").html(data);
            });
            
        }
        
        function handleClick(shippingoption) {
            // alert(shippingoption.value);
            $("#shipCost").html(shippingoption.value);
            var thanhtien = $("#thanhtien").text();
            var MAGIAMGIA = $("#giagiam").text();
            var thue = $("#thue").text();
            var shipCost = $("#shipCost").text();
            if(shipCost=="FREE"){
                shipCost = 0;
            }
            // alert(thanhtien + MAGIAMGIA + thue + shipCost);
            var tongtien = parseInt(thanhtien) - parseInt(MAGIAMGIA) + parseInt(thue) + parseInt(shipCost);
            $("#tiencuoicung").html(tongtien);
        }
        $("#thanhtien").load('cart.php #tongcon');
        function thanhtoan(){
            var $radios = $('input:radio[name=shippingoption]');
            var $radios2 = $('input:radio[name=paymentMethod]');

            if($radios.is(':checked') === false) {
                alert("Vui lòng chọn hình thức vận chuyển");
            }
            else if($radios2.is(':checked') === false){
                alert("Vui lòng chọn hình thức thanh toán");
            }else{
                var getSelectedValue = document.querySelector( 'input[name="shippingoption"]:checked');
                var getSelectedValue2 = document.querySelector( 'input[name="paymentMethod"]:checked');
                var hodem = $("#firstName").val();
                var ten = $("#lastName").val();
                var hoten = hodem + ten;
                var email = $("#email").val();
                var sdt = $("#sdt").val();
                var address = $("#address").val();
                var address2 = $("#address2").val();
                var hinhthucgiaohang = getSelectedValue.value;
                var hinhthucthanhtoan = getSelectedValue2.value;
                var sb = document.querySelector('#country');
                var sb1 = document.querySelector('#district');
                var sb2 = document.querySelector('#wards');
                var matinh = sb.value;
                var mahuyen = sb1.value;
                var maxa = sb2.value;
                var magiamgia = $("div#magiamgia").text();
                var tongtien = $("div#tiencuoicung").text();
                // alert(magiamgia);
                // alert(matinh + mahuyen + maxa);
                // alert(hoten+"-"+email+"-"+sdt+"-"+address+"-"+address2+"-"+hinhthucthanhtoan+"-"+hinhthucgiaohang);
                $.post('Models/thanhtoan.php', {"hoten":hoten,"email":email,"sdt":sdt,"diachi1":address,"diachi2":address2,"hinhthucgiaohang":hinhthucgiaohang,"hinhthucthanhtoan":hinhthucthanhtoan,"matinh":matinh,"mahuyen":mahuyen,"maxa":maxa,"magiamgia":magiamgia,"tongtien":tongtien}, function(data, textStatus, xhr) {
                    item = data.split("-");
                    alert(item[0]);
                    location.reload();
                });
            }
            
        }
        var currentValue=0;
        function chon(paymentMethod) {
            // alert('New value: ' + paymentMethod.value);
            if(paymentMethod.value==="Thanh toán bằng thẻ tín dụng"){
                $("#thongtinthe1").attr('style', 'display:flex;');
                $("#thongtinthe2").attr('style', 'display:flex;');
            }else{
                $("#thongtinthe1").attr('style', 'display:none;');
                $("#thongtinthe2").attr('style', 'display:none;');
            }
        }
        // function thanhtoan() {

        //     // var tinh = $("$country").text();
        //     // var huyen = $("$district").text();
        //     // var xa = $("$wards").text();
        //     // +"-"+tinh+"-"+huyen+"-"+xa
        //     var hinhthucgiaohang = $("#address2").val();
        //     alert(hoten+"-"+email+"-"+sdt+"-"+address+"-"+address2);
        // }
    </script>
</body>

</html>