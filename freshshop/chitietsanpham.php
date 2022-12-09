
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
               <?php include 'Models/chitietsanpham.php'; ?>
            </div>
    	</div>
        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div id="sidebar">
                        <div class="well well-small">
                            <ul class="nav nav-list">
                                <h1>Các sản phẩm bán chạy</h1>
                            </ul>
                        </div>
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
    </script>
</body>