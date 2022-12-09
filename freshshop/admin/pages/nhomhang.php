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
                        <h1 style="text-align: center;">Danh mục</h1>
                        <a href="../chucnang/themdanhmuc.php"><button id="them"><i class="bi bi-plus-circle"></i> Thêm danh mục</button></a>

                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th class="th-sm">Mã danh mục

                              </th>
                              <th class="th-sm">Tên danh mục

                              </th>
                              <th class="th-sm">Hình đại diện

                              </th>
                              <th class="th-sm">Mô tả

                              </th>
                              <th class="th-sm">Ngày bắt đầu

                              </th>
                              <th>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              include '../Models/nhomhang.php';
                            ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>Mã danh mục

                              </th>
                              <th>Tên danh mục

                              </th>
                              <th>Hình đại diện

                              </th>
                              <th>Mô tả

                              </th>
                              <th>Ngày bắt đầu

                              </th>
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
          function ConfirmXoa(MADANHMUC) {
            var r = confirm("Bạn có thực sự muốn xóa không!");
            if(r==true){
              $.post('../chucnang/xoadanhmuc.php', {'MADANHMUC': MADANHMUC}, function(data, textStatus, xhr) {
                alert(data);
                location.reload();
              });
            }
          }
        </script>

    </body>
</html>
