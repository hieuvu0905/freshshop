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
                            <h1 class="page-header">Sửa danh mục</h1>
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
                                                    <label>Mã danh mục</label>
                                                    <input class="form-control" value=<?php $value=$_REQUEST['MADANHMUC']; echo '"'.$value.'"'; ?> readonly name="MADANHMUC">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên danh mục</label>
                                                    <input class="form-control" placeholder="Nhập tên danh mục" name="tendanhmuc" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>hình ảnh đại diện cho danh mục</label>
                                                    <input type="file" name="anhdaidien" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="3" name="mota"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày bắt đầu</label>
                                                    <input type="date" name="ngaybatdau" required>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-default" name="suadanhmuc">Thực hiện</button>
                                                <button type="reset" class="btn btn-default">Làm mới</button>
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
    include '../templates/connect.php';
    if(isset($_REQUEST['suadanhmuc'])){
        if(getimagesize($_FILES['anhdaidien']['tmp_name'])==false){
            echo "Vui lòng chọn ảnh";
        }else{
            $image = $_FILES['anhdaidien']['tmp_name'];
            // echo "string";
            // echo "<pre>";
            // print_r($_FILES);
            $image = base64_encode(file_get_contents(addslashes($image)));
            // echo "$image";
            $madanhmuc = $_REQUEST['MADANHMUC'];
            $tendanhmuc = $_REQUEST['tendanhmuc'];
            $mota = $_REQUEST['mota'];
            $ngaybatdau = $_REQUEST['ngaybatdau'];
            $sql = "UPDATE `danhmucsanpham` SET `TENDANHMUC`='$tendanhmuc',`HINHANH_DM`='$image',`MOTA`='$mota',`NGAYBATDAU`='$ngaybatdau' WHERE `MADANHMUC`='$madanhmuc'";
            // echo $sql;
            $query = $conn->query($sql);
            if($query){
            echo "<script type='text/javascript'>alert('thành công'); window.location.href='../pages/nhomhang.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Sửa không thành công'); window.location.href='suadanhmuc.php';</script>";
            }
        }
    }

?>