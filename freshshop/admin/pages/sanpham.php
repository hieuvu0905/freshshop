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
                        <h1 style="text-align: center;">Sản phẩm</h1>
                        <a href="../chucnang/themsanpham.php"><button id="them"><i class="bi bi-plus-circle"></i> Thêm sản phẩm</button></a>

                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th class="th-sm">Mã danh mục</th>
                              <th class="th-sm">Tên danh mục</th>
                              <th class="th-sm">Hình đại diện</th>
                              <th class="th-sm">Mô tả</th>
                              <th class="th-sm">Đơn giá</th>
                              <th class="th-sm">Số lượng</th>
                              <th class="th-sm">ĐVT</th>
                              <th class="th-sm">NGÀY BẮT ĐẦU</th>
                              <th>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php include '../Models/sanpham.php'; ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>Mã danh mục</th>
                              <th>Tên danh mục</th>
                              <th>Hình đại diện</th>
                              <th>Mô tả</th>
                              <th>Đơn giá</th>
                              <th>Số lượng</th>
                              <th>ĐVT</th>
                              <th>Ngày bắt đầu</th>
                              <th>
                              </th>
                            </tr>
                          </tfoot>
                        </table>
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
        <script>
        $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
        });
        </script>
        <script>
          function ConfirmXoa(MASANPHAM) {
            var r = confirm("Bạn có thực sự muốn xóa không!");
            if(r==true){
              $.post('../chucnang/xoasanpham.php', {'MASANPHAM': MASANPHAM}, function(data, textStatus, xhr) {
                alert(data);
                location.reload();
              });
            }
          }
          // else{
          //   location.reload();
          // }
        </script>

    </body>
</html>
