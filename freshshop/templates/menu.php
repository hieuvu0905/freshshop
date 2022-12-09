
<!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" alt=""><b id="tenshop">Nông sản Việt</b> <p id="taglineLOGO">Nâng tầm giá trị Việt</p> </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Thông tin</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php" onclick="showsanpham()">Sản phẩm</a></li>
                     	
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Liên hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/index.php">Admin</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <?php 
                                $soluong = 0;
                                if(isset($_SESSION['cart'])){
                                    $cart = $_SESSION['cart'];
                                    foreach ($cart as $value) {
                                        $soluong += (int)$value['soluong'];
                                    }
                                }
                             ?>
							<a href="">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge" id="soluong"><?php echo $soluong; ?></span>
								<p>Giỏ hàng</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <?php include 'products_choosed.php'; ?>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <form class="input-group" style="margin-bottom: 0px" action="../gallery.php">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" name="thongtintimkiem">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </form>
        </div>
    </div>
    >
    <!-- End Top Search -->
    

