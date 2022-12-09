<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../templates/link.php'; ?>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include '../templates/header.php'; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
						<div class="col-lg-8">
                            <form role="form" method="post" enctype="multipart/form-data" id="form_input">
                                <h1>Thông tin tài khoản</h1>
                                <?php 
                                    include '../templates/connect.php';
                                    $TENTAIKHOAN = $_SESSION['admin'];
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
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <?php
        if(isset($_REQUEST['suathongtin'])){
            $fullname = $_REQUEST['fullname'];
            $email = $_REQUEST['email'];
            $sdt = $_REQUEST['phone'];
            $diachi = $_REQUEST['address'];
            $TENTAIKHOAN = $_SESSION['admin'];
            $sql = "UPDATE TAIKHOAN SET TENNGUOIDUNG='$fullname', EMAIL='$email', SDT='$sdt', DIACHI='$diachi' WHERE TENTAIKHOAN='$TENTAIKHOAN'";
            $query = $conn->query($sql);
            if($query){
                echo "<script type='text/javascript'>alert('Đã thay đổi thông tin tài khoản');window.location.href='thongtinsudung.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Email hoặc Số điện thoại đã được sử dụng!');window.location.href='thongtinsudung.php';</script>";
            }
        }
    ?>
    </body>
</html>

