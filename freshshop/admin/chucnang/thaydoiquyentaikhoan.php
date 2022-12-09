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
                        <div class="col-lg-12">
                            <h1 class="page-header">Thay đổi quyền tài khoản</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Form Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Tên tài khoản</label>
                                                    <input class="form-control" value=<?php $value=$_REQUEST['TENTAIKHOAN']; echo "$value"; ?> readonly name="TENTAIKHOAN">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Quyền tài khoản</label>
                                                    <select name="quyentaikhoan">
                                                        <option>---Chọn---</option>
                                                    <?php 
                                                        include '../templates/connect.php';
                                                        $sql = "SELECT * FROM  DANHSACHQUYEN";
                                                        $query = $conn->query($sql);
                                                        if($query){
                                                            while ($row = $query->fetch_assoc()) {
                                                                echo '<option value="'.$row['id'].'">'.$row['QUYENTAIKHOAN'].'</option>';
                                                            }
                                                        }
                                                    ?> 
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default" name="thaydoiquyen">Thực hiện</button>
                                                <button type="submit" class="btn btn-default" name="huythaydoi">Hủy</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
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

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
<?php
    if(isset($_REQUEST['thaydoiquyen'])){
        $TENTAIKHOAN = $_REQUEST['TENTAIKHOAN'];
        $quyentaikhoan = $_REQUEST['quyentaikhoan'];
        $sql = "UPDATE TAIKHOAN SET QUYENTAIKHOAN='$quyentaikhoan' WHERE `TENTAIKHOAN`='$TENTAIKHOAN'";
        $query = $conn->query($sql);
        if($query){
            echo "<script type='text/javascript'>alert('Đã thay đổi!');window.location.href='../pages/quanlinguoidung.php';</script>";
        }
    }
    if(isset($_REQUEST['huythaydoi'])){
        echo "<script type='text/javascript'>window.location.href='../pages/quanlinguoidung.php';</script>";
    }
?>