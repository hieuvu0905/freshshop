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
                        <div class="form-group">
                            <label><h2>Mật khẩu</h2></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required/>
                        </div>
                        <div class="form-group">
                            <label><h2>Mật khẩu mới</h2></label>
                            <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Mật khẩu mới" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Mật khẩu phải có ít nhất 6 kí tự, phải chứa chữ hoa, chữ thường và không chứa khoảng trắng"/>
                        </div>
                        <div class="form-group">
                            <label><h2>Nhập lại mật khẩu</h2></label>
                            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu" required/>
                        </div>
                        <button type="submit" class="btn btn-default" name="doimatkhau" id="submit">Thực hiện</button>
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
        if(isset($_REQUEST['doimatkhau'])){
            $newpassword = $_REQUEST['newpassword'];
            $repassword = $_REQUEST['repassword'];
            $TENTAIKHOAN = $_SESSION['users'];
            if($newpassword===$repassword){
                $password = md5($_REQUEST['password']);
                $newpassword = md5($_REQUEST['newpassword']);
                $sql = "UPDATE TAIKHOAN SET MATKHAU='$newpassword' WHERE TENTAIKHOAN='$TENTAIKHOAN' and MATKHAU='$password'";
                $query = $conn->query($sql);
                if($query){
                    echo "<script type='text/javascript'>alert('Mật khẩu đã được thay đổi');window.location.href='my-account.php';</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Nhập mật khẩu sai!');window.location.href='doimatkhau.php';</script>";
                }
            }else{
                echo "<script type='text/javascript'>alert('Mật khẩu nhập lại chưa chính xác!');window.location.href='doimatkhau.php';</script>";
            }
            
        }
    ?>
</body>
</html>