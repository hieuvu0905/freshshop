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
                            <h1 class="page-header">Thêm sản phẩm</h1>
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
                                                    <label>Mã sản phẩm</label>
                                                    <input class="form-control" placeholder="Nhập mã sản phẩm" name="masanpham" required >
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên sản phẩm</label>
                                                    <input class="form-control" placeholder="Nhập tên sản phẩm" name="tensanpham" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Đơn giá</label>
                                                    <input type="number" class="form-control" placeholder="Nhập đơn giá" name="dongia" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Số lượng</label>
                                                    <input type="number" class="form-control" placeholder="Nhập số lượng" name="soluongnhaphang" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Đơn vị tính</label>
                                                    <input class="form-control" placeholder="Nhập tên đơn vị tính" name="DVT" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>hình ảnh đại diện cho danh mục</label>
                                                    <input type="file" name="image">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="3" name="mota"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày bắt đầu</label>
                                                    <input type="date" name="ngaybatdau" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select name="danhmucOption">
                                                        <option>Chọn loại sản phẩm</option>
                                                    <?php 
                                                        include '../templates/connect.php';
                                                        $sql = "SELECT * FROM DANHMUCSANPHAM";
                                                        $query = $conn->query($sql);
                                                        if($query){
                                                            while ($row = $query->fetch_assoc()) {
                                                                echo '<option value="'.$row['MADANHMUC'].'">'.$row['TENDANHMUC'].'</option>';
                                                            }
                                                        }
                                                    ?>
                                                        
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default" name="themsanpham">Thực hiện</button>
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
    
    if(isset($_REQUEST['themsanpham'])){
        // if(!empty($_FILES) && isset($_FILES['image'])){
        //   echo $_FILES['image']['tmp_name'];
            
        // }else{
        //     echo "string";
        // }
        if(getimagesize($_FILES['image']['tmp_name'])==false){
            echo "Vui lòng chọn ảnh";
        }else{
            $image = $_FILES['image']['tmp_name'];
            // echo "string";
            // echo "<pre>";
            // print_r($_FILES);
            $image = base64_encode(file_get_contents(addslashes($image)));
            // echo "$image";
            $masanpham = $_REQUEST['masanpham'];
            $tensanpham = $_REQUEST['tensanpham'];
            $mota = $_REQUEST['mota'];
            $ngaybatdau = $_REQUEST['ngaybatdau'];
            $DVT = $_REQUEST['DVT'];
            $dongia = $_REQUEST['dongia'];
            $madanhmuc = $_REQUEST['danhmucOption'];
            $soluongnhaphang = $_REQUEST['soluongnhaphang'];
            $sql = "INSERT INTO SANPHAM VALUES ('$masanpham','$tensanpham','$dongia','$DVT','$mota','$madanhmuc','$image','$ngaybatdau','$soluongnhaphang','')";
            // echo $sql;
            $query = $conn->query($sql);
            if($query){
                $sql = "INSERT INTO CHITIETNHAPHANG VALUES('$masanpham','$ngaybatdau','$soluongnhaphang')";
                $query = $conn->query($sql);
                if($query){
                    echo "<script type='text/javascript'>alert('Thành công'); window.location.href='themsanpham.php';</script>";
                }     
            }else{
                echo "<script type='text/javascript'>alert('Thêm không thành công'); window.location.href='themsanpham.php';</script>";
            }
        }
        
        // $image = $_FILES['anhdaidien'];
        // $image = addslashes(file_get_contents($_FILES['anhdaidien']['tmp_name']));
        
        // $hinhanh = $_REQUEST['anhdaidien'];
        
        // //echo $madanhmuc.$tendanhmuc.$hinhanh.$mota.$ngaybatdau;
        
        
        
    }

?>