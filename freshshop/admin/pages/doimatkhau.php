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
						<div class="col-sm-6">
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
        include '../templates/connect.php';
        if(isset($_REQUEST['doimatkhau'])){
            $newpassword = $_REQUEST['newpassword'];
            $repassword = $_REQUEST['repassword'];
            $TENTAIKHOAN = $_SESSION['admin'];
            if($newpassword===$repassword){
                $password = md5($_REQUEST['password']);
                $newpassword = md5($_REQUEST['newpassword']);
                $sql = "UPDATE TAIKHOAN SET MATKHAU='$newpassword' WHERE TENTAIKHOAN='$TENTAIKHOAN' and MATKHAU='$password'";
                $query = $conn->query($sql);
                if($query){
                    echo "<script type='text/javascript'>alert('Mật khẩu đã được thay đổi');window.location.href='doimatkhau.php';</script>";
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

