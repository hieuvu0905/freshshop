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
    #form_search input[type=text] {
      width: 300px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('searchicon.png');
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    #form_search input[type=text]:focus {
      width: 100%;
    }
    #form_search{
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
    #submit{
        height: 50px;
        width: 100px;
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
                    <h2>Theo dõi đơn đặt hàng</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <h1 id="thongtin">Thông tin đơn hàng</h1>
    <form class="form-control" id="form_search" name="form_search" method="POST">
        <input type="text" name="search" placeholder="Nhập mã đơn hàng">
        <input type="submit" value="Tìm kiếm" name="submit" id="submit">
    </form>
    <table class="table" id="table">
        <tr>
            <td>Mã đơn hàng</td>
            <td>Tên khách hàng</td>
            <td>Ngày đặt hàng</td>
            <td>Tình trạng</td>
            <td>Tổng tiền</td>
            <td></td>
        </tr>

        <?php 
            if (isset($_POST['submit'])) {
                $search = addslashes($_POST['search']);
                if (empty($search)) {
                    echo "<script type='text/javascript'>alert('Vui lòng nhập thông tin tìm kiếm');</script>";
                }
                else{
                    include 'templates/connect.php';
                    $sql = "SELECT * FROM `donhang` INNER JOIN khachhang ON donhang.MAKHACHHANG = khachhang.MAKHACHHANG WHERE MADONHANG='$search'";
                    $query = $conn->query($sql);
                    if($query->num_rows>0){
                        while ($row = $query->fetch_assoc()) {
                            echo '<tr>
                                <td>'.$row['MADONHANG'].'</td>
                                <td>'.$row['TENKHACHHANG'].'</td>
                                <td>'.$row['NGAYDATHANG'].'</td>
                                <td>'.$row['TINHTRANG'].'</td>
                                <td>'.$row['TONGTIEN'].'</td>
                                <td><a href="" onclick=chitietdonhang(\''.$row['MADONHANG'].'\');>Chi tiết</a></td>
                            </tr>';
                        }
                    }else{
                        echo '<tr><td colspan="5">Không tìm thấy đơn hàng phù hợp</td></tr>';
                    }
                }
            }
        ?>
    </table>
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
        function chitietdonhang(MADONHANG) {
            // alert(MADONHANG);
            $.post('Models/chitietdonhang.php', {"MADONHANG": MADONHANG}, function(data, textStatus, xhr) {
                // alert(data);
                $("#table").html(data);
            });
        }
    </script>
</body>

</html>