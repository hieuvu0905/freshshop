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
                        <h1 style="text-align: center;">Đơn hàng</h1>
                        <input type="text" id="quyentaikhoan" style="width: 500px;float: right;" placeholder="Nhập thông tin">
                        <a href="#"><button id="them"><i class="bi bi-plus-circle"></i> Thêm quyền</button></a>
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th class="th-sm">STT</th>
                              <th class="th-sm">Quyền tài khoản</th> 
                              <th>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php include '../Models/danhsachquyen.php'; ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th class="th-sm">STT</th>
                              <th class="th-sm">Quyền tài khoản</th> 
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
          function ConfirmXoa(id) {
            var r = confirm("Bạn có thực sự muốn xóa không!");
            if(r==true){
              $.post('../chucnang/xoaquyentaikhoan.php', {'id': id}, function(data, textStatus, xhr) {
                item = data.split('-');
                alert(item[0]);
                location.reload();
              });
            }
          }
          $("#them").click(function() {
            var quyentaikhoan = $("#quyentaikhoan").val();
            // alert(quyentaikhoan);
            $.post('../chucnang/themquyentaikhoan.php', {'quyentaikhoan': quyentaikhoan}, function(data, textStatus, xhr) {
                  alert(data);
                  location.reload();
            });
          });
          // else{
          //   location.reload();
          // }
        </script>
    </body>
</html>
