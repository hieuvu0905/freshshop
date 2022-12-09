<?php 
        ob_start();
        session_start();
    ?>
<head>
    <?php include 'templates/link.php'; ?>

</head>

<body>
    
     <!-- Start Main Top -->
    <?php include 'templates/header.php'; ?>
    <!-- End Main Top -->

    <!-- Start Menu -->
    <?php include 'templates/menu.php'; ?>
    <!-- End Menu -->


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="sidebar">
                        <div class="well well-small">
                            <ul class="nav nav-list">
                                <?php include 'Models/ModelsDanhmuc.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" id="sanpham">
                <?php 
                    include 'templates/connect.php';
                    $sql = "SELECT * FROM SANPHAM";
                    $rs= $conn->query($sql);
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
                                            <li><a href="chitietsanpham.php?masanpham='.$row['MASANPHAM'].'" data-toggle="tooltip" data-placement="right" title="Chi tiết"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" style="pointer-events: none" data-toggle="tooltip" data-placement="right" title="So sánh"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" style="pointer-events: none" data-toggle="tooltip" data-placement="right" title="Thêm vào yêu thích"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <button onclick="addToCart(\''.$row['MASANPHAM'].'\')" id="update_sl" style=" border: none;
                                                background: #b0b435;
                                                color: #ffffff;"><a class="cart">Add to Cart</a></button>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4>'.$row['TENSANPHAM'].'</h4>
                                        <h5>'.number_format($row['DONGIA'],0,'',',').'đ</h5>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->
    
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
    <script src="js/slugify-master/slugify.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function addToCart(MASANPHAM) {
             $.post("Models/CartModels.php",{'MASANPHAM':MASANPHAM}, function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);
                // alert(data);
                item = data.split("-");
                // alert(item[0] +"-"+ item[1]);
                $("#soluong").html(item[0]);
                $("#tongtien").html(item[1]);
              });

        }
        function hienthi(MADANHMUC) {
            $.post("Models/ModelsSanpham.php",{'MADANHMUC':MADANHMUC}, function(data, status){
                $("#sanpham").html(data);
              });
        }
        function timkiem(thongtintimkiem) {
            $.post("Models/timkiem.php",{'thongtintimkiem':thongtintimkiem}, function(data, status){
                $("#sanpham").html(data);
              });
        }
        function hienthitatca() {
            // location.reload();
            $("#sanpham").load("Models/ModelsSanpham.php");
        }
        var path = decodeURI(window.location.search);
        console.log(path);
        item = path.split('?');
        if(item[1]!=null){
            MADANHMUC = item[1].split('MADANHMUC=');
            if(MADANHMUC[1]!=null){
                hienthi(MADANHMUC[1]);
            }
            else{
                thongtintimkiem = item[1].split('thongtintimkiem=');
                console.log(thongtintimkiem[1]);
                thongtin = thongtintimkiem[1].replace('+',' ');
                timkiem(thongtin);
            }
            
        }
    </script>
</body>