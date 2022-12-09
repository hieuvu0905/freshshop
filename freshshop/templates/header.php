<?php $check=$_SESSION['users']??"";
    $href =  "";
    $href1 =  "";
    $value = "";
    $namebt = "";
    $valueTenTK = "";
    if($check){
        $href = "logout.php";
        $href1 =  "my-account.php";
        $value = "Đăng xuất";
        $valueTenTK = $_SESSION['users'];
    }else{
        $value = "Đăng nhập";
        $href = "login.php";
        $href1 =  "login.php";
        $valueTenTK = "Tài khoản của tôi";
    }
?>

 <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<!-- <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>VND</option>
							<option>¥ JPY</option>
							<option>$ USD</option>
							<option>€ EUR</option>

						</select>
                    </div> -->
                    <div class="right-phone-box">
                        <p>Hotline :- <a href="#"> +84 1900 1008</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a <?php echo 'href="'.$href1.'"'; ?>><i class="fa fa-user s_color"></i>
                                <?php echo "$valueTenTK"; ?></a>
                            </li>
                            <!-- sử dụng gg map -->
                            <li><a href="https://www.google.com/maps/place/12%C2%B010'57.7%22N+107%C2%B038'14.7%22E/@12.182682,107.6368312,223m/data=!3m2!1e3!4b1!4m14!1m7!3m6!1s0x3173b4e6582c7493:0x58e5b94144a01410!2zTsOibSBOJ0phbmcsIMSQ4bqvayBTb25nLCDEkMSDayBOw7RuZywgVmnhu4d0IE5hbQ!3b1!8m2!3d12.1995198!4d107.6452085!3m5!1s0x0:0x0!7e2!8m2!3d12.1826823!4d107.6374111?hl=vi-VN" target="blank"><i class="fas fa-location-arrow"></i> Địa chỉ</a></li>

                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<!-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In" onchange="javascript:handleSelect(this)">
                            <option>Select</option>
                            <option value="login">Đăng nhập</option>
							<option value="register">Đăng kí</option>
							
						</select> -->

                        <a <?php echo 'href="'.$href.'"'; ?> class="btn btn-info"><?php echo "$value"; ?></a>
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->
<!-- <script type="text/javascript">
  function handleSelect(elm)
  {
    alert(elm.value);
    window.location = elm.value+".php";
  }
</script> -->