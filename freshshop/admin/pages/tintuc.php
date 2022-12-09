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
                        <h1 style="text-align: center;">Tin tức và sự kiện</h1>
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
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td><button><i class="bi bi-pencil-square"></i></button><button><i class="bi bi-trash"></i></button></td>
                            </tr>
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

    </body>
</html>
