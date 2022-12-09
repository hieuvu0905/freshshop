<?php 
    ob_start();
    session_start();
 ?>

<head>
    <?php include 'templates/link.php'; ?>

</head>

<body>
   <?php include 'templates/header.php'; ?>

    <?php include 'templates/menu.php'; ?>

    

    <!-- Start Slider 
        Lấy dữ liệu từ bảng tin tức
    -->

    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
        <?php 
            echo '<li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> CAPV shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Tin tức</a></p>
                        </div>
                    </div>
                </div>
            </li>';

     ?>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> CAPV shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> CAPV shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories 
        Lấy dữ liệu từ bảng danh mục
     -->
     
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <?php 
                    include 'templates/connect.php';

                    $sql = "SELECT * FROM DANHMUCSANPHAM";
                    $rs= $conn->query($sql);
                    if($rs->num_rows>0){
                        while ($row = $rs->fetch_assoc()) {
                            echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="shop-cat-box">
                                    <img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.$row['HINHANH_DM'].'" alt="" />
                                    <a class="btn hvr-hover" href="gallery.php?MADANHMUC='.$row['MADANHMUC'].'">'.$row['TENDANHMUC'].'</a>
                                </div>
                            </div>';
                    
                        }
                    }
                    
                ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Sản phẩm bán chạy</h1>
                        <p>Sản phẩm đạt tiêu chuẩn ISO, được chứng nhận bởi WHO.</p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="main-instagram owl-carousel owl-theme" id="selller-b" style="">
                        <?php 
                            include 'Models/ModelsSPBanChay.php';
                            SanPhamBanChay('6');
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  
        Lấy dữ liệu từ trang tin tức
    -->
    
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Tin tức</h1>
                        <p>Hãy đến với chúng tôi, nơi bảo đảm sức khỏe của bạn</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    include 'templates/connect.php';
                    $sql = "SELECT * FROM TINTUC LIMIT 3";
                    $rs= $conn->query($sql);
                    if($rs->num_rows>0){
                        while ($row = $rs->fetch_assoc()) {
                            echo '<div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,'.base64_encode($row['IMG']).'" alt=""/>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>'.$row['TIEUDE'].'</h3>
                                <p>'.$row['MOTANGAN'].'</p>
                            </div>
                        </div>
                    </div>
                </div>';
                        }
                    }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <?php include 'templates/images.php'; ?>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <?php include 'templates/footer.php'; ?>
    <!-- End Footer  -->

    

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
    <script src="js/addToCart.js"></script>
    <script>
        function addToCart(MASANPHAM) {
             $.post("Models/CartModels.php",{'MASANPHAM':MASANPHAM}, function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);
                // alert(data);
                item = data.split("-");
                // alert(item[0] +"-"+ item[1]);
                $("#soluong").text(item[0]);
                $("#tongtien").text(item[1]);
                // $("#sl_cart").text(item[1]);
                
              });
        }
        
        
    </script>
</body>
