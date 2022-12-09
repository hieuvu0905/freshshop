<?php 
    include 'templates/connect.php';
    session_start();
    if (!isset($_SESSION['users'])) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?php include 'templates/link.php'; ?>
    <style>
    #form_input{
        border: none;
        padding-bottom: 50px;
    }
    h1{
        padding-top: 10px; 
        text-align: center;
        color: #000000;
        font-weight: 700;
    }
    #row{
        display: block;
    }
    #table{
        margin-bottom: 80px;
    }
    #table tr td{
        text-align: center;
    }
    #table h1{
        text-align: center;
    }
    #form_input button{
        height: 50px;
        width: 100px;
    }
    #form_input button:hover{
        background-color: blue;
        color: white;
    }
</style>
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
                    <h2>Thông tin tài khoản</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form role="form" method="post" enctype="multipart/form-data" id="form_input">
                        <h1>Thông tin tài khoản</h1>
                        <?php 
                            include 'templates/connect.php';
                            $TENTAIKHOAN = $_SESSION['users'];
                            $sql="SELECT * FROM TAIKHOAN WHERE TENTAIKHOAN='$TENTAIKHOAN'";
                            $query = $conn->query($sql);
                            while ($row = $query->fetch_assoc()) {
                                echo '<div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" value="'.$row['TENNGUOIDUNG'].'" type="text" name="fullname" placeholder="Họ và Tên" required pattern="[A-Za-z]{2,}.*" title="Họ tên không hợp lệ"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" value="'.$row['EMAIL'].'" type="email" name="email" placeholder="Email" required title="Email không hợp lệ" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" value="'.$row['SDT'].'" type="text" name="phone" placeholder="Số điện thoại" required pattern=".\d+" title="Số điện thoại không hợp lệ"/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" value="'.$row['DIACHI'].'" type="text" name="address" placeholder="Địa chỉ" required pattern="\S+.*" title="Địa chỉ không được trống"/>
                        </div>';
                            }
                        ?>                     
                        <button type="submit" class="btn btn-default" name="suathongtin" id="submit">Lưu</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
        </div>
    </div>
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
    <?php
        if(isset($_REQUEST['suathongtin'])){
            $fullname = $_REQUEST['fullname'];
            $email = $_REQUEST['email'];
            $sdt = $_REQUEST['phone'];
            $diachi = $_REQUEST['address'];
            $TENTAIKHOAN = $_SESSION['users'];
            $sql = "UPDATE TAIKHOAN SET TENNGUOIDUNG='$fullname', EMAIL='$email', SDT='$sdt', DIACHI='$diachi' WHERE TENTAIKHOAN='$TENTAIKHOAN'";
            $query = $conn->query($sql);
            if($query){
                echo "<script type='text/javascript'>alert('Đã thay đổi thông tin tài khoản');window.location.href='my-account.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Email hoặc Số điện thoại đã được sử dụng!');window.location.href='thongtintaikhoan.php';</script>";
            }
        }
    ?>
</body>
</html>